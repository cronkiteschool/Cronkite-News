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

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Start wp_head -->
	<?php wp_head(); ?>
	<!-- End wp_head -->
</head>
<body>

<?php cfct_misc('facebook-googleplus'); ?>

<div class="container"> <!-- showgrid -->
    <div class="span-24 last header">
      <a href="http://cronkitenews.azpbs.org"><img src="<?php bloginfo('template_directory'); ?>/img/masthead.gif" alt="Cronkite Header" /></a>
    </div><!-- header -->
 
<div class="span-24 last linkbar">

<div class="search-box">
<gcse:searchbox-only></gcse:searchbox-only>
</div>
	<div style="padding-top: 8px;">
	<a href="http://cronkitenews.azpbs.org">HOME</a>
	<a href="<?php bloginfo('url'); ?>/archives-by-month/">STORIES</a>
	<a href="<?php bloginfo('url'); ?>/newswatch-archive/">NEWSCAST</a>
	<a href="http://news21.com">NEWS21</a>
	<a href="http://cronkite.asu.edu">CRONKITE</a>
	</div>
</div><!-- linkbar -->
    <div class="span-24"> <!-- wrapper for main content -->
