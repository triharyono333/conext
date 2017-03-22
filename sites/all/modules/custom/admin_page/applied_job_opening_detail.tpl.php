<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<div class="content">
	<div>
		<div class="view-header">
		<div class="view-content">
      <table border="0" class="views-table cols-3">
				<tr>
					<td width='20%'><strong>ID:</strong></td>
					<td width='80%'><?php print $content['job_applied']->nid ?></td>
				</tr>
				<tr>
					<td><strong>Name:</strong></td>
					<td><?php print $content['job_applied']->title ?></td>
				</tr>
				<tr>
					<td><strong>Email:</strong></td>
					<td><?php print (empty($content['job_applied']->field_job_applied_email)) ? '' : $content['job_applied']->field_job_applied_email[LANGUAGE_NONE][0]['value'] ?></td>
				</tr>
				<tr>
					<td><strong>Job Applied:</strong></td>
					<td><?php print (empty($content['job_applied']->field_job_applied)) ? '' : $content['job_applied']->field_job_applied[LANGUAGE_NONE][0]['value'] ?></td>
				</tr>
				<tr>
					<td><strong>Cover Letter:</strong></td>
					<td><?php print (empty($content['job_applied']->body)) ? '' : $content['job_applied']->body[LANGUAGE_NONE][0]['value'] ?></td>
				</tr>
				<tr>
					<td><strong>CV:</strong></td>
					<td><a href='<?php print (empty($content['job_applied']->field_job_applied_cv)) ? '' : file_create_url($content['job_applied']->field_job_applied_cv[LANGUAGE_NONE][0]['value']) ?>' >Download CV<a></td>
				</tr>
				<tr>
					<td colspan="2"><a href="<?php print $base_url ?>/admin/applied_job_opening">Back to List</a></td>
				</tr>
			</table>
    </div>
	</div>  
</div>