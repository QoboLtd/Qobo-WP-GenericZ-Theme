<?php
/**
 * The Sidebar widget area for footer.
 *
 * @package qobo-bootstrap-one
 */
?>

<?php
if(!is_active_sidebar('footer-widget-1') && !is_active_sidebar('footer-widget-2') && !is_active_sidebar('footer-widget-3') && !is_active_sidebar('footer-widget-4') && !is_active_sidebar('footer-widget-bot'))
    return;
?>
  
<div class="footer-widget-area">
  <div class="col-sm-2 footer-widget" role="complementary">
    <?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
    <?php dynamic_sidebar( 'footer-widget-1' ); ?>
    <?php endif; ?>
  </div><!-- .widget-area .first -->

  <div class="col-sm-10">
    <div class="col-sm-4 footer-widget" role="complementary">
      <?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
      <?php dynamic_sidebar( 'footer-widget-2' ); ?>
      <?php endif; ?>
    </div><!-- .widget-area .second -->

    <div class="col-sm-4 footer-widget" role="complementary">
      <?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
      <?php dynamic_sidebar( 'footer-widget-3' ); ?>
      <?php endif; ?>
    </div><!-- .widget-area .third -->
    
    <div class="col-sm-4 footer-widget" role="complementary">
      <?php if ( is_active_sidebar( 'footer-widget-4' ) ) : ?>
      <?php dynamic_sidebar( 'footer-widget-4' ); ?>
      <?php endif; ?>
    </div><!-- .widget-area .third -->
  </div>
  
  <div class="col-sm-12 footer-widget" role="complementary">
    <?php if ( is_active_sidebar( 'footer-widget-bot' ) ) : ?>
    <?php dynamic_sidebar( 'footer-widget-bot' ); ?>
    <?php endif; ?>
  </div><!-- .widget-area .first -->
</div>