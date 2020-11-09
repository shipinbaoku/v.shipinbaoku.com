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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="parallax-window" data-parallax="scroll" data-image-src="../img/bg-01.jpg">

    <div class="container-fluid">

        <div class="row tm-brand-row">

            <div class="col-lg-4 col-11">
                <div class="tm-brand-container tm-bg-white-transparent">
                    <i class="fas fa-2x fa-pen tm-brand-icon"></i>
                    <div class="tm-brand-texts">
                        <h1 class="text-uppercase tm-brand-name">Parallo</h1>
                        <p class="small">new app landing page</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-1">
                <div class="tm-nav">
                    <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
                        <button class="navbar-toggler" type="button"
                                data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="services.html">Services</a>
                                </li>
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="testimonials.html">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <section class="row" id="tmHome">
            <div class="col-12 tm-home-container">
                <div class="text-white tm-home-left">
                    <p class="text-uppercase tm-slogan">We can develop</p>
                    <hr class="tm-home-hr"/>
                    <h2 class="tm-home-title">Mobile App for Your Business</h2>
                    <p class="tm-home-text">
                        Parallo is a landing page template based on Bootstrap v4.3.1 framework. Please tell your friends
                        about TemplateMo. Thank you.
                    </p>
                    <a href="#tmFeatures" class="btn btn-primary">Learn More</a>
                </div>
                <div class="tm-home-right">
                    <img src="../img/mobile-screen.png" alt="App on Mobile mockup"/>
                </div>
            </div>
        </section>

        <!-- Features -->
        <div class="row" id="tmFeatures">
            <div class="col-lg-4">
                <div class="tm-bg-white-transparent tm-feature-box">
                    <h3 class="tm-feature-name">High Performance</h3>

                    <div class="tm-feature-icon-container">
                        <i class="fas fa-3x fa-server"></i>
                    </div>

                    <p class="text-center">Download and use this layout for your sites. Total 5 HTML pages included.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="tm-bg-white-transparent tm-feature-box">
                    <h3 class="tm-feature-name">Fast Support</h3>

                    <div class="tm-feature-icon-container">
                        <i class="fas fa-3x fa-headphones"></i>
                    </div>
                    <p class="text-center">You are allowed to use this for commercial purpose or personal site.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="tm-bg-white-transparent tm-feature-box">
                    <h3 class="tm-feature-name">App Marketing</h3>

                    <div class="tm-feature-icon-container">
                        <i class="fas fa-3x fa-satellite-dish"></i>
                    </div>
                    <p class="text-center">You are NOT allowed to redistribute this template on any download site.
                    </p>
                </div>
            </div>
        </div>
        <!-- Call to Action -->
        <section class="row" id="tmCallToAction">
            <div class="col-12 tm-call-to-action-col">
                <img src="../img/call-to-action.jpg" alt="Image" class="img-fluid tm-call-to-action-image"/>
                <div class="tm-bg-white tm-call-to-action-text">
                    <h2 class="tm-call-to-action-title">Images by Unsplash</h2>
                    <p class="tm-call-to-action-description">
                        Maecenas maximus tellus in dolor auctor tristique. Nam hendrerit
                        posuere laoreet. Aliquam erat volutpat. Nulla eros est,
                        imperdiet vel feugiat non, ullamcorper mattis nulla.
                    </p>
                    <form action="#" method="get" class="tm-call-to-action-form">
                        <input name="email" type="email" class="tm-email-input" id="email" placeholder="Email"/>
                        <button type="submit" class="btn btn-secondary">Get Updates</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Page footer -->
        <footer class="row">
            <p class="col-12 text-white text-center tm-copyright-text">Copyright &copy; 2019.Company name All rights
                reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
        </footer>
    </div>
    <!-- .container-fluid -->
</div>
<script type="text/javascript">
    $(".copy_btn").each(function () {
        var text1 = $(this).attr("data-text");
        var clipboard = new Clipboard(this, {
            text: function () {
                return text1;
            }
        });
        clipboard.on('success', function (e) {
            alert("地址复制成功");
        });
    });

    $(".copy_text").each(function () {
        var text2 = $(this).text();
        var clipboard = new Clipboard(this, {
            text: function () {
                return text2;
            }
        });
        clipboard.on('success', function (e) {
            alert("地址复制成功");
        });
    });

    $(".copy_checked").each(function () {
        var checked_url = [];
        $(this).parent().parent().find("li").find(".copy_text").each(function () {
            checked_url.push($(this).text());
        });
        var clipboard = new Clipboard(this, {
            text: function () {
                return checked_url.join('\n');
            }
        });
        clipboard.on('success', function (e) {
            alert("地址复制成功");
        });
    });
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>