<?php
/*
 Template Name: Checkout
 */
get_header(); // Header
wrap_above(); // container ..v.v..

 ?>
 <?php  get_template_part('woocommerce/checkout/form', 'login');  ?>


<?php
 wrap_below();  // container ..v.v..
 get_footer();  // Footer

?>