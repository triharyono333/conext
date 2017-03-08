<?php
global $base_url, $theme_path, $user;
$theme_path = $base_url . '/' . $theme_path;
//$job_detail = $content['job_detail'];
//drupal_set_message('<pre>'.print_r($content['job'], true).'</pre>');
?>
<div class="container">
	<?php foreach($content['job'] as $job) { ?>
	<?php 
		$qualification = taxonomy_term_load($job->qualification);
		$qualification_name = $qualification->name;

		$industry = taxonomy_term_load($job->industry);
		$industry_name = $industry->name;
	?>
	<div class="row">
		<div id="main" class="col-sm-9 col-md-8">
			<article class="post box-lg">
				<div class="post-content">
					<h2 class="entry-title"><?php print $job->title ?> <span class="job-status">Permanent</span></h2>
					<p>The successful individual will be working within a small treatment service with patients that have either Learning Disabilities and/or mental health problems. The post holder will be required t to provide specialist care for service users and take a hands on approach to the role.</p>
					<p>This is a new service for an already well established organization providing support services to adults with learning disabilities.</p>
					<?php print $job->short_description ?>
					<h5>Main Requirements:</h5>
					<?php print $job->requirement ?>
					<h5>Responsibilities:</h5>
					<?php print $job->responsibility ?>
				</div>
			</article>
		</div>
		<div class="sidebar col-sm-3 col-md-4">
			<div class="right-box">
				<ul>
					<li class="date-published">
						<span class="title">Date Published:</span>
						<span><?php print $job->created_at ?></span></li>
					<li class="industry">
						<span class="title">Industry:</span>
						<span><?php print $industry_name ?></span>
					</li>
					<li class="qualification">
						<span class="title">Qualification:</span>
						<span><?php print $qualification_name ?></span>
					</li>
					<li class="location">
						<span class="title">Location:</span>
						<span><?php print $job->location ?></span>
					</li>
					<li class="range-salary">
						<span class="title">Salary:</span>
						<span><?php print format_salary($job->salary_min) ?> - <?php print format_salary($job->salary_max) ?></span>
					</li>
					<li class="benefit">
						<span class="title">Benefit:</span>
						<ul class="listing">
							<?php $benefits = explode("||", $job->benefit) ?>
							<?php foreach($benefits as $benefit) { ?>
							<li><?php print $benefit ?></li>
							<?php } ?>
						</ul>
					</li>
				</ul>
				<div class="button-wrapper">
					<?php if (empty($content['applied'])) { ?><a href="<?php print $base_url.'/job/apply/'.$node->nid.'/'.$user->uid ?>" class="btn style2 full-width">APPLY THIS JOB <span class="arrow"></span></a><?php } ?>
					<a href="<?php print $base_url ?>/jobs" class="btn-text">Back to Search Result</a>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>