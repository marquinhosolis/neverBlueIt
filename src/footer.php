<footer>
	<div class="container">
		<div class="logoFooter">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/never-blue-logo.png" alt="Never Blue Logo">
			</a>
		</div>
		<div class="footerLinks">
			<nav>
				<ul>
					<li><a href="<?php echo site_url('/careers/');?>">Careers</a></li>
					<li><a href="<?php echo site_url('/privacy-policy/');?>">Privacy Policy</a></li>
				</ul>
			</nav>
		</div>
		<div class="footerNewsletter">
			<p>Subscribe to Receive Tech Tips & News</p>
			<div class="footerFormWrapper">
				<?php echo do_shortcode('[formidable id=7]'); ?>
			</div>
		</div>
		<address>
			<a href="tel: 800.470.7001"> <i class="fa fa-phone" aria-hidden="true"></i> 800.470.7001</a><br>
			<a href="https://www.google.com.br/maps/place/9300+Conroy+Windermere+Rd+%23217,+Windermere,+FL+34786,+EUA/@28.492687,-81.5154555,17z/data=!3m1!4b1!4m5!3m4!1s0x88e77f5654f66a5f:0x48dd680b3d94a249!8m2!3d28.492687!4d-81.5132668"><i class="fa fa-map-marker" aria-hidden="true"></i> 9300 Conroy Windermere Rd. #217, Windermere, FL 34786</a> | <a href="https://www.google.com.br/maps/place/31567+W+10+Mile+Rd,+Farmington+Hills,+MI+48336,+EUA/@42.4698347,-83.3607159,17z/data=!3m1!4b1!4m5!3m4!1s0x8824b1189154d8ff:0x9d4d228d29e7b2e3!8m2!3d42.4698347!4d-83.3585272">31567 W. Ten Mile Road Farmington, MI 48336</a>
		</address>
		<div class="footerSocial">
			<p>Follow us </p>
			<a href="https://www.facebook.com/neverblueit/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			<a href="https://www.linkedin.com/company/neverblue-it/about/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
		</div>
	</div>
	<div class="logoDP">
		<?php require_once('logo-dppa-footer.php'); ?>
	</div>
</footer>

<script src="https://use.fontawesome.com/0464cae7b5.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider-min.js"></script>
<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/wow.min.js'></script>
<script>
	new WOW().init();
</script>
<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/main.js'></script>
<?php wp_footer(); ?> 

</body>
</html>
