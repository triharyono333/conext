<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
$path_to_admin_theme = $base_url . "/sites/all/themes/adminimal_theme/";
?>
<div class="content">
	<div>
		<div class="view-header">
		<div class="view-filters">
      <form action="<?php print $base_url ?>/admin/job_seeker" method="get" accept-charset="UTF-8">
				<div>
					<div class="views-exposed-form">
						<div class="views-exposed-widgets clearfix">
							<div id="edit-title-wrapper" class="views-exposed-widget views-widget-filter-title">
								<label for="edit-title">Keyword</label>
								<div class="views-widget">
									<div class="form-item form-type-textfield form-item-title">
										<input id="edit-title" name="keyword" value="" size="30" maxlength="128" class="form-text" type="text">
									</div>
								</div>
              </div>
							<div class="views-exposed-widget views-submit-button">
								<input id="edit-submit-admin-article" name="" value="Apply" class="form-submit" type="submit">    </div>
						</div>
					</div>
				</div></form>    
		</div>

		<form method='post' action='<?php print $base_url ?>/admin/job_seeker/export'>
		<input type='submit' class='form-submit' value='Export Excel'>
		<!--<a class="form-submit" href="<?php print $base_url ?>/admin/job_seeker/export?keyword=<?php print (empty($content['keyword'])) ? '' : $content['keyword'] ?>">Export Excel</a>-->
		<div class="view-content">
      <table class="views-table cols-3">
				<thead>
					<tr>
						<th></th>
						<?php print generate_sortable_header('first_name', 'Name', $content['job_seeker_url']) ?>
						<?php print generate_sortable_header('address_city', 'City', $content['job_seeker_url']) ?>
						<?php print generate_sortable_header('current_title', 'Title', $content['job_seeker_url']) ?>
						<?php print generate_sortable_header('experience_year', 'Years of Experience', $content['job_seeker_url']) ?>
						<?php print generate_sortable_header('expected_salary', 'Salary', $content['job_seeker_url']) ?>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($content['job_seekers'] as $job_seeker) { ?>
          <tr class="odd views-row-first">
						<td><input type="checkbox" name="job_seeker_ids[]" value="<?php print $job_seeker->user_id ?>"></td>
						<td class="views-field views-field-title"><?php print $job_seeker->first_name ?> <?php print $job_seeker->last_name ?></td>
						<td class="views-field views-field-title"><?php print (empty($job_seeker->address_city)) ? '-' : $job_seeker->address_city ?></td>
						<td class="views-field views-field-title"><?php print (empty($job_seeker->current_title)) ? '-' : $job_seeker->current_title ?></td>
						<td class="views-field views-field-title"><?php print (empty($job_seeker->experience_year)) ? '-' : $job_seeker->experience_year ?> years</td>
						<td class="views-field views-field-title"><?php print (empty($job_seeker->expected_salary)) ? '-' : $job_seeker->expected_salary ?></td>
						<td class="views-field views-field-edit-node">
							<a href="<?php print $base_url ?>/admin/job_seeker/detail/<?php print $job_seeker->uid ?>">View</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
    </div>
		</form>
		
		<div style="text-align: center;">
			<?php 
			//$paging_url = (empty($_GET['keyword'])) ? $base_url.'/admin/job_seeker?' : $base_url.'/admin/job_seeker?keyword='.$_GET['keyword'].'&';
			$cur_page = (empty($_GET['page'])) ? '1' : $_GET['page'];
			?>
			<?php $prev_page = $cur_page-1; ?>
			<?php if ($cur_page > 1) { ?><a href="<?php print $content['job_seeker_url']."&page=".$prev_page ?>" class="nav-prev"> << </a><?php } ?>
		
				<?php 
				for($i = 1; $i<=$content['pages']; $i++) { 
				?>
				<span style="padding: 10px;" class="<?php print ($cur_page == $i) ? 'pager-current' : '' ?>"><a href="<?php print $content['job_seeker_url']."&page=".$i ?>"><?php print $i ?></a></span>
				<?php } ?>
	
			<?php $next_page = $cur_page+1; ?>
			<?php if ($cur_page < $content['pages']) { ?><a href="<?php print $content['job_seeker_url']."&page=".$next_page ?>" class="nav-next"> >> </a><?php } ?>
		</div>
	</div>  
</div>