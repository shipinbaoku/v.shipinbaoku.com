<?php

/* @var $this yii\web\View */

$this->title = '篱笆视频播放器-基于Flutter的跨平台视频播放器';
/*$this->registerMetaTag(["name" => "keywords", "content" => $goods['seo_keywords']], 'keywords');
$this->registerMetaTag(["name" => "description", "content" => $goods['seo_describe']], 'description');*/
$this->registerCssFile('https://fonts.googleapis.com/css?family=Open+Sans:400,600');
$this->registerCssFile('@web/css/all.min.css');
$this->registerCssFile('@web/css/templatemo-style.css');
?>



        <section class="row" id="tmHome">
            <div class="col-12 tm-home-container">
                <div class="text-white tm-home-left">
                    <!--<p class="text-uppercase tm-slogan">We can develop</p>-->
                    <!--<hr class="tm-home-hr" />-->
                    <h2 class="tm-home-title">篱笆视频播放器App</h2>
                    <p class="tm-home-text">
                        优化播放内核，支持主流视频格式，边播边缓存功能，让在线影片播放更流畅！
                    </p>
                    <a href="#tmFeatures" class="btn btn-primary btn-lg active" role="button">立即下载</a>
                </div>
                <div class="tm-home-right">
                    <img src="../img/mobile-screen.png" alt="App on Mobile mockup" />
                </div>
            </div>
        </section>

        <!-- Features -->
        <div class="row" id="tmFeatures">
            <div class="col-lg-4">
                <div class="tm-bg-white-transparent tm-feature-box">
                    <h3 class="tm-feature-name">一键扫描影片</h3>

                    <div class="tm-feature-icon-container">
                        <i class="fas fa-3x fa-server"></i>
                    </div>

                    <p class="text-center">篱笆视频播放器可以一键扫描手机中的影片，按文件夹分类方便管理您的影片。</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="tm-bg-white-transparent tm-feature-box">
                    <h3 class="tm-feature-name">支持网络视频流</h3>

                    <div class="tm-feature-icon-container">
                        <i class="fas fa-3x fa-headphones"></i>
                    </div>
                    <p class="text-center">篱笆视频播放器支持网络视频流，采用边下边播技术，让您观看网络视频体验更快。
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="tm-bg-white-transparent tm-feature-box">
                    <h3 class="tm-feature-name">多格式支持</h3>

                    <div class="tm-feature-icon-container">
                        <i class="fas fa-3x fa-satellite-dish"></i>
                    </div>
                    <p class="text-center">篱笆视频播放器具有强大的多格式支持和解码能力，支持常见的影片格式
                    </p>
                </div>
            </div>
        </div>
        <!-- Call to Action -->
        <section class="row" id="tmCallToAction">
            <div class="col-12 tm-call-to-action-col">
                <img src="../img/call-to-action.jpg" alt="Image" class="img-fluid tm-call-to-action-image" />
                <div class="tm-bg-white tm-call-to-action-text">
                    <h2 class="tm-call-to-action-title">站长合作</h2>
                    <p class="tm-call-to-action-description">
                        拥有影片资源网站的站长，可以加入合作。多种盈利模式，例如：1，自定义专有广告获得收益,2，推广篱笆视频播放器App获得收益。
                    </p>
                    <form action="#" method="get" class="tm-call-to-action-form">
                        <!--<input name="email" type="email" class="tm-email-input" id="email" placeholder="Email" />-->
                        <button type="submit" class="btn btn-secondary">立即合作</button>
                    </form>
                </div>
            </div>
        </section>