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
	  
	<!-- Bow down to our Facebook masters -->
		<meta property="og:url" content="<?php the_permalink() ?>"/>  
		<meta property="og:title" content="<?php single_post_title(''); ?>" />  
		<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />  
		<meta property="og:type" content="article" /> 
		<?php //Find an image to use
		$shareimage = 0;
		$shareimage = get_post_custom_values('large_image');
		if ($shareimage == 0) { // No large image
			$shareimage = get_post_custom_values('small_image');
		}
		if ($shareimage == 0) { // No small image
			$shareimage = get_post_custom_values('video_poster_image');
		}
		if ($shareimage == 0) { // No video poster so use generic
			$shareimage[0] = get_bloginfo('template_directory') . '/img/favicon-129.png';
		}
		echo '<meta property="og:image" content="' . $shareimage[0] . '" />';
		?>		  
	  <!-- End Facebook OG tags -->
	  
	  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />
	  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueprint/print.css" type="text/css" media="print" />
	  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/cn.css" type="text/css" media="screen, projection" />
		  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/quester.css" type="text/css" media="screen, projection" />
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
	
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />
	
	<meta name="viewport" content="width=960" />

	<!-- Start wp_head -->
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>    
	<script src="<?php bloginfo('template_directory'); ?>/js/quester/fullscreen.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/quester/gallery.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.li-scroller.1.0.js" type="text/javascript"></script>
	<?php wp_head(); ?>
	<!-- End wp_head -->
</head>

<body>

<?php cfct_misc('facebook-googleplus'); ?>

  <div class="container"> <!-- showgrid -->
    <div class="span-24 last header">
      <a href="http://cronkitenews.azpbs.org"><img src="<?php bloginfo('template_directory'); ?>/img/masthead.gif" width="774" height="85" alt="Cronkite Header" /></a>
    </div><!-- header -->
    
<div class="span-24 last linkbar">

<div style="float: right; width: 300px;">
<script>
  (function() {
    var cx = '003867095565438658128:1blfwbkqody';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only></gcse:searchbox-only>
</div>

	<div style="padding-top: 8px;">
	<a href="http://cronkitenews.azpbs.org">HOME</a>
	<a href="<?php bloginfo('url'); ?>/about/">ABOUT</a>
	<a href="<?php bloginfo('url'); ?>/archives-by-month/">STORIES</a>
	<a href="<?php bloginfo('url'); ?>/newswatch-archive/">NEWSCAST</a>
	<a href="http://news21.com">NEWS21</a>
	<a href="http://cronkite.asu.edu">CRONKITE</a>
	</div>

</div><!-- linkbar -->
    <div class="span-24"> <!-- wrapper for main content -->
