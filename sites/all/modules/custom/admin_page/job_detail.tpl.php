<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";

$job = $content['job'];
?>
<div class="content">
	<div>
		<div class="view-header">
		<div class="view-content">
			<form method="post" action="<?php print $base_url.'/admin/job/detail/'.$job['nid'] ?>">
				<table border="0" class="views-table cols-3">
					<tr>
						<td><strong>ID:</strong></td>
						<td><?php print $job['nid'] ?></td>
					</tr>
					<tr>
						<td><strong>Employer:</strong></td>
						<td><?php print $job['employer'] ?></td>
					</tr>
					<tr>
						<td><strong>Title:</strong></td>
						<td><?php print $job['title'] ?></td>
					</tr>
					<tr>
						<td><strong>Location:</strong></td>
						<td><?php print $job['location'] ?></td>
					</tr>
					<tr>
						<td><strong>Qualification:</strong></td>
						<td><?php print $job['qualification'] ?></td>
					</tr>
					<tr>
						<td><strong>Salary Min:</strong></td>
						<td><?php print $job['salary_min'] ?></td>
					</tr>
					<tr>
						<td><strong>Salary Max:</strong></td>
						<td><?php print $job['salary_max'] ?></td>
					</tr>
					<tr>
						<td><strong>Industry:</strong></td>
						<td><?php print $job['industry'] ?></td>
					</tr>
					<tr>
						<td><strong>Requirement:</strong></td>
						<td><?php print $job['requirement'] ?></td>
					</tr>
					<tr>
						<td><strong>Responsibility:</strong></td>
						<td><?php print $job['responsibility'] ?></td>
					</tr>
					<tr>
						<td><strong>Short Description:</strong></td>
						<td><?php print $job['short_description'] ?></td>
					</tr>
					<tr>
						<td><strong>Benefit:</strong></td>
						<?php $benefits = explode("||", $job['benefit']) ?>
						<td>
							<?php foreach($benefits as $benefit) { ?>
							 - <?php print $benefit ?> <br />
							<?php } ?>
						</td>
					</tr>
					<tr>
						<td><strong>Publish Job:</strong></td>
						<td><?php print ($job['publish_job_public']) ? 'Publish this Job to Public' : 'Submit to Conext' ?></td>
					</tr>
					<tr>
						<td><strong>Created:</strong></td>
						<td><?php print $job['created_at'] ?></td>
					</tr>
					<tr>
						<td><strong>Job Status:</strong></td>
						<td>
							<select name="job_status">
								<option <?php print ($job['job_status'] == WAITING_FOR_APPROVAL) ? 'selected' : '' ?> value="<?php print WAITING_FOR_APPROVAL ?>"><?php print WAITING_FOR_APPROVAL ?><option>
								<option <?php print ($job['job_status'] == PUBLISHED) ? 'selected' : '' ?> value="<?php print PUBLISHED ?>"><?php print PUBLISHED ?><option>
								<option <?php print ($job['job_status'] == SUBMITTED) ? 'selected' : '' ?> value="<?php print SUBMITTED ?>"><?php print SUBMITTED ?><option>
							</select>
						</td>
					</tr>
					<tr>
						<td><input class="form-submit" type="submit" value="Update Status"></td>
						<td><a href="<?php print $base_url ?>/admin/job">Back to List</a></td>
					</tr>
				</table>
			</form>
    </div>
	</div>  
</div>