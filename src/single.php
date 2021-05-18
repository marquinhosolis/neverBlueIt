<?php
/*
Template Name: Single Page
*/

$category = get_the_category();
$firstCategory = $category[0]->cat_name;
?>

<?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); 
	$featured_img = get_the_post_thumbnail_url(''); 
	?>
	<section class="singlePost">
        <div class="container"> 
            
            <div class="singlePostText">
            <div class="singlePostImage slide-in-left wow" data-wow-delay="0.3s" style="background-image: url(<?php echo $featured_img; ?>);">
                <div class="content">
                    <a href="<?php echo site_url('/blog/')?>" class="btn-orange hvr-hang"><i class="fa fa-caret-left" aria-hidden="true"></i> Back to all blogs</a>
                </div>
            </div>
                <h1 class="titleAnimated"><?php the_title(); ?></h1>
                <div class="singlePostTextInfo">
                    <span class="singlePostTextInfoDate"><?php echo get_the_date(); ?></span>
                    <span class="singlePostTextInfoCategory"><?php echo $firstCategory; ?></span>
                </div>
                <div class="singlePostTextCopy">
                    <?php the_content(); ?>
                    <div class="singlePostTextCopyAppend">
                        <div class="postNav">
                            <div class="previous_post_link">
                                <?php previous_post_link( '%link','<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous Blog' ) ?>
                            </div>
                            <div class="next_post_link">
                                <?php next_post_link( '%link','Next Blog <i class="fa fa-long-arrow-right" aria-hidden="true"></i>' ) ?>
                            </div>
                        </div>
                        <div class="shareLinks">
                            Share: 
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=<?php the_post_thumbnail_url('full'); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="mailto:?subject=I%20think%20this%20post%20is%20for%20you!&body=Look at this post I found in Never Blue. It is exactly what you need: <?php the_permalink(); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>
    <section class="homeCta" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/home-cta-bg.png);">
        <div class="whiteBanner"></div>
        <div class="container">
            <div class="homeCtaImage">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/cta-single-image-2.png">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/cta-single-image.png" alt="" >
            </picture> 
            </div>
            <div class="homeCtaText tracking-in-expand-fwd wow" data-wow-delay="0.3s">
                <h2>Ready to achieve more with the right IT partner?</h2>
                <a href="<?php echo site_url('/contact/')?>" class="btn-orange hvr-hang">Schedule your free consultation</a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>

