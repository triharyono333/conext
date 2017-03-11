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
		
		<div style="text-align: center;">
			<?php 
			$paging_url = (empty($_GET['keyword'])) ? $base_url.'/admin/employer?' : $base_url.'/admin/employer?keyword='.$_GET['keyword'].'&';
			$cur_page = (empty($_GET['page'])) ? '1' : $_GET['page'];
			?>
			<?php $prev_page = $cur_page-1; ?>
			<?php if ($cur_page > 1) { ?><a href="<?php print $paging_url."page=".$prev_page ?>" class="nav-prev"> << </a><?php } ?>
		
				<?php 
				for($i = 1; $i<=$content['pages']; $i++) { 
				?>
				<span style="padding: 10px;" class="<?php print ($cur_page == $i) ? 'pager-current' : '' ?>"><a href="<?php print $paging_url."page=".$i ?>"><?php print $i ?></a></span>
				<?php } ?>
	
			<?php $next_page = $cur_page+1; ?>
			<?php if ($cur_page < $content['pages']) { ?><a href="<?php print $paging_url."page=".$next_page ?>" class="nav-next"> >> </a><?php } ?>
		</div>
			
	</div>  
</div>