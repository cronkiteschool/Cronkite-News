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

get_header();

$s = get_query_var('s');

if (get_option('permalink_structure') != '') {
	$search_title = '<a href="'.trailingslashit(get_bloginfo('url')).'search/'.urlencode($s).'">'.htmlspecialchars($s).'</a>';
}
else {
	$search_title = '<a href="'.trailingslashit(get_bloginfo('url')).'?s='.urlencode($s).'">'.htmlspecialchars($s).'</a>';
}

?>


<!-- <h1><?php printf(__('Search Results for: %s', 'carrington-jam'), $search_title); ?></h1> -->

<div class="span-15 append-2 search">
<p class="singlehed" style="margin-bottom: 7px;">Search results for: <?php echo $search_title; ?></p>
<p style="font-size: 12px; font-weight: bold;">Stories filed before Jan. 1, 2010, are available on the Cronkite News Service client site.<br /> <a href="http://cronkitenews.asu.edu/clients/?s=<?php echo $s; ?>">Try your search there.</a></p>
<?php


while (have_posts()) : the_post();

echo '<p class="archivehed">';
echo '<a href="';
echo the_permalink();
echo '">';
echo the_title();
echo '</a></p>';

//Get the bylines
     	$cn_byline1 = get_post_custom_values('byline1');
     	$cn_byline2 = get_post_custom_values('byline2');
     	$cn_byline3 = get_post_custom_values('byline3');

     	if ($cn_byline1) { //Exclude NewsWatch newscasts since they don't have bylines
     	echo '<p class="byline"> By ';
     	echo '<a href="mailto:';
     	echo $cn_email1[0];
     	echo '">';
     	echo '<span class="upper">';
     	echo $cn_byline1[0];
     	echo '</span>';
		echo '</a>';

     	if ($cn_byline3) { //We have three bylines
     		echo ', ';
			echo '<a href="mailto:';
			echo $cn_email2[0];
			echo '">';
     	echo '<span class="upper">';
     	echo $cn_byline2[0];
     	echo '</span>';
			echo '</a> and ';
			echo '<a href="mailto:';
			echo $cn_email3[0];
			echo '">';
     	echo '<span class="upper">';
     	echo $cn_byline3[0];
     	echo '</span>';
			echo '</a>';			
     	}

     	if ($cn_byline2 && !$cn_byline3) { //Two bylines
     		echo ' and ';
			echo '<a href="mailto:';
			echo $cn_email2[0];
			echo '">';
     	echo '<span class="upper">';
     	echo $cn_byline2[0];
     	echo '</span>';
			echo '</a>';
     	}

echo '<span class="story_thedate"> – ';

	$dayofweek = the_time('l');
	echo $dayofweek;
	echo ', ';

	if (function_exists('ap_date')) { ap_date(); } else { the_date(); } 

	echo '</span>';
	echo '</p>';

$cn_blurb = get_post_custom_values('blurb');
echo '<p>';
echo $cn_blurb[0];
echo '</p>';
}

$cn_blurb = get_post_custom_values('episode_blurb');

if ($cn_blurb) { //This must be a NewsWatch newscast, so print the blurb
	echo '<p>';
	echo $cn_blurb[0];
	echo '</p>';
}
?>
</p>

<?php
endwhile;
//cfct_loop();
//cfct_misc('nav-posts');
?>

</div> <!-- end main content -->

<?php
get_sidebar('archives');
get_footer();
?>