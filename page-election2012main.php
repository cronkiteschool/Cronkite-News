<?php
/**
 * @package WordPress
 * @subpackage N21_Theme
 * Template Name: 2012 Election Home Page
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>

<div class="span-15 append-2 singlestory"> <!-- singlestory -->

<img width="650" height="60" src="http://cronkitenews.asu.edu/assets/images/election/election2012_banner.gif">
<br><br>

<div id="dynamiccontent">


<?php

// The Query
query_posts ( 'p=12724' );

// The Loop
while ( have_posts() ) : the_post();
        echo '<div style="background:#eee; border: 1px solid #ddd; height: 100px; width: 630px;">';
		echo '<p style="margin-left:-20px;"><img width="600" height="60"  src="http://cronkitenews.asu.edu/assets/images/election/live_blog_header.png" alt="Cronkite News live blog coverage" /></p>';
		echo '<h2 style="margin-top: -25px;"><center>';
		the_title();
		echo '</center></h2>';
		echo '</div><br /><br />';
	    the_content();
endwhile;

// Reset Query
wp_reset_query();

?>


</div>

<?php
	
	cfct_misc('sharethis'); 

	?>
 

<?php
	
	
	echo '</div>';


get_sidebar('election2012');

get_footer();

?>