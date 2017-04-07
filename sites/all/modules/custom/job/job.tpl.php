<?php 
global $base_url; 
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>

<form method="get" action="<?php print $base_url ?>/jobs">
<div class="container">
	<div class="search-box">

			<div class="row">
				<div class="col-sm-10">
					<div class="row">
						<div class="form-group col-sm-4">
							<input type="text" class="input-text full-width" placeholder="Keyword" id="keyword" name="keyword" value="<?php print (!empty($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
						</div>
						<div class="form-group col-sm-4">
							<select class="selector full-width" id="industry" name="industry">
								<option value="">All Industry</option>
								<?php foreach($content['industries'] as $industry) { ?>
									<option <?php print (!empty($_GET['industry']) && ($industry['tid'] == $_GET['industry'])) ? 'selected' : '' ?> value="<?php print $industry['tid'] ?>"><?php print $industry['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group col-sm-4">
							<select class="selector full-width" id="location" name="location">
								<option value="">All Location</option>
								<?php foreach($content['cities'] as $city) { ?>
									<option <?php print (!empty($_GET['location']) && ($city->nama_kota == $_GET['location'])) ? 'selected' : '' ?> value="<?php print $city->nama_kota ?>"><?php print $city->nama_kota ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="col-sm-2">
					<input type="hidden" name="main_search" id="main_search">
					<button id="job_submit_1" type="submit" class="btn style1">Search Job</button>
				</div>
			</div>

	</div>
	<div class="row">
		<div id="main" class="col-md-8">
			<div class="blog-posts">
				<div class="heading-box">
					<h2 class="box-title">Latest Jobs</h2>
					<h3>We found <span class="job-count"><?php print $content['total'] ?></span> available Job(s) for you</h3>
				</div>
				<?php foreach($content['jobs'] as $job) { ?>
				<article class="post post-classic">
					<div class="post-content">
						<h2 class="entry-title"><a href="<?php print $base_url."/".drupal_get_path_alias("node/".$job->nid) ?>"><?php print $job->title ?></a> 
							<?php 
							if (!empty($job->job_type)) {
								$job_types = explode("||", $job->job_type) 
							?>
								<?php foreach($job_types as $job_type) { ?>
									<span class="job-status"><?php print $job_type ?></span>
								<?php 
								}
							} ?>
						</h2>
						<div class="post-meta">
							<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php print $job->location ?></span>
							<!--<span class="range-salary"><?php print format_salary($job->salary_min) ?> - <?php print format_salary($job->salary_max) ?></span>-->
							<span class="range-salary"><?php print $job->salary_range ?></span>
						</div>
						<?php print $job->short_description ?></div>
				</article>
				<?php } ?>
			</div>
			<div class="post-pagination">
				<?php 
				$keyword = (empty($_GET['keyword'])) ? 'keyword=' : 'keyword='.$_GET['keyword'];
				$location = (empty($_GET['location'])) ? '&location=' : '&location='.$_GET['location'];
				$industry = (empty($_GET['industry'])) ? '&industry=' : '&industry='.$_GET['industry'];
				//$salary_min = (empty($_GET['salary_min'])) ? '&salary_min=' : '&salary_min='.$_GET['salary_min'];
				//$salary_max = (empty($_GET['salary_max'])) ? '&salary_max=' : '&salary_max='.$_GET['salary_max'];
				$salary_range = (empty($_GET['salary_range'])) ? '&salary_range=' : '&salary_range='.$_GET['salary_range'];
				$qualification = (empty($_GET['qualification'])) ? '&qualification=' : '&qualification='.$_GET['qualification'];

				$paging_url = $base_url. '/jobs?'. $keyword . $location. $industry . $salary_range . $qualification;
				$cur_page = (empty($_GET['page'])) ? '1' : $_GET['page'];
				?>
				<?php $prev_page = $cur_page-1; ?>
				<?php if ($cur_page > 1) { ?><a href="<?php print $paging_url."&page=".$prev_page ?>" class="nav-prev"></a><?php } ?>
				<div class="page-links">
					<?php 
					for($i = 1; $i<=$content['pages']; $i++) { 
					?>
					<span class="<?php print ($cur_page == $i) ? 'active' : '' ?>"><a href="<?php print $paging_url."&page=".$i ?>"><?php print $i ?></a></span>
					<?php } ?>
				</div>
				<?php $next_page = $cur_page+1; ?>
				<?php if ($cur_page < $content['pages']) { ?><a href="<?php print $paging_url."&page=".$next_page ?>" class="nav-next"></a><?php } ?>
			</div>
		</div>
		<div class="sidebar col-md-4">
			<div class="heading-box">
				<h3>Refine Search</h3>
			</div>
			<div class="box">
				<h4>Job Type</h4>
				<div id="job_type_option" class="form-group">
					<?php 
					$job_types = get_job_type();
					foreach($job_types as $job_type) {
						$job_type_checked = '';
						$param_job_types = explode(',', $_GET['job_type']);
						foreach($param_job_types as $param_job_type) {
							if ($param_job_type == $job_type) $job_type_checked = 'checked';
						}
					?>
					<div class="checkbox">
						<label><input class="job_type" <?php print $job_type_checked ?> type="checkbox" value="<?php print $job_type ?>"><?php print $job_type ?></label>
					</div>
					<?php } ?>
					<input type="hidden" name="job_type" id="job_type">
				</div>
			</div>
			<div class="box">
				<h4>Salary</h4>
				<?php
					$salary_range_param = (empty($_GET['salary_range'])) ? "1" : $_GET['salary_range'];
				?>
				<select class="selector full-width" id="salary_range" name="salary_range">
					<option value="">Salary Range</option>
					<?php foreach($content['salary_range'] as $salary_range) { ?>
						<option <?php print ($salary_range == $salary_range_param) ? 'selected' : '' ?> value="<?php print $salary_range ?>"><?php print $salary_range ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="box">
				<h4>Education</h4>
				<div id="qualification_option" class="form-group">
					<?php 
					$qualifications = $content['qualifications'];
					foreach($qualifications as $qualification) {
						$qualification_checked = '';
						$param_qualifications = explode(',', $_GET['qualification']);
						foreach($param_qualifications as $param_qualification) {
							if ($param_qualification == $qualification['name']) $qualification_checked = 'checked';
						}
					?>
					<div class="checkbox">
						<label><input class="qualification" <?php print $qualification_checked ?> type="checkbox" value="<?php print $qualification['name'] ?>"><?php print $qualification['name'] ?></label>
					</div>
					<?php } ?>
					<input type="hidden" name="qualification" id="qualification">
				</div>
			</div>
			<div class="box">
				<button id="job_submit_2" type="submit" class="btn style2">Submit</button>
			</div>
		</div>
	</div>
</div>
</form>
