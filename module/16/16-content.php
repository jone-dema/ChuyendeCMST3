<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-16">
    <div class="container">
        <div class="row" style="padding-top: 100px;">
            <div class="col-md-6">
                <div class="din-din">
                    <img src="./images/h1-module16.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="dan-dan">
                    <div class="item-content">
                        <h2 style="font-family: Learning Curve Pro;font-size: 48px;line-height: 48px;font-weight:
                            400;letter-spacing: 0px;text-transform: initial;color: #121f38;margin: 0 0 1% 0"
                            data-item-class="eltdf-cf-5945" data-line-height-680="60px">
                            instagram</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="image">
                    <a href="#" target="_blank">
                        <img class="low_resolution" src="./images/3-module16.jpg" alt="" width="320" height="320"> </a>
                </div>
            </div>
            <div class="col-md-2" style="margin-top: -40px;">
                <div class="image">
                    <a href="#" target="_blank">
                        <img class="low_resolution" src="./images/2-module16.jpg" alt="" width="320" height="320"> </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image">
                    <a href="#" target="_blank">
                        <img class="low_resolution" src="./images/1-module16.jpg" alt="" width="320" height="320"> </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image">
                    <a href="#" target="_blank">
                        <img class="low_resolution" src="./images/4-module16.jpg" alt="" width="320" height="320"> </a>
                </div>
            </div>
            <div class="col-md-2" style="margin-top: -40px;">
                <div class="image">
                    <a href="#" target="_blank">
                        <img class="low_resolution" src="./images/5-module16.jpg" alt="" width="320" height="320"> </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image">
                    <a href="#" target="_blank">
                        <img class="low_resolution" src="./images/6-module16.jpg" alt="" width="320" height="320"> </a>
                </div>
            </div>
        </div>
        <div class="sub-item">
            <div class="item-inner">
                <div class="item-content" style="padding: 0px 0 0 17%;">
                    <h2 class="font-holder" style="font-family: Learning Curve Pro;font-size: 48px;line-height: 48px;font-weight: 400;letter-spacing: 0px;text-transform: initial;color: #121f38">tag us in photos</h2>
                </div>
            </div>
        </div>
    </div>
</div>