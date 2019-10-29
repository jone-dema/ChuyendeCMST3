<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php setpostview(get_the_id());  ?>
	<div class="fix wrap content_wrapper">
		<div class="fix content">
			
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
				<div class="single_page_content fix">
					<h1><?php the_title(); ?></h1>
					<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ); ?>
					<article class="post-content">
						<?php the_content(); ?>
					</article>
				</div>
			</div>
			
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>	
<?php get_footer(); ?>	