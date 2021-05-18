<?php
/*
Template Name: Terms Page
*/
?>

<?php get_header(); ?>
	<section class="pageTerms">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="container">
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>


