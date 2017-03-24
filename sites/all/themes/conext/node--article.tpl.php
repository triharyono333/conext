<?php
global $base_url, $theme_path;
$theme_path = $base_url . '/' . $theme_path;
//$job_detail = $content['job_detail'];
//drupal_set_message('<pre>'.print_r($node, true).'</pre>');
?>

<div class="container">
	<div id="main">
		<div class="post-filters">
			<a href="<?php print $base_url ?>/articles" class="btn active">All</a>
			<?php foreach($content['article_category'] as $category) { ?>
			<a href="<?php print $base_url.'/articles/'.$category['nid'] ?>" class="btn"><?php print $category['title'] ?></a>
			<?php } ?>
		</div>
		<article class="post box-lg">
			<div class="post-image">
				<div class="image-container">
					<a href="#"><img alt="<?php print $node->title ?>" src="<?php print $content['article_banner'] ?>"></a>
				</div>
			</div>
			<div class="post-content">
				<h2 class="entry-title"><?php print $node->title ?></h2>
				<div class="post-meta">
					<span class="entry-author fn">By <a href="#"><?php print $content['created_by'] ?></a></span>
					<span class="entry-time"><span class="updated no-display">2014-09-09T15:57:08+00:00</span><span class="published"><?php print $content['created_at'] ?></span></span>
				</div>
				<?php print $node->body[LANGUAGE_NONE][0]['value'] ?>
			</div>
		</article>
		<!--
		<div class="post-pagination">
			<a href="#" class="nav-prev disabled" onclick="return false;"></a>
			<a href="#" class="nav-next" data-page-num="2"></a>
		</div>
		-->
	</div>
</div>
<div class="callout-box style2">
	<div class="container">
		<div class="callout-content">
			<div class="callout-text">
				<h2>Apply Today And Build Your Resume</h2>
			</div>
			<div class="callout-action">
				<a class="btn style3" href="<?php print $base_url ?>/job_seeker/login">Get Started</a>
			</div>
		</div>
	</div>
</div>

<script>
	(function ($) {
		$(document).ready(function () {
			$("#articles").addClass('active');
		})
	}(jQuery));
</script>