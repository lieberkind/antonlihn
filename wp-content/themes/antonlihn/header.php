<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!-- Consider specifying the language of your content by adding the `lang` attribute to <html> -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
		<meta charset="utf-8">

		<!-- Use the .htaccess and remove these lines to avoid edge case issues.
				 More info: h5bp.com/i/378 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>
		<?php 
			global $page, $paged;
			
			wp_title('|', true, 'right');
			bloginfo('name'); 
			
			// Add the blog description for the home/front page.
			$site_description = get_bloginfo('description', 'display');
			if($site_description and (is_home() || is_front_page()))
				echo " | $site_description";
			
			// Add a page number if necessary:
			if($paged >= 2 || $page >= 2)
				echo ' | ' . sprintf(__('Page %s', 'keeparray'), max( $paged, $page));
		
		?>
		</title>
		<meta name="description" content="">

		<!-- Mobile viewport optimized: h5bp.com/viewport -->
		<meta name="viewport" content="width=device-width">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

		<link rel="stylesheet" href="<?= get_bloginfo('template_url'); ?>/css/screen.css">

		<?php wp_head(); ?>
</head>
<body>
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
			 chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
		
	<div class="container">
	
		<header class="page-header">
			<h1 class="page-logo"><a href="<?= home_url('/'); ?>">Anton Lihn</a></h1>
			<p class="phone-number">50 57 45 33</p>

			<?php 
				// Get primary navigation
				wp_nav_menu(array(
					'theme_location' 	=> 'primary-navigation',
					'container' 			=> 'nav',
					'container_class'	=> 'primary-navigation',
					'menu_class' 			=> 'navigation-menu'
				));
			?>
		</header> <!-- .page-header -->
		
		<section class="content" role="main">
			