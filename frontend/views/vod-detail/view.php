<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\VodDetail */
$this->title = $model->vod_title;
$this->registerMetaTag(["name" => "keywords", "content" => $model->vod_title], 'keywords');
$this->registerMetaTag(["name" => "description", "content" => $model->vod_content], 'description');
$this->params['breadcrumbs'][] = ['label' => '影片列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$playurlsList = ArrayHelper::index($model->playurls, null, 'play_from');
var_dump($model->actors);exit();

?>
<div class="stui-pannel clearfix">
    <div class="stui-content clearfix">
        <div class="stui-content__thumb">
            <?= Html::tag('a', Html::img($model->vod_pic_url, ['class' => 'img-responsive',
                'alt' => $model->vod_title]), ['class' => 'thumb', 'href' => Url::toRoute(['vod-detail/view', 'id' => $model->id]),
                'title' => $model->vod_title]) ?>

            <p class="margin-0 text-center hidden-xs"><a class="copy_btn text-muted" href="javascript:;"
                                                         data-text=<?= Url::to('', true) ?>>复制图片地址</a>
            </p>
        </div>
        <div class="stui-content__detail">
            <?= Html::tag('h1', $model->vod_title . Html::tag('small', $model->vod_score, ['class' => 'text-red']), ['class' => 'title']) ?>
            <?= Html::tag('p', Html::tag('span', '别名:' . $model->vod_sub_title, ['class' => 'text-muted hidden-xs']), ['class' => 'data hidden-xs']) ?>
            <?= Html::tag('p', Html::tag('span', '地区:' . $model->vod_area, ['class' => 'text-muted']), ['class' => 'data hidden-md hidden-lg hidden-sm']) ?>
            <p class="data">
                <?= Html::tag('span', '状态:', ['class' => 'text-muted']) ?>
                <?= Html::tag('span', $model->vod_remarks, ['class' => 'text-red']) ?>
                <span class="split-line hidden-xs"></span>
                <span class="text-muted hidden-xs">更新时间：</span><?= Html::tag('span', date('Y-m-d H:i:s', $model->vod_update_time)) ?>
            </p>
            <p class="data"><span class="text-muted">主演：</span><?php echo $model->vod_actor ?></p>
            <p class="data"><span class="text-muted">导演：</span><?php echo $model->vod_director ?></p>
            <p class="data hidden-xs">
                <span class="text-muted">分类：</span><?php echo $model->vod_type ?> <span class="split-line"></span>
                <!--<span class="text-muted">扩展：</span><a
                        href="/index.php/vod/search/class/%E6%AC%A7%E7%BE%8E%E5%89%A7.html" target="_blank">欧美剧</a>&nbsp;-->
                <span class="split-line"></span>
                <span class="text-muted">地区：</span><?php echo $model->vod_area ?> <span class="split-line"></span>
                <span class="text-muted">年份：</span><?php echo $model->vod_year ?> </p>
            <p class="data hidden-xs">
                <span class="text-muted">语言：</span><?php echo $model->vod_lang ?> <span class="split-line"></span>
                <!--<span class="text-muted">集数：</span>0 <span class="split-line"></span>
                <span class="text-muted">时长：</span> <span class="split-line"></span>
                <span class="text-muted">豆瓣ID：</span>0 </p>-->
            <p class="data hidden-xs">
                <span class="text-muted">TAG：</span> <span class="split-line"><?php echo $model->vod_tag ?></span>
            </p>
        </div>
    </div>
</div>
<div class="stui-pannel clearfix" id="desc">
    <div class="stui-pannel__head clearfix">
        <h3 class="title">剧情介绍</h3>
    </div>
    <div class="stui-content__desc col-pd clearfix">
        <?= nl2br($model->vod_content); ?>
    </div>
</div>
<?php foreach ($playurlsList as $key => $playurls): ?>
    <div class="stui-pannel clearfix" id="playlist">
        <div class="stui-pannel__head clearfix">
            <span class="more text-muted pull-right hidden-xs">无需安装任何插件</span>
            <h3 class="title"> 播放类型：<?php if ($key == 'ckm3u8') {
                    echo 'm3u8';
                } else {
                    echo $key;} ?></h3>
        </div>


        <ul class="stui-content__playlist clearfix">
            <?php foreach ($playurls as $key => $playurl): ?>
                <li class="list-group-item">
                    <span class="badge">用App打开</span>
                    <a href="javascript:;" class="copy_text"><?= $playurl->play_title ?><span
                                class="hidden-xs"><?= '$' . $playurl->play_url ?></span></a>
                </li>
                <!--<li>
                    <a class="text-muted pull-right" href="/index.php/vod/play/id/43801/sid/1/nid/1.html"> &gt;</a>
                    <a href="javascript:;" class="copy_text"><? /*= $playurl->play_title */ ?><span class="hidden-xs"><? /*= '$'. $playurl->play_url */ ?></span></a>
                </li>-->
            <?php endforeach; ?>
            <!-- end 播放地址 -->
        </ul>
        <div class="stui-pannel__foot clearfix">
            <span class="text-muted pull-right hidden-xs">tips：点击链接可以复制哦</span>
            <a class="copy_checked text-red" href="javascript:;">复制全部</a>
        </div>
    </div>
<?php endforeach; ?>


<div class="stui-pannel clearfix" id="playlist">
    <div class="stui-pannel__head clearfix">
        <h3 class="title"><?php echo $title."相关推荐"?> </h3>
    </div>
    <ul class="stui-content__playlist clearfix">
        <?php foreach ($model->commentary as $cvodDetail): ?>
            <li class="list-group-item">
                <?=Html::a($cvodDetail->vod_title, Yii::$app->urlManager->createUrl(
                    ['vod-detail/view', 'id' => $cvodDetail->id, 'title' => $cvodDetail->vod_title]), ['title' => $cvodDetail->vod_title]);?>
            </li>
        <?php endforeach; ?>
        <!-- end 播放地址 -->
    </ul>
</div>
