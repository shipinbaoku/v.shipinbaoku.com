<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [],
    'controllerNamespace' => 'frontend\controllers',
    'defaultRoute' => 'site/index', //默认的路由
    //'catchAll'=>['site/browser'],
    'language' => 'zh-CN',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */

        'urlManager' => [
            'enablePrettyUrl' => true,//打开url美化
            'showScriptName' => false,//设置是否展示脚本文件名，即是否保留index.php
            'suffix' => '.html',
            'rules' => [
                'vodList' => 'vod-detail/index',
                'vodDetail' => 'vod-detail/view',
                'vodCreate' => 'vod-detail/create',
                '<controller:\w+>/<id:\d+>' => '<controller>/vod-detail',
            ],
        ],
    ],
    'params' => $params,
];
