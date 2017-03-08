<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>

<div class="container">
	<div id="main">
		<div class="text-center">
			<div class="heading-box">
				<h2 class="box-title">Job Seeker</h2>
				<p class="desc-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
			<div class="authentication">
				<form action="<?php print $base_url ?>/job_seeker/login/submit" method="post" id="job_seeker_form">
					<div class="form-group">
						<input type="text" class="input-text full-width" placeholder="Username" id="username" name="username">
					</div>
					<div class="form-group">
						<input type="password" type="text" class="input-text full-width" placeholder="Password" id="password" name="password"> 
					</div>
					<div class="button-wrapper">
						<div class="form-group">
							<button type="submit" id="job_seeker_login_submit" class="btn style2 full-width">LOGIN</button>
							<a href="<?php print $base_url ?>/user/password" class="btn-text full-width">Reset Password</a>
						</div>
						<div class="dash"></div>
						<div class="form-group">
							<a href="<?php print $base_url ?>/job_seeker/register" class="btn style4 full-width"><span>REGISTER NOW</span></a>
							<a href="<?php print $base_url ?>/linkedin/login/0" class="btn style4 full-width"><span class="linkedin">Connect</span></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php print $path_to_theme ?>js/validate.js"></script>