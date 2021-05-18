<!doctype html>
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154417940-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-154417940-1');
		</script>
		<!-- END Global site tag (gtag.js) - Google Analytics -->

		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="language" content="PT-BR">
		<meta content="en-us" http-equiv="content-language">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
		<!-- ADOBE FONTS -->
		<link rel="stylesheet" href="https://use.typekit.net/sas1uzs.css">
		<!-- / ADOBE FONTS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/hover-min.css">
		<?php wp_head(); ?> 
	</head>

	<body>
	<div class="mainNavWrapper mainNavWrapperMobile">
		<?php wp_nav_menu( array( 'theme_location' => 'mainNav' ) ); ?>
		<div class="mainMenuAppend">
			<a href="tel:800.470.7001" class="btn-orange hvr-hang">800.470.7001</a>
			<a href="<?php echo site_url('/contact/'); ?>" class="btn-green hvr-hang">Get a quote</a>
		</div>
	</div>
	<header>
			<div class="logoHeader">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/never-blue-logo.png" alt="Never Blue Logo">
				</a>
			</div>
			<div class="menuHamburger">
				<div class="hamburgerIcon">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="mainNavWrapper mainNavWrapperDesktop">
				<?php wp_nav_menu( array( 'theme_location' => 'mainNav' ) ); ?>
				<div class="mainMenuAppend">
					<a href="tel:800.470.7001" class="btn-orange hvr-hang">800.470.7001</a>
					<a href="<?php echo site_url('/contact/'); ?>" class="btn-green hvr-hang">Get a quote</a>
				</div>
			</div>
	</header>
	
