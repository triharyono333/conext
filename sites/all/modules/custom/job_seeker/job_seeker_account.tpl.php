<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>

<div class="container">
	<div class="heading-box">
		<h2 class="box-title">My Account</h2>
	</div>
	<form method="post" id="job_seeker_account" action="<?php print $base_url ?>/job_seeker/account/submit" enctype="multipart/form-data">
		<?php foreach($content['account'] as $account) { ?>
		<div class="row">
			<div id="main" class="col-md-8 register">
				<div class="box">
					<h4>Account Information</h4>
					<div class="form-group column-2 no-column-bottom-margin">
						<input type="text" class="input-text" placeholder="First name" id="first_name" name="first_name" value="<?php print $account->first_name ?>">
						<input type="text" class="input-text" placeholder="Last name" id="last_name" name="last_name" value="<?php print $account->last_name ?>">
					</div>
					<div class="form-group column-2 no-margin">
						<input readonly type="text" class="input-text" placeholder="Email address" id="email_address" name="email_address" value="<?php print $account->mail ?>">
						<input type="text" class="input-text" placeholder="Phone" id="phone" name="phone" value="<?php print $account->phone ?>">
					</div>
					<div class="form-group">
						<input type="text" class="input-text full-width" placeholder="Nationality" id="nationality" name="nationality" value="<?php print $account->nationality ?>">
					</div>
					<div class="form-group">
						<input type="text" class="input-text full-width" placeholder="Address" id="address" name="address" value="<?php print $account->address_street ?>">
					</div>
					<div class="form-group">
						<input type="text" class="input-text full-width" placeholder="Appartment, unit, etc. (optional)" id="address_optional" name="address_optional" value="<?php print $account->address_optional ?>">
					</div>
					<div class="form-group">
						<input type="text" class="input-text full-width" placeholder="Town / City" id="city" name="city" value="<?php print $account->address_city ?>">
					</div>
					<div class="form-group column-2 no-margin">
						<input type="text" class="input-text" placeholder="State / County / Province" id="province" name="province" value="<?php print $account->address_province ?>">
						<input type="text" class="input-text" placeholder="Zip code" id="zip_code" name="zip_code" value="<?php print $account->address_zip ?>">
					</div>
					<div class="form-group dropdown">
						<select class="selector full-width country" id="country" name="country">
							<option value="">Select a Country</option>
							<option <?php if ($account->address_country == 'Indonesia') print 'selected' ?> value="Indonesia">Indonesia</option>
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
				<div class="box">
					<h4>Current Position</h4>
					<div class="form-group">
						<input type="text" class="input-text full-width" placeholder="Title, eg; Marke&ng Manager, Graphic Designer, Etc" id="current_title" name="current_title" value="<?php print $account->current_title ?>">
					</div>
					<div class="form-group">
						<input type="text" class="input-text full-width" placeholder="Company Name" id="current_company" name="current_company" value="<?php print $account->current_company ?>">
					</div>
					<h4>Duration of Work</h4>
					<div class="form-inline">
						<div class="form-group dropdown">
							<?php $current_work_start = explode('/', $account->current_work_start) ?>
							<select class="selector" style="width: 100px;" id="work_month_start" name="work_month_start">
								<option value="">MM</option>
								<?php foreach($content['months'] as $month) { ?>
									<option <?php if ($current_work_start[0] == $month) print 'selected' ?> value="<?php print $month ?>"><?php print $month ?></option>
								<?php } ?>
							</select>
							<select class="selector" style="width: 100px;" id="work_year_start" name="work_year_start">
								<option value="">YYYY</option>
								<?php foreach($content['years'] as $year) { ?>
									<option <?php if (!empty($current_work_start[1]) && ($current_work_start[1] == $year)) print 'selected' ?> value="<?php print $year ?>"><?php print $year ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">To</div>
						<div class="form-group dropdown">
							<?php $current_work_end = explode('/', $account->current_work_end) ?>
							<select class="selector" style="width: 100px;" id="work_month_end" name="work_month_end">
								<option value="">MM</option>
								<?php foreach($content['months'] as $month) { ?>
									<option <?php if ($current_work_end[0] == $month) print 'selected' ?> value="<?php print $month ?>"><?php print $month ?></option>
								<?php } ?>
							</select>
							<select class="selector" style="width: 100px;" id="work_year_end" name="work_year_end">
								<option value="">YYYY</option>
								<?php foreach($content['years'] as $year) { ?>
									<option <?php if (!empty($current_work_end[1]) && ($current_work_end[1] == $year)) print 'selected' ?> value="<?php print $year ?>"><?php print $year ?></option>
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
									<option <?php if ($city->nama_kota == $account->current_city) print 'selected' ?> value="<?php print $city->nama_kota ?>"><?php print $city->nama_kota ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" class="input-text full-width" placeholder="Other" id="current_city_other" name="current_city_other" value="<?php print (is_city_exist($account->current_city)) ? '' : $account->current_city ?>">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group dropdown">
								<select class="selector full-width" id="current_industry" name="current_industry">
									<option value="">Industry</option>
									<?php foreach($content['industries'] as $industry) { ?>
									<option <?php if ($industry['name'] == $account->current_industry) print 'selected' ?> value="<?php print $industry['name'] ?>"><?php print $industry['name'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="box">
					<h4>Highest Education</h4>
					<div class="form-group">
						<input type="text" class="input-text full-width" placeholder="School Name" id="education" name="education" value="<?php print $account->education ?>">
					</div>
					<h4>Graduation Year</h4>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group dropdown">
								<select class="selector full-width" id="graduation_year" name="graduation_year">
									<option value="">YYYY</option>
									<?php foreach($content['years'] as $year) { ?>
									<option <?php if ($year == $account->graduation) print 'selected' ?> value="<?php print $year ?>"><?php print $year ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<input type="text" class="input-text full-width" placeholder="Mayor" id="major" name="major" value="<?php print $account->major ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group dropdown">
								<select class="selector full-width" id="education_city" name="education_city">
									<option value="">City</option>
									<?php foreach($content['education_cities'] as $city) { ?>
									<option <?php if ($city->nama_kota == $account->education_city) print 'selected' ?> value="<?php print $city->nama_kota ?>"><?php print $city->nama_kota ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" class="input-text full-width" placeholder="Other City" id="education_other_city" name="education_other_city" value="<?php print (is_city_exist($account->education_city)) ? '' : $account->education_city ?>">
							</div>
						</div>
					</div>
				</div>
				<div class="box">
					<h4>Upload CV</h4>
					<div class="form-inline">
						<div class="form-group">
							<?php $cv = str_replace('public://cv/', '', $account->cv); ?>
							<label><?php print $cv ?></label>
						</div>
						<div class="form-group">
							<input type="file" name="cv_file" id="cv_file" class="inputfile inputfile-3" data-multiple-caption="{count} files selected" multiple />
							<label for="cv_file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span id="cv_file_name">Upload New CV&hellip;</span></label>
						</div>
					</div>
				</div>
				<div class="button-wrapper">
					<button id="job_seeker_account_submit" type="submit" class="btn style2">Save <span class="arrow"></span></button>
				</div>
			</div>
			<div class="sidebar col-md-4">
				<div class="heading-box">
					<p class="desc-lg">Account Activity</p>
				</div>
				<div class="right-box">
					<?php if (empty($content['jobs'])) { ?>
					<div class="heading-box">
						<p class="desc-md text-center">“You have not applied any job yet”</p>
					</div>
					<div class="button-wrapper">
						<a href="<?php print $base_url ?>/jobs" class="btn style2 full-width">SEARCH JOB NOW</a>
					</div>
					<?php } else { ?>
					<h4>Job Applied:</h4>
					<ol class="job-listing">
						<?php foreach($content['jobs'] as $job) { ?>
						<li>
							<h3><a href="<?php print $base_url."/".drupal_get_path_alias("node/".$job['drupal_job_id']) ?>"><?php print $job['title'] ?> - <?php print $job['location'] ?></a></h3>
							<span class="applied-date"><?php print $job['created_at'] ?></span>
						</li>
						<?php } ?>
					</ol>
					<div class="button-wrapper">
						<a href="<?php print $base_url ?>/jobs" class="btn style2 full-width">FIND ANOTHER JOB</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php } ?>
	</form>
</div>

<script type="text/javascript" src="<?php print $path_to_theme ?>js/validate.js"></script>