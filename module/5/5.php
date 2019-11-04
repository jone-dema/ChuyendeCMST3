<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/5.less', 'css/5.css');
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo $url_path?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path?>/css/5.css" rel="stylesheet" type="text/css"/>
        
 
    <link rel="stylesheet" href="<?php echo $url_path?>/plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="<?php echo $url_path?>/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url_path?>/plugins/owl-carousel/assets/owl.carousel.css">
    <!-- Custom-->

        <script type="text/javascript" src="<?php echo $url_path?>/plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $url_path?>/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $url_path?>/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="<?php echo $url_path?>/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo $url_path?>/js/5.js"></script>
    </head>
    <body>
        <?php include $dir_block.'/5-content.php'; ?>
    </body>
</html>