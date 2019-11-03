<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-6">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="product">
                    <div class="counter-holder " style="opacity: 1;">
                        <div class="counter-inner">
                            <span class="counter">1758</span>
                            <h6 class="counter-title">
                                Flower Arrangements </h6>
                        </div>
                        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product">
                    <div class="counter-holder " style="opacity: 1;">
                        <div class="counter-inner">
                            <span class="counter zero-counter">1782</span>
                            <h6 class="counter-title">
                                Ceremonies </h6>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product">
                    <div class="counter-holder " style="opacity: 1;">
                        <div class="counter-inner">
                            <span class="counter zero-counter">1940</span>
                            <h6 class="counter-title">
                                Different Cakes </h6>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product">
                    <div class="counter-holder " style="opacity: 1;">
                        <div class="counter-inner">
                            <span class="counter zero-counter">2178</span>
                            <h6 class="counter-title">
                                Happy Couples </h6>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>