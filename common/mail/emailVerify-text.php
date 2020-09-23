<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
你好 <?= $user->username ?>,

请点击如下链接验证您邮箱的有效性:

<?= $verifyLink ?>
