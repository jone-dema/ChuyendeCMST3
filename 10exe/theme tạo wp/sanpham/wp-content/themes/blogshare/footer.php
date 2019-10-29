	</div>
		<div class="fix footer_top_area">
			<div class="fix footer_top wrap">
			<div class="fix footer_top_container">
				<div class="fix single_footer floatleft">
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&p=2&post_type=page'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<p><?php echo teaser(50); ?></p>
						<a href="<?php the_permalink(); ?>">Xem thêm</a>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<div class="fix single_footer floatleft">
					<h2>Menu </h2>
					<?php wp_nav_menu( array( 'theme_location' => 'top_nav', 'container' => 'false', 'menu_id' => 'mađấin-nav', 'menu_class' => 'hukira') ); ?>
				</div>
				<div class="fix single_footer floatleft">
					<div class="popular_post fix">
						<h2>Tin tức</h2>
						<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&cat=1'); ?>
						<?php global $wp_query; $wp_query->in_the_loop = true; ?>
						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<div class="fix single_popular">
								<?php echo get_the_post_thumbnail( $post_id, 'small-thumb', array( 'class' =>'floatleft') ); ?>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo get_the_date(); ?></p>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="fix footer_area">
			<div class="wrap">
			<div class="fix copyright_text floatleft">
				<p>Phát triển bởi <a href="http://sanpham.com" rel="nofollow">DucLe</a></p>
			</div>
			<div class="fix social_area floatright">
				<ul>
					<li><a href="" class="feed"></a></li>
					<li><a href="" class="facebook"></a></li>
					<li><a href="" class="twitter"></a></li>
					<li><a href="" class="drible"></a></li>
					<li><a href="" class="flickr"></a></li>
					<li><a href="" class="pin"></a></li>
					<li><a href="" class="tumblr"></a></li>
				</ul>
			</div>
			</div>
		</div>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/placeholder_support_IE.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/selectnav.min.js"></script>
		<script type="text/javascript">
			selectnav('nav-top', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
			
			selectnav('nav-bottom', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});			
		</script>
		<?php wp_footer(); ?>
	</body>
</html>
