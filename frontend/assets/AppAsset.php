<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
    ];
    public $js = [
//        'js/home.js',
        'js/clipboard.min.js',
        'js/parallax.min.js',

    ];
    public $depends = [
        'yii\web\JqueryAsset',
        //'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    /**
     * @inheritdoc
     */
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,   // 这是设置所有js放置的位置
    ];

}
