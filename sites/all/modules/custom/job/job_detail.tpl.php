<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<div class="head-spacer"><img src="<?php print $path_to_theme ?>images/spacer.gif" style="height: 92px;"></div>

<section id="content" class="register">
	<div class="container">
		<div id="main">
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
							<input type="text" class="input-text" placeholder="First name">
							<input type="text" class="input-text" placeholder="Last name">
						</div>
						<div class="form-group column-2 no-margin">
							<input type="text" class="input-text" placeholder="Email address">
							<input type="text" class="input-text" placeholder="Phone">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Nationality">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Address">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Appartment, unit, etc. (optional)">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Town / City">
						</div>
						<div class="form-group column-2 no-margin">
							<input type="text" class="input-text" placeholder="State / County / Province">
							<input type="text" class="input-text" placeholder="Zip code">
						</div>
						<div class="form-group dropdown">
							<select class="selector full-width">
								<option value="">Select a Country</option>
								<option value="US">United States</option>
							</select>
						</div>
					</div>
					<div class="box">
						<h4>Set Password <span class="info">Min 6 char</span></h4>
						<div class="form-group column-2 no-column-bottom-margin">
							<input type="password" class="input-text" placeholder="New Password">
							<input type="password" class="input-text" placeholder="Re-type Password">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="box">
						<h4>Current Position</h4>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Title, eg; Marke&ng Manager, Graphic Designer, Etc">
						</div>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="Company Name">
						</div>
						<h4>Duration of Work</h4>
						<div class="form-inline">
							<div class="form-group dropdown">
								<select class="selector" style="width: 200px;">
									<option value="">MMYYYY</option>
								</select>
							</div>
							<div class="form-group">To</div>
							<div class="form-group dropdown">
								<select class="selector" style="width: 200px;">
									<option value="">MMYYYY</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group dropdown">
									<select class="selector full-width">
										<option value="">City</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="input-text full-width" placeholder="Other">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group dropdown">
									<select class="selector full-width">
										<option value="">Industry</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<h4>Highest Education</h4>
						<div class="form-group">
							<input type="text" class="input-text full-width" placeholder="School Name">
						</div>
						<h4>Graduation Year</h4>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group dropdown">
									<select class="selector full-width">
										<option value="">MMYYYY</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<input type="text" class="input-text full-width" placeholder="Mayor">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group dropdown">
									<select class="selector full-width">
										<option value="">City</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="input-text full-width" placeholder="Other City">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box">
				<h4>Upload CV</h4>
				<div class="form-group">
					<input type="file" name="file-3[]" id="file-3" class="inputfile inputfile-3" data-multiple-caption="{count} files selected" multiple />
					<label for="file-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
				</div>
			</div>
			<div class="button-wrapper text-center">
				<button type="submit" class="btn style2">Register Now <span class="arrow"></span></button>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript" src="<?php print $path_to_theme ?>js/validate.js"></script>