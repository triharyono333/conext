<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<div class="content">
	<div>
		<div class="view-header">
		<div class="view-content">
      <table border="0" class="views-table cols-3">
				<?php foreach($content['employer'] as $employer) { ?>
				<tr>
					<td><strong>ID:</strong></td>
					<td><?php print $employer->uid ?></td>
				</tr>
				<tr>
					<td><strong>Salutation:</strong></td>
					<td><?php print $employer->salutation ?></td>
				</tr>
				<tr>
					<td><strong>First Name:</strong></td>
					<td><?php print $employer->first_name ?></td>
				</tr>
				<tr>
					<td><strong>Last Name:</strong></td>
					<td><?php print $employer->last_name ?></td>
				</tr>
				<tr>
					<td><strong>Phone:</strong></td>
					<td><?php print $employer->phone ?></td>
				</tr>
				<tr>
					<td><strong>Company:</strong></td>
					<td><?php print $employer->company ?></td>
				</tr>
				<tr>
					<td><strong>Address:</strong></td>
					<td><?php print $employer->address ?></td>
				</tr>
				<tr>
					<td><strong>Address 2:</strong></td>
					<td><?php print $employer->address_optional ?></td>
				</tr>
				<tr>
					<td><strong>City:</strong></td>
					<td><?php print $employer->city ?></td>
				</tr>
				<tr>
					<td><strong>Industry:</strong></strong></td>
					<td><?php print $employer->industry ?></td>
				</tr>
				<tr>
					<td colspan="2"><a href="<?php print $base_url ?>/admin/employer">Back to List</a></td>
				</tr>
				<?php } ?>
			</table>
    </div>
	</div>  
</div>