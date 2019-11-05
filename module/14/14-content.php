<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-14">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="test">
                    <h2 class="title">
                        <span class="eltdf-st-title-word">Say</span> <span class="eltdf-st-title-word">Hi</span> <span
                            class="eltdf-st-title-word">To</span> <span class="eltdf-st-title-word">Your</span> <span
                            class="eltdf-st-title-word">Planners</span> </h2>
                    <span class="eltdf-st-text" style="margin-top: 4px">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit Aenean </span>
                </div>
                <div class="content_element ">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis Theme</p>
                    </div>
                    <div class="column-left">
                        <h5>New York<h5>
                                <a><span class="fa fa-comment"></span><span
                                        class="text-1">theaisle@elated-themes.com</span></a>
                                <a><span class="fa fa-phone"></span><span class="text-1">+(123) 456 - 7890 - 456 -
                                        7890</span></a>
                                <a><span class="fa fa-home"></span><span class="text-1">35 W 46nd Street New
                                        York</span></a>
                    </div>
                    <div class="column-right">
                        <h5>Barcelona<h5>
                                <a><span class="fa fa-comment"></span><span
                                        class="text-1">theaisle@elated-themes.com</span></a>
                                <a><span class="fa fa-phone"></span><span class="text-1">+(123) 456 - 7890 - 456 -
                                        7890</span></a>
                                <a><span class="fa fa-home"></span><span class="text-1">35 W 46nd Street New
                                        York</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-contact-form">
                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value=""
                            size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                            aria-required="true" aria-invalid="false" placeholder="Name*"></span><br>
                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value=""
                            size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                            aria-required="true" aria-invalid="false" placeholder="e-mail*"></span><br>
                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="3"
                            class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                            placeholder="Message"></textarea></span><button type="submit"
                        class="wpcf7-form-control wpcf7-submit eltdf-btn eltdf-btn-medium eltdf-btn-solid"><span
                            class="eltdf-btn-text">Contact us</span><span
                            class="eltdf-btn-line eltdf-btn-line-top"></span><span
                            class="eltdf-btn-line eltdf-btn-line-right"></span><span
                            class="eltdf-btn-line eltdf-btn-line-bottom"></span><span
                            class="eltdf-btn-line eltdf-btn-line-left"></span></button><span class="ajax-loader"></span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>