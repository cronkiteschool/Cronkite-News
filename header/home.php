<?php

// This file is part of the Carrington JAM Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ); ?></title>

	<!-- Cronkite News -->
	  <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
	  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/favicon-129.png" />
	  
	  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />
	  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueprint/print.css" type="text/css" media="print" />
	  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/cn.css" type="text/css" media="screen, projection" />
	  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/li-scroller.css" type="text/css" media="screen" /> 
	  <!--[if lt IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/shadowbox/shadowbox.css" />
	 
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/shadowbox/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init(
			{overlayOpacity: 0.8
			}
		);
	</script>



	<meta name="description" content="Cronkite NewsWatch and News Service (CNS) at Arizona State University (ASU) provide full, multimedia coverage, including video reports and a daily newscast, of state news, government, politics and weather. Look to Cronkite News for breaking and in-depth coverage of critical public policy issues such as immigration/SB1070/employer sanctions, action by state agencies and the governor’s office, wildlife, the environment/climate change and Latino/Hispanic issues." />
	
	
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'carrington-jam' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />
	
	<meta name="viewport" content="width=960" />

	<!-- Start wp_head -->
	<?php wp_head(); ?>
	<!-- End wp_head -->
</head>

<body>

  <div class="container"> <!-- showgrid -->
    <div class="span-24 last header">
      <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/masthead.gif" width="774" height="85" alt="Cronkite Header" /></a>
    </div><!-- header -->
    <div class="span-24 last linkbar">
     
<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/nav/home.jpg" width="120" height="30" alt="Home" /></a>
<a href="<?php bloginfo('url'); ?>/about/"><img src="<?php bloginfo('template_directory'); ?>/img/nav/about.jpg" width="120" height="30" alt="About Cronkite News" /></a>
<a href="<?php bloginfo('url'); ?>/archives/"><img src="<?php bloginfo('template_directory'); ?>/img/nav/stories.jpg" width="120" height="30" alt="Stories" /></a>
<a href="<?php bloginfo('url'); ?>/recent-newswatch-newscasts/"><img src="<?php bloginfo('template_directory'); ?>/img/nav/newswatch.jpg" width="120" height="30" alt="Recent NewsWatch Newscasts" /></a>
<a href="http://asu.news21.com"><img src="<?php bloginfo('template_directory'); ?>/img/nav/news21.jpg" width="120" height="30" alt="ASU News21" /></a>
<a href="http://cronkite.asu.edu"><img src="<?php bloginfo('template_directory'); ?>/img/nav/cronkite.jpg" width="120" height="30" alt="Cronkite School" /></a>
<a href="<?php bloginfo('url'); ?>/contact-cronkite-news"><img src="<?php bloginfo('template_directory'); ?>/img/nav/contact.jpg" width="120" height="30" alt="Contact Cronkite News" /></a>
    </div><!-- linkbar -->
    <div class="span-24"> <!-- wrapper for main content -->