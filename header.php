<!DOCTYPE HTML>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<!-- less/css -->
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.less">
	<script src="<?php bloginfo('stylesheet_directory'); ?>/less/less.js" type="text/javascript"></script>

	<!-- Lightbox Javascript -->
	<!-- <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lightbox/js/prototype.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lightbox/js/scriptaculous.js?load=effects,builder"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lightbox/js/lightbox.js"></script>
	 -->

	<!-- Lightbox CSS -->	
	<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/lightbox/css/lightbox.css" type="text/css" media="screen" /> -->

	<!-- Full Page & jQuery-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/fullPage.js/jquery.fullPage.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<!-- This is needed in the case of setting the plugin 
	    option `scrollOverflow` to `true` -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/fullPage.js/vendors/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/fullPage.js/jquery.fullPage.js"></script>


	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$.fn.fullpage();
		});
	</script>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="Shortcut Icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico?v=2" type="image/x-icon" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
</head>

<body>
	<div id="rap" class=clearfix>	
		<!--<header id="header">
			<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo( 'name' ); ?></a></h1>
			 <a href="<?php bloginfo('url'); ?>/">
				<img id="himage" title="<?php bloginfo('name'); ?>" src="<?php bloginfo('stylesheet_directory'); ?>/img/dadamt_logo.png" />
			</a>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</header> -->
		<!-- end header -->
		<ul class="wp_nav">
			<?php wp_list_pages('title_li=0&include=2'); ?>
		</ul>

		<div id="content" class="clearfix">
