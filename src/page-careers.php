<?php
/*
Template Name: Careers Page
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="contactPage careersPage">
		<div class="container">
			<div class="contactPageText">
				<h1><?php the_title();?></h1>
				<?php the_content(); ?>
				<a href="https://www.google.com/" class="btn-orange hvr-hang" target="_blank">Click here to apply</a>
			</div>
			<div class="contactPageImage">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/careers-image.png" alt="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.3s">
			</div>
		</div>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>







