<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package qobo-bootstrap-one
 */

/**
 * Return favicon URL
 *
 */
function qbbson_get_favicon_url() {
    return get_stylesheet_directory_uri().'/images/favicon.ico';
}

/**
 * Return header logo URL
 *
 */
function qbbson_get_headerlogo_url() {
    return get_stylesheet_directory_uri().'/images/header_logo.png';
}

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <link rel="icon" href="<?php echo qbbson_get_favicon_url(); ?>">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo qbbson_get_stylecss_url(); ?>" rel="stylesheet">
    
    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Bootstrap additional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/transition.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/affix.min.js"></script>
    
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <!-- Main navigation bar -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Toggle for smaller devices -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand qbbs-navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo qbbson_get_headerlogo_url(); ?>"/></a>
        </div>
  
        <!-- List of links -->
        <div id="header-bar" class="collapse navbar-collapse">
          <?php
          $defaults = array(
              'theme_location'  => 'header-menu-left',
              'menu'            => 'header-menu-left',
              'container'       => '',
              'container_class' => '',
              'menu_class'      => 'nav navbar-nav',
              'depth'           => 0,
              'fallback_cb'     => 'qbbson_wp_bootstrap_navwalker::fallback',
              'walker'          => new qbbson_wp_bootstrap_navwalker()
          );
          wp_nav_menu($defaults);
          ?>
          <?php
          $defaults = array(
              'theme_location'  => 'header-menu-right',
              'menu'            => 'header-menu-right',
              'container'       => '',
              'container_class' => '',
              'menu_class'      => 'nav navbar-nav navbar-right',
              'depth'           => 0,
              'fallback_cb'     => 'qbbson_wp_bootstrap_navwalker::fallback',
              'walker'          => new qbbson_wp_bootstrap_navwalker()
          );
          wp_nav_menu($defaults);
          ?>
        </div>
      </div>
    </nav>
    
    <!-- Main body -->
    <div class="container-fluid">