<?php
/*
Template Name: Packages & Services Page
*/
?>

<?php get_header(); ?>
    <?php
        $args = array(
            'post_type' => 'services',
            'p'        => 29
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();?>                 
                    <section class="coverAboutUs singleServicesCover">
                        <div class="coverBackgroundBanner"></div>
                        <div class="container slide-in-bottom wow">
                            <div class="coverAboutUsText">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_field('cover_subtitle'); ?></p>
                            </div>
                            <div class="coverAboutUsImage" style="background-image: url(<?php the_field('cover_image'); ?>);">
                                <img src="<?php the_field('cover_image'); ?>" alt="">
                            </div>
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.3s">
                    </section>
                    <section class="singleServiceIntro">
                        <div class="container">
                            <div class="singleServiceIntroText">
                                <h2 class="titleAnimated"><?php the_field('service_intro_title'); ?></h2>
                                <div class="singleServiceIntroTextCopy">
                                    <?php the_field('service_intro_text'); ?>
                                </div>
                            </div>
                            <div class="singleServiceIntroImage slide-in-right wow" data-wow-delay="0.3s">
                                <img src="<?php the_field('service_intro_image'); ?>" alt="">
                            </div>
                            <div class="singleServicesIntroCta">
                                <a href="<?php echo site_url('/contact/')?>" class="btn-orange hvr-hang">Schedule your free consultation</a>
                            </div>
                        </div>
                    </section>
                    <section class="singleServiceMain">
                        <div class="container">
                            <div class="singleServiceMainText">
                                <h3><?php the_field('service_main_title'); ?></h3>
                                <div class="singleServiceMainCopy">
                                    <?php the_field('service_main_text'); ?>
                                </div>
                            </div>
                            <div class="singleServiceOurApproach">
                                <h2 class="titleAnimated"><?php the_field('our_approach_title'); ?></h2>
                                <div class="aboutOurApproachContent">
                                    <div class="aboutOurApproachContentImage">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/icon-about-our-promise.png" alt="">
                                    </div>
                                    <div class="aboutOurApproachContentText">
                                        <?php the_field('our_approach_text'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="singleServiceOurApproachSliderWrapper">
                                <div class="singleServiceOurApproachBoxes flexslider">
                                    <ul class="slides">
                                        <?php
                                            if( have_rows('our_approach_boxes') ):
                                                while ( have_rows('our_approach_boxes') ) : the_row(); ?>
                                                     <li class="slide-in-bottom wow" data-wow-delay="0.3s">
                                                        <div class="singleServiceOurApproachBox" >
                                                            <div class="singleServiceOurApproachBoxTitle">
                                                                <h3><?php the_sub_field('our_approach_box_title'); ?></h3>
                                                            </div>
                                                            <div class="singleServiceOurApproachBoxText">
                                                                <?php the_sub_field('our_approach_box_text'); ?>
                                                            </div>
                                                        </div>  
                                                        <div class="singleServiceOurApproachBoxReadMore">
                                                            <a href="#">Read more <i class="fa fa-caret-down" aria-hidden="true"></i></a>
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
                    <section class="singleProductCta" style="background-image: url(<?php the_field('cta_image'); ?>);">
                        <div class="container">
                            <h2 class="tracking-in-expand-fwd wow" data-wow-delay="0.3s"><?php the_field('cta_text'); ?></h2>
                        </div>
                    </section>
                    <div class="singleProductCtaBtn">
                        <a href="<?php echo site_url('/contact/')?>" class="btn-orange hvr-hang">Schedule your free consultation</a>
                    </div>
                    
                    <?php
                        if( have_rows('main_service_fields') ):
                            while ( have_rows('main_service_fields') ) : the_row(); ?>
                                <section class="mainPostSectionOne">
                                    <div class="container">
                                        <h2 class="titleAnimated"><?php the_sub_field('section_one_title'); ?></h2>
                                        <div class="mainPostSectionOneContent">
                                            <div class="mainPostSectionOneContentImage slide-in-left wow">
                                                <img src="<?php the_sub_field('section_one_image'); ?>" alt="">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.5s">
                                            </div>
                                            <div class="mainPostSectionOneContentText">
                                                <?php the_sub_field('section_one_text'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="mainPostSectionTwo">
                                    <div class="container">
                                        <div class="mainPostSectionTwoTitle">
                                            <h2 class="titleAnimated"><?php the_sub_field('section_two_title'); ?></h2>
                                        </div>
                                    </div>
                                    <?php
                                        if( have_rows('section_two_split_area') ):
                                            while ( have_rows('section_two_split_area') ) : the_row(); ?>
                                                <div class="mainPostSectionTwoSplitArea">
                                                    <div class="mainPostSectionTwoSplitAreaText slide-in-bottom wow" data-wow-delay="0.3s">
                                                        <div class="mainPostSectionTwoSplitAreaTextWrapper">
                                                            <h3><?php the_sub_field('section_two_split_area_title'); ?></h3>
                                                            <h4><?php the_sub_field('section_two_split_area_subtitle'); ?></h4>
                                                            <div class="mainPostSectionTwoSplitAreaTextCopy">
                                                                <?php the_sub_field('section_two_split_area_text'); ?>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="mainPostSectionTwoSplitAreaImage" style="background-image: url(<?php the_sub_field('section_two_split_area_image'); ?>)">
                                                        <img src="<?php the_sub_field('section_two_split_area_image'); ?>" alt="">
                                                    </div>
                                                </div>
                                            <?php endwhile;
                                        endif;
                                    ?>
                                </div>
                            <?php endwhile;
                        endif;
                    ?>
                    <section class="homeTestimonials">
                        <div class="container">
                            <h2 class="titleAnimated">What our clients say about us</h2>
                            <div class="homeTestimonialsSliderWrapper">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <?php
                                            if( have_rows('testimonials',6) ):
                                                while ( have_rows('testimonials',6) ) : the_row(); ?>
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
                                <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/cta-image-about-2.png">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/cta-image-about.png" alt="" >
                            </picture> 
                            </div>
                            <div class="homeCtaText">
                                <h2>Trust us to focus on your computer systems  — so you can focus on your business.</h2>
                                <a href="<?php echo site_url('/contact/')?>" class="btn-orange hvr-hang">Schedule your free consultation</a>
                            </div>
                        </div>
                    </section>
            <?php }
        } 
        wp_reset_postdata();
    ?>
<?php get_footer(); ?>