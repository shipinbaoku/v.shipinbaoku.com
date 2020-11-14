<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ActorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'actor_id') ?>

    <?= $form->field($model, 'type_id') ?>

    <?= $form->field($model, 'type_id_1') ?>

    <?= $form->field($model, 'actor_name') ?>

    <?= $form->field($model, 'actor_en') ?>

    <?php // echo $form->field($model, 'actor_alias') ?>

    <?php // echo $form->field($model, 'actor_status') ?>

    <?php // echo $form->field($model, 'actor_lock') ?>

    <?php // echo $form->field($model, 'actor_letter') ?>

    <?php // echo $form->field($model, 'actor_sex') ?>

    <?php // echo $form->field($model, 'actor_color') ?>

    <?php // echo $form->field($model, 'actor_pic') ?>

    <?php // echo $form->field($model, 'actor_blurb') ?>

    <?php // echo $form->field($model, 'actor_remarks') ?>

    <?php // echo $form->field($model, 'actor_area') ?>

    <?php // echo $form->field($model, 'actor_height') ?>

    <?php // echo $form->field($model, 'actor_weight') ?>

    <?php // echo $form->field($model, 'actor_birthday') ?>

    <?php // echo $form->field($model, 'actor_birtharea') ?>

    <?php // echo $form->field($model, 'actor_blood') ?>

    <?php // echo $form->field($model, 'actor_starsign') ?>

    <?php // echo $form->field($model, 'actor_school') ?>

    <?php // echo $form->field($model, 'actor_works') ?>

    <?php // echo $form->field($model, 'actor_tag') ?>

    <?php // echo $form->field($model, 'actor_class') ?>

    <?php // echo $form->field($model, 'actor_level') ?>

    <?php // echo $form->field($model, 'actor_time') ?>

    <?php // echo $form->field($model, 'actor_time_add') ?>

    <?php // echo $form->field($model, 'actor_time_hits') ?>

    <?php // echo $form->field($model, 'actor_time_make') ?>

    <?php // echo $form->field($model, 'actor_hits') ?>

    <?php // echo $form->field($model, 'actor_hits_day') ?>

    <?php // echo $form->field($model, 'actor_hits_week') ?>

    <?php // echo $form->field($model, 'actor_hits_month') ?>

    <?php // echo $form->field($model, 'actor_score') ?>

    <?php // echo $form->field($model, 'actor_score_all') ?>

    <?php // echo $form->field($model, 'actor_score_num') ?>

    <?php // echo $form->field($model, 'actor_up') ?>

    <?php // echo $form->field($model, 'actor_down') ?>

    <?php // echo $form->field($model, 'actor_tpl') ?>

    <?php // echo $form->field($model, 'actor_jumpurl') ?>

    <?php // echo $form->field($model, 'actor_content') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
