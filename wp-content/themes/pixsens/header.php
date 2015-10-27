<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
  	<header>
  			<a href="/"><img class="head-logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>

	  		<?php

		      $defaults = array(
		          'container' => false,
		          'theme_location' => 'primary-menu',
		          'menu_class' => 'main-nav'
		        );

		      wp_nav_menu( $defaults );
			?>

  	</header>