<?php

// This file is part of the Carrington JAM Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>

<!-- Sidebar for inner pages -->


<div class="span-7 last sidebar_inner">

      <div class="othernews_box">
      	<p class="subhed">THE LATEST</p>
	 <?php 
	 
	 query_posts('showposts=10'); 
	 
	 ?>
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
