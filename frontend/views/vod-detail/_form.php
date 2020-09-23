<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VodDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vod-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_sub_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_blurb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vod_status')->textInput() ?>

    <?= $form->field($model, 'vod_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_pic_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_pic_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_pic_thumb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_actor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_director')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_writer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_pubdate')->textInput() ?>

    <?= $form->field($model, 'vod_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_lang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_hits')->textInput() ?>

    <?= $form->field($model, 'vod_hits_day')->textInput() ?>

    <?= $form->field($model, 'vod_hits_week')->textInput() ?>

    <?= $form->field($model, 'vod_hits_month')->textInput() ?>

    <?= $form->field($model, 'vod_up')->textInput() ?>

    <?= $form->field($model, 'vod_down')->textInput() ?>

    <?= $form->field($model, 'vod_score')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vod_score_all')->textInput() ?>

    <?= $form->field($model, 'vod_score_num')->textInput() ?>

    <?= $form->field($model, 'vod_create_time')->textInput() ?>

    <?= $form->field($model, 'vod_update_time')->textInput() ?>

    <?= $form->field($model, 'vod_lately_hit_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
