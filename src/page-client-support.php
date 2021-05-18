<?php
/*
Template Name: Client Support Page
*/
?>

<?php get_header(); ?>
	<section class="clientSupportPage">
		<div class="container">
			<div class="clientSupportText">
				<h1>Client Support</h1>
				<ul>
					<li>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<div class="clientSupportListText">
							<h2>Call Us</h2>
							<p>Help Desk <a href="tel:855.694.6743">855.694.6743</a></p>
							<p>Sales <a href="tel:248.536.5400">248.536.5400</a></p>
						</div>
					</li>
					<li>
						<i class="fa fa-user" aria-hidden="true"></i>
						<div class="clientSupportListText">
							<a href="https://helpdesk.inspchelp.com/Helpdesk/User/Login" class="btn-orange hvr-hang" target="_blank">Help Desk Login</a>
						</div>
					</li>
					<li>
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<div class="clientSupportListText">
							<a href="http://help.ins.us.com/" class="btn-orange hvr-hang" target="_blank">Start a Splashtop Session</a>
						</div>
					</li>
					<li>
					<i class="fa fa-envelope" aria-hidden="true"></i>
						<div class="clientSupportListText">
							<a href="mailto:sales@neverblueit.com" class="btn-orange hvr-hang" target="_blank">Email Support</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="clientSupportImages">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/client-support-image-1.png" alt="" class="slide-in-left wow" data-wow-delay="0.3s">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/client-support-image-2.png" alt="" class="slide-in-right wow" data-wow-delay="0.3s">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/logo-symbol.png" alt="" class="logo-symbol wow" data-wow-delay="0.6s">
			</div>
		</div>
	</section>
<?php get_footer(); ?>
