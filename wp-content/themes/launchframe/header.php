<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Launchframe
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@hollart13">
 
<meta name="twitter:title" content="Thomas Hollar | Web Developer">
<meta name="twitter:description" content="">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory');?>/assets/img/team-thomas.jpg">
 
<meta name="og:image" content="<?php bloginfo('template_directory');?>/assets/img/team-thomas.jpg">
<meta property="og:title" content="Thomas Hollar | Web Developer">
<meta property="og:site_name" content="Thomas Hollar | Web Developer">
<meta property="og:type" content="blog">
<meta property="og:description" content="">

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" />

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<!-- <header>
		<div class="logo">
			<h1>ThomasHollar</h1>
			<h6>Full-Stack Developer<hr/></h6>
		</div>
	</header> -->
	

	<div id="content" class="site-content">
