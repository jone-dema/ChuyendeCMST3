<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-9">
    <div class="container">
        <div class="column-left" style="padding: 120px 100px 130px 0;position: relative;float: left;width: 50%;">
            <div class="title-holder" style="text-align: left">
                <div class="after">
                    <div class="after-image" style="margin-bottom: 0px">
                    </div>
                    <h2 class="title" style="color: #ffffff">
                        <span class="title-word">We’re</span> <span class="title-word">Getting</span>
                        <span class="title-word">Married!</span> </h2>
                    <span class="text-1" style="color: #ffffff;margin-top: 4px">
                        Lorem ipsum dolor sit amet, consectetuer dolor sit </span>
                </div>
            </div>
            <div class="space" style="height: 19px"><span class="space_inner"></span></div>
            <div class="content_element ">
                <div class="text-2">
                    <p><span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus.</span></p>
                </div>
            </div>
            <div class="space" style="height: 37px"><span class="space_inner"></span></div>
            <a itemprop="url" href="" style="color: #ffffff;border-color: #ffffff" class="btn-outline">
                <span class="btn-text">Read More</span>
            </a>
        </div>
        <div class="column-right" style="padding: 107px 0 130px 35px">
            <div class="progress-bar  ">
                <p class="title-holder" style="color: #ffffff">
                    <span class="title">Decoration</span>
                    <span class="percent" style="opacity: 1;">45</span>
                </p>
                <div class="content-holder" style="background-color: #818491">
                    <div data-percentage="45" class="content" style="background-color: rgb(255, 255, 255); width: 45%;">
                    </div>
                </div>
            </div>
            <div class="space" style="height: 20px"><span class="space_inner"></span></div>
            <div class="progress-bar  ">
                <p class="title-holder" style="color: #ffffff">
                    <span class="title">Planning</span>
                    <span class="percent" style="opacity: 1;">65</span>
                </p>
                <div class="content-holder" style="background-color: #818491">
                    <div data-percentage="65" class="content" style="background-color: rgb(255, 255, 255); width: 65%;">
                    </div>
                </div>
            </div>
            <div class="space" style="height: 20px"><span class="space_inner"></span></div>
            <div class="progress-bar  ">
                <p class="title-holder" style="color: #ffffff">
                    <span class="title">Catering</span>
                    <span class="percent" style="opacity: 1;">50</span>
                </p>
                <div class="eltdf-pb-content-holder" style="background-color: #818491">
                    <div data-percentage="50" class="eltdf-pb-content"
                        style="background-color: rgb(255, 255, 255); width: 50%;"></div>
                </div>
            </div>
            <div class="space" style="height: 20px"><span class="space_inner"></span></div>
            <div class="progress-bar  ">
                <p class="title-holder" style="color: #ffffff">
                    <span class="title">Location</span>
                    <span class="percent" style="opacity: 1;">70</span>
                </p>
                <div class="content-holder" style="background-color: #818491">
                    <div data-percentage="70" class="content" style="background-color: rgb(255, 255, 255); width: 70%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>