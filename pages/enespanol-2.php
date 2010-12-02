<?php

/*
Template Name: Archive NW
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>
<div class="span-15 append-2 archives">
<h1 class="singlehed" style="margin-bottom: 10px;">NewsWatch En Español</h1>
<h4 style="font-size: 14px; padding-bottom: 10px;">Cronkite NewsWatch en Español is a Spanish-language television newscast produced by top bilingual broadcast students at the Cronkite School. The program, produced twice each month during the school year, has aired on Univision’s TeleFutura network across Arizona. News stories also are made available to other Spanish-language outlets across the state via Cronkite News Service.</h4>

<?php


$query_string = "post_type='enespanol'";
query_posts($query_string);

echo '<table style="margin-bottom: 10px;">';

while (have_posts()) : the_post();

echo '<p class="archivehed">';

$cn_blurb = get_post_custom_values('episode_blurb');


$video = get_post_custom_values('episode_video');
$poster = get_post_custom_values('small_episode_poster');  

echo '<tr><td width="170" style="vertical-align: top; height: 110px;">';
echo '<a href="'. $video[0] .'" rel="shadowbox;height=360;width=700">';
echo '<img src="' . $poster[0] . '" alt="NewsWatch en español" width="170" style="float: left;  " />';
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


</div>  <!-- main archives div -->
<?php
get_sidebar('archives-no-stories');
get_footer();

?>