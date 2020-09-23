<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\VodDetail */
$playurls = \common\models\PlayUrl::find()->where(['url_id' => $model->url_id])->all();
$result = ArrayHelper::index($playurls, null, 'play_from');
var_dump($result);
exit();
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vod Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vod-detail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'url:url',
            'url_id:url',
            'vod_title',
            'vod_sub_title',
            'vod_blurb',
            'vod_content:ntext',
            'vod_status',
            'vod_type',
            'vod_class',
            'vod_tag',
            'vod_pic_url:url',
            'vod_pic_path',
            'vod_pic_thumb',
            'vod_actor',
            'vod_director',
            'vod_writer',
            'vod_remarks',
            'vod_pubdate',
            'vod_area',
            'vod_lang',
            'vod_year',
            'vod_hits',
            'vod_hits_day',
            'vod_hits_week',
            'vod_hits_month',
            'vod_up',
            'vod_down',
            'vod_score',
            'vod_score_all',
            'vod_score_num',
            'vod_create_time:datetime',
            'vod_update_time:datetime',
            'vod_lately_hit_time:datetime',
        ],
    ]) ?>

</div>
