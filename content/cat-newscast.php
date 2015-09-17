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

global $previousday, $authordata;

// Causes the_date to display every time, instead of just once per day.
$previousday = -1;

?>
<div class="span-15 append-2 singlestory"> <!-- singlestory -->
<?php

$cn_videofile = get_post_custom_values('video_file');

?>
<iframe width="640" height="360" src="<?php echo $cn_videofile[0]; ?>" frameborder="0" allowfullscreen></iframe>
<p class="singlehed" style="padding-top: 10px;"><?php the_title() ?></p>
<?php cfct_misc('sharethis'); ?>
<span class="story_thedate">

<?php 
	$dayofweek = the_time('l');
	echo $dayofweek;
	echo ', ';

	if (function_exists('ap_date')) { ap_date(); } else { the_date(); } ?><br />
</span>
     <?php 
     	$cn_byline1 = get_post_custom_values('byline1');
     	$cn_byline2 = get_post_custom_values('byline2');
     	$cn_byline3 = get_post_custom_values('byline3');
     	
     	
		echo '<p class="front1credit">By ';

     	echo $cn_byline1[0];

     	
     	if ($cn_byline3) { //We have three bylines
     		
     		echo ', ';
			echo $cn_byline2[0];
			echo ' and ';
			echo $cn_byline3[0];
			
     	}
     	
     	if ($cn_byline2 && !$cn_byline3) { //Two bylines
     		echo ' and ';
     		echo $cn_byline2[0];
     	}
     
     	echo '</p>';
     	?>






<div class="newswatch_story">
<?php the_content(); ?>
</div> <!-- newswatch -->

</div>
