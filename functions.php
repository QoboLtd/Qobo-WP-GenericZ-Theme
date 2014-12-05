<?php
//Enable 'Featured Image'
add_theme_support( 'post-thumbnails' );

//Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');

/**
 * Load custom nav walker
 */
require get_template_directory() . '/inc/navwalker.php';

/**
 * Load custom styling for login screen
 */
function qbbson_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/inc/css/login.css');
}
add_action('login_enqueue_scripts', 'qbbson_login_stylesheet');
function qbbson_login_stylesheet_head() {
    echo '<style type="text/css">
        body.login {
          background-image: url(' . get_template_directory_uri() . '/images/login_bg.jpg) !important;
        }
      </style>';
}
add_action('login_head', 'qbbson_login_stylesheet_head');

/**
 * Return style CSS URL
 *
 */
function qbbson_get_stylecss_url() {
  return get_template_directory_uri().'/style.css';
}

function qbbson_widgets_init() {
    /**
     * FOOTER
     */
    register_sidebar(array(
        'id' => 'footer-widget-1',
        'name' =>  __( 'Footer Widget 1', 'qobo-bootstrap-one' ),
        'description' =>  __( 'Used for footer widget area, column 1', 'qobo-bootstrap-one' ),
        'before_widget' => '<aside id="%1$s" class="widget %1$s %2$s">',
        'after_widget' => '</aside><br/>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'id' => 'footer-widget-2',
        'name' =>  __( 'Footer Widget 2', 'qobo-bootstrap-one' ),
        'description' =>  __( 'Used for footer widget area, column 2', 'qobo-bootstrap-one' ),
        'before_widget' => '<aside id="%1$s" class="widget %1$s %2$s">',
        'after_widget' => '</aside><br/>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'id' => 'footer-widget-3',
        'name' =>  __( 'Footer Widget 3', 'qobo-bootstrap-one' ),
        'description' =>  __( 'Used for footer widget area, column 3', 'qobo-bootstrap-one' ),
        'before_widget' => '<aside id="%1$s" class="widget %1$s %2$s">',
        'after_widget' => '</aside><br/>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'id' => 'footer-widget-4',
        'name' =>  __( 'Footer Widget 4', 'qobo-bootstrap-one' ),
        'description' =>  __( 'Used for footer widget area, column 4', 'qobo-bootstrap-one' ),
        'before_widget' => '<aside id="%1$s" class="widget %1$s %2$s">',
        'after_widget' => '</aside><br/>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'id' => 'footer-widget-bot',
        'name' =>  __( 'Footer Widget Bottom', 'qobo-bootstrap-one' ),
        'description' =>  __( 'Used for footer widget area, bottom', 'qobo-bootstrap-one' ),
        'before_widget' => '<aside id="%1$s" class="widget %1$s %2$s">',
        'after_widget' => '</aside><br/>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    /**
     * SIDE
     */
    register_sidebar( array(
        'name' => __('Main Sidebar', 'qobo-bootstrap-one'),
        'id' => 'sidebar-1',
        'description' => __('Widgets in this area will be shown in sidebar.', 'qobo-bootstrap-one'),
        'before_widget' => '<div class="hidden-xs"><aside id="%1$s" class="widget %1$s %2$s">',
        'after_widget' => '</aside><br/></div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'qbbson_widgets_init' );

function qbbson_menus_init() {
    register_nav_menus( array(
        'header-menu-left' => __('Header Menu Left'),
        'header-menu-right' => __('Header Menu Right'),
    ) );
}
add_action( 'init', 'qbbson_menus_init' );
?>