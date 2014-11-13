<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
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
      			if ( have_posts() ) :
      				// Start the Loop.
      				while ( have_posts() ) : the_post();
      
      					/*
      					 * Include the post format-specific template for the content. If you want to
      					 * use this in a child theme, then include a file called called content-___.php
      					 * (where ___ is the post format) and that will be used instead.
      					 */
      					get_template_part( 'content', get_post_format() );
                        echo '<br/><br/>';
      				endwhile;
      				// Previous/next post navigation.
      				//twentyfourteen_paging_nav();
      
      			else :
      				// If no content, include the "No posts found" template.
      				get_template_part( 'content', 'none' );
      			    echo '<br/><br/>';
      			    
      			endif;
      		?>
	       </div><!-- #content -->
          </div><!-- #primary -->
                  
      </div><!-- Content -->
<?php get_footer(); ?>