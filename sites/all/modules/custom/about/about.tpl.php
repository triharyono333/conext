<?php 
	global $base_url;
	$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>

<div class="section bookmark">
	<ul>
		<li><a href="#whoweare" title="Who We Are" class="smoothScroll">Who We Are</a></li>
		<li><a href="#whatwedo" title="What We Do" class="smoothScroll">What We Do</a></li>
        <li><a href="#contactus" title="Contact" class="smoothScroll">Contact Us</a></li>
        <li><a href="#workwithus" title="Work With Us" class="smoothScroll">Work With Us</a></li>
	</ul>
</div>
<div class="parallax who-we-are" data-stellar-background-ratio="0.5">
	<div id="whoweare" class="target-bookmark"></div>
	<div class="section text-center">
		<div class="container">
			<div class="heading-box">
				<h2 class="box-title">Who We Are</h2>
			</div>
			<?php print $content['about_who_we_are'] ?>
		</div>
	</div>
</div>
<?php 
$banner = get_banner_and_title('about2');
$banner_image = $banner['banner_image'];
?>
<div class="parallax" style="background-image: url('<?php print $banner_image ?>'); background-size: cover" data-stellar-background-ratio="0.5">
	<div id="whatwedo" class="target-bookmark"></div>
	<div class="section text-center">
		<div class="container">
			<div class="heading-box">
				<h2 class="box-title">What We Do</h2>
			</div>
			<?php print $content['about_what_we_do'] ?>
		</div>
	</div>
</div>
<div class="section contact-us">
	<div id="contactus" class="target-bookmark"></div>
	<div class="container">
		<div class="heading-box">
			<h2 class="box-title">Contact Us</h2>
			<!--<p class="desc-lg">Call us today to discuss what we can. Learn about the jobs available at our website. Find out about career paths, open positions and learning oppotunities</p>-->
		</div>
		<form action="<?php print $content['action'] ?>" method="post">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="form-group col-sms-6 col-sm-6">
                            <input type="text" class="input-text full-width" placeholder="Name" id="contact_name" name="contact_name">
                        </div>
                        <div class="form-group col-sms-6 col-sm-6">
                            <input type="text" class="input-text full-width" placeholder="Email Address" id="email_address" name="email_address">
                        </div>
                        <div class="form-group col-sms-6 col-sm-6">
                            <input type="text" class="input-text full-width" placeholder="Phone" id="phone" name="phone">
                        </div>
                        <div class="form-group col-sms-6 col-sm-6">
                            <input type="text" class="input-text full-width" placeholder="Company" id="company" name="company">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="input-text full-width" placeholder="Subject" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                        <textarea rows="10" class="input-text full-width" placeholder="Message" id="message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn style2" id="about_submit">Send Message <span class="arrow"></span></button>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
		</form>
	</div>
</div>
<div class="section work-with-us">
    <div id="workwithus" class="target-bookmark"></div>
    <div class="container">
        <div class="heading-box">
            <h2 class="box-title">Career With Conext</h2>
            <p class="desc-lg"><?php print $content['about_work_with_us'] ?></p>
        </div>
        <div class="same-height">
            <?php
            $delay = 0;
            foreach($content['jobs'] as $job) {
                ?>
                <div class="icon-box box animated fadeInUp text-center" data-animation-type="fadeInUp" data-animation-delay="<?php print $delay ?>" style="animation-duration: 1s; animation-delay: <?php print $delay ?>s; visibility: visible;">
                    <div class="box-content">
                        <h4 class="box-title"><a href="#"><?php print $job->title ?></a></h4>
                        <p>
                            Status: <?php print $job->field_conext_job_status[LANGUAGE_NONE][0]['value'] ?><br />
                            Qualification: <?php print $job->field_conext_job_qualification[LANGUAGE_NONE][0]['value'] ?>
                        </p>
                        <a href="<?php print $base_url."/".drupal_get_path_alias("node/".$job->nid) ?>" class="btn style2">Apply Now <span class="arrow"></span></a>
                    </div>
                </div>
                <?php
                $delay += 0.25;
            }
            ?>
        </div>
    </div>
</div>
