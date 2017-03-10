<?php
global $user, $base_url, $language;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
$arg0 = arg(0);
$arg1 = arg(1);
?>
<div id="page-wrapper">
	<header id="header" class="header-color-white <?php print (drupal_is_front_page()) ? '' : 'white-box' ?>">
		<div class="container">
			<div class="header-inner">
				<div class="branding">
					<h1 class="logo">
						<a href="<?php print $base_url ?>"><img src="<?php print $path_to_theme ?>images/spacer.gif" alt=""></a>
					</h1>
				</div>
				<nav id="nav">
					<ul class="header-top-nav">
						<li class="visible-mobile">
							<a href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
						</li>
					</ul>
					<ul id="main-nav" class="hidden-mobile">
						<li class="menu-item-has-children">
							<a href="<?php print $base_url ?>">Home</a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?php print $base_url ?>/articles">Articles</a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?php print $base_url ?>/about">About Us</a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?php print $base_url ?>/job_seeker" class="rounded">Job Seeker</a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?php print $base_url ?>/employer" class="rounded">Employer</a>
						</li>
						<?php if ($user->uid > 0) { ?>
						<?php
							$href = '';
							if ( valid_user_role(JOB_SEEKER_ROLE_ID) ) $href = $base_url.'/job_seeker';
							if ( valid_user_role(EMPLOYER_ROLE_ID) ) $href = $base_url.'/employer';
						?>
						<li class="menu-item-has-children my-account">
							<a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							<ul class="sub-nav">
								<li><a href="<?php print $href ?>">My Account</a></li>
								<li><a href="<?php print $base_url ?>/user/logout">Logout</a></li>
							</ul>
						</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</div>
		<div class="mobile-nav-wrapper collapse visible-mobile" id="mobile-nav-wrapper">
			<ul class="mobile-nav">
				<li class="menu-item-has-children">
					<a href="<?php print $base_url ?>">Home</a>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php print $base_url ?>/articles">Articles</a>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php print $base_url ?>/about">About Us</a>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php print $base_url ?>/job_seeker">Job Seeker</a>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php print $base_url ?>/employer">Employer</a>
				</li>
				<?php if ($user->uid > 0) { ?>
				<?php
					if ( valid_user_role(JOB_SEEKER_ROLE_ID) ) $href = $base_url.'/job_seeker';
					if ( valid_user_role(EMPLOYER_ROLE_ID) ) $href = $base_url.'/employer';
				?>
				<li class="menu-item-has-children">
						<span class="open-subnav"></span>
						<li><a href="<?php print $href ?>">My Account</a></li>
						<ul class="sub-nav">
								<li><a href="<?php print $base_url ?>/user/logout">Logout</a></li>
						</ul>
				</li>
				<?php } ?>
			</ul>
		</div>
	</header>

	<?php if (drupal_is_front_page()) { ?>
	<div id="slideshow">
		<div class="post-slider style4 owl-carousel box">
			<div class="soap-mfp-popup">
				<img src="<?php print $path_to_theme ?>images/hero-banner.jpg" alt="">
				<div class="slide-text">
					<div class="caption-wrapper">
						<div class="container">
							<h3 class="caption caption-animated size-md" data-animation-type="fadeInLeft" data-animation-duration="2" data-animation-delay="0">Apply Today And</h3><br>
							<h2 class="caption caption-animated size-lg" data-animation-type="fadeInLeft" data-animation-duration="2" data-animation-delay="1">Build Your <span class="blue">Resume</span></h2><br>
							<div class="caption-animated" data-animation-type="fadeInLeft" data-animation-duration="2" data-animation-delay="3"><a href="#" class="btn style2">Apply Now <span class="arrow"></span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="content">
		<div class="section how-to">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="icon-box animated box" data-animation-type="fadeInDown" data-animation-delay="0">
							<div class="icon-container">
								<img src="<?php print $path_to_theme ?>images/icon_create_account.png" border="0" align="Create An Account">
							</div>
							<div class="box-content">
								<h3 class="box-title"><a href="#">1. Create An Account</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="icon-box animated box" data-animation-type="fadeInDown" data-animation-delay="0.25">
							<div class="icon-container">
								<img src="<?php print $path_to_theme ?>images/icon_search_job.png" border="0" align="Search Desired Job">
							</div>
							<div class="box-content">
								<h3 class="box-title"><a href="#">2. Search Desired Job</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="icon-box animated box" data-animation-type="fadeInDown" data-animation-delay="0.5">
							<div class="icon-container">
								<img src="<?php print $path_to_theme ?>images/icon_submit_resume.png" border="0" align="Submit Your Resume">
							</div>
							<div class="box-content">
								<h3 class="box-title"><a href="#">3. Submit Your Resume</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section recent-posts">
			<div class="container">
				<div class="heading-box">
					<h2 class="box-title">Recent Articles</h2>
				</div>
				<div class="row">
					<?php
						$articles = get_article_home();
						foreach($articles as $article) {
							$article_image = file_create_url($article->field_article_image[LANGUAGE_NONE][0]['uri'])
					?>
					<div class="col-sm-6 col-md-4">
						<div class="shortcode-banner">
							<img src="<?php print $article_image ?>" alt="<?php print $article->title ?>" class="animated" data-animation-type="fadeInUp">
							<div class="shortcode-banner-content">
								<h3 class="banner-title"><?php print $article->title ?></h3>
								<div class="details">
									<p><?php print $article->field_article_short_description[LANGUAGE_NONE][0]['value'] ?></p>
								</div>
								<a href="<?php print $base_url.'/'.drupal_get_path_alias("node/".$article->nid) ?>" class="btn style2">Read More <span class="arrow"></span></a>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="section testimonials">
			<div class="container">
				<div class="heading-box">
					<h2 class="box-title">Testimony</h2>
					<p>What Are People Say...</p>
				</div>
			</div>
			<div class="image-banner image-testimony">
				<div class="container">
					<div class="testimonials style1 owl-carousel" data-items="1" data-itemsPerDisplayWidth="[[0, 1], [480, 1], [768, 1], [992, 1], [1200, 1]]">
						<?php
						$testimonial = get_testimonial();
						foreach($testimonial as $testimonial) {
						?>
						<div class="testimonial box-lg">
							<div class="testimonial-author">
								<span class="testimonial-author-name"><?php print $testimonial->title ?></span> <span class="testimonial-author-job"><?php print $testimonial->field_company[LANGUAGE_NONE][0]['value'] ?></span>
							</div>
							<div class="testimonial-content">
								<blockquote><?php print $testimonial->body[LANGUAGE_NONE][0]['value'] ?></blockquote>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="heading-box">
					<h2 class="box-title">Clients</h2>
					<p>Lipsum dolor sit amet text supposed to be here...</p>
				</div>
				<div class="overflow-hidden">
					<div class="brand-slider owl-carousel" data-items="4" data-itemsPerDisplayWidth="[[0, 1], [480, 1], [768, 2], [992, 3], [1200, 4]]">
						<?php
						$clients = get_client();
						foreach($clients as $client) {
							$logo = file_create_url($client->field_client_logo[LANGUAGE_NONE][0]['uri'])
						?>
						<a href="#">
							<img src="<?php print $logo ?>" alt="<?php print $client->title ?>">
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="callout-box style3">
			<div class="container">
				<div class="callout-content">
					<div class="callout-text">
						<h2>Start Building Your Own Job Board Now </h2>
					</div>
					<div class="callout-action">
						<a class="btn style3" href="#">Get Started</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } else { ?>
	<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
	<?php if ($arg0 == 'employer' || $arg0 == 'job_seeker' || $arg0 == 'user') { ?>
		<div class="head-spacer"><img src="<?php print $path_to_theme ?>images/spacer.gif" style="height: 92px;"></div>
		<?php if ($arg1 == 'register' || $arg1 == 'post_job') $register_class = 'register' ?>
	<?php } else { ?>
		<?php $header_title = get_home_header_title($arg0) ?>
		<?php if ($arg0 == 'jobs') $job_listing_class = 'job-listing' ?>
		<div class="page-title-container image-banner">
			<div class="page-title">
				<div class="container">
					<h1 class="entry-title"><?php print $header_title ?></h1>
				</div>
			</div>
		</div>
	<?php } ?>

        <?php if ($messages): ?><div class="container"><div id="console" class="clearfix"><?php print $messages; ?></div></div><?php endif; ?>
	<section id="content" class="<?php print (empty($register_class)) ? '' : $register_class ?> <?php print (empty($job_listing_class)) ? '' : $job_listing_class ?>">
      <?php print render($page['content']); ?>
	</section>

	<?php } ?>

	<?php $other_setting = get_other_setting() ?>
	<footer id="footer" class="style1">
		<div class="footer-wrapper">
			<div class="container">
				<div class="row add-clearfix same-height">
					<div class="col-sm-4">
						<h2 class="section-title box">About Conext</h2>
						<?php print $other_setting['about_conext'] ?>
						<a href="#" class="btn style2">Learn More <span class="arrow"></span></a>
					</div>
					<div class="col-sm-4">
						<h2 class="section-title box">Headquarter</h2>
						<?php print $other_setting['office_address'] ?>
					</div>
					<div class="col-sm-4">
						<h2 class="section-title box">Follow Us</h2>
						<div class="social-icons box size-lg style3">
							<a href="<?php print $other_setting['linkedin'] ?>" class="social-icon"><i class="fa fa-linkedin has-circle" data-toggle="tooltip" data-placement="top" title="LinkedIn"></i></a>
							<a href="<?php print $other_setting['facebook'] ?>" class="social-icon"><i class="fa fa-facebook has-circle" data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
							<a href="<?php print $other_setting['twitter'] ?>" class="social-icon"><i class="fa fa-twitter has-circle" data-toggle="tooltip" data-placement="top" title="Twitter"></i></a>
						</div>
						<p>© 2017 Conext.id. All rights reserved</p>
						<!--<a href="#" class="back-to-top"><span></span></a>-->
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<!-- Javascript -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.noconflict.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/modernizr.2.8.3.min.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery-ui.1.11.2.min.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.sticky.js"></script>

<!-- Twitter Bootstrap -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/bootstrap.min.js"></script>

<!-- Magnific Popup core JS file -->
<script type="text/javascript" src="<?php print $path_to_theme ?>components/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- parallax -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.stellar.min.js"></script>

<!-- waypoint -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/waypoints.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="<?php print $path_to_theme ?>components/owl-carousel/owl.carousel.min.js"></script>

<!-- load revolution slider scripts -->
<script type="text/javascript" src="<?php print $path_to_theme ?>components/revolution_slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="<?php print $path_to_theme ?>components/jquery.carousel-1.1/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>components/jquery.carousel-1.1/jquery.carousel-1.1.min.js"></script>

<!-- plugins -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.plugins.js"></script>

<!-- load page Javascript -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/main.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/custom-file-input.js"></script>

<script type="text/javascript" src="<?php print $path_to_theme ?>js/revolution-slider.js"></script>
