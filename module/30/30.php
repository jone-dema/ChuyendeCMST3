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
$less->compileFile('less/30.less', 'css/30.css');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>30</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo $url_path ?>/css/30.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo $url_path ?>./css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url_path ?>./css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/css.css">
    <?php
        if (!class_exists('lessc')) {
            include('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/30.less', 'css/30.css');
        ?>

</head>

<body>
    <?php include './30-content.php' ?>
</body>

</html>