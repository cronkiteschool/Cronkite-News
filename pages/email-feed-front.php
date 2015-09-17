<?php
/*
Template Name: Email Feed Front
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
  <link><?php bloginfo('url'); ?>/email-feed-front/</link>
  <description>Feed for consumption by Campaign Monitor for front page list.</description>
  <language>en-us</language>
  <pubDate><?php yoast_rss_date( strtotime($ps[$lastpost]->post_date_gmt) ); ?></pubDate>
  <lastBuildDate><?php yoast_rss_date( strtotime($ps[$lastpost]->post_date_gmt) ); ?></lastBuildDate>
  <managingEditor>cronkitenews@asu.edu</managingEditor>

	<?php query_posts('&showposts=6&cat=-9,-10,-11,-12,-13'); ?>
	<?php while (have_posts()) : the_post(); ?>
		  <item>
			<title><?php echo get_the_title($post->ID); ?></title>
			<link><?php echo get_permalink($post->ID); ?></link>
			    <description>
					<?php 
					echo '<![CDATA[';
					echo '<p>';
					$values = get_post_custom_values('blurb'); echo $values[0];
					echo '</p>';
					echo ']]>';  
					?>
				</description>
			<pubDate><?php yoast_rss_date( strtotime($post->post_date_gmt) ); ?></pubDate>
			<guid><?php echo get_permalink($post->ID); ?></guid>
		</item>
	 <?php endwhile; ?>
</channel>
</rss>