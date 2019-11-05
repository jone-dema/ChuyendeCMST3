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
$less->compileFile('less/33.less', 'css/33.css');
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <title>33</title>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="<?php echo $url_path ?>/css/33.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/css.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/fontawesome.min.css">
        <script src="<?php echo $url_path ?>/js/33.js"></script>

                
        <?php
        if (!class_exists('lessc')) {
            include('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/33.less', 'css/33.css');
        ?>

</head>
    <body>
       <?php include './33-content.php' ?>
       <script type="text/javascript">
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
    </script>
    </body>

</html>
