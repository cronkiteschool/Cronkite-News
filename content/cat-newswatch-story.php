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

<p class="singlehed"><?php the_title() ?></p>
<p class="byline">
<span class="story_thedate">

<?php 
	$dayofweek = the_time('l');
	echo $dayofweek;
	echo ', ';

	if (function_exists('ap_date')) { ap_date(); } else { the_date(); } ?><br />
</span>



<?php

//Newswatch Story, so we'll put the video in the center

$cn_videoposter = get_post_custom_values('video_poster_image');
$cn_videofile = get_post_custom_values('video_file');
$cn_videocaption = get_post_custom_values('video_caption');
//$cn_blurb = get_post_custom_values('blurb');

?>

<div class="newswatch_story">

	<a href="<?php echo $cn_videofile[0]; ?>" rel="shadowbox;height=360;width=700">
	
	<img src="<?php echo $cn_videoposter[0]; ?>" width="500" />
	
	<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
	
	</a>
	
	<p class="newswatch_blurb" style="width: 500px;"><?php echo $cn_videocaption[0]; ?></p>
	
	<p class="watchnow"><a href="<?php echo $cn_videofile[0]; ?>" rel="shadowbox;height=360;width=700" >Watch Now</a></p>

<?php cfct_misc('sharethis'); ?>

</div> <!-- newswatch -->



<!-- the_content();  -->




</div>
