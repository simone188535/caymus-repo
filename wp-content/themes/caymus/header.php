<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="viewport" content="width=device-width, user-scalable=false;">
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link REL="SHORTCUT ICON" HREF="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_front_page()) {
			 echo 'Home - '; bloginfo('name'); }
		      elseif (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('name'); }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; bloginfo('name'); }			  
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.css">
	<!--link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"-->

	<!--<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>-->

	<?php wp_head(); ?>
	<script>
	$(document).ready(function() {
			//$('#menu-header-menu').addClass('top_nav nav-pills nav-collapse collapse');
			$('.current_page_item').addClass('active-nav');	
		});
	</script>
</head>

<body <?php body_class(); ?>>
	<div class="wrap nav_section">	
<div class="container" id="header-section">
	<div class="row">
		<a href="https://caymusequity.smartvault.com" id="partner-login" class="push-right" target="_blank">Limited Partner Login</a>
	</div>
    <a class="top_logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/caymus-logo.gif" /></a>     
    <ul class="mobile-menu">
    <li class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/img/mobile-menu-btn.png" /></a>
    </li>
   	</ul>
    <!--ul class="top_nav nav-pills nav-collapse collapse"-->
		<?php wp_nav_menu( array( 
		'theme_location' => 'header-menu',
		'container' => '',
		'items_wrap' => '<ul id="%1$s" class="top_nav nav-pills nav-collapse collapse">%3$s</ul>'
		)); ?>

      <!--<li class="active-nav"><a href="index.html">Home</a></li>
      <div id="main-nav-divider"><img src="img/no-image.gif" /></div>
      <li><a href="our-company.html">Our Company</a></li>
      <div id="main-nav-divider"><img src="img/no-image.gif" /></div>
      <li><a href="what-we-look-for.html">What We Look For</a></li>
      <div id="main-nav-divider"><img src="img/no-image.gif" /></div>
      <li><a href="our-team.html">Our Team</a></li>
      <div id="main-nav-divider"><img src="img/no-image.gif" /></div>
      <li><a href="portfolio.html">Portfolio</a></li>
      <div id="main-nav-divider"><img src="img/no-image.gif" /></div>
      <li><a href="news.html">News</a></li>
      <div id="main-nav-divider"><img src="img/no-image.gif" /></div>
      <li><a href="contact.html">Contact</a></li>-->
    <!--/ul--> 
</div>
</div>
<!--div class="wrap" id="top-breadcrumb-wrap">
<div class="container">
<ul class="breadcrumb" id="top-breadcrumb">
  <li><a href="index.html">Home</a> <span class="divider">/</span></li>
  <li class="active"><a href="#">Our Company</a></li>
</ul>
</div>
</div>	
<div class="container" id="main-content"-->
	<!--<div id="page-wrap">-->
		
		<!--<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div>-->
		<!-- <?php wp_nav_menu(array('menu' => 'custom_menu')); ?> -->