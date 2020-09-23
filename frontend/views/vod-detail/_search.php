<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VodDetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vod-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'vod_title') ?>
    <?php // echo $form->field($model, 'vod_blurb') ?>

    <?php  echo $form->field($model, 'vod_content') ?>

    <?php // echo $form->field($model, 'vod_status') ?>

    <?php  echo $form->field($model, 'vod_type') ?>

    <?php // echo $form->field($model, 'vod_class') ?>

    <?php // echo $form->field($model, 'vod_tag') ?>

    <?php // echo $form->field($model, 'vod_pic_url') ?>

    <?php // echo $form->field($model, 'vod_pic_path') ?>

    <?php // echo $form->field($model, 'vod_pic_thumb') ?>

    <?php  echo $form->field($model, 'vod_actor') ?>

    <?php  echo $form->field($model, 'vod_director') ?>

    <?php // echo $form->field($model, 'vod_writer') ?>

    <?php // echo $form->field($model, 'vod_remarks') ?>

    <?php // echo $form->field($model, 'vod_pubdate') ?>

    <?php  echo $form->field($model, 'vod_area') ?>

    <?php // echo $form->field($model, 'vod_lang') ?>

    <?php  echo $form->field($model, 'vod_year') ?>

    <?php // echo $form->field($model, 'vod_hits') ?>

    <?php // echo $form->field($model, 'vod_hits_day') ?>

    <?php // echo $form->field($model, 'vod_hits_week') ?>

    <?php // echo $form->field($model, 'vod_hits_month') ?>

    <?php // echo $form->field($model, 'vod_up') ?>

    <?php // echo $form->field($model, 'vod_down') ?>

    <?php // echo $form->field($model, 'vod_score') ?>

    <?php // echo $form->field($model, 'vod_score_all') ?>

    <?php // echo $form->field($model, 'vod_score_num') ?>

    <?php // echo $form->field($model, 'vod_create_time') ?>

    <?php // echo $form->field($model, 'vod_update_time') ?>

    <?php // echo $form->field($model, 'vod_lately_hit_time') ?>

    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
