<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package qobo-bootstrap-one
 */
?>
      </div><!-- #main -->
      
      <div id="footer-area">
        <br/>
        <div class="row">
          <div class="col-sm-12">
          <?php get_sidebar( 'footer' ); ?>
          </div>
        </div>
        
      </div><!-- #footer -->
      
    </div><!-- #page -->
    
    <!-- Back to top button -->
    <span id="top-link-block" class="hidden">
      <a id="top-link-button" href="#top" class="well well-sm">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
    </span><!-- /top-link-block -->
    
    <!-- Back to top -->
    <script>
    // Only enable if the document has a long scroll bar
    // Note the window height + offset
    if ( ($(window).height() + 100) < $(document).height() ) {
       $('#top-link-block').removeClass('hidden').affix({
           // how far to scroll down before link "slides" into view
           offset: {top:100}
       });
    }
    $('#top-link-button').click(function(){
        $('html,body').animate({scrollTop:0},'slow');return false;
    });
    </script>
    
    <?php wp_footer(); ?>
  </body>
</html>