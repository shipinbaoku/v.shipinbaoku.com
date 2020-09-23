<?php


namespace frontend\controllers;

use yii\web\Controller;

class BaseController extends Controller
{

    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            $agent = \Yii::$app->request->getUserAgent();
            if (strpos($agent, 'QQ/') || strpos($agent, 'MicroMessenger') !== false) {
                //$this->redirect(Url::toRoute('site/browser'))->send();
                echo $this->renderPartial('@app/views/site/browser');
                return false;
            } else {
                return true;
            }
        }
        return false;
    }


}