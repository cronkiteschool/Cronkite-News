<?php

/*
Template Name: Archives Month
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }


get_header();

?>
<div class="span-15 append-2 archives">
<h1 class="singlehed">Archives</h1>

<?php
 
// Declare some helper vars
$previous_year = 0;
$year = 0;
$previous_month = 0;
$month = 0;
$ul_open = false;

global $post;
$myposts = query_posts('posts_per_page=-1&orderby=post_date&order=DESC'); 

//print_r ($myposts);
?>
 
<?php foreach($myposts as $post) : ?>	
 
	<?php
 
	// Setup the post variables
	//setup_postdata($post);
 
	 
 	
	$year = mysql2date('Y', $post->post_date);
	$month = mysql2date('n', $post->post_date);
	$day = mysql2date('j', $post->post_date);
 
	?>
 
	<?php if($year != $previous_year || $month != $previous_month) : ?>
 
		<?php if($ul_open == true) : ?>
		</ul>
		<?php endif; ?>
 
		<p class="archivehed"><?php the_time('F Y'); ?></p>
 
		<ul class="month_archive">
 
		<?php $ul_open = true; ?>
 
	<?php endif; ?>
 
	<?php $previous_year = $year; $previous_month = $month; ?>
 
	<li><span class="the_article"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>


	<!-- Find out if we have a video file -->
<?php 	
		//echo $post->ID;
		$values = get_post_meta($post->ID, 'video_file', false);
		//echo $vid[0];
		//print_r $vid;
		//$curr = new WP_Query($current_post);
		//print_r ($curr);
	 	
   
   if ($values) { /*The story has a video*/
	echo '&nbsp;';
	$title = get_post_meta($post->ID, 'video_caption', false);
	if ($title) { /*And the video has a caption*/
   
	   
	   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">';
	   echo '<img src="';
	   echo bloginfo('template_directory');
	   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';

		}
   else { /*No caption—use generic*/
	   
	   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">';
	   echo '<img src="';
	   echo bloginfo('template_directory');
	   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
}}
?>
 </span></li>
 
<?php endforeach; ?>
	</ul>


</div>  <!-- main archives div -->
<?php
get_sidebar('archives');
get_footer();

?>