<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<div class="content">
	<div>
		<div class="view-header">
		<div class="view-content">
      <table border="0" class="views-table cols-3">
				<?php foreach($content['job_seeker'] as $job_seeker) { ?>
				<tr>
					<td><strong>ID:</strong></td>
					<td><?php print $job_seeker->uid ?></td>
				</tr>
				<tr>
					<td><strong>First Name:</strong></td>
					<td><?php print $job_seeker->first_name ?></td>
				</tr>
				<tr>
					<td><strong>Last Name:</strong></td>
					<td><?php print $job_seeker->last_name ?></td>
				</tr>
				<tr>
					<td><strong>Phone:</strong></td>
					<td><?php print $job_seeker->phone ?></td>
				</tr>
				<tr>
					<td><strong>Address Street:</strong></td>
					<td><?php print $job_seeker->address_street ?></td>
				</tr>
				<tr>
					<td><strong>Address Street 2:</strong></td>
					<td><?php print $job_seeker->address_optional ?></td>
				</tr>
				<tr>
					<td><strong>Address City:</strong></td>
					<td><?php print $job_seeker->address_city ?></td>
				</tr>
				<tr>
					<td><strong>Address Province:</strong></td>
					<td><?php print $job_seeker->address_province ?></td>
				</tr>
				<tr>
					<td><strong>Address Zip:</strong></td>
					<td><?php print $job_seeker->address_zip ?></td>
				</tr>
				<tr>
					<td><strong>Address Country:</strong></td>
					<td><?php print $job_seeker->address_country ?></td>
				</tr>
				<tr>
					<td><strong>Current Position:</strong></td>
					<td><?php print $job_seeker->current_title ?></td>
				</tr>
				<tr>
					<td><strong>Current Company:</strong></td>
					<td><?php print $job_seeker->current_company ?></td>
				</tr>
				<tr>
					<td><strong>Current Work Start:</strong></td>
					<td><?php print $job_seeker->current_work_start ?></td>
				</tr>
				<tr>
					<td><strong>Current Work End:</strong></td>
					<td><?php print $job_seeker->current_work_end ?></td>
				</tr>
				<tr>
					<td><strong>Current City:</strong></td>
					<td><?php print $job_seeker->current_city ?></td>
				</tr>
				<tr>
					<td><strong>Current Industry:</strong></td>
					<td><?php print $job_seeker->current_industry ?></td>
				</tr>
				<tr>
					<td><strong>Education:</strong></td>
					<td><?php print $job_seeker->education ?></td>
				</tr>
				<tr>
					<td><strong>Graduation:</strong></td>
					<td><?php print $job_seeker->graduation ?></td>
				</tr>
				<tr>
					<td><strong>Major:</strong></td>
					<td><?php print $job_seeker->major ?></td>
				</tr>
				<tr>
					<td><strong>Education Location:</strong></td>
					<td><?php print $job_seeker->education_city ?></td>
				</tr>
				<tr>
					<td><strong>Nationality:</strong></td>
					<td><?php print $job_seeker->nationality ?></td>
				</tr>
				<tr>
					<td><strong>Linkedin Profile:</strong></td>
					<td><?php print $job_seeker->public_profile_url ?></td>
				</tr>
				<tr>
					<?php $cv = str_replace('public://cv/', '', $job_seeker->cv); ?>
					<td><strong>CV:</strong></td>
					<td><a href="<?php print file_create_url($job_seeker->cv) ?>"><?php print $cv ?></a></td>
				</tr>
				<tr>
					<td colspan="2"><a href="<?php print $base_url ?>/admin/job_seeker">Back to List</a></td>
				</tr>
				<?php } ?>
			</table>
    </div>
	</div>  
</div>