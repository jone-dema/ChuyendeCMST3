<?php
function get_dom() {
	require get_template_directory() . '/dom.php';
}
add_action('init', 'get_dom');
/********************************************************************
//remove tag width & height in post
********************************************************************/
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

/********************************************************************
//config excerpt length
********************************************************************/
function custom_excerpt_length( $length ) {
	return 300;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action( 'init', 'register_my_menus' );
function register_my_menus(){
	register_nav_menus(
	array(
		'main_nav' => 'Main Nav',
		'top_nav'  => 'top Nav',
		)
	);
}
/********************************************************************
//REGISTER SIDEBAR
********************************************************************/
if (function_exists('register_sidebar')){
	register_sidebar(array(
	'name'=> 'Cột bên',
	'id' => 'sidebar',
	));
}

/********************************************************************
global teaser function
********************************************************************/
function teaser($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'[...]';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt.'...';
}
/********************************************************************
Post Views
********************************************************************/
function setpostview($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function getpostviews($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'post-thumb', 300,300, array( 'center', 'center' ) ); 
    add_image_size( 'home-thumb', 360,240, array( 'center', 'center' ) );
    add_image_size( 'small-thumb', 100,100, array( 'center', 'center' ) );
}
add_filter( 'max_srcset_image_width', create_function( '', 'return 1;' ) );

function Generate_Featured_Image2( $image_url, $post_id  ){
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($image_url);
    $filename = basename($image_url);
    if(wp_mkdir_p($upload_dir['path']))     $file = $upload_dir['path'] . '/' . $filename;
    else                                    $file = $upload_dir['basedir'] . '/' . $filename;
    file_put_contents($file, $image_data);

    $wp_filetype = wp_check_filetype($filename, null );
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
    $res1= wp_update_attachment_metadata( $attach_id, $attach_data );
    $res2= set_post_thumbnail( $post_id, $attach_id );
}