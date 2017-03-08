<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<div class="content">
	<div>
		<div class="view-header">
		<div class="view-filters">
      <form action="<?php print $base_url ?>/admin/employer" method="get" accept-charset="UTF-8">
				<div>
					<div class="views-exposed-form">
						<div class="views-exposed-widgets clearfix">
							<div id="edit-title-wrapper" class="views-exposed-widget views-widget-filter-title">
								<label for="edit-title">Title</label>
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
			
		<div class="view-content">
      <table class="views-table cols-3">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($content['employers'] as $employer) { ?>
          <tr class="odd views-row-first">
						<td class="views-field views-field-title"><?php print $employer->first_name ?> <?php print $employer->last_name ?></td>
						<td class="views-field views-field-title"><?php print $employer->mail ?></td>
						<td class="views-field views-field-edit-node">
							<a href="<?php print $base_url ?>/admin/employer/detail/<?php print $employer->uid ?>">View</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
    </div>
		<?php print theme('pager') ?>
	</div>  
</div>