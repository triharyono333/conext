<?php
global $user, $base_url, $language;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
$arg0 = arg(0);
$arg1 = arg(1);
$section_class = get_section_class($arg0, $arg1);
?>

<style>
body {
    margin: 0;
    font-family: 'Lato', sans-serif;
}

.overlay {
    height: 100%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>

<?php if (empty($_SESSION['prelaunch_login'])) { ?>
<div id="myNav" class="overlay">
  <div class="overlay-content">
    <form method='post' action='<?php print $base_url ?>/prelaunch_login'>
			Username: <input type="textfield" name='username' /> <br /><br />
			Password: <input type="textfield" name='password' type='password' /> <br /><br /> 
			<input type='submit' value='Login' />
		</form>
  </div>
</div>
<?php } ?>

<div id="page-wrapper">
	<?php if (!empty($_SESSION['prelaunch_login'])) { ?>
	<header id="header" class="header-color-white <?php print (drupal_is_front_page()) ? '' : 'white-box' ?>">
		<input type="hidden" id="arg0" value="<?php print (drupal_is_front_page()) ? 'home' : $arg0 ?>" >
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
						<li class="menu-item-has-children" id="home">
							<a href="<?php print $base_url ?>">Home</a>
						</li>
						<li class="menu-item-has-children" id="articles">
							<a href="<?php print $base_url ?>/articles">Articles</a>
						</li>
						<li class="menu-item-has-children" id="about">
							<a href="<?php print $base_url ?>/about">About Us</a>
						</li>
						<li class="menu-item-has-children" id="job_seeker">
							<a href="<?php print $base_url ?>/job_seeker" class="rounded">Job Seeker</a>
						</li>
						<li class="menu-item-has-children" id="employer">
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
								<?php print generate_myaccount_submenu() ?>
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
				<li class="menu-item-has-children" id="home">
					<a href="<?php print $base_url ?>">Home</a>
				</li>
				<li class="menu-item-has-children" id="articles">
					<a href="<?php print $base_url ?>/articles">Articles</a>
				</li>
				<li class="menu-item-has-children" id="about">
					<a href="<?php print $base_url ?>/about">About Us</a>
				</li>
				<li class="menu-item-has-children" id="job_seeker">
					<a href="<?php print $base_url ?>/job_seeker">Job Seeker</a>
				</li>
				<li class="menu-item-has-children" id="employer">
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
	<?php } ?>

	<?php if (drupal_is_front_page()) { ?>
	<div id="slideshow">
		<div class="post-slider style4 owl-carousel box">
			<div class="soap-mfp-popup">
				<?php $banner_title = get_banner_and_title('home') ?>
				<img src="<?php print $banner_title['banner_image'] ?>" alt="">
				<div class="slide-text">
					<div class="caption-wrapper">
						<div class="container">
							<h3 class="caption caption-animated size-md" data-animation-type="fadeInLeft" data-animation-duration="2" data-animation-delay="0">Apply Today And</h3><br>
							<h2 class="caption caption-animated size-lg" data-animation-type="fadeInLeft" data-animation-duration="2" data-animation-delay="1">Build Your Career</h2><br>
							<div class="caption-animated" data-animation-type="fadeInLeft" data-animation-duration="2" data-animation-delay="3"><a href="<?php print $base_url ?>/job_seeker/login" class="btn style2">Apply Now <span class="arrow"></span></a></div>
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
					<?php
					$intro_delay = 0;
					$intros = get_intro_home();
					foreach($intros as $intro) {
						$intro_image = file_create_url($intro->field_intro_image[LANGUAGE_NONE][0]['uri']);
						$intro_delay += 0.25;
					?>
					<div class="col-sm-4">
						<div class="icon-box box">
							<div class="icon-container">
								<img src="<?php print $intro_image ?>" border="0" align="<?php print $intro->title ?>">
							</div>
							<div class="box-content">
								<h3 class="box-title"><a href="#"><?php print $intro->title ?></a></h3>
								<?php print $intro->body[LANGUAGE_NONE][0]['value'] ?>
							</div>
						</div>
					</div>
					<?php } ?>
					
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
									<p><?php print (empty($article->field_article_short_description)) ? '' : $article->field_article_short_description[LANGUAGE_NONE][0]['value'] ?></p>
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
					<h2 class="box-title">Client Testimonial</h2>
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
							<div class="testimonial-content">
								<blockquote><?php print $testimonial->body[LANGUAGE_NONE][0]['value'] ?></blockquote>
							</div>
                            <div class="testimonial-author">
                                <span class="testimonial-author-name"><?php print $testimonial->title ?></span> <span class="testimonial-author-job">, <?php print $testimonial->field_company[LANGUAGE_NONE][0]['value'] ?></span>
                            </div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="section clients">
			<div class="container">
				<div class="heading-box">
					<h2 class="box-title">Clients</h2>
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
					<div class="callout-action">
						<a class="btn style3" href="<?php print $base_url ?>/employer/login">Employers</a>
					</div>
					<div class="callout-text">
						<h2>Post Vacancies Here</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } else { ?>
	<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
	<?php if ($arg0 == 'employer' || $arg0 == 'job_seeker' || $arg0 == 'user') { ?>
		<div class="head-spacer"><img src="<?php print $path_to_theme ?>images/spacer.gif" style="height: 92px;"></div>
		<?php //if ($arg1 == 'register' || $arg1 == 'post_job') $register_class = 'register' ?>
	<?php } else { ?>
		<?php $banner_title = get_banner_and_title($arg0) ?>
		<div class="page-title-container image-banner" style="background-image: url('<?php print $banner_title['banner_image'] ?>')">
			<div class="page-title">
				<div class="container">
					<h1 class="entry-title"><?php print $banner_title['header_title'] ?></h1>
				</div>
			</div>
		</div>
	<?php } ?>

  <?php if ($messages): ?><div class="container"><div id="console" class="clearfix"><?php print $messages; ?></div></div><?php endif; ?>
	<section id="content" class="<?php print $section_class ?>">
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
						<a href="<?php print $base_url ?>/about" class="btn style2">Learn More <span class="arrow"></span></a>
					</div>
					<div class="col-sm-4">
						<h2 class="section-title box">Headquarter</h2>
						<?php print $other_setting['office_address'] ?>
					</div>
					<div class="col-sm-4">
						<h2 class="section-title box">Follow Us</h2>
						<div class="social-icons box size-lg style3">
							<a target="_blank" href="<?php print $other_setting['linkedin'] ?>" class="social-icon"><i class="fa fa-linkedin has-circle" data-toggle="tooltip" data-placement="top" title="LinkedIn"></i></a>
							<a target="_blank" href="<?php print $other_setting['facebook'] ?>" class="social-icon"><i class="fa fa-facebook has-circle" data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
							<a target="_blank" href="<?php print $other_setting['instagram'] ?>" class="social-icon"><i class="fa fa-instagram has-circle" data-toggle="tooltip" data-placement="top" title="Instagram"></i></a>
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
<script type="text/javascript" src="<?php print $path_to_theme ?>js/validate.js"></script>
