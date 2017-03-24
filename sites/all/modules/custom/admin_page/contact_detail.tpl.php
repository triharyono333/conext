<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<div class="content">
	<div>
		<div class="view-header">
		<div class="view-content">
      <table border="0" class="views-table cols-3">
				<?php foreach($content['contact'] as $contact) { ?>
				<tr>
					<td width='20%'><strong>ID:</strong></td>
					<td width='80%'><?php print $contact->id ?></td>
				</tr>
				<tr>
					<td><strong>Name:</strong></td>
					<td><?php print $contact->name ?></td>
				</tr>
				<tr>
					<td><strong>Email:</strong></td>
					<td><?php print $contact->email ?></td>
				</tr>
				<tr>
					<td><strong>Phone:</strong></td>
					<td><?php print $contact->phone ?></td>
				</tr>
				<tr>
					<td><strong>Company:</strong></td>
					<td><?php print $contact->company ?></td>
				</tr>
				<tr>
					<td><strong>Subject:</strong></td>
					<td><?php print $contact->subject ?></td>
				</tr>
				<tr>
					<td><strong>Message:</strong></td>
					<td><?php print $contact->message ?></td>
				</tr>
				<tr>
					<td colspan="2"><a href="<?php print $base_url ?>/admin/contact">Back to List</a></td>
				</tr>
				<?php } ?>
			</table>
    </div>
	</div>  
</div>