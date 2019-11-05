<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/10.less', 'css/10.css');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>10</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo $url_path ?>/css/10.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo $url_path ?>./css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url_path ?>./css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/css.css">
    <script src="./js/10.js"></script>
    <?php
        if (!class_exists('lessc')) {
            include('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/10.less', 'css/10.css');
        ?>

</head>

<body>
    <?php include './10-content.php' ?>
    <script>
    (function($) {
        function doAnimations(elems) {
            var animEndEv = "webkitAnimationEnd animationend";

            elems.each(function() {
                var $this = $(this),
                    $animationType = $this.data("animation");
                $this.addClass($animationType).one(animEndEv, function() {
                    $this.removeClass($animationType);
                });
            });
        }

        var $myCarousel = $("#carouselExampleIndicators"),
            $firstAnimatingElems = $myCarousel
            .find(".carousel-item:first")
            .find("[data-animation ^= 'animated']");

        $myCarousel.carousel();

        doAnimations($firstAnimatingElems);

        $myCarousel.on("slide.bs.carousel", function(e) {
            var $animatingElems = $(e.relatedTarget).find(
                "[data-animation ^= 'animated']"
            );
            doAnimations($animatingElems);
        });
    })(jQuery);
    </script>
</body>

</html>