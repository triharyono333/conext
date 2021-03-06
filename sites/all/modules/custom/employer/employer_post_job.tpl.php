<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<script src="<?php print $base_url ?>/sites/all/libraries/ckeditor/ckeditor.js"></script>

<div class="container">
	<div id="main">
		<div class="text-center">
			<div class="heading-box">
				<h2 class="box-title">Post Job</h2>
			</div>
		</div>
		<?php if ($user->uid == 0) { ?>
		<div class="multisteps">
			<ol class="cd-multi-steps text-bottom count">
				<li class="visited"><a>Account Detail</a></li>
				<li class="current"><a>Job Posting</a></li>
			</ol>
		</div>
		<?php } ?>
		<form id="employer_post_job" method="post" action="<?php print $base_url.'/employer/post_job/submit' ?>">
			<div class="row">
				<div class="col-sm-6">
					<div class="box">
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Job Title" id="title" name="title">
						</div>
						<div class="form-group dropdown">
							<select class="selector full-width location" id="location" name="location">
								<option value="">Location</option>
								<?php foreach($content['cities'] as $city) { ?>
									<option value="<?php print $city->nama_kota ?>"><?php print $city->nama_kota ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group dropdown">
							<select class="selector full-width industry" id="industry" name="industry">
								<option value="">Industry</option>
								<?php foreach($content['industries'] as $industry) { ?>
									<option value="<?php print $industry['tid'] ?>"><?php print $industry['name'] ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group dropdown">
							<label>Qualification</label>
							<?php foreach($content['qualifications'] as $qualification) { ?>
							<div class="checkbox">
								<label><input type="checkbox" name="qualification[]" value="<?php print $qualification['name'] ?>"><?php print $qualification['name'] ?></label>
							</div>
							<?php } ?>
						</div>
							<div class="form-group dropdown">
								<select class="selector full-width salary_range" id="salary_range" name="salary_range">
									<option value="">Salary Range</option>
									<?php foreach($content['salary_range'] as $value) { ?>
										<option value="<?php print $value ?>"><?php print $value ?></option>
									<?php } ?>
								</select>
							</div>
						<div class="form-group">
							<label>Company Background</label>
							<textarea class="input-text full-width" placeholder="Short Description" rows="4" id="short_description" name="short_description"></textarea>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="box">
						<div class="form-group">
						<label>Job Requirement</label>
							<textarea class="input-text full-width" placeholder="Job Requirement" rows="4" id="requirement" name="requirement"></textarea>
						</div>
						<div class="form-group">
						<label>Job Responsibilities</label>
							<textarea class="input-text full-width" placeholder="Job Responsibilities" rows="4" id="responsibility" name="responsibility"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box">
				<h4>Job Type</h4>
				<div class="form-group">
					<div class="radio">
						<label>
							<input type="radio" name="job_types" id="optionsRadios1" value="Permanent">
							Permanent
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="job_types" id="optionsRadios1" value="Contract">
							Contract
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="job_types" id="optionsRadios1" value="Temporary">
							Temporary
						</label>
					</div>
				</div>
			</div>
			<div class="box">
				<h4>Benefits</h4>
				<div class="row">
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" name="benefits[]" value="Flexible working hours">Flexible working hours</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="benefits[]" value="Overtime Pay">Overtime Pay</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="benefits[]" value="Transport allowance">Transport allowance</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="benefits[]" value="Yearly Bonus">Yearly Bonus</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" name="benefits[]" value="Five-day work a week">Five-day work a week</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="benefits[]" value="Performance bonus">Performance bonus</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="benefits[]" value="Accommodation allowance">Accommodation allowance</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="benefits[]" value="Medical Insurance">Medical Insurance</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" name="benefits[]" value="other">Other</label>
						</div>
						<div class="form-group">
							<textarea class="input-text full-width" placeholder="Other Benefit" rows="2" id="other_benefit" name="other_benefit"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="actions">
				<div class="form-inline text-center">
					<div class="radio">
						<label>
							<input type="radio" name="publish_job_public" id="optionsRadios1" value="publish_job">
							Publish this Job
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" checked name="publish_job_public" id="optionsRadios2" value="submit_to_conext">
							Submit to Conext
						</label>
					</div>
				</div>
			</div>
			<div class="button-wrapper text-center">
				<button id="post_job_submit" type="submit" class="btn style2">Submit <span class="arrow"></span></button>
				<!--<?php if ($content['user']->uid == 0) { ?><a id="post_job_skip_job" href="<?php print $base_url ?>/employer/profile/submit" class="btn-text">Skip JOB POSTING and complete registration</a><?php } ?>-->
			</div>
			<input type="hidden" name="skip_job_post" id="skip_job_post" value="">
		</form>
	</div>
</div>

<script>
	CKEDITOR.replace( 'short_description' );
	CKEDITOR.replace( 'requirement' );
	CKEDITOR.replace( 'responsibility' );
</script>