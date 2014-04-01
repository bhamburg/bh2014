<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php wp_title('::',1,'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="Web Developer, Designer &amp; Banjoist">
	<meta name="author" content="Brian Hamburg">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,400,900' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-114x114.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!-- Primary Page Layout
	================================================== -->
	
<nav class="desktop">
    <div class="container">
        <ul class="eleven columns">
            <li><a href="<?php bloginfo('url'); ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="<?php bloginfo('url'); ?>/posts">Posts</a></li>
            <li><a href="<?php bloginfo('url'); ?>/projects">Projects</a></li>
            <li><a href="<?php bloginfo('url'); ?>/banjo">Banjo</a></li>
            <li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
        </ul>
        <ul class="social">
			<li><a href="http://www.twitter.com/bhamburg"><i class="fa fa-twitter"></i></a></li>
			<li><a href="http://www.linkedin.com/in/brianhamburg/"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="https://github.com/bhamburg"><i class="fa fa-github"></i></a></li>
			<li><a href="http://www.youtube.com/mummerburger"><i class="fa fa-youtube"></i></a></li>
			<li><a href="<?php bloginfo('url'); ?>/feed"><i class="fa fa-rss"></i></a></li>
		</ul>
    </div>
</nav>
<nav class="mobile">
    <div class="container">
        <ul class="sixteen columns">
            <li><a href="<?php bloginfo('url'); ?>/"><i class="fa fa-home"></i></a></li>
            <li><a href="<?php bloginfo('url'); ?>/posts"><i class="fa fa-bullhorn"></i></a></li>
            <li><a href="<?php bloginfo('url'); ?>/projects"><i class="fa fa-briefcase"></i></a></li>
            <li><a href="<?php bloginfo('url'); ?>/banjo"><i class="fa fa-music"></i></a></li>
            <li><a href="<?php bloginfo('url'); ?>/contact"><i class="fa fa-envelope-o"></i></a></li>
        </ul>
    </div>
</nav>