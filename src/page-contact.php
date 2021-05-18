<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
	<section class="contactPage">
		<div class="container">
			<div class="contactPageText">
				<h1>Looking for a trusted IT partner to help you achieve more?</h1>
				<p>We’re here to help you do your job better than ever. Give us a call or fill out the form below to schedule your free consultation.</p>
				<div class="contactPageTextForm">
					<?php echo do_shortcode('[formidable id=8]'); ?>
				</div>
			</div>
			<div class="contactPageImage">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/contact-page-image.png" alt="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.3s">
			</div>
		</div>
	</section>
<?php get_footer(); ?>
