<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>

<!-- Sidebar for homepage -->


<div class="span-5 last sidebar">

	<div class="special_reports_header">
		<div class="special_reports_header_top"><div></div></div>
			<div class="special_reports_special"><a href="<?php bloginfo('url'); ?>/special-reports-by-month/">SPECIAL</a></div>
			<div class="special_reports_reports"><a href="<?php bloginfo('url'); ?>/special-reports-by-month/">REPORTS</a></div>
	</div>
	
	 <?php query_posts('category_name=Front Page Special Report&showposts=1'); ?>
  <?php while (have_posts()) : the_post(); ?>


      <div class="specialreport_box">
      	<div class="specialreport_image">
			<a href="<?php the_permalink(); ?>"><img src="<?php $values = get_post_custom_values('image'); echo $values[0]; ?>" width="132" alt="" /></a>
		</div>
		<p class="sr_blurb">
		<a href="<?php the_permalink(); ?>">
		<?php $values = get_post_custom_values('headline'); echo $values[0]; ?></a></p>
		<p class="sr_text"><?php $values = get_post_custom_values('blurb_1'); echo $values[0]; ?></p>
      
      <p class="cutline">
      <?php 
     	$cn_byline1 = get_post_custom_values('byline1');
     	$cn_byline2 = get_post_custom_values('byline2');
     	$cn_byline3 = get_post_custom_values('byline3');
     	
     	echo '—';
		
     	echo $cn_byline1[0];
     	
     	
     	if ($cn_byline3) { //We have three bylines
     		
		echo ',<br />';
     	
     	echo $cn_byline2[0];
     	
		echo '<br />and ';
     	
     	echo $cn_byline3[0];
     	
     	}
     	
     	if ($cn_byline2 && !$cn_byline3) { //Two bylines
     		echo '<br />and ';
     	
     	echo $cn_byline2[0];
     	
     	}
     ?>
     </p>
      
      </div> <!-- specialreport_box -->
      <div class="special_reports_box_bottom_wrapper">
		  <div class="special_reports_box_bottom"><div></div></div>
		</div>

      <?php endwhile; ?>
      
      
      
      <div class="othernews_box">
      	<p class="subhed">THE LATEST</p>

	 <?php query_posts('&showposts=5&cat=-9,-10,-11,-12,-13'); ?>
  <?php while (have_posts()) : the_post(); ?>
		<p class="othernews"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php //Do we have video?
			$values = get_post_custom_values('video_file');			
			if ($values) { //There's a video
				echo '<a href="'. $values[0] .'" rel="shadowbox;height=360;width=700">&nbsp;';
			   echo '<img src="';
			   echo bloginfo('template_directory');
			   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
			}
		?>
		
		
		
		</p>
      	
      	 <?php endwhile; ?>
      	 
      	<p class="viewmore"><a href="<?php bloginfo('url'); ?>/archives/"><b>VIEW MORE STORIES</b></a></p>
      	
      </div> <!-- othernews -->
      
          <div class="searchbox" style="margin-left: 0; padding-left: 0;">
    <p>SEARCH</p>
    <form id="searchform" method="get" action="<?php bloginfo('url'); ?>/index.php">
      <div>
         <input type="text" name="s" id="s" style="width: 180px;" /><br />
         <input type="submit" value="Search" />
      </div>
     </form>
     </div> <!-- end searchbox -->

<?php cfct_misc('sidebarlinks'); ?>


    </div><!-- sidebar -->
