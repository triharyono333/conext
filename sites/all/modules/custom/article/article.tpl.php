<?php global $base_url; ?>

<div id="main">
	<div class="post">
		<div class="post-filters">
			<a href="<?php print $base_url ?>/articles" class="<?php print (empty($content['nid'])) ? 'btn active' : 'btn' ?>">All</a>
			<?php foreach($content['article_category'] as $category) { ?>
			<a href="<?php print $base_url.'/articles/'.$category['nid'] ?>" class="<?php print ((!empty($content['nid']) && $content['nid'] == $category['nid'])) ? 'btn active' : 'btn' ?>"><?php print $category['title'] ?></a>
			<?php } ?>
		</div>
		<div class="container">
			<div class="iso-container blog-posts">
				<?php if (empty($content['article_detail'])) { ?>
					No article found
				<?php } else { ?>
					<?php foreach($content['article_detail'] as $detail) { ?>
					<div class="iso-item filter-all filter-category3">
						<article class="post post-full">
							<div class="post-image col-sm-5">
								<div class="image">
									<img src="<?php print $detail['article_image'] ?>" alt="<?php print $detail['title'] ?>">
									<div class="image-extras">
										<a href="<?php print $detail['article_link'] ?>" class="post-gallery"></a>
									</div>
								</div>
							</div>
							<div class="post-content col-sm-7">
								<h3 class="post-title"><a href="<?php print $detail['article_link'] ?>"><?php print $detail['title'] ?></a></h3>
								<div class="post-meta">
									<span class="entry-author fn">By <a href="#"><?php print $detail['created_by'] ?></a></span>
									<span class="entry-time"><span class="updated no-display">2014-09-09T15:57:08+00:00</span><span class="published"><?php print $detail['created_at'] ?></span></span>
								</div>
								<p><?php print $detail['short_description'] ?></p>
								<a href="<?php print $detail['article_link'] ?>" class="btn style2">Read More <span class="arrow"></span></a>
							</div>
						</article>
					</div>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="post-pagination">
				<?php 
				$paging_url = (empty($content['nid'])) ? $base_url.'/articles' : $base_url.'/articles/'.$content['nid'];
				$cur_page = (empty($_GET['page'])) ? '1' : $_GET['page'];
				?>
				<?php $prev_page = $cur_page-1; ?>
				<?php if ($cur_page > 1) { ?><a href="<?php print $paging_url."?page=".$prev_page ?>" class="nav-prev"></a><?php } ?>
				<div class="page-links">
					<?php 
					for($i = 1; $i<=$content['pages']; $i++) { 
					?>
					<span class="<?php print ($cur_page == $i) ? 'active' : '' ?>"><a href="<?php print $paging_url."?page=".$i ?>"><?php print $i ?></a></span>
					<?php } ?>
				</div>
				<?php $next_page = $cur_page+1; ?>
				<?php if ($cur_page < $content['pages']) { ?><a href="<?php print $paging_url."?page=".$next_page ?>" class="nav-next"></a><?php } ?>
			</div>
		</div>
	</div>
</div>