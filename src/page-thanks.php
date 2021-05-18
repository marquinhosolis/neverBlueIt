<?php
/*
Template Name: Thanks Page
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="thanksPage">
		<div class="container">
            <h1>Thanks for your responses!</h1>
            <p>Our team will contact you as soon as possible. </p>
            <a href="<?php echo site_url(); ?>" class="btn-orange hvr-hang">Back to site</a>
		</div>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>







