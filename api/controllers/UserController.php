<?php

namespace api\controllers;

use api\models\ApiLoginForm;
use api\models\ApiSignupForm;
use common\models\Article;
use yii\rest\ActiveController;

/**
 * VodDetailController implements the CRUD actions for VodDetail model.
 */
class UserController extends ActiveController
{

    public $modelClass = 'common\models\User';
    public function actionLogin()
    {
        $model = new ApiLoginForm();
        /* $model->username = $_POST['username'];
         $model->password = $_POST['password'];*/
        //使用getBodyParams处理POST请求
        $model->load(\Yii::$app->getRequest()->getBodyParams(),'');
        if ($model->login()) {
            return ['access_token' => $model->login()];
        } else {
            $model->validate();
            return $model;
        }
    }

    public function actionSignup()
    {
        $model = new ApiSignupForm();
        $model->load(\Yii::$app->getRequest()->getBodyParams(),'');
        if ($model->signup()) {
            return ['result' =>'注册成功'];
        } else {
            $model->validate();
            return $model;
        }
    }
}
