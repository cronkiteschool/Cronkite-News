<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();
?>
<!-- Home page content goes here -->


    <div class="span-18">
      <p class="topstoriesgraphic">TOP STORIES</p>

      <?php query_posts('category_name=Front Page 1&showposts=1'); ?>
      <?php while (have_posts()) : the_post(); ?>
      
     <h1 class="mainhed"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
     <a href="<?php the_permalink(); ?>"><img class="mainimage" src="<?php $values = get_post_custom_values('large_image'); echo $values[0]; ?>" width="480" alt="<?php the_title(); ?>" /></a>
     
     <!-- Get the bylines -->     
     
     <?php 
     	$cn_byline1 = get_post_custom_values('byline1');
     	$cn_byline2 = get_post_custom_values('byline2');
     	$cn_byline3 = get_post_custom_values('byline3');
     	
     	echo '<p class="front1credit">By ';
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

	   <?php /*Different video callouts depending on if it's a NewsWatch story or not*/	   
	   $values = get_post_custom_values('video_file');	     
		$is_newswatch = 0;
		foreach((get_the_category()) as $category) { 
			$catiam = $category->cat_name;
			if ($catiam == 'NewsWatch Story') {
				$is_newswatch = 1;
			}
		}
		   if ($values and ($is_newswatch==0)) { /*The story has a video and is NOT a NewsWatch package*/
		   $credit = get_post_custom_values('video_credit');		   	   
		   echo '<p class="front1credit">';
		   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">';
		   echo 'Video Story<br />By ';
		   echo $credit[0] . '&nbsp;';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a></p>';
	} 
		   if ($values and ($is_newswatch==1)) { /*The story has a video and IS a NewsWatch package*/
		   $credit = get_post_custom_values('video_credit');		   		   
		   echo '&nbsp;<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	} 	
	?>
	
	
      </p>
	<?php endwhile; ?>
	
	<!-- END OF FIRST STORY -->
    
    <div class="span-19 topstoriesbox"> <!-- topstories -->
     
     <!-- STORY 2 START -->
     <div class="span-6 topstories1">
     <?php query_posts('category_name=Front Page 2&showposts=1'); ?>
      <?php while (have_posts()) : the_post(); ?>
      
      
      <a href="<?php the_permalink(); ?>"><img class="topstories_image" src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" width="220" alt="<?php the_title(); ?>"  /></a>
      
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

	   <?php /*Different video callouts depending on if it's a NewsWatch story or not*/	   
	   $values = get_post_custom_values('video_file');	     
		$is_newswatch = 0;
		foreach((get_the_category()) as $category) { 
			$catiam = $category->cat_name;
			if ($catiam == 'NewsWatch Story') {
				$is_newswatch = 1;
			}
		}
		   if ($values and ($is_newswatch==0)) { /*The story has a video and is NOT a NewsWatch package*/
		   $credit = get_post_custom_values('video_credit');		   	   
		   echo '<p class="topstories_credit">';
		   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">';
		   echo 'Video Story<br />By ';
		   echo $credit[0] . '&nbsp;';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a></p>';
	} 
		   if ($values and ($is_newswatch==1)) { /*The story has a video and IS a NewsWatch package*/
		   $credit = get_post_custom_values('video_credit');		   		   
		   echo '&nbsp;<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	} 	
	?>
	
	</p>
      </div>
	<?php endwhile; ?>
     
     <!-- STORY 2 END -->
     
	  <!-- STORY 3 START -->
 <div class="span-6 topstories1">
 <?php query_posts('category_name=Front Page 3&showposts=1'); ?>
  <?php while (have_posts()) : the_post(); ?>
  
  
   <a href="<?php the_permalink(); ?>"><img class="topstories_image" src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" width="220" alt="<?php the_title(); ?>"  /></a>
  
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

	   <?php /*Different video callouts depending on if it's a NewsWatch story or not*/	   
	   $values = get_post_custom_values('video_file');	     
		$is_newswatch = 0;
		foreach((get_the_category()) as $category) { 
			$catiam = $category->cat_name;
			if ($catiam == 'NewsWatch Story') {
				$is_newswatch = 1;
			}
		}
		   if ($values and ($is_newswatch==0)) { /*The story has a video and is NOT a NewsWatch package*/
		   $credit = get_post_custom_values('video_credit');		   	   
		   echo '<p class="topstories_credit">';
		   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">';
		   echo 'Video Story<br />By ';
		   echo $credit[0] . '&nbsp;';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a></p>';
	} 
		   if ($values and ($is_newswatch==1)) { /*The story has a video and IS a NewsWatch package*/
		   $credit = get_post_custom_values('video_credit');		   		   
		   echo '&nbsp;<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	} 	
	?>
	
</p>
  </div>
<?php endwhile; ?>
 
     <!-- STORY 3 END -->
     
     	  <!-- STORY 4 START -->
 <div class="span-6 topstories1">
 <?php query_posts('category_name=Front Page 4&showposts=1'); ?>
  <?php while (have_posts()) : the_post(); ?>
  
  
   <a href="<?php the_permalink(); ?>"><img class="topstories_image" src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" width="220" alt="<?php the_title(); ?>"  /></a>
  
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

	   <?php /*Different video callouts depending on if it's a NewsWatch story or not*/	   
	   $values = get_post_custom_values('video_file');	     
		$is_newswatch = 0;
		foreach((get_the_category()) as $category) { 
			$catiam = $category->cat_name;
			if ($catiam == 'NewsWatch Story') {
				$is_newswatch = 1;
			}
		}
		   if ($values and ($is_newswatch==0)) { /*The story has a video and is NOT a NewsWatch package*/
		   $credit = get_post_custom_values('video_credit');		   	   
		   echo '<p class="topstories_credit">';
		   echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">';
		   echo 'Video Story<br />By ';
		   echo $credit[0] . '&nbsp;';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a></p>';
	} 
		   if ($values and ($is_newswatch==1)) { /*The story has a video and IS a NewsWatch package*/
		   $credit = get_post_custom_values('video_credit');		   		   
		   echo '&nbsp;<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">';
		   echo '<img src="';
		   echo bloginfo('template_directory');
		   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
	} 	
	?>

</p>
  </div>
<?php endwhile; ?>
 
     <!-- STORY 4 END -->
     
          	  
    </div> <!-- wrapper for span-19 -->
    
    <div class="span-18"> <!-- cronkite on tv -->
    	

    	<div class="knockedoutbox">
			<div class="knockedoutbox_top"><div></div></div>
				<p class="knockedout">CRONKITE ON TV</p>
			<div class="knockedoutbox_bottom_wrapper">
			<div class="knockedoutbox_bottom"><div></div></div>	
    		</div>

    	</div>
    </div> <!-- cronkite on tv -->
    
    <div class="span-16 prepend-1 append-2 newswatch_box"> <!-- newswatch_box -->
   <div><img src="<?php bloginfo('template_directory'); ?>/img/monitor.jpg" alt="Monitor" width="300" style="float: right;" /></div>
   
       <!-- Find the latest NewsWatch -->
    <?php
    
    $args= array(
	'post_type' => 'newswatch',
	'posts_per_page' => 1
	);
	query_posts($args);

	while (have_posts()) : the_post();
    $cn_videofile = get_post_custom_values('episode_video');
    
    ?>
    
    <?php endwhile; ?>
    
   <p class="newswatch_hed"><a href="<?php echo $cn_videofile[0]; ?>" rel="shadowbox;height=360;width=700">Cronkite NewsWatch</a></p>
   <p class="newswatch_blurb">Cronkite NewsWatch, a 30-minute nightly newscast produced by Cronkite students, airs weekdays on KAET 8.3 (COX 88) at 4:30 p.m. and 8 p.m.</p>
    <div class="newswatch_links">
    <!-- <a href="<?php bloginfo('url'); ?>/latest-newswatch/"> -->
    

    <a href="<?php echo $cn_videofile[0]; ?>" rel="shadowbox;height=360;width=700">
    <img src="<?php bloginfo('template_directory'); ?>/img/blackpixel.jpg" alt="" width="8" height="8" /> Latest Cronkite NewsWatch
    </a>
    </div>
    
    <div class="newswatch_links" style="margin-bottom: 20px;"><a href="<?php bloginfo('url'); ?>/recent-newswatch-newscasts/">
    <img src="<?php bloginfo('template_directory'); ?>/img/blackpixel.jpg" alt="" width="8" height="8" /> Cronkite NewsWatch Archives</a></div>

    <img src="<?php bloginfo('template_directory'); ?>/img/newswatch3.jpg" width="236" height="144" style="float: left; padding-right: 20px;" alt="NewsWatch" />

     <div style="float: right;">
     <p class="subhed pushmedown">MORE TV</p>

    <div class="newswatch_links">
    <a href="<?php bloginfo('url') ?>/sun-devils-101/">
    <img src="<?php bloginfo('template_directory'); ?>/img/blackpixel.jpg" alt="" width="8" height="8" /> Watch Sun Devils 101 on FOX Sports Arizona</a></div>
    
        <div class="newswatch_links">
    <a href="<?php bloginfo('url') ?>/newswatch-en-espanol/">
    <img src="<?php bloginfo('template_directory'); ?>/img/blackpixel.jpg" alt="" width="8" height="8" /> Watch Cronkite NewsWatch en Español on TeleFutura</a></div>
</div>
    
    </div> <!-- newswatch_box -->
    </div> <!-- wrapper for main content -->
    
<?php
get_sidebar('home');
get_footer();

?>


