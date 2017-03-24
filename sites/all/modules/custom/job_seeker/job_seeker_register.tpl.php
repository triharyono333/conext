<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<div class="container">
	<div id="main">
		<form id="job_seeker_register" method="post" action="<?php print $base_url ?>/job_seeker/register/submit" enctype="multipart/form-data">
			<div class="text-center">
				<div class="heading-box">
					<h2 class="box-title">Registration</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="box">
						<h4>Account Information</h4>
						<div class="form-group column-2 no-column-bottom-margin">
							<input type="text" class="input-text" placeholder="First name" id="first_name" name="first_name" value="<?php print $content['first_name'] ?>">
							<input type="text" class="input-text" placeholder="Last name" id="last_name" name="last_name" value="<?php print $content['last_name'] ?>">
						</div>
						<div class="form-group column-2 no-margin">
							<input type="text" class="input-text" placeholder="Email address" id="email_address" name="email_address" value="<?php print $content['email_address'] ?>">
							<input type="text" class="input-text" placeholder="Phone" name="phone" id="phone">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Nationality" id="nationality" name="nationality">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Address" id="address" name="address">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Apartment, unit, etc. (optional)" id="address_optional" name="address_optional">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Town / City" id="city" name="city">
						</div>
						<div class="form-group column-2 no-margin">
							<input type="text" class="input-text" placeholder="State / County / Province" id="province" name="province">
							<input type="text" class="input-text" placeholder="Zip code" id="zip_code" name="zip_code">
						</div>
						<div class="form-group dropdown">
							<select class="selector full-width country" id="country" name="country">
								<option value="">Select a Country</option>
								<option value="Indonesia">Indonesia</option>
							</select>
						</div>
						<div class="form-group dropdown">
							<select class="selector full-width salary_max" id="expected_salary" name="expected_salary">
								<option value="">Expected Salary</option>
								<option value="1">Rp. 1.000.000</option>
								<?php foreach($content['expected_salary'] as $value) { ?>
									<option value="<?php print $value ?>"><?php print format_salary(($value > 50) ? '> 50' : $value) ?></option>
								<?php } ?>
							</select>
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
						<h4>Current Position</h4>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Title, eg; Marketing Manager, Graphic Designer, Etc" id="current_title" name="current_title">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Company Name" id="current_company" name="current_company">
						</div>
						<h4>Duration of Work</h4>
						<div class="form-inline">
							<div class="form-group dropdown">
								<select class="selector" style="width: 100px;" id="work_month_start" name="work_month_start">
									<option value="">MM</option>
									<?php foreach($content['months'] as $month) { ?>
										<option value="<?php print $month ?>"><?php print $month ?></option>
									<?php } ?>
								</select>
								<select class="selector" style="width: 100px;" id="work_year_start" name="work_year_start">
									<option value="">YYYY</option>
									<?php foreach($content['years'] as $year) { ?>
										<option value="<?php print $year ?>"><?php print $year ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">To</div>
							<div class="form-group dropdown">
								<select class="selector" style="width: 100px;" id="work_month_end" name="work_month_end">
									<option value="">MM</option>
									<?php foreach($content['months'] as $month) { ?>
										<option value="<?php print $month ?>"><?php print $month ?></option>
									<?php } ?>
								</select>
								<select class="selector" style="width: 100px;" id="work_year_end" name="work_year_end">
									<option value="">YYYY</option>
									<?php foreach($content['years'] as $year) { ?>
										<option value="<?php print $year ?>"><?php print $year ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group dropdown">
									<select class="selector full-width" id="current_city" name="current_city">
										<option value="">City</option>
										<?php foreach($content['cities'] as $city) { ?>
											<option value="<?php print $city->nama_kota ?>"><?php print $city->nama_kota ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="input-text full-width" placeholder="Other" id="current_city_other" name="current_city_other">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group dropdown">
									<select class="selector full-width" id="current_industry" name="current_industry">
										<option value="">Industry</option>
										<?php foreach($content['industries'] as $industry) { ?>
											<option value="<?php print $industry['name'] ?>"><?php print $industry['name'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<h4>Highest Education</h4>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="School Name" id="education" name="education">
						</div>
						<h4>Graduation Year</h4>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group dropdown">
									<select class="selector full-width" id="graduation_year" name="graduation_year">
										<option value="">YYYY</option>
										<?php foreach($content['years'] as $year) { ?>
											<option value="<?php print $year ?>"><?php print $year ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<input type="text" class="input-text full-width" placeholder="Mayor" id="major" name="major">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group dropdown">
									<select class="selector full-width" id="education_city" name="education_city">
										<option value="">City</option>
										<?php foreach($content['education_cities'] as $city) { ?>
											<option value="<?php print $city->nama_kota ?>"><?php print $city->nama_kota ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="input-text full-width" placeholder="Other City" id="education_other_city" name="education_other_city">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box">
				<h4>Upload CV</h4>
				<div class="form-group">
					<input type="file" id="cv_file" name="cv_file" class="inputfile inputfile-3" data-multiple-caption="{count} files selected" multiple />
					<label for="cv_file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span id="cv_file_name">Upload CV</span></label>
				</div>
			</div>
			<input type="hidden" id="public_profile_url" name="public_profile_url" value="<?php print $content['public_profile_url'] ?>">
			<div class="button-wrapper text-center">
				<button id="job_seeker_register_submit" type="submit" class="btn style2">Register Now <span class="arrow"></span></button>
			</div>
		</form>
	</div>
</div>
