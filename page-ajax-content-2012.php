<?php
/**
 * @package WordPress
 * @subpackage N21_Theme
 * Template Name: Ajax 2012 Election Content
*/
?>

<div style="background: #D0D1E5; width: 623px; height: 20px; line-height: 20px; padding-left: 10px; margin-bottom: 10px; margin-top: 10px; font-weight: bold;">
This page refreshes itself once per minute. You do not have to refresh. <span id="ajaxloader" style="vertical-align: text-top;"></span>
</div>

<?php query_posts('category_name=Election2012Live&posts_per_page=-1'); ?>
<?php while (have_posts()) : the_post(); ?>

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

<?php endwhile;?>