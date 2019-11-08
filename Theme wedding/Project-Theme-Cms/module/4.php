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
                    <img width="55" height="63" src="<?php bloginfo("template_directory");?>/images/module4/1-module4.png" alt="a"> </div>
                <h2 class="title">
                    <span class="title-word">Down</span> <span class="title-word">the</span> <span
                        class="title-word">Aisle</span> </h2>
                <span class="text">
                    Weddings </span>
            </div>
        </div>
        <div class="section">
            <div class="content-4-2">
                <div id="light">
                    <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
                    <video id="VisaChipCardVideo" width="600" controls>
                        <source src="<?php bloginfo("template_directory");?>/images/module4/video.mp4" type="video/mp4">
                    </video>
                </div>

                <div id="fade" onClick="lightbox_close();"></div>
                <div class="video-button content-4-2-img">
                    <div class="video-button-image">
                        <img width="1300" height="637" src="<?php bloginfo("template_directory");?>/images/module4/2-module4.jpg" alt="a">
                    </div>
                    <a href="javascript:void(0);" onclick="lightbox_open();" class="video-button-play-image">
                        <span class="video-button-play">
                            <img width="204" height="204" src="<?php bloginfo("template_directory");?>/images/module4/video-button.png" alt="a"> 
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-4-3" style="background-color:#eef5f7;background-image: url('.<?php bloginfo("template_directory");?>/images/module4/bg-module4.jpg');">
        <div class="container-fliud" style="max-width: 1000px; margin: 0 auto;">
            <div class="row">
                <div class="col-md-4">
                    <div class="column-1">
                        <div class="column-1-icon">
                            <img width="80" height="51" src="<?php bloginfo("template_directory");?>/images/module4/2-module4.png" class="attachment-full size-full"
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
                            <img width="80" height="51" src="<?php bloginfo("template_directory");?>/images/module4/3-module4.png" class="attachment-full size-full"
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
                            <img width="80" height="51" src="<?php bloginfo("template_directory");?>/images/module4/4-module4.png" class="attachment-full size-full"
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