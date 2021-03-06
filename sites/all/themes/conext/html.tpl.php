<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<?php
global $base_url;
$path_to_theme = $base_url."/sites/all/themes/conext/";
$path_to_file = $base_url."/sites/default/files/";
?>

<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
	<?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
	<!-- Page Title -->
	<title>Conext | Connecting Your Future</title>
	<link rel="shortcut icon" href="<?php print $path_to_theme ?>images/favicon.png" />

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="description" content="Conext | Connecting Your Future">
	<meta name="author" content="SoapTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- Theme Styles -->
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/owl-carousel/owl.carousel.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/owl-carousel/owl.transitions.css" media="screen" />
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="<?php print $path_to_theme ?>components/magnific-popup/magnific-popup.css"> 
	<link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/revolution_slider/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/revolution_slider/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/jquery.carousel-1.1/carousel.css" media="screen" />
	<!-- Main Style -->
	<link id="main-style" rel="stylesheet" href="<?php print $path_to_theme ?>css/style.css">
	<!-- Custom Styles -->
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/custom.css">
	<!-- Updated Styles -->
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/updates.css">
  <link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>css/multistep.css" />
  <link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>css/component.css" />
	<!-- Responsive Styles -->
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/responsive.css">
	<!-- CSS for IE -->
	<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="css/ie.css" />
	<![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
	<style>
		.error_input { border: 1px solid red !important; }
		.error_text { color: red; }
	</style>
</head>
<body>
	<?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-97345224-1', 'auto');
		ga('send', 'pageview');

	</script>
</body>
</html>
