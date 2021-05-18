<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<main>
    <?php
        $imagesCover = get_field('cover_images');
        $rand_keys = array_rand($imagesCover, 1);
    ?>
    <section class="cover coverHome" >
        <div class="coverBackgroundBanner"></div>
        <div class="container slide-in-bottom wow" data-wow-delay="0.3s" style="background-image: url('<?php echo $imagesCover[$rand_keys]['image']; ?>">
            <h1><?php the_field('cover_title'); ?></h1>
            <h2><?php the_field('cover_subtitle'); ?></h2>
            <a href="<?php echo site_url('/contact/'); ?>" class="btn-orange hvr-hang">Schedule your free consultation</a>
            <div class="coverArrowDown">
                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
            </div>
        </div>
    </section>
    <section class="homeTrustedTech">
        <div class="container">
            <div class="homeTrustedTechImages slide-in-left wow" data-wow-delay="0.3s">
            <?php
                if( have_rows('intro_images') ):
                    while ( have_rows('intro_images') ) : the_row(); ?>
                        <img src="<?php the_sub_field('image_1'); ?>" alt="">
                        <img src="<?php the_sub_field('image_2'); ?>" alt="">
                    <?php endwhile;
                endif;
            ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.3s">
            </div>
            <div class="homeTrustedTechText">
                <h2><?php the_field('intro_title'); ?></h2>
                <div class="homeTrustedTechCopy">
                    <?php the_field('intro_text'); ?>
                </div>
                <a href="#" class="btn-orange hvr-hang">Learn more</a>
            </div>
        </div>
    </section>
    <section class="homeOurServices">
        <div class="container">
            <h2 class="titleAnimated">
                How we can help you
            </h2>
            <div class="homeOurServicesItems ">
                <?php
                    if( have_rows('home_services') ):
                        while ( have_rows('home_services') ) : the_row(); ?>
                            <a href="<?php echo site_url('/services/managed-it-services/'); ?>" class="homeOurServicesItem hvr-grow-shadow">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/it-services-icon.png" alt="IT Services Icon">
                                <h3>IT Services</h3>
                                <p><?php the_sub_field('it_services_copy'); ?></p>
                                <span class="hvr-forward">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                            <a href="<?php echo site_url('/services/cyber-security/'); ?>" class="homeOurServicesItem hvr-grow-shadow">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cyber-security-icon.png" alt="IT Services Icon">
                                <h3>Cyber Security</h3>
                                <p><?php the_sub_field('cyber_security_copy'); ?></p>
                                <span class="hvr-forward">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                            <a href="<?php echo site_url('/services/network-design-administration/'); ?>" class="homeOurServicesItem hvr-grow-shadow">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/web-services-icon.png" alt="IT Services Icon">
                                <h3>Network Design & Administration</h3>
                                <p><?php the_sub_field('web_services_copy'); ?></p>
                                <span class="hvr-forward">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                            
                        <?php endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section>
    <section class="homeAboutUs">
        <div class="container">
            <?php
                if( have_rows('home_main') ):
                    while ( have_rows('home_main') ) : the_row(); ?>
                        <div class="homeAboutUsRow">
                            <div class="homeAboutUsImage slide-in-right wow" data-wow-delay="0.3s">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-us-home-1.png" alt="">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-symbol.png" alt="" class="logo-symbol wow swing-in-right-bck" data-wow-delay="0.3s">
                            </div>
                            <div class="homeAboutUsText">
                                <h2><?php the_sub_field('home_main_title_1'); ?></h2>
                                <div class="homeAboutUsCopy">
                                    <?php the_sub_field('home_main_text_1'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="homeAboutUsRow">
                            <div class="homeAboutUsImage slide-in-left wow" data-wow-delay="0.3s">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-us-home-2.png" alt="">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-symbol.png" alt="" class="logo-symbol wow swing-in-right-bck" data-wow-delay="0.3s">
                            </div>
                            <div class="homeAboutUsText">
                                <h2><?php the_sub_field('home_main_title_2'); ?></h2>
                                <div class="homeAboutUsCopy">
                                    <?php the_sub_field('home_main_text_2'); ?>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;
                endif;
            ?>
            <div class="learnMoreAboutHome">
                <a href="<?php echo site_url('/about-us/')?>" class="btn-orange hvr-hang">Learn more about us</a>
            </div>
        </div>
    </section>
    <section class="homeProcess">
        <div class="container">
            <h2 class="titleAnimated">How our process works</h2>
            <h3>With NeverBlue IT by your side, you can trust us to focus on your computer systems—so you can focus on your business. </h3>
            <div class="homeProcesses">
                <?php
                    if( have_rows('processes_steps') ):
                        while ( have_rows('processes_steps') ) : the_row(); ?>
                            <div class="homeProcessUnique flip-in-hor-bottom wow" data-wow-delay="0.3s">
                                <div class="homeProcessStep">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/process-step-1.png" alt="">
                                </div>
                                <h4>Meet your team</h4>
                                <p><?php the_sub_field('process_text_1'); ?></p>
                            </div>
                            <div class="homeProcessUnique flip-in-hor-bottom wow" data-wow-delay="0.3s">
                                <div class="homeProcessStep">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/process-step-2.png" alt="">
                                </div>
                                <h4>Tell us your challenges</h4>
                                <p><?php the_sub_field('process_text_2'); ?></p>
                            </div>
                            <div class="homeProcessUnique flip-in-hor-bottom wow" data-wow-delay="0.3s">
                                <div class="homeProcessStep">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/process-step-3.png" alt="">
                                </div>
                                <h4>Set yourself up for success</h4>
                                <p><?php the_sub_field('process_text_3'); ?></p>
                            </div>
                            <div class="homeProcessUnique flip-in-hor-bottom wow" data-wow-delay="0.3s">
                                <div class="homeProcessStep">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/process-step-4.png" alt="">
                                </div>
                                <h4>Support that goes above & beyond</h4>
                                <p><?php the_sub_field('process_text_4'); ?></p>
                            </div>
                        <?php endwhile;
                    endif;
                ?>
            </div>
            <a href="<?php echo site_url('/contact/')?>" class="btn-orange hvr-hang">Schedule your free consultation</a>
        </div>
    </section>
    <div id="free-resource">
        <section class="homeFreeResource">
            <div class="container">
                <div class="homeFreeResourceImage slide-in-left wow" data-wow-delay="0.3s">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/free-resourses-image.png" alt="">
                </div>
                <div class="homeFreeResourceText">

                    <?php $freeResource = get_field('free_resource_file', 6); ?>
                    <div class="homeFreeResourceTextHidden"><?php echo $freeResource; ?></div>
                    <h2>Free resource for businesses <br>
                    <span><?php the_field('free_resource_title'); ?></span></h2>
                    <p><?php the_field('free_resource_text'); ?></p>
                    <div class="formWrapper">
                        <?php echo do_shortcode('[formidable id=3]'); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <section class="homePartnerships">
        <div class="container">
            <h2 class="titleAnimated">Our technology partners</h2>
            <p><?php the_field('technology_partners_text'); ?></p>
            <div class="homePartnersWrapper">
                <div class="flexslider carousel">
                    <ul class="slides">
                        <?php 
                            if( have_rows('technology_partners_logos') ):
                                while ( have_rows('technology_partners_logos') ) : the_row(); ?>
                                    <li>
                                        <img src="<?php the_sub_field('technology_partners_logo_image'); ?>" />
                                    </li>
                                <?php endwhile;
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="homeBlog">
        <div class="container">
            <h2 class="titleAnimated">Recent Blogs</h2>
            <div class="homeBlogArticles">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => '3'
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            $featured_img = get_the_post_thumbnail_url(''); ?>
                            <article>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="homeBlogArticleImage" style="background-image: url(<?php echo $featured_img; ?>);">
                                        <div class="content"></div>
                                    </div>
                                    <div class="homeBlogArticleText">
                                        <div class="date">
                                            <?php the_date(); ?>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <p>
                                        <?php the_excerpt(); ?> 
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="hvr-forward">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </a>
                            </article>
                        <?php }
                    } 
                    wp_reset_postdata();
                ?>
            </div>
            <a href="<?php echo site_url('/blog/')?>" class="btn-orange hvr-hang">View more blogs</a>
        </div>  
    </section>
    <section class="homeTestimonials">
        <div class="container">
            <h2 class="titleAnimated">What our clients say about us</h2>
            <div class="homeTestimonialsSliderWrapper">
                <div class="flexslider">
                    <ul class="slides">
                        <?php
                            if( have_rows('testimonials') ):
                                while ( have_rows('testimonials') ) : the_row(); ?>
                                    <li>
                                        <div class="homeTestimonialWrapper">
                                            <div class="homeTestimonialText">
                                                <p><?php the_sub_field('testimonial_text'); ?></p>
                                                <div class="testimonialName">
                                                    — <?php the_sub_field('testimonial_name'); ?>, 
                                                    <span><?php the_sub_field('testimonial_company'); ?></span>
                                                </div>
                                            </div>
                                            <div class="homeTestimonialImage">
                                                <img src="<?php the_sub_field('testimonial_image'); ?>" alt="">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.3s">
                                            </div>
                                        </div>    
                                    </li>
                                <?php endwhile;
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="homeCta" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/home-cta-bg.png);">
        <div class="whiteBanner"></div>
        <div class="container">
            <div class="homeCtaImage">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/cta-image-2.png">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/cta-image.png" alt="" >
            </picture> 
            </div>
            <div class="homeCtaText tracking-in-expand-fwd wow" data-wow-delay="0.3s">
                <h2>Ready to achieve more with the right IT partner?</h2>
                <a href="<?php echo site_url('/contact/')?>" class="btn-orange hvr-hang">Schedule your free consultation</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>