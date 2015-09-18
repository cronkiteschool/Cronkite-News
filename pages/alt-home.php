<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();
?>
<!-- Home page content goes here -->

    <div class="span-18 append-1">
      <p class="topstoriesgraphic">TOP STORIES</p>

      <?php query_posts('category_name=Front Page 1&showposts=1'); ?>
      <?php while (have_posts()) : the_post(); ?>

     <h1 class="mainhed"><a href="<?php the_permalink(); ?>"><?php $values = get_post_custom_values('front_page_head'); echo $values[0]; ?></a></h1>
     <p class="mainsubhed"><?php the_title(); ?></p>
     <img class="mainimage" src="<?php $values = get_post_custom_values('large_image'); echo $values[0]; ?>" width="480" alt="<?php $values = get_post_custom_values('subhed'); echo $values[0]; ?>" />

     <!-- Get the bylines -->
     <?php 
     	$cn_byline1 = get_post_custom_values('byline1');
     	$cn_byline2 = get_post_custom_values('byline2');
     	$cn_byline3 = get_post_custom_values('byline3');

     	echo '<p style="font-size: 16px; font-weight: bold; margin-bottom: 10px; color: #6F7072">By ';
     	echo $cn_byline1[0];

     	if ($cn_byline3) { //We have three bylines
     		echo ', ';
			echo $cn_byline2[0];
			echo ' and ';
			echo $cn_byline3[0];
     	}

     	if ($cn_byline2 && !$cn_byline3) { //Two bylines
     		echo ' and ';
     		echo $cn_byline2[0];
     	}

     	echo '</p>';
     ?>

	   <p class="teaser"><?php $values = get_post_custom_values('blurb'); echo $values[0]; ?> 
	   <?php $values = get_post_custom_values('video_file');

	   if ($values) { /*The story has a video*/

	   	$title = get_post_custom_values('video_caption');
	   	if ($title) { /*And the video has a caption*/


		   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700" title="';
		   echo $title[0];
		   echo '">';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	   	} else { /*No caption—use generic*/
		   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700" title="Video by Cronkite News Service">';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	}} ?>

    </p>
	<?php endwhile; ?>

	<!-- END OF FIRST STORY -->

    <div class="span-19 topstoriesbox"> <!-- topstories -->

     <!-- STORY 2 START -->
     <div class="span-4 topstories1">
     <?php query_posts('category_name=Front Page 2&showposts=1'); ?>
      <?php while (have_posts()) : the_post(); ?>

      <img class="topstories_image" src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" width="130" alt=""  />

     <p class="topstories_hed"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

      <?php 
     	$cn_byline1 = get_post_custom_values('byline1');
     	$cn_byline2 = get_post_custom_values('byline2');
     	$cn_byline3 = get_post_custom_values('byline3');

     	echo '<p class="topstories_byline">By ';
     	echo $cn_byline1[0];

     	if ($cn_byline3) { //We have three bylines
     		echo ', ';
			echo $cn_byline2[0];
			echo ' and ';
			echo $cn_byline3[0];
     	}

     	if ($cn_byline2 && !$cn_byline3) { //Two bylines
     		echo ' and ';
     		echo $cn_byline2[0];
     	}

     	echo '</p>';
     ?>

	   <p class="story"><?php $values = get_post_custom_values('blurb'); echo $values[0]; ?> 
	   <?php $values = get_post_custom_values('video_file');

	   if ($values) { /*The story has a video*/

	   	$title = get_post_custom_values('video_caption');
	   	if ($title) { /*And the video has a caption*/
		   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700" title="';
		   echo $title[0];
		   echo '">';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	   } else { /*No caption—use generic*/
		   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700" title="Video by Cronkite News Service">';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	}} ?>

	</p>
      </div>
	<?php endwhile; ?>

     <!-- STORY 2 END -->

	  <!-- STORY 3 START -->
 <div class="span-4 topstories1">
 <?php query_posts('category_name=Front Page 3&showposts=1'); ?>
  <?php while (have_posts()) : the_post(); ?>

  <img class="topstories_image" src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" width="130" alt=""  />

 <p class="topstories_hed"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

     <?php 
     	$cn_byline1 = get_post_custom_values('byline1');
     	$cn_byline2 = get_post_custom_values('byline2');
     	$cn_byline3 = get_post_custom_values('byline3');

     	echo '<p class="topstories_byline">By ';
     	echo $cn_byline1[0];

     	if ($cn_byline3) { //We have three bylines
     		echo ', ';
			echo $cn_byline2[0];
			echo ' and ';
			echo $cn_byline3[0];
			
     	}

     	if ($cn_byline2 && !$cn_byline3) { //Two bylines
     		echo ' and ';
     		echo $cn_byline2[0];
     	}

     	echo '</p>';
     ?>
   <p class="story"><?php $values = get_post_custom_values('blurb'); echo $values[0]; ?> 
   <?php $values = get_post_custom_values('video_file');

   if ($values) { /*The story has a video*/

	$title = get_post_custom_values('video_caption');
	if ($title) { /*And the video has a caption*/
	   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700" title="';
	   echo $title[0];
	   echo '">';
	   echo '<img src="';
	   echo bloginfo('template_directory');
	   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	} else { /*No caption—use generic*/ 
	   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700" title="Video by Cronkite News Service">';
	   echo '<img src="';
	   echo bloginfo('template_directory');
	   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
}} ?>

</p>
  </div>
<?php endwhile; ?>

     <!-- STORY 3 END -->

     <!-- STORY 4 START -->
 <div class="span-4 topstories1">
 <?php query_posts('category_name=Front Page 4&showposts=1'); ?>
  <?php while (have_posts()) : the_post(); ?>

<img class="topstories_image" src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" width="130" alt=""  />

 <p class="topstories_hed"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

     <?php 
     	$cn_byline1 = get_post_custom_values('byline1');
     	$cn_byline2 = get_post_custom_values('byline2');
     	$cn_byline3 = get_post_custom_values('byline3');

     	echo '<p class="topstories_byline">By ';
     	echo $cn_byline1[0];

     	if ($cn_byline3) { //We have three bylines
     		echo ', ';
			echo $cn_byline2[0];
			echo ' and ';
			echo $cn_byline3[0];
     	}

     	if ($cn_byline2 && !$cn_byline3) { //Two bylines
     		echo ' and ';
     		echo $cn_byline2[0];
     	}

     	echo '</p>';
     ?>
   <p class="story"><?php $values = get_post_custom_values('blurb'); echo $values[0]; ?> 
   <?php $values = get_post_custom_values('video_file');

   if ($values) { /*The story has a video*/

	$title = get_post_custom_values('video_caption');
	if ($title) { /*And the video has a caption*/
	   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700" title="';
	   echo $title[0];
	   echo '">';
	   echo '<img src="';
	   echo bloginfo('template_directory');
	   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	} else { /*No caption—use generic*/ 
	   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700" title="Video by Cronkite News Service">';
	   echo '<img src="';
	   echo bloginfo('template_directory');
	   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
}} ?>

</p>
  </div>
<?php endwhile; ?>

    <!-- STORY 4 END -->

    <!-- STORY 5 START -->
 <div class="span-4 topstories1">
 <?php query_posts('category_name=Front Page 5&showposts=1'); ?>
  <?php while (have_posts()) : the_post(); ?>

  <img class="topstories_image" src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" width="130" alt=""  />

 <p class="topstories_hed"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

     <?php 
     	$cn_byline1 = get_post_custom_values('byline1');
     	$cn_byline2 = get_post_custom_values('byline2');
     	$cn_byline3 = get_post_custom_values('byline3');

     	echo '<p class="topstories_byline">By ';
     	echo $cn_byline1[0];

     	if ($cn_byline3) { //We have three bylines
     		echo ', ';
			echo $cn_byline2[0];
			echo ' and ';
			echo $cn_byline3[0];
     	}

     	if ($cn_byline2 && !$cn_byline3) { //Two bylines
     		echo ' and ';
     		echo $cn_byline2[0];
     	}

     	echo '</p>';
     ?>
   <p class="story"><?php $values = get_post_custom_values('blurb'); echo $values[0]; ?> 
   <?php $values = get_post_custom_values('video_file');

   if ($values) { /*The story has a video*/

	$title = get_post_custom_values('video_caption');
	if ($title) { /*And the video has a caption*/

	   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700" title="';
	   echo $title[0];
	   echo '">';
	   echo '<img src="';
	   echo bloginfo('template_directory');
	   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	} else { /*No caption—use generic*/
	   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700" title="Video by Cronkite News Service">';
	   echo '<img src="';
	   echo bloginfo('template_directory');
	   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
}} ?>

</p>
  </div>
<?php endwhile; ?>

     <!-- STORY 5 END -->

    </div> <!-- wrapper for span-19 -->

    <div class="span-19"> <!-- cronkite on tv -->

    	<div class="knockedoutbox">
			<div class="knockedoutbox_top"><div></div></div>
				<p class="knockedout">CRONKITE ON TV</p>
			<div class="knockedoutbox_bottom_wrapper">
			<div class="knockedoutbox_bottom"><div></div></div>	
    		</div>
    	</div>
    </div> <!-- cronkite on tv -->

    <div class="span-16 prepend-1 append-2 newswatch_box"> <!-- newswatch_box -->
   <div><img src="<?php bloginfo('template_directory'); ?>/img/monitor.jpg" alt="monitor" width="300" style="float: right;" /></div>
   <p class="newswatch_hed">Cronkite NewsWatch</p>
   <p class="newswatch_blurb">Cronkite Newswatch is a 30-minute nightly newscast produced by Cronkite students that can be seen on KAET 8.3 (COX 88) at 4:30 p.m. and <br />8 p.m. weeknights.</p>
    <div class="newswatch_links">
    <a href="<?php bloginfo('url'); ?>/latest-newswatch/">
    <img src="<?php bloginfo('template_directory'); ?>/img/blackpixel.jpg" alt="" width="8" height="8" /> Latest Cronkite NewsWatch
    </a>
    </div>

    <div class="newswatch_links" style="margin-bottom: 20px;"><a href="<?php bloginfo('url'); ?>/newswatch-archive">
    <img src="<?php bloginfo('template_directory'); ?>/img/blackpixel.jpg" alt="" width="8" height="8" /> NewsWatch Archives</a></div>

    <img src="<?php bloginfo('template_directory'); ?>/img/newswatch.jpg" width="200" height="130" style="float: left; padding-right: 20px;" alt="NewsWatch" />

     <div style="float: right;">
     <p class="subhed pushmedown">MORE TV</p>
    <div class="newswatch_links">
    <a href="<?php bloginfo('url') ?>/newswatch-en-espanol/">
    <img src="<?php bloginfo('template_directory'); ?>/img/blackpixel.jpg" alt="" width="8" height="8" /> Watch NewsWatch en Español on Telefutura</a></div>
    <div class="newswatch_links">
    <a href="<?php bloginfo('url') ?>/sun-devils-101/">
    <img src="<?php bloginfo('template_directory'); ?>/img/blackpixel.jpg" alt="" width="8" height="8" /> Watch Sun Devils 101 on Fox Sports Net</a></div>
</div>
</div> <!-- newswatch_box -->
</div> <!-- wrapper for main content -->

<?php
get_sidebar('home');
get_footer();
?>