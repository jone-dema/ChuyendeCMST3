<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">
    <div class="container">
        <div
            class="eltdf-section-title-holder  eltdf-st-standard eltdf-st-with-dots  eltdf-section-title-appeared">
            <div class="eltdf-st-inner">
                <div class="eltdf-st-image" style="margin-bottom: -24px">
                    <img 
                        src="./images/section-title-img-1.png"
                        class="attachment-full size-full" alt="a"> </div>
                <h2 class="eltdf-st-title">
                    <span class="eltdf-st-title-word">Choose</span> <span
                        class="eltdf-st-title-word">the</span> <span
                        class="eltdf-st-title-word">Perfect</span> <span
                        class="eltdf-st-title-word">Gift</span> </h2>
                <span class="eltdf-st-text">
                    Wedding Shop </span>
            </div>
        </div>
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
                        <span class="onnew">new</span>
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
            <div class="col-md-3">
                <div class="product">
                    <div class="image">
                        <span class="onslol">Sold</span>
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