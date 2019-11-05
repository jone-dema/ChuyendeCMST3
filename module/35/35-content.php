<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-35">
    <div class="container">
        <h2>Related products</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="product">
                    <div class="image">
                        <img src="./images/1-module35.jpg" alt="">
                    </div>
                    <div class="info">
                        <h5 class="product-name">
                            <a href="#">White&Gold Earings</a>
                        </h5>
                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>89.00</span>
                        </span>
                        <a href="#" class="button" rel="nofollow">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product">
                    <div class="image">
                        <img src="./images/2-module35.jpg" alt="">
                    </div>
                    <div class="info">
                        <h5 class="product-name">
                            <a href="#">White&Gold Earings</a>
                        </h5>
                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>89.00</span>
                        </span>
                        <a href="#" class="button" rel="nofollow">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product">
                    <div class="image">
                        <span class="onsale">Sale</span>
                        <img src="./images/3-module35.jpg" alt="">
                    </div>
                    <div class="info">
                        <h5 class="product-name">
                            <a href="#">White&Gold Earings</a>
                        </h5>
                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>89.00</span>
                        </span>
                        <a href="#" class="button" rel="nofollow">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product">
                    <div class="image">
                        <img src="./images/4-module35.jpg" alt="">
                    </div>
                    <div class="info">
                        <h5 class="product-name">
                            <a href="#">White&Gold Earings</a>
                        </h5>
                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>89.00</span>
                        </span>
                        <a href="#" class="button" rel="nofollow">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>