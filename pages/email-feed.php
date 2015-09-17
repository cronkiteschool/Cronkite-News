<?php
/*
Template Name: Email Feed
*/

function yoast_rss_date( $timestamp = null ) {
  $timestamp = ($timestamp==null) ? time() : $timestamp;
  echo date(DATE_RSS, $timestamp);
} 
header("Content-Type: application/rss+xml; charset=UTF-8");
?>
<?php print '<?xml version="1.0"?>'; ?><rss version="2.0">

<channel>
  <title>Cronkite News Service</title>
  <link>http://cronkitenewsonline.com/email-feed/</link>
  <description>Feed for consumption by Campaign Monitor.</description>
  <language>en-us</language>
  <pubDate><?php yoast_rss_date( strtotime($ps[$lastpost]->post_date_gmt) ); ?></pubDate>
  <lastBuildDate><?php yoast_rss_date( strtotime($ps[$lastpost]->post_date_gmt) ); ?></lastBuildDate>
  <managingEditor>cronkitenews@asu.edu</managingEditor>

<!-- Get the top post -->
<?php query_posts('category_name=Front Page 1&showposts=1'); ?>
      <?php while (have_posts()) : the_post(); ?>
		  <item>
			<title><?php echo get_the_title($post->ID); ?></title>
			<link><?php echo get_permalink($post->ID); ?></link>
			<description>
			<?php 
			echo '<![CDATA[';
			?>
			<img src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>" width="220" height="170" /><br />
			<h3><strong><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></strong></h3>
	
	
			<?php
			$cn_byline1 = get_post_custom_values('byline1', $post->ID);
			$cn_byline2 = get_post_custom_values('byline2', $post->ID);
			$cn_byline3 = get_post_custom_values('byline3', $post->ID);
		
			echo 'By ';
			echo $cn_byline1[0];
	
			if (strlen($cn_byline3[0]) > 0) { //We have three bylines
		
			echo ', ';
			echo $cn_byline2[0];
			echo ' and ';
			echo $cn_byline3[0];		
			}
	
			if (strlen($cn_byline2[0]) > 0 && strlen($cn_byline3[0]) < 1) { //Two bylines
				echo ' and ';
			echo $cn_byline2[0];
			}
			echo '<br />';
			$values = get_post_custom_values('blurb'); echo $values[0];
			echo '<br />]]>';  
			?>
			</description>
		  
			<pubDate><?php yoast_rss_date( strtotime($post->post_date_gmt) ); ?></pubDate>
			<guid><?php echo get_permalink($post->ID); ?></guid>
		  </item>
	   <?php endwhile; ?>

<?php query_posts('category_name=Front Page 2&showposts=1'); ?>
      <?php while (have_posts()) : the_post(); ?>
		  <item>
			<title><?php echo get_the_title($post->ID); ?></title>
			<link><?php echo get_permalink($post->ID); ?></link>
			<description>
			<?php 
			echo '<![CDATA[';
			?>
			<img src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>" width="220" height="170" /><br />
			<h3><strong><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></strong></h3>
			<?php

			$cn_byline1 = get_post_custom_values('byline1', $post->ID);
			$cn_byline2 = get_post_custom_values('byline2', $post->ID);
			$cn_byline3 = get_post_custom_values('byline3', $post->ID);

			?>

			<?php

			echo 'By ';
			echo $cn_byline1[0];
	
			if (strlen($cn_byline3[0]) > 0) { //We have three bylines
		
			echo ', ';
			echo $cn_byline2[0];
			echo ' and ';
			echo $cn_byline3[0];		
			}
	
			if (strlen($cn_byline2[0]) > 0 && strlen($cn_byline3[0]) < 1) { //Two bylines
				echo ' and ';
			echo $cn_byline2[0];
			}
			echo '<br />';
	
			//bylines done
			$values = get_post_custom_values('blurb'); echo $values[0];
			echo '<br />]]>';  
			?>
			</description>
		  
			<pubDate><?php yoast_rss_date( strtotime($post->post_date_gmt) ); ?></pubDate>
			<guid><?php echo get_permalink($post->ID); ?></guid>
		  </item>
	   <?php endwhile; ?>

<?php query_posts('category_name=Front Page 3&showposts=1'); ?>
      <?php while (have_posts()) : the_post(); ?>
		  <item>
			<title><?php echo get_the_title($post->ID); ?></title>
			<link><?php echo get_permalink($post->ID); ?></link>
			<description>
			<?php 
			echo '<![CDATA[';
			?>
			<img src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>" width="220" height="170" /><br />
			<h3><strong><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></strong></h3>
			<?php
			$cn_byline1 = get_post_custom_values('byline1', $post->ID);
			$cn_byline2 = get_post_custom_values('byline2', $post->ID);
			$cn_byline3 = get_post_custom_values('byline3', $post->ID);
		
			echo 'By ';
			echo $cn_byline1[0];
	
			if (strlen($cn_byline3[0]) > 0) { //We have three bylines
		
			echo ', ';
			echo $cn_byline2[0];
			echo ' and ';
			echo $cn_byline3[0];		
			}
	
			if (strlen($cn_byline2[0]) > 0 && strlen($cn_byline3[0]) < 1) { //Two bylines
				echo ' and ';
			echo $cn_byline2[0];
			}
			echo '<br />';
	
			//bylines done
			$values = get_post_custom_values('blurb'); echo $values[0];
			echo '<br />]]>';  
			?>
			</description>
		  
			<pubDate><?php yoast_rss_date( strtotime($post->post_date_gmt) ); ?></pubDate>
			<guid><?php echo get_permalink($post->ID); ?></guid>
		  </item>
	   <?php endwhile; ?>

<?php query_posts('category_name=Front Page 4&showposts=1'); ?>
      <?php while (have_posts()) : the_post(); ?>
		  <item>
			<title><?php echo get_the_title($post->ID); ?></title>
			<link><?php echo get_permalink($post->ID); ?></link>
			<description>
			<?php 
			echo '<![CDATA[';
			?>
			<img src="<?php $values = get_post_custom_values('small_image'); echo $values[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>" width="220" height="170" /><br />
			<h3><strong><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></strong></h3>
			<?php
	
			$cn_byline1 = get_post_custom_values('byline1', $post->ID);
			$cn_byline2 = get_post_custom_values('byline2', $post->ID);
			$cn_byline3 = get_post_custom_values('byline3', $post->ID);
		
			echo 'By ';
			echo $cn_byline1[0];
	
			if (strlen($cn_byline3[0]) > 0) { //We have three bylines
		
			echo ', ';
			echo $cn_byline2[0];
			echo ' and ';
			echo $cn_byline3[0];		
			}
	
			if (strlen($cn_byline2[0]) > 0 && strlen($cn_byline3[0]) < 1) { //Two bylines
				echo ' and ';
			echo $cn_byline2[0];
			}
			echo '<br />';
	
			$values = get_post_custom_values('blurb'); echo $values[0];
			echo '<br />]]>';  
			?>
			</description>
		  
			<pubDate><?php yoast_rss_date( strtotime($post->post_date_gmt) ); ?></pubDate>
			<guid><?php echo get_permalink($post->ID); ?></guid>
		  </item>
	 <?php endwhile; ?>

	<?php query_posts('&showposts=6&cat=-9,-10,-11,-12,-13,-18'); ?>
	<?php while (have_posts()) : the_post(); ?>
		  <item>
			<title><?php echo get_the_title($post->ID); ?></title>
			<link><?php echo get_permalink($post->ID); ?></link>
			    <description>
					<![CDATA[<h3><strong><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></strong></h3>]]>
				</description>
			<pubDate><?php yoast_rss_date( strtotime($post->post_date_gmt) ); ?></pubDate>
			<guid><?php echo get_permalink($post->ID); ?></guid>
		</item>
	 <?php endwhile; ?>
</channel>
</rss>