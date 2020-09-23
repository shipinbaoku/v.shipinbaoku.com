<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VodDetail */

$this->title = 'Create Vod Detail';
$this->params['breadcrumbs'][] = ['label' => 'Vod Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vod-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
