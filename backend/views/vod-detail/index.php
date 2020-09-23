<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\VodDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vod Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vod-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vod Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'url:url',
            'url_id:url',
            'vod_title',
            'vod_sub_title',
            //'vod_blurb',
            //'vod_content:ntext',
            //'vod_status',
            //'vod_type',
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
            //'vod_lately_hit_time:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
