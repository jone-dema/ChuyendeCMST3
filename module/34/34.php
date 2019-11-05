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
$less->compileFile('less/34.less', 'css/34.css');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>34</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo $url_path ?>/css/34.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/css.css">
    <script src="./js/jquery-2.1.4.min.js"></script>

    <?php
        if (!class_exists('lessc')) {
            include('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/34.less', 'css/34.css');
        ?>

</head>

<body>
    <?php include './34-content.php' ?>
    <script type="text/javascript">
    var buttons = document.getElementsByClassName('tablinks');
    var contents = document.getElementsByClassName('tabcontent');

    function showContent(id) {
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }
        var content = document.getElementById(id);
        content.style.display = 'block';
    }
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function() {
            var id = this.textContent;
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }
            this.className += " active";
            showContent(id);
        });
    }
    showContent('Description');
    $(function() {
        $('a').click(function() {
            $('a').removeClass("active");
            $(this).addClass('active');
        });
    });
    </script>

</body>

</html>