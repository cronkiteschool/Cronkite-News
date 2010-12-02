<?php

$cn_videoposter = get_post_custom_values('episode_poster');
$cn_videofile = get_post_custom_values('episode_video');
$cn_blurb = get_post_custom_values('episode_blurb');

?>

<div class="newswatch_story">

<a href="<?php echo $cn_videofile[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb[0]; ?>" />

<img src="<?php echo $cn_videoposter[0]; ?>" width="500" alt="<?php echo $cn_blurb[0]; ?>" />

<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />

</a>

<p class="newswatch_blurb" style="width: 500px;"><?php echo $cn_blurb[0]; ?></p>

<p class="watchnow"><a href="<?php echo $cn_videofile[0]; ?>" rel="shadowbox;height=360;width=700" alt="<?php echo $cn_blurb[0]; ?>" />Watch Now</a></p>

</div> <!-- newswatch -->
 
