<?php get_header(); ?>

<main class="page404">
	<div class="container">
		<div class="page404TextWrapper">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.3s">
			<div class="page404Text">
				<h1>404</h1>
				<p>The page you're looking for
				could not be found. Sorry! </p>
				<p>Need IT help?</p>
				<a href="<?php echo site_url(); ?>" class="btn-orange hvr-hang">Click here</a>
				
			</div>
			
		</div>
		
		<div class="page404Image slide-in-right wow" data-wow-delay="0.3s">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/404-image.png" alt="">
		</div>
	</div>
</main>




<?php get_footer(); ?>
