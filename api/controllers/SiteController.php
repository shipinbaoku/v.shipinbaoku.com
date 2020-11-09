<?php

namespace api\controllers;

use Yii;
use yii\web\Controller;
use  OpenApi;
use yii\web\JsonResponseFormatter;

/**
 * @OA\Info(title="My First API", version="0.1")
 */

/**
 * @OA\Post(
 *     path="/user/login",
 *     tags={"user"},
 *     summary="用户登录",
 *     description="返回 access_token",
 *     @OA\Parameter(
 *        "name" = "mobile_phone & password",
 *        "description" = "手机号码 && 密码",
 *        "required" = true,
 *        "type" = "string",
 *        @OA\Schema(ref="#/definitions/Login"),
 *     ),
 *     @OA\Response(
 *         "response" = 200,
 *         "description" = " success"
 *     )
 * )
 *
 */


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * Displays homepage.
     * @return string
     */

    public function actionIndex()
    {
         return $this->render('index');
       /* $projectRoot = Yii::getAlias('@api');
        $swagger = \OpenApi\scan($projectRoot);

        $swagger = json_encode($swagger);
        $json_file = $projectRoot . '/web/swagger-docs/swagger.json';
        $is_write = file_put_contents($json_file, $swagger);
        if ($is_write == true) {
            $this->redirect('/swagger-ui/dist/index.html');
        }*/
    }

}