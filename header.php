<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png"> -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

	</head>

	<body <?php body_class(); ?>>
		<a class="skip" href="#content">Skip Navigation</a>

		<div id="container">

			<header class="header" role="banner">

				<div class="toggle-content clearfix">
						<?php if ( has_nav_menu( 'main-nav' ) ) { ?>
						<nav role="navigation" id="my-menu">
							<?php wp_nav_menu(array(
	    					'container' => false,                           // remove nav container
	    					'container_class' => '',                 // class of container (should you choose to use it)
	    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					'menu_class' => '',               // adding custom nav class
	    					'theme_location' => 'main-nav',                 // where it's located in the theme
	    					'before' => '',                                 // before the menu
		        			'after' => '',                                  // after the menu
		        			'link_before' => '',                            // before each link
		        			'link_after' => '',                             // after each link
		        			'depth' => 0,                                   // limit the depth of the nav
		    					'fallback_cb' => ''                             // fallback function (if there is one)
								)); ?>
						</nav>
					<?php } ?>   
				</div>
					<div class="topbar">
						<div class="wrap">
							<a href="#my-menu" class="menu-toggler"><i class="fa fa-bars"></i></a>

							<a class="button login"><span>Member </span>Login</a>
						
							<form role="search" class="search" method="get" id="searchform-head" action="<?php echo home_url( '/' ); ?>">
							    <div class="head-search">
							    	<label class="screen-reader-text" for="s">Search this site</label>
							        <input type="text" value="" placeholder="Search" name="s" id="s" />
							        <button type="submit" id="searchsubmit-head" value="Search"  /><i class="fa fa-search"></i></button>
							    </div>
							</form>
							
							<?php if ( has_nav_menu( 'social-nav' ) ) { ?>
									<?php wp_nav_menu(array(
			    					'container' => false,                           // remove nav container
			    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
			    					'menu' => __( 'The Social Menu', 'bonestheme' ),  // nav name
			    					'menu_class' => 'nav social-nav cf',               // adding custom nav class
			    					'theme_location' => 'social-nav',                 // where it's located in the theme
			    					'before' => '',                                 // before the menu
				        			'after' => '',                                  // after the menu
				        			'link_before' => '',                            // before each link
				        			'link_after' => '',                             // after each link
				        			'depth' => 0,                                   // limit the depth of the nav
									)); ?>
							<?php } ?>
						</div>
					</div>

				<div id="inner-header" class="wrap cf">
					

					<a href="<?php echo home_url(); ?>" id="logo" rel="nofollow" title="<?php bloginfo('name'); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logo-friendly-300w-white.png" alt="<?php bloginfo('name'); ?>" /></a>

					<?php $desc = get_bloginfo('description'); 
					if ($desc) { ?>
						<span class="site-description"><?php echo $desc; ?></span>
					<?php } ?>					

				</div>

				<div class="topmenu cf">
					
					<div class="wrap">
					<?php if ( has_nav_menu( 'main-nav' ) ) { ?>
						<nav role="navigation">
							<?php wp_nav_menu(array(
	    					'container' => false,                           // remove nav container
	    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
	    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					'menu_class' => 'nav top-nav cf',               // adding custom nav class
	    					'theme_location' => 'main-nav',                 // where it's located in the theme
	    					'before' => '',                                 // before the menu
		        			'after' => '',                                  // after the menu
		        			'link_before' => '',                            // before each link
		        			'link_after' => '',                             // after each link
		        			'depth' => 0,                                   // limit the depth of the nav
		    					'fallback_cb' => ''                             // fallback function (if there is one)
								)); ?>
						</nav>
					<?php } ?>
				</div>

				<script type="text/javascript">
					jQuery(document).ready(function($) {
					      
				      jQuery("#my-menu").mmenu({
			            //classes: "mm-light"
			         });

				      jQuery("#my-button").click(function() {
				         jQuery("#my-menu").trigger("open.mm");
				      });

				    });

				</script>
			</header>
