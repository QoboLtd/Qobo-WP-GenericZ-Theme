<?php
/**
 * The Template for displaying all single posts
 *
 * @package qobo-bootstrap-one
 */

get_header(); ?>
      <!-- Sidebar -->
      <div class="col-sm-2">

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php endif; ?>

      </div><!-- Sidebar -->
    
      <!-- Content -->
      <div class="col-sm-10">
    	<div id="primary" class="content-area">
    		<div id="content" class="site-content" role="main">
    			<?php
    				// Start the Loop.
    				while ( have_posts() ) : the_post();
    
    					/*
    					 * Include the post format-specific template for the content. If you want to
    					 * use this in a child theme, then include a file called called content-___.php
    					 * (where ___ is the post format) and that will be used instead.
    					 */
    					get_template_part( 'content', get_post_format() );
    
    					// Previous/next post navigation.
    					//twentyfourteen_post_nav();
    
    					// If comments are open or we have at least one comment, load up the comment template.
    					if ( comments_open() || get_comments_number() ) {
    						comments_template();
    					}
    				endwhile;
    			?>
    		</div><!-- #content -->
    	</div><!-- #primary -->
                  
      </div><!-- Content -->
<?php get_footer(); ?>