<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php
    //注意key值（即：$this->metaTags中的 keywords、description）与页面上的key值对应
    !isset($this->metaTags['keywords']) && $this->registerMetaTag(["name" => "keywords", "content" => Yii::$app->params['header_keyword']]);
    !isset($this->metaTags['description']) && $this->registerMetaTag(["name" => "description", "content" => Yii::$app->params['header_description']]);
    ?>
    <?php $this->head() ?>
    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        //'brandLabel' => '今日看片',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        //['label' => '首页', 'url' => ['/site/index']],
        //['label' => '首页', 'url' => ['']],
        ['label' => '影片Api', 'url' => 'https://api.shipinbofang.com/'],
        ['label' => '开源项目', 'url' => 'https://www.shipinbaoku.com'],
        ['label' => '影片资源', 'url' => ['/vod-detail/index']],
        //['label' => '关于', 'url' => ['/site/about']],
        ['label' => '联系我们', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '退出 (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
<!--<div class="parallax-window" data-parallax="scroll" data-image-src="../img/bg-01.jpg">-->
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<div class="stui-foot clearfix">
    <p class="hidden-xs">
        <span class="text-muted">友情链接：</span>
    </p>
    <p class="hidden-xs">
        <a href="">帮助中心</a><span class="split-line"></span>
        <?= Html::a('求片留言',\yii\helpers\Url::toRoute(['/site/contact']))?>
        <span class="split-line"></span><a href="">版权声明</a>

    </p>
    <div class="hidden-xs">Copyright © 2011-2020]版权所有</div>
    <p class="text-muted visible-xs">Copyright © 2008-2020</p>
</div>
<!--</div>-->
<script type="text/javascript">
    $(".copy_btn").each(function(){
        var text1 = $(this).attr("data-text");
        var clipboard = new ClipboardJS(this, {
            text: function() {
                return text1;
            }
        });
        clipboard.on('success', function(e) {
            alert("地址复制成功");
        });
    });

    $(".copy_text").each(function(){
        var text2 = $(this).text();
        var clipboard = new ClipboardJS(this, {
            text: function() {
                return text2;
            }
        });
        clipboard.on('success', function(e) {
            alert("地址复制成功");
        });
    });

    $(".copy_checked").each(function(){
        var checked_url=[];
        $(this).parent().parent().find("li").find(".copy_text").each(function(){
            checked_url.push($(this).text());
        });
        var clipboard = new ClipboardJS(this, {
            text: function() {
                return checked_url.join('\n');
            }
        });
        clipboard.on('success', function(e) {
            alert("地址复制成功");
        });
    });
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
