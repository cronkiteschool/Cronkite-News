<?php

/*
Template Name: NewsWatch Latest
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();


echo '<div class="span-15 append-2 archives">';


$args= array(
	'post_type' => 'newswatch',
	'posts_per_page' => 1
);
query_posts($args);

while (have_posts()) : the_post();

global $previousday, $authordata;

// Causes the_date to display every time, instead of just once per day.
$previousday = -1;

?>
<div class="span-15 append-2 singlestory">

<p class="newswatch_hed"><?php the_title(); ?></p>

<?php

//the_meta();


//global $post;

$cn_videoposter = get_post_custom_values('episode_poster');
$cn_videofile = get_post_custom_values('episode_video');
$cn_videocaption = get_post_custom_values('video_caption');
$cn_blurb = get_post_custom_values('episode_blurb');

?>

<div class="newswatch_story">

<a href="<?php echo $cn_videofile[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_videocaption[0]; ?>" title="<?php echo $cn_videocaption[0]; ?>" />

<img src="<?php echo $cn_videoposter[0]; ?>" width="500" alt="<?php echo $cn_videocaption[0]; ?>" />

<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />

</a>

<p class="newswatch_blurb"><?php echo $cn_blurb[0]; ?></p>

<p class="watchnow"><a href="<?php echo $cn_videofile[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_videocaption[0]; ?>" title="<?php echo $cn_videocaption[0]; ?>" />Watch Now</a></p>

<div style="font-size: 16px; margin-bottom: 20px;">
	<a href="<?php bloginfo('url'); ?>/newswatch-archive/" style="color: #6F7072; text-decoration: none;">More NewsWatch newscasts</a>

</div> <!-- archive link -->
</div> <!-- newswatch -->

<?php
	$cn_poster1 = get_post_custom_values('package1_poster');
	$cn_video1 = get_post_custom_values('package1_video');
	$cn_blurb1 = get_post_custom_values('package1_blurb');

	if ($cn_video1) {
?>
	<div class="newswatch_story">
	
		<a href="<?php echo $cn_video1[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb1[0]; ?>" title="<?php echo $cn_blurb1[0]; ?>" />
		
		<img src="<?php echo $cn_poster1[0]; ?>" width="500" alt="<?php echo $cn_blurb1[0]; ?>" />
		
		<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
		
		</a>
		
		<p class="newswatch_blurb"><?php echo $cn_blurb1[0]; ?></p>
		
		<p class="watchnow"><a href="<?php echo $cn_video1[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb1[0]; ?>" title="<?php echo $cn_blurb1[0]; ?>" />Watch Now</a></p>
	
	</div> <!-- newswatch -->
<?php } ?>

<?php
	$cn_poster2 = get_post_custom_values('package2_poster');
	$cn_video2 = get_post_custom_values('package2_video');
	$cn_blurb2 = get_post_custom_values('package2_blurb');

	if ($cn_video2) {
?>
	<div class="newswatch_story">
	
		<a href="<?php echo $cn_video2[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb2[0]; ?>" title="<?php echo $cn_blurb2[0]; ?>" />
		
		<img src="<?php echo $cn_poster2[0]; ?>" width="500" alt="<?php echo $cn_blurb2[0]; ?>" />
		
		<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
		
		</a>
		
		<p class="newswatch_blurb"><?php echo $cn_blurb2[0]; ?></p>
		
		<p class="watchnow"><a href="<?php echo $cn_video2[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb2[0]; ?>" title="<?php echo $cn_blurb2[0]; ?>" />Watch Now</a></p>
	
	</div> <!-- newswatch -->
<?php } ?>

<?php
	$cn_poster3 = get_post_custom_values('package3_poster');
	$cn_video3 = get_post_custom_values('package3_video');
	$cn_blurb3 = get_post_custom_values('package3_blurb');

	if ($cn_video3) {
?>
	<div class="newswatch_story">
	
		<a href="<?php echo $cn_video3[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb3[0]; ?>" title="<?php echo $cn_blurb3[0]; ?>" />
		
		<img src="<?php echo $cn_poster3[0]; ?>" width="500" alt="<?php echo $cn_blurb3[0]; ?>" />
		
		<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
		
		</a>
		
		<p class="newswatch_blurb"><?php echo $cn_blurb3[0]; ?></p>
		
		<p class="watchnow"><a href="<?php echo $cn_video3[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb3[0]; ?>" title="<?php echo $cn_blurb3[0]; ?>" />Watch Now</a></p>
	
	</div> <!-- newswatch -->
<?php } ?>

<?php
	$cn_poster4 = get_post_custom_values('package4_poster');
	$cn_video4 = get_post_custom_values('package4_video');
	$cn_blurb4 = get_post_custom_values('package4_blurb');

	if ($cn_video4) {
?>
	<div class="newswatch_story">
	
		<a href="<?php echo $cn_video4[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb4[0]; ?>" title="<?php echo $cn_blurb4[0]; ?>" />
		
		<img src="<?php echo $cn_poster4[0]; ?>" width="500" alt="<?php echo $cn_blurb4[0]; ?>" />
		
		<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
		
		</a>
		
		<p class="newswatch_blurb"><?php echo $cn_blurb4[0]; ?></p>
		
		<p class="watchnow"><a href="<?php echo $cn_video4[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb4[0]; ?>" title="<?php echo $cn_blurb4[0]; ?>" />Watch Now</a></p>
	
	</div> <!-- newswatch -->
<?php } ?>

<?php
	$cn_poster5 = get_post_custom_values('package5_poster');
	$cn_video5 = get_post_custom_values('package5_video');
	$cn_blurb5 = get_post_custom_values('package5_blurb');

	if ($cn_video5) {
?>
	<div class="newswatch_story">
	
		<a href="<?php echo $cn_video5[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb5[0]; ?>" title="<?php echo $cn_blurb5[0]; ?>" />
		
		<img src="<?php echo $cn_poster5[0]; ?>" width="500" alt="<?php echo $cn_blurb5[0]; ?>" />
		
		<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
		
		</a>
		
		<p class="newswatch_blurb"><?php echo $cn_blurb5[0]; ?></p>
		
		<p class="watchnow"><a href="<?php echo $cn_video5[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb5[0]; ?>" title="<?php echo $cn_blurb5[0]; ?>" />Watch Now</a></p>
	
	</div> <!-- newswatch -->
<?php } ?>

<?php
	$cn_poster6 = get_post_custom_values('package6_poster');
	$cn_video6 = get_post_custom_values('package6_video');
	$cn_blurb6 = get_post_custom_values('package6_blurb');

	if ($cn_video6) {
?>
	<div class="newswatch_story">
	
		<a href="<?php echo $cn_video6[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb6[0]; ?>" title="<?php echo $cn_blurb6[0]; ?>" />
		
		<img src="<?php echo $cn_poster6[0]; ?>" width="500" alt="<?php echo $cn_blurb6[0]; ?>" />
		
		<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
		
		</a>
		
		<p class="newswatch_blurb"><?php echo $cn_blurb6[0]; ?></p>
		
		<p class="watchnow"><a href="<?php echo $cn_video6[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb6[0]; ?>" title="<?php echo $cn_blurb6[0]; ?>" />Watch Now</a></p>
	
	</div> <!-- newswatch -->
<?php } ?>

<?php
	$cn_poster7 = get_post_custom_values('package7_poster');
	$cn_video7 = get_post_custom_values('package7_video');
	$cn_blurb7 = get_post_custom_values('package7_blurb');

	if ($cn_video7) {
?>
	<div class="newswatch_story">
	
		<a href="<?php echo $cn_video7[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb7[0]; ?>" title="<?php echo $cn_blurb7[0]; ?>" />
		
		<img src="<?php echo $cn_poster7[0]; ?>" width="500" alt="<?php echo $cn_blurb7[0]; ?>" />
		
		<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
		
		</a>
		
		<p class="newswatch_blurb"><?php echo $cn_blurb7[0]; ?></p>
		
		<p class="watchnow"><a href="<?php echo $cn_video7[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb7[0]; ?>" title="<?php echo $cn_blurb7[0]; ?>" />Watch Now</a></p>
	
	</div> <!-- newswatch -->
<?php } ?>

<?php
	$cn_poster8 = get_post_custom_values('package8_poster');
	$cn_video8 = get_post_custom_values('package8_video');
	$cn_blurb8 = get_post_custom_values('package8_blurb');

	if ($cn_video8) {
?>
	<div class="newswatch_story">
	
		<a href="<?php echo $cn_video8[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb8[0]; ?>" title="<?php echo $cn_blurb8[0]; ?>" />
		
		<img src="<?php echo $cn_poster8[0]; ?>" width="500" alt="<?php echo $cn_blurb8[0]; ?>" />
		
		<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
		
		</a>
		
		<p class="newswatch_blurb"><?php echo $cn_blurb8[0]; ?></p>
		
		<p class="watchnow"><a href="<?php echo $cn_video8[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb8[0]; ?>" title="<?php echo $cn_blurb8[0]; ?>" />Watch Now</a></p>
	
	</div> <!-- newswatch -->
<?php } ?>

<?php
	$cn_poster9 = get_post_custom_values('package9_poster');
	$cn_video9 = get_post_custom_values('package9_video');
	$cn_blurb9 = get_post_custom_values('package9_blurb');

	if ($cn_video9) {
?>
	<div class="newswatch_story">
	
		<a href="<?php echo $cn_video9[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb9[0]; ?>" title="<?php echo $cn_blurb9[0]; ?>" />
		
		<img src="<?php echo $cn_poster9[0]; ?>" width="500" alt="<?php echo $cn_blurb9[0]; ?>" />
		
		<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
		
		</a>
		
		<p class="newswatch_blurb"><?php echo $cn_blurb9[0]; ?></p>
		
		
		<p class="watchnow"><a href="<?php echo $cn_video9[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb9[0]; ?>" title="<?php echo $cn_blurb9[0]; ?>" />Watch Now</a></p>
	
	</div> <!-- newswatch -->
<?php } ?>

<?php
	$cn_poster10 = get_post_custom_values('package10_poster');
	$cn_video10 = get_post_custom_values('package10_video');
	$cn_blurb10 = get_post_custom_values('package10_blurb');

	if ($cn_video10) {
?>
	<div class="newswatch_story">
	
		<a href="<?php echo $cn_video10[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb10[0]; ?>" title="<?php echo $cn_blurb10[0]; ?>" />
		
		<img src="<?php echo $cn_poster10[0]; ?>" width="500" alt="<?php echo $cn_blurb10[0]; ?>" />
		
		<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
		
		</a>
		
		<p class="newswatch_blurb"><?php echo $cn_blurb10[0]; ?></p>
		
		<p class="watchnow"><a href="<?php echo $cn_video10[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb10[0]; ?>" title="<?php echo $cn_blurb10[0]; ?>" />Watch Now</a></p>
	
	</div> <!-- newswatch -->
<?php } ?>
<?php endwhile; ?>
</div>
<?php cfct_misc('sharethis'); ?>
</div>

<?php
get_sidebar('archives');
get_footer();
?>