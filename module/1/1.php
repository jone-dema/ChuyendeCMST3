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
$less->compileFile('less/213.less', 'css/213.css');
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <title>CONTACT</title>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css"rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/jquery-ui.min.css"rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/simple-line-icons.css"rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/213.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $url_path ?>/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo $url_path ?>/js/dudu.js"></script>
        <script src="<?php echo $url_path ?>/js/plugins.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
       
       
                
      

</head>
    <body>
       <?php include './1-content.php' ?>
    </body>

</html>
