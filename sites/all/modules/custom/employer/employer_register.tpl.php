<?php 
global $base_url, $theme_path; 
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<div class="container">
	<div id="main">
		<div class="text-center">
			<div class="heading-box">
				<h2 class="box-title">Registration</h2>
			</div>
		</div>
		<form id="employer_profile" method="post" action="<?php print $base_url.'/employer/register/submit' ?>">
			<div class="row">
				<div class="col-sm-6">
					<div class="box">
						<h4>Your Detail</h4>
						<div class="form-group dropdown" id="city_dropdown">
							<select class="selector full-width" id="salutation" name="salutation">
								<option value="">Salutation</option>
								<?php foreach($content['salutations'] as $salutation) { ?>
									<option value="<?php print $salutation['name'] ?>"><?php print $salutation['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group column-2 no-column-bottom-margin">
							<input type="text" class="input-text" placeholder="First name" id="first_name" name="first_name">
							<input type="text" class="input-text" placeholder="Last name" id="last_name" name="last_name">
						</div>
						<div class="form-group column-2 no-margin">
							<input type="text" class="input-text" placeholder="Email address" id="email_address" name="email_address">
							<input type="text" class="input-text" placeholder="Phone" id="phone" name="phone">
						</div>
					</div>
					<div class="box">
						<h4>Set Password <span class="info">Min 6 char</span></h4>
						<div class="form-group column-2 no-column-bottom-margin">
							<input type="password" class="input-text" placeholder="New Password" id="password" name="password">
							<input type="password" class="input-text" placeholder="Re-type Password" id="re_password" name="re_password">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="box">
						<h4>Company Detail</h4>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Company Name" id="company" name="company">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Address" id="address" name="address">
						</div>
						<!--<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Appartment, unit, etc. (optional)" id="address_optional" name="address_optional">
						</div>-->
						<div class="form-group dropdown" id="city_dropdown">
							<select class="selector full-width" id="city" name="city">
								<option value="">Town / City</option>
								<?php foreach($content['cities'] as $city) { ?>
									<option value="<?php print $city->nama_kota ?>"><?php print $city->nama_kota ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group dropdown" id="industry_dropdown">
							<select class="selector full-width" id="industry" name="industry">
								<option value="">Company Industry</option>
								<?php foreach($content['industries'] as $industry) { ?>
									<option value="<?php print $industry['name'] ?>"><?php print $industry['name'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="button-wrapper text-center">
				<button id="employer_register_submit" type="submit" class="btn style2">Next Step <span class="arrow"></span></button>
				<!--<?php if ($content['user']->uid == 0) { ?><a id="employer_register_skip_job" href="#" class="btn-text">Skip JOB POSTING and complete registration</a><?php } ?>-->
			</div>
			<input type="hidden" name="skip_job_post" id="skip_job_post" value="">
		</form>
	</div>
</div>
