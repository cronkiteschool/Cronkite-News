      <div class="othernews_box">
      	<p class="subhed">THE LATEST</p>

	 <?php 
	 

	 query_posts('&showposts=6&cat=-9,-10,-11,-12,-13'); ?>
  <?php while (have_posts()) : the_post(); ?>

		<p class="othernews"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php //Do we have video?
			$values = get_post_custom_values('video_file');			
			if ($values) { //There's a video
			// Figure out if this is Vimeo or Cronkite News
		   $url = parse_url($values[0]);
			$player_height = 360;
			if ($url[host] == "player.vimeo.com") {
				$player_height = 394;	
			}
				echo '<a href="'. $values[0] .'" rel="shadowbox;height='. $player_height .';width=700">&nbsp;';
			   echo '<img src="';
			   echo bloginfo('template_directory');
			   echo '/img/icon-video.gif" width="14" height="8" alt="Watch video" /></a>';
			}
		?>
		</p>
      	
      	 <?php endwhile; ?>
      	 
      	<p class="viewmore"><a href="<?php bloginfo('url'); ?>/archives/"><b>VIEW MORE STORIES</b></a></p>
      	
      </div> <!-- othernews -->