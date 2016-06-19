<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="wrapper" class="hfeed">
    <header id="header" role="banner">
      <div class="branding flex-container">
        <section id="branding">
          <div id="site-title">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home"><?php echo "brittany renee mayes" // esc_html(get_bloginfo('name')); ?></a></h1>
          </div>
          <div id="site-description">
            Interactive News Developer
            <?php // bloginfo('description'); ?>
          </div>
        </section>
      </div>
      <div class="menubar flex-container container">
        <nav id="menu" role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
        <div id="social">
          <img src="http://placehold.it/35x35">
          <img src="http://placehold.it/35x35">
          <img src="http://placehold.it/35x35">
        </div>
      </div>
    </header>
    <div id="container" class="container">
