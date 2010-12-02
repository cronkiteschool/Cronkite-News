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

<h1 class="singlehed"><?php the_title() ?></h1>
<?php
$cn_pubed = get_post_custom_values('publishable_editors_note');
if ($cn_pubed) {
	echo '<p class="publishable_editors_note"><b>Editor’s Note: </b>';
	echo $cn_pubed[0];
	echo '</p>';
}
?>
<p class="byline">
<span class="story_thedate">

<?php 
	$dayofweek = the_time('l');
	echo $dayofweek;
	echo ', ';

	if (function_exists('ap_date')) { ap_date(); } else { the_date(); } ?><br />
</span>
     <!-- Get the bylines -->

</p>

	      <!-- START GLANCE BOX -->
      <?php 
      $boxinpage = get_post_custom_values('glance_box_in_page');
      
      if ($boxinpage[0] == 'yes') {
      
		  $values = get_post_custom_values('glance_box_headline'); 
		   if ($values[0]) { 
			echo '<div style="float: right; width: 250px; border: 1px solid #aaa; padding: 10px; margin-left: 10px; background: #eee;">';
			
			echo '<div class="glance_box_headline_in_page">';
	
			echo $values[0];
			echo '</div>';
			}
	 		$values = get_post_custom_values('glance_box'); 
		   	if ($values[0]) { 
				echo '<div class="glance_box_in_page">';
				echo wpautop($values[0], $br=1);
				echo '</div>';
			}
			echo '</div>';
      } 
      
      // End Glance Box

the_content(); 


cfct_misc('sharethis'); 

?>

</div>