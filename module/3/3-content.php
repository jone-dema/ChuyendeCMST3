<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">

    <div class="swiper-container" style="max-height:500px;max-width:auto;">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="img-responsive" src="./images/s1-module3.jpg" alt="2-1"
                    style="transform: translate3d(0px, 0px, 0px);transform-origin: 0% 0% 0px;">
                <div class="wrap">
                    <div class="content-4-1">
                        <div class="title-holder with-text  text-title">
                            <h2 class="title">
                                <span class="title-word">Our</span> <span class="title-word">Forever</span> <span
                                    class="title-word">After</span> </h2>
                            <div class="description">
                                Lorem ipsum dolor sit amet leo consectetuer adipiscing elit commodo Lorem ipsum dolor
                                sit amet leo consectetuer </div>
                            <a itemprop="url" href="#" target="_self"
                                style="color: #c78665;background-color: #ffffff;border-color: #ffffff; margin: 20px;"
                                class="eltdf-btn medium solid">
                                <span class="text">Read More</span>
                                <span class="line line-top"></span>
                                <span class="line line-right"></span>
                                <span class="line line-bottom"></span>
                                <span class="line line-left"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img class="img-responsive" src="./images/s2-module3.jpg" alt="2-3"
                    style="transform: translate3d(0px, 0px, 0px);transform-origin: 0% 0% 0px;">
                <div class="wrap">
                    <div class="content-4-1">
                        <div class="title-holder with-text  text-title">
                            <h2 class="title">
                                <span class="title-word">Our</span> <span class="title-word">Forever</span> <span
                                    class="title-word">After</span> </h2>
                            <div class="description">
                                Lorem ipsum dolor sit amet leo consectetuer adipiscing elit commodo Lorem ipsum dolor
                                sit amet leo consectetuer </div>
                            <a itemprop="url" href="#" target="_self"
                                style="color: #c78665;background-color: #ffffff;border-color: #ffffff; margin: 20px;"
                                class="eltdf-btn medium solid">
                                <span class="text">Read More</span>
                                <span class="line line-top"></span>
                                <span class="line line-right"></span>
                                <span class="line line-bottom"></span>
                                <span class="line line-left"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img class="img-responsive" src="./images/s3-module3.jpg" alt="2-4"
                    style="transform: translate3d(0px, 0px, 0px);transform-origin: 0% 0% 0px;">
                <div class="wrap">
                    <div class="content-4-1">
                        <div class="title-holder with-text  text-title">
                            <h2 class="title">
                                <span class="title-word">Our</span> <span class="title-word">Forever</span> <span
                                    class="title-word">After</span> </h2>
                            <div class="description">
                                Lorem ipsum dolor sit amet leo consectetuer adipiscing elit commodo Lorem ipsum dolor
                                sit amet leo consectetuer </div>
                            <a itemprop="url" href="#" target="_self"
                                style="color: #c78665;background-color: #ffffff;border-color: #ffffff; margin: 20px;"
                                class="eltdf-btn medium solid">
                                <span class="text">Read More</span>
                                <span class="line line-top"></span>
                                <span class="line line-right"></span>
                                <span class="line line-bottom"></span>
                                <span class="line line-left"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="./js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>
</div>