<?php get_header(); ?>
	<div class="fix wrap content_wrapper">
		<div class="fix content">
			<div class="fix main_content floatleft">
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
				<div class="single_page_content fix">
					<h1>Trang không tồn tại</h1>
					<article class="post-content">
						<p>Trang không tồn tại vui lòng về <a href="<?php bloginfo('url'); ?>">TRANG CHỦ</a></p>
					</article>
				</div>
			</div>
			<div class="fix sidebar floatright">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>	