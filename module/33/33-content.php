<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-33">
        <div class="container">
            <!-- Left Column / Headphones Image -->
            <div class="left-column">
                <div class="container-fluid">
                    <img id="expandedImg" style="width:100%; height: auto;">
                    <div id="imgtext"></div>
                </div>
                <img src="./images/black-module-33.jpg" onclick="myFunction(this);">
                <img src="./images/blue-module-33.jpg" onclick="myFunction(this);">
                <img src="./images/red-module-33.jpg" onclick="myFunction(this);">
            </div>


            <!-- Right Column -->
            <div class="right-column">

                <!-- Product Description -->
                <div class="product-description">
                    <h1 class="entry-title">Snake Print Jeans</h1>
                    <div class="stars">
                        <form action="">
                            <input class="star" id="star-5" type="radio" name="star" />
                            <label class="star" for="star-5"></label>
                            <input class="star" id="star-4" type="radio" name="star" />
                            <label class="star" for="star-4"></label>
                            <input class="star" id="star-3" type="radio" name="star" />
                            <label class="star" for="star-3"></label>
                            <input class="star" id="star-2" type="radio" name="star" />
                            <label class="star" for="star-2"></label>
                            <input class="star star-1" id="star-1" type="radio" name="star" />
                            <label class="star star-1" for="star-1"></label>
                        </form>
                    </div>
                    <a>(<span itemprop="ratingCount" class="count">5</span> customer reviews)</a>
                    <p class="price"><del><span>$129.00</span></del> <ins><span>$99.00</span></ins></p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
                <!-- Product Pricing -->
                <div class="product-price">
                    <form class="cart" method="post" enctype="multipart/form-data">
                        <div class="quantity"><input type="button" value="-" class="minus"><input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty text" size="4"><input type="button" value="+" class="plus"></div>

                        <button type="submit" class="button">Add to cart</button>
                    </form>
                    <div class="product_meta">
                        <span>TAGS: DRESS, ROSE, WEDDING</span>
                        <span>Categories: LONG DRESSES.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>