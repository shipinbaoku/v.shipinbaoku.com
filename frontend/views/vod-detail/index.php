<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\VodDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->registerCssFile('@web/css/style.css');
$this->title = '影片列表';
$this->params['breadcrumbs'][] = $this->title;
$vod_lately_ip=Yii::$app->request->getUserIP();
//var_dump(ip2long($vod_lately_ip));exit();
?>

<div class="vod-detail-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <!--    <p>-->
    <!--        --><? //= Html::a('Create Vod Detail', ['create'], ['class' => 'btn btn-success']) ?>
    <!--    </p>-->

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
//        'showHeader' => false,
        'showFooter' => false,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'url:url',
            //'url_id:url',
            //'vod_title',
            ['attribute' => 'vod_title', 'value' => function ($data) {
                //return Html::a($data->vod_title, Url::toRoute(['vod-detail/view', 'id' => $data->id]), ['title' => '详情']);
                return Html::a($data->vod_title, Yii::$app->urlManager->createUrl(
                    ['vod-detail/view', 'id' => $data->id, 'title' => $data->vod_title]), ['title' => $data->vod_title]);
            }, 'format' => ['html']],
            //'vod_sub_title',
            //'vod_blurb',
            //'vod_content:ntext',
            //'vod_status',
            //'vod_type',
            ['attribute' => 'vod_type', 'value' => function ($data) {
                //return Html::a($data->vod_type, ['vod-detail/index', 'VodDetailSearch' => ['vod_type' => $data->vod_type]], ['title' => '分类']);
                return Html::a($data->vod_type, Yii::$app->urlManager->createUrl(['vod-detail/index', 'VodDetailSearch' => ['vod_type' => $data->vod_type]]), ['title' => $data->vod_type]);
            }, 'format' => ['html']],
            //'vod_class',
            //'vod_tag',
            //'vod_pic_url:url',
            //'vod_pic_path',
            //'vod_pic_thumb',
            //'vod_actor',
            //'vod_director',
            //'vod_writer',
            //'vod_remarks',
            //'vod_pubdate',
            //'vod_area',
            //'vod_lang',
            //'vod_year',
            ['attribute' => 'vod_year', 'value' => function ($data) {
                //return Html::a($data->vod_year, ['vod-detail/index', 'VodDetailSearch' => ['vod_year' => $data->vod_year]], ['title' => '年代']);
                return Html::a($data->vod_year, Yii::$app->urlManager->createUrl(['vod-detail/index', 'VodDetailSearch' => ['vod_year' => $data->vod_year]]), ['title' => $data->vod_year]);
            }, 'format' => ['html']],
            //'vod_hits',
            //'vod_hits_day',
            //'vod_hits_week',
            //'vod_hits_month',
            //'vod_up',
            //'vod_down',
            //'vod_score',
            //'vod_score_all',
            //'vod_score_num',
            //'vod_create_time:datetime',
            //'vod_update_time:datetime',
            ['attribute' => 'vod_update_time', 'format' => ['date', 'php:Y-m-d']],
            //'vod_lately_hit_time:datetime',

            /*[
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
            ],*/
        ],
        'pager' => [
            //'options' => ['class' => 'hidden']//关闭分页（默认开启）
            /* 默认不显示的按钮设置 */
            'firstPageLabel' => '首页',
            'prevPageLabel' => '上一页',
            'nextPageLabel' => '下一页',
            'lastPageLabel' => '尾页'
        ]
    ]); ?>


</div>