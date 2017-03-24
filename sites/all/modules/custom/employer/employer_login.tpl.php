<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<div id="main">
	<div class="text-center">
		<div class="heading-box">
			<h2 class="box-title">Employer</h2>
			<p class="desc-lg">Start Submitting Jobs to Conext</p>
		</div>
		<div class="authentication">
			<form method="post" action="<?php print $base_url . '/employer/login' ?>">
				<div class="form-group">
					<input type="text" class="input-text full-width" placeholder="E-mail" id="username" name="username">
				</div>
				<div class="form-group">
					<input type="password" class="input-text full-width" placeholder="Password" id="password" name="password">
				</div>
				<div class="button-wrapper">
					<div class="form-group">
						<button type="submit" class="btn style2 full-width">LOGIN</button>
						<a href="<?php print $base_url ?>/user/password" class="btn-text full-width">Reset Password</a>
					</div>
					<div class="dash"></div>
					<div class="form-group">
						<a href="<?php print $base_url ?>/employer/register" class="btn style4 full-width">REGISTER NOW</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

