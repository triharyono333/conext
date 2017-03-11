 <?php
 /* split the username and password from the submit button
   so we can put in links above */

    //print drupal_render($form['name']);
		//print 'test';
    //print drupal_render($form['pass']);
    //print drupal_render($form['form_build_id']);
    //print drupal_render($form['form_id']);
    //print drupal_render($form['actions']);

?>
<?php
global $base_url, $theme_path;
$path_to_theme = $base_url . "/sites/all/themes/conext/";
?>

<div class="container">
	<div id="main">
		<div class="text-center">
			<div class="heading-box">
				<h2 class="box-title">User Login</h2>
			</div>
			<div class="authentication">
				<div class="form-group">
						<?php print drupal_render($form['name']); ?>
					</div>
					<div class="form-group">
						<?php print drupal_render($form['pass']); ?>
					</div>
					<div class="button-wrapper">
						<div class="form-group">
							<?php print drupal_render($form['actions']); ?>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

<?php 
	print drupal_render($form['form_build_id']);
	print drupal_render($form['form_id']);
?>
