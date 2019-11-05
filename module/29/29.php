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
$less->compileFile('less/29.less', 'css/29.css');
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <title>29</title>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/29.css" rel="stylesheet" type="text/css"/>
        
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/simple-line-icons.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/jquery-ui.css">
        <script src="<?php echo $url_path ?>/js/plugins.js"></script>
        <script src="<?php echo $url_path ?>/js/29.js"></script>
        <script src="<?php echo $url_path ?>/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo $url_path ?>/js/modernizr-3.5.0.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
       
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
    <!-- Owl Carousel min css -->

        <!-- This core.css file contents all plugings css file. -->
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/simple-line-icons.css">
        <!-- Theme shortcodes/elements style -->
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/jquery-ui.css">
 
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/style.css">
        
    <script src="<?php echo $url_path ?>/js//jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?php echo $url_path ?>/js/plugins.js"></script>
 
    <script src="<?php echo $url_path ?>/js/modernizr-3.5.0.min.js"></script>   
    <script src="<?php echo $url_path ?>/js/29.js"></script>

                
   

</head>
    <body>
       <?php include './29-content.php' ?>
    </body>

</html>
