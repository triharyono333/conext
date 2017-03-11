<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>

<div class="container">
	<div class="heading-box">
		<h2 class="box-title">My Account</h2>
	</div>
	<div class="tab-container full-width style1 box">
		<ul class="tabs clearfix">
			<li class="active"><a href="#jobpost" data-toggle="tab">JOB POST</a></li>
			<li><a href="#accountdetail" data-toggle="tab">ACCOUNT DETAIL</a></li>
		</ul>
		<div id="jobpost" class="tab-content in active">
			<div class="tab-pane">
				<?php if (empty($content['jobs'])) { ?>
				<div class="heading-box">
					<p class="desc-md text-center">“You have not post any Job yet”</p>
				</div>
				<?php } else { ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>JOBS</th>
							<th>STATUS</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($content['jobs'] as $key=>$job) { ?>
						<tr>
							<td>
								<span class="position"><a href="<?php print $base_url."/".drupal_get_path_alias("node/".$job->drupal_job_id) ?>"><?php print $key+1 ?>. <?php print $job->title ?> - <?php print $job->location ?></a></span>
								<span class="applied-date"><?php print $job->created_at ?></span>
							</td>
							<td>
								<?php print $job->job_status ?>
							</td>
						</tr>
						<?php } ?>
						</tr>
					</tbody>
				</table>
				<?php } ?>
				<div class="button-wrapper">
					<a href="<?php print $base_url ?>/employer/post_job" class="btn style2">POST ANOTHER JOB</a>
				</div>
			</div>
		</div>
		<div id="accountdetail" class="tab-content">
			<div class="tab-pane">
				<form id="employer_account" method="post" action="<?php print $base_url ?>/employer/account/submit">
					<div class="row">
						<div class="col-sm-6">
							<div class="box">
								<h4>Your Detail</h4>
								<div class="form-group dropdown">
									<select class="selector full-width" id="salutation" name="salutation">
										<option value="">Salutation</option>
										<?php foreach($content['salutations'] as $salutation) { ?>
											<option <?php if ($salutation['name'] == $content['employer']['salutation']) print 'selected' ?> value="<?php print $salutation['name'] ?>"><?php print $salutation['name'] ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group column-2 no-column-bottom-margin">
									<input value="<?php print $content['employer']['first_name'] ?>" type="text" class="input-text" placeholder="First name" id="first_name" name="first_name">
									<input value="<?php print $content['employer']['last_name'] ?>" type="text" class="input-text" placeholder="Last name" id="last_name" name="last_name">
								</div>
								<div class="form-group column-2 no-margin">
									<input readonly value="<?php print $content['employer']['email_address'] ?>" type="text" class="input-text" placeholder="Email address" id="email_address" name="email_address">
									<input value="<?php print $content['employer']['phone'] ?>" type="text" class="input-text" placeholder="Phone" id="phone" name="phone">
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
									<input value="<?php print $content['employer']['company'] ?>" type="text" class="input-text full-width" placeholder="Company Name" id="company" name="company">
								</div>
								<div class="form-group">
									<input value="<?php print $content['employer']['address'] ?>" type="text" class="input-text full-width" placeholder="Address" id="address" name="address">
								</div>
								<div class="form-group">
									<input value="<?php print $content['employer']['address_optional'] ?>" type="text" class="input-text full-width" placeholder="Appartment, unit, etc. (optional)" id="address_optional" name="address_optional">
								</div>

								<div class="form-group dropdown">
									<select class="selector full-width" id="city" name="city">
										<option value="">Town / City</option>
										<?php foreach($content['cities'] as $city) { ?>
											<option <?php if ($city->nama_kota == $content['employer']['city']) print 'selected' ?> value="<?php print $city->nama_kota ?>"><?php print $city->nama_kota ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group dropdown">
									<select class="selector full-width" id="industry" name="industry">
										<option value="">Company Industry</option>
										<?php foreach($content['industries'] as $industry) { ?>
											<option <?php if ($industry['name'] == $content['employer']['industry']) print 'selected' ?> value="<?php print $industry['name'] ?>"><?php print $industry['name'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="button-wrapper text-center">
						<button id="employer_account_save" type="submit" class="btn style2">SAVE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
