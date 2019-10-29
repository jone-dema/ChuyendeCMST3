	<?php get_header(); ?>
	<div class="fix wrap content_wrapper">
		<div class="fix content">
			<div class="fix main_content floatleft">
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
				<h1 class="cate-tit">
					<?php the_archive_title(); ?>
				</h1>
				<div class="clear"></div>
				<div class="fix single_content_wrapper">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<div class="fix single_content floatleft">
						<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'home-thumb', array( 'class' =>'thumnail') ); ?></a>
						<div class="fix single_content_info">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p class="author">Bởi: <?php the_author(); ?></p>
							<p><?php echo teaser(15); ?></p>
							<div class="fix post-meta">
								<p><?php echo get_the_date(); ?> |  Lượt xem: <?php echo getpostviews(get_the_id()); ?></p>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="pagination fix">
					<?php if(paginate_links()!='') {?>
					<div class="quatrang">
						<?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('«'),
							'next_text'    => __('»'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
							) );
					    ?>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="fix sidebar floatright">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
	<div class="fix bottom_add_bar">
		<div class="addbar_leaderborard"><img src="http://placehold.it/728x90"/></div>
	</div>
<?php get_footer(); ?>		