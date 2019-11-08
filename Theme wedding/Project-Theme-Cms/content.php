<?php if (is_single()) : ?>
													
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
        <?php    hayghe_entry_header(); ?>
                
         </header>
       
      
        <div class="entry-content">
                <?php hayghe_entry_content(); ?>
              
        </div>
</article>

   <?php endif; ?>
