<?php

/*
Template Name: Archive
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>
<div class="span-15 append-2 archives">
<h1 class="singlehed">Archives</h1>

<?php

//based on Austin Matzko's code from wp-hackers email list
  function filter_where($where = '') {
    //posts in the last 30 days
    $where .= " AND post_date > '" . date('Y-m-d', strtotime('-30 days')) . "'";
    return $where;
  }
add_filter('posts_where', 'filter_where');
$query_string = "posts_per_page=10";
query_posts($query_string);

while (have_posts()) : the_post();

echo '<p class="archivehed">';
echo '<a href="';
echo the_permalink();
echo '">';
echo the_title();
echo '</a></p>';
echo '<p class="byline">';
echo '<span class="story_thedate">';
	$dayofweek = the_time('l');
	echo $dayofweek;
	echo ', ';

	if (function_exists('ap_date')) { ap_date(); } else { the_date(); } 
	
	echo '</span></p>';
	

$cn_blurb = get_post_custom_values('blurb');
echo '<p>';
echo $cn_blurb[0];

$values = get_post_custom_values('video_file');
   
   if ($values) { /*The story has a video*/
	echo '&nbsp;';
	$title = get_post_custom_values('video_caption');
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
echo '</p>';

//echo '</p>';

endwhile;
//cfct_loop();


//cfct_misc('nav-posts');

//wp_reset_query();
?>

<div style="font-size: 16px; margin-bottom: 20px;">
	<a href="<?php bloginfo('url'); ?>/archives-by-month/" style="color: #6F7072; text-decoration: none;">More archived stories</a>

</div> <!-- archive link -->

</div>  <!-- main archives div -->
<?php
get_sidebar('archives-no-stories');
get_footer();

?>