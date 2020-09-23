<?php

namespace api\controllers;

use common\models\Article;
use Yii;
use common\models\VodDetail;
use common\models\VodDetailSearch;
use yii\data\ActiveDataProvider;
use yii\filters\auth\QueryParamAuth;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;
/**
 * VodDetailController implements the CRUD actions for VodDetail model.
 */
class VodDetailController extends ActiveController
{

    public $modelClass = 'common\models\VodDetail';

    /**添加QueryParamAuth过滤器，将来调用该过滤器中的行为，必须带上access_token
     * @return array
     */
    /*public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'authenticatior' => [
                'class' => QueryParamAuth::className(),
                'only' => ['view'],
            ],

        ]);
    }*/
    
    
   /* public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'authenticatior' => [
                'class' => HttpBasicAuth::className(),
                'auth'=>function($username,$password){
                    $user = User::find()->where(['username'=>$username])->one();
                    if($user->validatePassword($password)){
                        return $user;
                    }
                    return null;
                }
            ],

        ]);
    }*/
    /**
     * description 先释放禁用父类中的index方法，以便后面重写index方法
     * @return array
     */
    public function actions()
    {

        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

    /*public function actionIndex()
    {
        $modelClass = $this->modelClass;
        return new ActiveDataProvider(
            [
                'query' => $modelClass::find(),
                'pagination' => ['pageSize' => 5],
            ]
        );
    }*/
    /**
     * description 重写index方法实现影视列表页的搜索、排序功能
     * @return ActiveDataProvider
     */
    public function actionIndex()
    {
        $params = Yii::$app->getRequest()->queryParams;
        $searchModel = new VodDetailSearch();
        return $searchModel->search($params);
    }

    /*public function actionSearch()
    {
        $keywords = \Yii::$app->getRequest()->getQueryParam('keywords');
        return VodDetail::find()->where(['like', 'vod_title', $keywords])->all();
    }*/
}
