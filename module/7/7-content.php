<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-7">
    <div class="swiper-container"
        style="background-image: url(./images/h1-module7.jpg); max-height:700px;max-width:auto;">
        <div class="single_image">
            <figure class="figure">
                <div class="single_image-img"><img width="55" height="63" src="./images/h1-module7.png" alt="a"></div>
            </figure>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="owl-item active" style="width: 1143px;">
                    <div class="testimonial-content">
                        <div class="testimonial-text-holder">
                            <h2 itemprop="name" class="testimonial-title entry-title">Testimonials</h2>
                            <p class="testimonial-text" style="padding: 0 19%">Sallum dictum felis eu pede mollis
                                pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                                vulputate eleifend tellus. Aenean leo ligula, porttitor eu lorem dolor ipsum.</p>
                            <h6 class="author">
                                <span class="author-name">Jenny Olsen</span>
                                <span class="author-job">Florist</span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="swiper-slide">
                <div class="owl-item active" style="width: 1143px;">
                    <div class="testimonial-content">
                        <div class="testimonial-text-holder">
                            <h2 itemprop="name" class="testimonial-title entry-title">Testimonials</h2>
                            <p class="testimonial-text" style="padding: 0 19%">Sallum dictum felis eu pede mollis
                                pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                                vulputate eleifend tellus. Aenean leo ligula, porttitor eu lorem dolor ipsum.</p>
                            <h6 class="author">
                                <span class="author-name">Lora Smith</span>
                                <span class="author-job">Designer</span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-slide">
                <div class="owl-item active" style="width: 1143px;">
                    <div class="testimonial-content">
                        <div class="testimonial-text-holder">
                            <h2 itemprop="name" class="testimonial-title entry-title">Testimonials</h2>
                            <p class="testimonial-text" style="padding: 0 19%">Sallum dictum felis eu pede mollis
                                pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                                vulputate eleifend tellus. Aenean leo ligula, porttitor eu lorem dolor ipsum.</p>
                            <h6 class="author">
                                <span class="author-name">Linda Grant</span>
                                <span class="author-job">Caterer</span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next">
            <a href="#" class="button next" rel="nofollow">Next</a></div>
        <div class="swiper-button-prev">
            <a href="#" class="button prev" rel="nofollow">Prev</a></div>
    </div>
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