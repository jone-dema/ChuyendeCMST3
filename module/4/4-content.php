<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4">
    <div class="container">
        <div class="content-4-1">
            <div class="title-holder with-text  text-title">
                <div class="image">
                    <img width="55" height="63" src="./images/1-module4.png" alt="a"> </div>
                <h2 class="title">
                    <span class="title-word">Down</span> <span class="title-word">the</span> <span
                        class="title-word">Aisle</span> </h2>
                <span class="text">
                    Weddings </span>
            </div>
        </div>
        <div class="section">
            <div class="content-4-2">
                <div class="video-button content-4-2-img">
                    <div class="video-button-image">
                        <img width="1300" height="637" src="./images/2-module4.jpg" alt="a">
                    </div>
                    <a class="video-button-play-image " href="https://vimeo.com/202023736"
                        data-rel="prettyPhoto[video_button_pretty_photo_149]">
                        <span class="video-button-play">
                            <img width="204" height="204" src="./images/video-button.png" alt="a"> </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="pp_pic_holder pp_default pp_pic_have_only_one"
        style="top: 1490.5px; left: 178.5px; display: none; width: 992px;">
        <div class="ppt" style="opacity: 1; display: block; width: 960px;">a</div>
        <div class="pp_top" style="">
            <div class="pp_left"></div>
            <div class="pp_middle"></div>
            <div class="pp_right"></div>
        </div>
        <div class="pp_content_container">
            <div class="pp_left">
                <div class="pp_right">
                    <div class="pp_content" style="height: 576px; width: 960px;">
                        <div class="pp_loaderIcon" style="display: none;"></div>
                        <div class="pp_fade" style="display: block;"> <a href="#" class="pp_expand"
                                title="Expand the image" style="display: none;">Expand the image</a>
                            <div class="pp_hoverContainer" style="height: 540px; width: 960px; display: none;"> <a
                                    class="pp_next" href="#"><span class="fa fa-angle-right"></span></a> <a
                                    class="pp_previous" href="#"><span class="fa fa-angle-left"></span></a> </div>
                            <div id="pp_full_res"><iframe
                                    src="https://player.vimeo.com/video/202023736?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1;"
                                    width="960/embed/?moog_width=960" height="540" frameborder="no"
                                    __idm_id__="31361025"></iframe></div>
                            <div class="pp_details" style="width: 1008px;">
                                <div class="pp_nav" style="display: none;"> <a href="#"
                                        class="pp_arrow_previous">Previous</a>
                                    <p class="currentTextHolder">1/1</p> <a href="#" class="pp_arrow_next">Next</a>
                                </div>
                                <p class="pp_description" style="display: none;"></p> <a class="pp_close"
                                    href="#">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pp_bottom" style="">
            <div class="pp_left"></div>
            <div class="pp_middle"></div>
            <div class="pp_right"></div>
        </div>
    </div>-->
    <div class="content-4-3" style="background-color:#eef5f7;background-image: url('./images/bg-module4.jpg');">
        <div class="container-fliud" style="max-width: 1000px; margin: 0 auto;">
            <div class="row">
                <div class="col-md-4">
                    <div class="column-1">
                        <div class="column-1-icon">
                            <img width="80" height="51" src="./images/2-module4.png" class="attachment-full size-full"
                                alt="i"> </div>
                        <div class="column-1-content">
                            <h3 class="column-1-title">
                                <span class="column-1-title-text">Made With Love</span>
                            </h3>
                            <span class="column-1-subtitle">Memories</span>
                            <p class="column-1-text">Lorem ipsum dolor sit amet, adipiscing elit. Aenean commodo
                                ligula.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="column-1 clearfix">
                        <div class="column-1-icon">
                            <img width="80" height="51" src="./images/3-module4.png" class="attachment-full size-full"
                                alt="i"> </div>
                        <div class="column-1-content">
                            <h3 class="column-1-title">
                                <span class="column-1-title-text">Just The Two of Us</span>
                            </h3>
                            <span class="column-1-subtitle">Blessings</span>
                            <p class="column-1-text">Lorem ipsum dolor sit amet, adipiscing elit. Aenean commodo
                                ligula.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="column-1">
                        <div class="column-1-icon">
                            <img width="80" height="51" src="./images/4-module4.png" class="attachment-full size-full"
                                alt="i"> </div>
                        <div class="column-1-content">
                            <h3 class="column-1-title">
                                <span class="column-1-title-text">The Wedding Bliss</span>
                            </h3>
                            <span class="column-1-subtitle">Ceremony</span>
                            <p class="column-1-text">Lorem ipsum dolor sit amet, adipiscing elit. Aenean commodo
                                ligula.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>