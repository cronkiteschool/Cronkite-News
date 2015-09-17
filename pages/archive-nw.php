<?php

/*
Template Name: Archive NW
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>
<div class="span-15 append-2 archives">
<h1 class="singlehed" style="margin-bottom: 10px;">Recent Newscasts</h1>
<h4 style="font-size: 14px; padding-bottom: 10px;">Cronkite News, the award-winning 30-minute nightly newscast produced by students of the Walter Cronkite School of Journalism and Mass Communication, airs weekdays on KAET 8.1 (COX 8) at 5 p.m. and 8.3 (COX 88) at 7:30 p.m.</h4>

<?php

//based on Austin Matzko's code from wp-hackers email list
  function filter_where($where = '') {
    //posts in the last 30 days
    $where .= " AND post_date > '" . date('Y-m-d', strtotime('-10 days')) . "'";
    return $where;
  }

add_filter('posts_where', 'filter_where');
$query_string = "post_type='newswatch'";
query_posts($query_string);

echo '<table style="margin-bottom: 10px;">';

while (have_posts()) : the_post();

echo '<p class="archivehed">';

$cn_blurb = get_post_custom_values('episode_blurb');


$video = get_post_custom_values('episode_video');
$poster = get_post_custom_values('small_episode_poster');  

echo '<tr><td width="170" style="vertical-align: top; height: 110px;">';
echo '<a href="'. $video[0] .'" rel="shadowbox;height=360;width=700">';
echo '<img src="' . $poster[0] . '" alt="NewsWatch" width="170" style="float: left;  " />';
echo '</a>';
echo '</td><td style="vertical-align: top;">';
echo '<p style="font-size: 12px;">';
echo '<a href="';
echo $video[0];
echo '" rel="shadowbox;height=360;width=700" style="text-decoration: none; color: black; font-weight: bold;">';
echo the_title();
echo '</a>';
echo '<br />';
echo $cn_blurb[0];
echo '&nbsp;';
echo '<a href="'. $video[0] .'" rel="shadowbox;height=360;width=700">';
echo '<img src="';
echo bloginfo('template_directory');
echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
echo '</p>';
echo '</td></tr>';

endwhile;
?>
</table>

<div style="font-size: 16px; margin-bottom: 20px;">
	<a href="<?php bloginfo('url'); ?>/newswatch-archive/" style="color: #6F7072; text-decoration: none;">More archived NewsWatch newscasts</a>

</div> <!-- archive link -->

</div>  <!-- main archives div -->
<?php
get_sidebar('archives-no-stories');
get_footer();

?>