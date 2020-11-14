<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Actor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'type_id_1')->textInput() ?>

    <?= $form->field($model, 'actor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_status')->textInput() ?>

    <?= $form->field($model, 'actor_lock')->textInput() ?>

    <?= $form->field($model, 'actor_letter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_blurb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_birthday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_birtharea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_blood')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_starsign')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_works')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_level')->textInput() ?>

    <?= $form->field($model, 'actor_time')->textInput() ?>

    <?= $form->field($model, 'actor_time_add')->textInput() ?>

    <?= $form->field($model, 'actor_time_hits')->textInput() ?>

    <?= $form->field($model, 'actor_time_make')->textInput() ?>

    <?= $form->field($model, 'actor_hits')->textInput() ?>

    <?= $form->field($model, 'actor_hits_day')->textInput() ?>

    <?= $form->field($model, 'actor_hits_week')->textInput() ?>

    <?= $form->field($model, 'actor_hits_month')->textInput() ?>

    <?= $form->field($model, 'actor_score')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_score_all')->textInput() ?>

    <?= $form->field($model, 'actor_score_num')->textInput() ?>

    <?= $form->field($model, 'actor_up')->textInput() ?>

    <?= $form->field($model, 'actor_down')->textInput() ?>

    <?= $form->field($model, 'actor_tpl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_jumpurl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
