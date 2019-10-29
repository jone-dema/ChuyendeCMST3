<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php setpostview(get_the_id());  ?>
	<div class="fix wrap content_wrapper">
		<div class="fix content">
			<div class="fix main_content floatleft">
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
				<div class="single_page_content fix">
					<h1><?php the_title(); ?></h1>
					<div class="single_post_meta fix">
						<p><?php echo get_the_date(); ?>  |  <?php the_category(' - ' ); ?>  | Bởi:  <?php the_author(); ?> | Lượt xem: <?php echo getpostviews(get_the_id()); ?></p>
					</div>
					<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ); ?>
					<article class="post-content">
						<?php the_content(); ?>
					</article>
					
<div class="cmt">
	<div class="fb-comments" data-width="100%" data-href="<?php the_permalink(); ?>" data-numposts="3"></div>
</div>
					<div class="related_post fix">
						<h2>Bài viết liên quan</h2>
						<div class="fix related_post_container">
							<?php
							    $categories = get_the_category($post->ID);
							    if ($categories) 
							    {
							        $category_ids = array();
							        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
							 
							        $args=array(
							        'category__in' => $category_ids,
							        'post__not_in' => array($post->ID),
							        'showposts'=>8, 
							        );
							        $my_query = new wp_query($args);
							        if( $my_query->have_posts() ) 
							        {
							            while ($my_query->have_posts())
							            {
							                $my_query->the_post();
							                ?>
							                <div class="fix single_related_post floatleft">
												<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'home-thumb', array( 'class' =>'thumnail') ); ?></a>
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
												<p><?php echo get_the_date(); ?>   |   <?php the_author(); ?></p>
											</div>
							                <?php
							            }
							        }
							    }
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="fix sidebar floatright">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>	
<?php get_footer(); ?>	