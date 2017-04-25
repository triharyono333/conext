<?php
global $base_url, $theme_path;
$theme_path = $base_url . '/' . $theme_path;
//$job_detail = $content['job_detail'];
//drupal_set_message('<pre>'.print_r($node, true).'</pre>');
?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="container">
	<div class="row">
		<div class="sidebar col-sm-4 col-md-3">
			<ul class="job-opening">
				<?php foreach($content['job_openings'] as $job_opening) { ?>
				<li>
					<a class="<?php print ($job_opening['nid'] == $node->nid) ? 'active' : '' ?>" href="<?php print $base_url."/".drupal_get_path_alias("node/".$job_opening['nid']) ?>">
						<?php print $job_opening['title'] ?>
					</a>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div id="main" class="col-sm-8 col-md-9">
			<article class="post box-lg">
				<div class="post-content">
					<h2 class="entry-title"><?php print $title ?> <br class="visible-xs"><span class="job-status"><?php print (isset($node->field_conext_job_status)) ? $node->field_conext_job_status[LANGUAGE_NONE][0]['value'] : '' ?></span></h2>
					<?php print (isset($node->body)) ? $node->body[LANGUAGE_NONE][0]['value'] : '' ?>
				</div>
			</article>
			<div id="respond" class="comment-respond">
				<h3 class="font-normal">Apply for this job?</h3>
				<form class="comment-form" action="<?php print $content['action'] ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-6 form-group">
							<input type="text" class="input-text full-width" placeholder="Name" id="contact_name" name="contact_name">
						</div>
						<div class="col-sm-6 form-group">
							<input type="text" class="input-text full-width" placeholder="Email Address" id="email_address" name="email_address">
						</div>
					</div>
					<div class="form-group">
						<input type="file" name="cv_file" id="cv_file" class="inputfile inputfile-3" data-multiple-caption="{count} files selected" multiple />
						<label for="cv_file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span id="cv_file_name">Upload CV</span></label>
					</div>
					<div class="form-group">
						<textarea rows="8" class="input-text full-width" placeholder="Cover Letter" id="cover_letter" name="cover_letter"></textarea>
					</div>
					<!--<div class="form-group">
						<div class="g-recaptcha" data-sitekey="6LcEMxkUAAAAAL7gviCCnxLnZ943bUenHnFjofnw"></div>
					</div>-->
					<div class="row">
						<div class="form-group">
							<img style="padding-left: 14px;" src="<?php print $base_url ?>/job_opening_captcha">
						</div>
						<div class="col-sm-6 form-group">
							<input type="text" class="input-text full-width" placeholder="Input Captcha" name="captcha" id="captcha">
						</div>
					</div>
					<div class="form-group">
						<input type="hidden" name="job_applied" id="job_applied" value="<?php print $title ?>" >
						<input type="hidden" name="nid" id="nid" value="<?php print $node->nid ?>" >
						<input type="hidden" name="verify_url" id="verify_url" value="<?php print $base_url.'/job_opening/verify_captcha' ?>" >
						<button class="btn style2" id="job_opening_submit">Apply <span class="arrow"></span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="callout-box style2">
	<div class="container">
		<div class="callout-content">
			<div class="callout-text">
				<h2>Apply Today And Build Your Career</h2>
			</div>
			<div class="callout-action">
				<a class="btn style3" href="<?php print $base_url ?>/job_seeker">Get Started</a>
			</div>
		</div>
	</div>
</div>

<script>
	(function ($) {
		$(document).ready(function () {
			$("#about").addClass('active');
		})
	}(jQuery));
</script>
