<?php
/**
 * @package WordPress
 * @subpackage N21_Theme
 * Template Name: 2012 NO AJAX v.2 Election Home Page
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>

<div class="span-15 append-2 singlestory"> <!-- singlestory -->

<img width="650" height="60" src="http://cronkitenews.asu.edu/assets/images/election/election2012_banner.gif">
<br><br>

<div style="background:#eee; border: 1px solid #ddd; height: 100px; width: 630px;">
<p style="margin-left:-20px;"><img width="600" height="60" src="http://cronkitenews.asu.edu/assets/images/election/live_blog_header.png" alt="Cronkite News live blog coverage" /></p>
<h2 style="margin-top: -25px;"><center>
Cronkite News Election Coverage
</center></h2>
</div>
<div id="dynamiccontent"></div>

<?php
	query_posts('category_name=Election2012Live&posts_per_page=-1');
 	while (have_posts()) : the_post(); 
?>

<h1 style="font-size: 22px; font-weight: bold; padding-bottom: 0; margin-bottom: 5px; padding-top: 20px;"><?php the_title() ?></h1>
<?php
$cn_pubed = get_post_custom_values('publishable_editors_note');
if ($cn_pubed) {
	echo '<p class="publishable_editors_note"><b>Editor’s Note: </b>';
	echo $cn_pubed[0];
	echo '</p>';
}
?>
<p class="byline">

     <!-- Get the bylines -->
      <?php 
     	$cn_byline1 = get_post_custom_values('byline1');
     	$cn_byline2 = get_post_custom_values('byline2');
     	$cn_byline3 = get_post_custom_values('byline3');
     	
     	echo 'By ';
		echo '<span class="upper">';
     	echo $cn_byline1[0];
     	echo '</span>';
     	
     	if ($cn_byline3) { //We have three bylines
     		
		echo ', ';
     	echo '<span class="upper">';
     	echo $cn_byline2[0];
     	echo '</span>';
		echo ' and ';
     	echo '<span class="upper">';
     	echo $cn_byline3[0];
     	echo '</span>';			
     	}
     	
     	if ($cn_byline2 && !$cn_byline3) { //Two bylines
     		echo ' and ';
     	echo '<span class="upper">';
     	echo $cn_byline2[0];
     	echo '</span>';
     	}
     	
     	echo '<br /><span class="story_thedate">';

	$dayofweek = the_time('l');
	echo $dayofweek;
	echo ', ';

	if (function_exists('ap_date')) { ap_date(); } else { the_date(); } ?>,
	<?php echo get_the_time(); ?>
	<br />
</span>

<br /> 

</p>

<?php the_content(); ?>

<?php endwhile;

cfct_misc('sharethis'); 
echo '</div>';

get_sidebar('election2012-no-ajax');

get_footer();
?>