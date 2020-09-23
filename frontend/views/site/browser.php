<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

//AppAsset::register($this);

$this->registerCssFile('@web/css/browser.css');
$this->registerCssFile('@web/css/layer.css');

$this->registerJsFile('https://cdn.bootcdn.net/ajax/libs/jquery/1.10.0/jquery.js',['position'=>\yii\web\View::POS_HEAD]);
$this->registerJsFile('@web/js/layer.js',['position'=>\yii\web\View::POS_HEAD]);
$this->registerJsFile('@web/js/clipboard.min.js',['position'=>\yii\web\View::POS_HEAD]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <title>使用浏览器打开</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="false" name="twcClient" id="twcClient">
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<div class="top-bar-guidance">
    <p>点击右上角<img src="//gw.alicdn.com/tfs/TB1xwiUNpXXXXaIXXXXXXXXXXXX-55-55.png" class="icon-safari"> <span id="openm">Safari打开</span></p>
    <p>可以继续浏览本站哦~</p>
</div>
<a style="display: none;" href="" id="vurl" rel="noreferrer"></a>
<div id="browser">
    <p>避免微信和QQ屏蔽本站网址，请理解支持！</p>
</div>
<div class="app-download-tip">
    <span class="guidance-desc">点击右上角或复制网址自行打开</span>
</div>
<a data-clipboard-text="<?php echo Yii::$app->request->hostInfo.Yii::$app->request->getUrl(); ?>" class="app-download-btn">点此复制本站网址</a>
<script type="text/javascript">
    new ClipboardJS(".app-download-btn");
    $(".app-download-btn").click(function() {
        layer.tips("复制成功，么么哒", ".app-download-btn", {
            tips: [3, "rgb(38,111,250)"],
            time:500
        });})
</script>

<script>
    function openu(u){
        document.getElementById("vurl").href= u;
        document.getElementById("vurl").click();
    }
    var url = window.location.href;
    if(navigator.userAgent.indexOf("QQ/")> -1){
        openu("ucbrowser://"+url);
        openu("mttbrowser://url="+url);
        openu("baiduboxapp://browse?url="+url);
        openu("googlechrome://browse?url="+url);
        openu("mibrowser:"+url);
        openu("taobao://"+url.split("://")[1]);
        openu("alipays://platformapi/startapp?appId=20000067&url="+url);
        $("html").on("click",function(){
            openu("ucbrowser://"+url);
            openu("mttbrowser://url="+url);
            openu("baiduboxapp://browse?url="+url);
            openu("googlechrome://browse?url="+url);
            openu("mibrowser:"+url);
            openu("taobao://"+url.split("://")[1]);
            openu("alipays://platformapi/startapp?appId=20000067&url="+url);
        });
    }else if(navigator.userAgent.indexOf("MicroMessenger") > -1){
        if(navigator.userAgent.indexOf("Android") > -1){
            var iframe = document.createElement("iframe");
            iframe.style.display = "none";
            document.body.appendChild(iframe);
        }else{

        }
    }
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
