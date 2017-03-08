<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>
<div class="content">
	<div>
		<div class="view-header">
		<div class="view-filters">
      <form action="<?php print $base_url ?>/admin/job" method="get" accept-charset="UTF-8">
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
						<th scope="col">Title</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($content['jobs'] as $job) { ?>
          <tr class="odd views-row-first">
						<td class="views-field views-field-title"><?php print $job->title ?></td>
						<td class="views-field views-field-edit-node">
							<a href="<?php print $base_url ?>/admin/job/detail/<?php print $job->nid ?>">View</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
    </div>
		
		<div class="item-list">
			<ul class="pager">
				<li class="pager-last first"><a title="Go to first page" href="/admin/fragrance-product?sku=&amp;title=&amp;field_fragrance_category_tid=&amp;field_fragrance_brand_value=All&amp;page=9"><< first</a></li>
				<li class="pager-current first">1</li>
				<li class="pager-item"><a title="Go to page 2" href="/admin/fragrance-product?sku=&amp;title=&amp;field_fragrance_category_tid=&amp;field_fragrance_brand_value=All&amp;page=1">2</a></li>
				<li class="pager-item"><a title="Go to page 3" href="/admin/fragrance-product?sku=&amp;title=&amp;field_fragrance_category_tid=&amp;field_fragrance_brand_value=All&amp;page=2">3</a></li>
				<li class="pager-item"><a title="Go to page 4" href="/admin/fragrance-product?sku=&amp;title=&amp;field_fragrance_category_tid=&amp;field_fragrance_brand_value=All&amp;page=3">4</a></li>
				<li class="pager-item"><a title="Go to page 5" href="/admin/fragrance-product?sku=&amp;title=&amp;field_fragrance_category_tid=&amp;field_fragrance_brand_value=All&amp;page=4">5</a></li>
				<li class="pager-item"><a title="Go to page 6" href="/admin/fragrance-product?sku=&amp;title=&amp;field_fragrance_category_tid=&amp;field_fragrance_brand_value=All&amp;page=5">6</a></li>
				<li class="pager-item"><a title="Go to page 7" href="/admin/fragrance-product?sku=&amp;title=&amp;field_fragrance_category_tid=&amp;field_fragrance_brand_value=All&amp;page=6">7</a></li>
				<li class="pager-item"><a title="Go to page 8" href="/admin/fragrance-product?sku=&amp;title=&amp;field_fragrance_category_tid=&amp;field_fragrance_brand_value=All&amp;page=7">8</a></li>
				<li class="pager-item"><a title="Go to page 9" href="/admin/fragrance-product?sku=&amp;title=&amp;field_fragrance_category_tid=&amp;field_fragrance_brand_value=All&amp;page=8">9</a></li>
				<li class="pager-last last"><a title="Go to last page" href="/admin/fragrance-product?sku=&amp;title=&amp;field_fragrance_category_tid=&amp;field_fragrance_brand_value=All&amp;page=9">last >></a></li>
			</ul>
		</div>
			
	</div>  
</div>