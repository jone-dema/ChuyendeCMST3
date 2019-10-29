<?php
/*
 * Template Name: get post
 */
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nhập bài viết</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
        <style>
        span.click-more {
            display: inline-block;
            background: #1FCE45;
            padding: 6px 10px;
            margin-bottom: 10px;
            border-radius: 15px;
            color: #fff;
            cursor: pointer;
        }
        .form-group {
            position: relative;
        }

        span.glyphicon.glyphicon-remove {
            position: absolute;
            right: 0px;
            bottom: 0px;
            background: #e00;
            color: #fff;
            display: inline-block;
            height: 34px;
            text-align: center;
            cursor: pointer;
            line-height: 34px;
            width: 34px;
            top: 25px;
            border-radius: 4px;
        }
        .input-muti span {
            display: none!important;
        }
        .list-input span {
            display: block!important;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <form action="" method="POST" role="form">
                        <div class="input-muti">  
                            <div class="form-group">
                                <label for="link">Nhập link</label>
                                <input required="required" name="link[]" type="url" class="form-control" id="" placeholder="Nhập link vào đây" value="<?php if(isset($_POST['link'])) { echo $_POST['link'][0]; } ?>">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="list-input">
                            <?php if(isset($_POST['add_post']) and ($_POST['add_post'] == 'true')){
                                foreach ($_POST['link'] as $key => $value) { if ($key==0) {} else { ?>
                                <div class="form-group">
                                    <label for="link">Nh?p link</label>
                                    <input required="required" name="link[]" type="url" class="form-control" value="<?php echo $value; ?>">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </div>       
                            <?php } } } ?>
                        </div>
                        <div class="more">
                            <span class="click-more">Thêm link</span>
                        </div>
                        <div class="form-group">
                            <label for="cat">Chọn chuyên mục</label>
                            <select name="cat" id="input" class="form-control" required="required">
                                <?php $args = array( 
                                    'hide_empty' => 0,
                                    'taxonomy' => 'category',
                                    ); 
                                    $cates = get_categories( $args ); 
                                    foreach ( $cates as $cate ) {  ?>
                                        <option value="<?php echo $cate->term_id; ?>" <?php if($_POST['cat'] == $cate->term_id) {echo 'selected'; } ?>><?php echo $cate->name; ?></option>
                                <?php } ?>
                                <!-- Get category -->
                            </select>
                        </div>
                        <input type="hidden" name="add_post" value="true">
                        <button type="submit" class="btn btn-primary">Nhập dữ liệu</button>
                    </form>
                </div>
            </div>
            <br>
            <?php 
                if(isset($_POST['add_post']) and ($_POST['add_post'] == 'true')){
                    $cat = $_POST['cat'];
                    foreach ($_POST['link'] as $key => $value) {
                        get($value,$cat);
                    }
                }
            ?>
            
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
        <script>
            $(document).ready(function() {
                var html = '<div class="form-group">';
                    html +='<label for="link">Nh?p link</label>';
                    html +='<input required="required" name="link[]" type="url" class="form-control" id="" placeholder="Nh?p link vào dây">';
                    html +='<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
                    html +='</div>';
                $('.click-more').click(function() {
                    $('.list-input').append(html);
                });
                $('form').on('click', '.glyphicon-remove', function(event) {
                    $(this).parent('.form-group').remove();
                });
            });
        </script>
    </body>
</html>
<?php 
function get($link,$cat) {  
    $url = $link;
    $html = file_get_html($url);
    foreach ($html->find('.essb_links') as $value) {
        $value->outertext = '';
    }
    foreach ($html->find('noscript') as $value) {
        $value->outertext = '';
    }
    foreach ($html->find('#wpads-dau-trang') as $value) {
        $value->outertext = '';
    }
    foreach ($html->find('#wpads-cuoi-trang') as $value) {
        $value->outertext = '';
    }
    foreach ($html->find('#wpads-giua-trang') as $value) {
        $value->outertext = '';
    }
    foreach ($html->find('.post-tags') as $value) {
    	$value->outertext = '';
    }
    foreach ($html->find('p>img') as $value) {
        if(isset($value->attr['data-lazy-src'])) {
            $value->outertext = '<img src="'.$value->attr['data-lazy-src'].'" >';
        }
    }
    $html ->load($html ->save());
    $tieude = $html->find('h1',0);
    $img = $html->find('img',1)->src;
    $len = strlen($img);
    $img = substr($img, 0, $len-12).'.jpg';
    $noidung = $html->find('.theiaPostSlider_preloadedSlide',0);
    $my_post = array(
      'post_title'    => $tieude->plaintext,
      'post_content'  => $noidung->innertext,
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_category' => array($cat)
    );
    $id = wp_insert_post( $my_post );
    Generate_Featured_Image2($img,$id);
?>
<div class="alert alert-success">
    <p>Post link '<?php echo $url; ?>' Thành công!</p>
</div>
<?php } ?>
