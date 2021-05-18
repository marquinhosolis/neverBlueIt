<?php get_header(); ?>
    <section class="coverAboutUs">
		<div class="coverBackgroundBanner"></div>
		<div class="container slide-in-bottom wow" data-wow-delay="0.3s">
			<div class="coverAboutUsText" style="background: #645661;">
				<h1><?php the_field('cover_title'); ?></h1>
                <p><?php the_field('cover_subtitle'); ?> </p>
            </div>
            <div class="coverAboutUsImage singlePartnerCoverImage" style="background-image: url(<?php the_field('partner_logo_cover'); ?>);">
                <img src="<?php the_field('partner_logo_cover'); ?>" alt="">
			</div>
		</div>
    </section>
    <?php
        if( have_rows('partner_main_content') ):
            while ( have_rows('partner_main_content') ) : the_row(); ?>
                <section class="singlePartnerIntroText">
                    <div class="container">
                        <div class="singlePartnerIntroTextPart singlePartnerIntroTextImage slide-in-left wow" data-wow-delay="0.3s">
                            <img src="<?php the_sub_field('partner_main_content_photo'); ?>" alt="">
                        </div>
                        <div class="singlePartnerIntroTextPart">
                            <h2><?php the_sub_field('partner_main_content_text_1_title'); ?></h2>
                            <?php the_sub_field('partner_main_content_text_1_text'); ?>
                        </div>
                        <div class="singlePartnerIntroTextPart">
                            <h3><?php the_sub_field('partner_main_content_text_2_title'); ?></h3>
                            <?php the_sub_field('partner_main_content_text_2_text'); ?>
                        </div>
                        <div class="singlePartnerIntroTextPart">
                            <h3><?php the_sub_field('partner_main_content_text_3_title'); ?></h3>
                            <?php the_sub_field('partner_main_content_text_3_text'); ?>
                        </div>
                        <div class="singlePartnerIntroTextCta">
                            <a href="<?php echo site_url('/contact/');?>" class="btn-orange hvr-hang">Schedule your free consultation</a>
                        </div>
                    </div>
                </section>
            <?php endwhile;
        endif;
    ?>
    <?php 
        if(is_single('61')){ ?>
            <section class="singlePartnerWhyChoose">
                <div class="container">
                    <div class="singlePartnerWhyChooseImage">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/singlePartnerWhyChooseImage.png" alt="" class="slide-in-left wow" data-wow-delay="0.3s">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.6s">
                    </div>
                    <div class="singlePartnerWhyChooseText">
                        <h2 class="titleAnimated">Why choose NeverBlue IT?</h2>
                        <div class="singlePartnerWhyChooseTextCopy">
                        <?php the_field('why_choose_neverblue_itext'); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        }
    ?>
    
    <section class="singlePartnerCta" style="background-image: url(<?php the_field('partner_cta_background_image'); ?>);">
        <div class="container">
            <div class="singlePartnerCtaImage">
                <img src="<?php the_field('partner_cta_logo'); ?>" alt="">
            </div>
            <div class="singlePartnerCtaText tracking-in-expand-fwd wow" data-wow-delay="0.3s">
                <h2><?php the_field('partner_cta_text'); ?></h2>
                <a href="<?php echo site_url('/contact/')?>" class="btn-orange hvr-hang">Schedule your free consultation</a>
            </div>

        </div>
    </section>
<?php get_footer(); ?>

