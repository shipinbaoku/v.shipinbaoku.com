<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Actor */

$this->title = $model->actor_id;
$this->params['breadcrumbs'][] = ['label' => 'Actors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="actor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->actor_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->actor_id], [
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
            'actor_id',
            'type_id',
            'type_id_1',
            'actor_name',
            'actor_en',
            'actor_alias',
            'actor_status',
            'actor_lock',
            'actor_letter',
            'actor_sex',
            'actor_color',
            'actor_pic',
            'actor_blurb',
            'actor_remarks',
            'actor_area',
            'actor_height',
            'actor_weight',
            'actor_birthday',
            'actor_birtharea',
            'actor_blood',
            'actor_starsign',
            'actor_school',
            'actor_works',
            'actor_tag',
            'actor_class',
            'actor_level',
            'actor_time:datetime',
            'actor_time_add:datetime',
            'actor_time_hits:datetime',
            'actor_time_make:datetime',
            'actor_hits',
            'actor_hits_day',
            'actor_hits_week',
            'actor_hits_month',
            'actor_score',
            'actor_score_all',
            'actor_score_num',
            'actor_up',
            'actor_down',
            'actor_tpl',
            'actor_jumpurl',
            'actor_content:ntext',
        ],
    ]) ?>

</div>
