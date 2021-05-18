<?php
/*
Template Name: About Us Page
*/
?>

<?php get_header(); ?>
	<section class="coverAboutUs">
		<div class="coverBackgroundBanner"></div>
		<div class="container slide-in-bottom wow">
			<div class="coverAboutUsText">
				<h1>Why choose NeverBlue IT?</h1>
				<p><?php the_field('cover_subtitle'); ?></p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.5s">
			</div>
			<div class="coverAboutUsImage" style="background-image: url(<?php the_field('cover_image'); ?>);">
				<img src="<?php the_field('cover_image'); ?>" alt="">
			</div>
		</div>
	</section>
	<section class="aboutByYourSide">
		<div class="coverBackgroundBanner"></div>
		<div class="container">
			<h2 class="titleAnimated">By your side whenever you need us</h2>
			<p><?php the_field('intro_text'); ?></p>
			<div class="aboutByYourSideImages">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/about-by-your-side-img-1.png" alt="" class="slide-in-left wow" data-wow-delay="0.3s">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/about-by-your-side-img-2.png" alt="" class="slide-in-right wow" data-wow-delay="0.3s">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.6s">
			</div>
		</div>
	</section>
	<section class="aboutByYourSideText">
		<div class="container">
			<?php the_field('main_copy'); ?>
		</div>
	</section>
	<section class="aboutOurPromise">
		<div class="container">
			<h2 class="titleAnimated">Our promise</h2>
			<div class="aboutOurPromiseContent">
				<div class="aboutOurPromiseContentImage">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/icon-about-our-promise.png" alt="">
				</div>
				<div class="aboutOurPromiseContentText">
					<?php the_field('our_promisse_text'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="aboutOurPeople">
		<div class="container">
			<div class="aboutOurPeopleIntro">
				<div class="aboutOurPeopleIntroCopy">
					<h2 class="titleAnimated">Our people</h2>
					<?php the_field('our_people_text'); ?>
				</div>
				<div class="aboutOurPeopleIntroImage">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/aboutOurPeopleIntroImage.png" alt="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.3s">
				</div>
			</div>
			<div class="aboutOurPeopleTeam">
				<h3 class="titleAnimated">NeverBlue IT is proud to be a 100% family-owned business. </h3>
				<?php
					if( have_rows('team_members') ):
						while ( have_rows('team_members') ) : the_row(); ?>
							
							<div class="aboutOurPeopleTeamMember slide-in-bottom wow" data-wow-delay="0.3s">
								<div class="aboutOurPeopleTeamMemberPhoto">
									<img src="<?php the_sub_field('team_member_photo'); ?>" alt="">
								</div>
								<div class="aboutOurPeopleTeamMemberText">
									<h4><?php the_sub_field('team_member_name'); ?></h4>
									<h5><?php the_sub_field('team_member_role'); ?></h5>
									<p><?php the_sub_field('team_member_copy'); ?></p> 

									<?php if (get_sub_field('team_member_email')) { ?>
										<a href="mailto:<?php the_sub_field('team_member_email'); ?>"><?php the_sub_field('team_member_email'); ?></a> <br>
  									<?php } ?> 
									
									<?php if (get_sub_field('team_member_linkedin')) { ?>
										<a href="<?php the_sub_field('team_member_linkedin'); ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
  									<?php } ?> 
									
									<?php if (get_sub_field('team_member_phone')) { ?>
										<a href="<?php the_sub_field('team_member_phone'); ?>"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
  									<?php } ?> 
								</div>
							</div>
						<?php endwhile;
					endif;
				?>
			</div>
		</div>
	</section>
	<section class="aboutPartnerships">
		<div class="container">
			<h2 class="titleAnimated">We’re a proud member of these leading organizations</h2>
			<div class="aboutPartnershipsWrapper">
                <div class="flexslider carousel">
                    <ul class="slides">
						<?php 
                            if( have_rows('organizations_logo') ):
                                while ( have_rows('organizations_logo') ) : the_row(); ?>
                                    <li>
                                        <img src="<?php the_sub_field('logo'); ?>" />
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
            <div class="homeCtaText tracking-in-expand-fwd wow" data-wow-delay="0.3s">
                <h2>Trust us to focus on your computer systems  — so you can focus on your business.</h2>
                <a href="<?php echo site_url('/contact/')?>" class="btn-orange hvr-hang">Schedule your free consultation</a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
