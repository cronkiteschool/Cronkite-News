<?php
/*
Template Name: Client Feed
*/
 
$numposts = 10;
 
function yoast_rss_date( $timestamp = null ) {
  $timestamp = ($timestamp==null) ? time() : $timestamp;
  echo date(DATE_RSS, $timestamp);
}

 
$posts = query_posts('showposts='.$numposts);
 
$lastpost = $numposts - 1;
 
header("Content-Type: application/rss+xml; charset=UTF-8");

?>
<?php print '<?xml version="1.0"?>'; ?><rss version="2.0">
<channel>
  <title>Cronkite News Client Feed</title>
  <link>http://cronkitenews.asu.edu</link>
  <description>This feed is for consumption by the client site.</description>
  <language>en-us</language>
  <pubDate><?php yoast_rss_date( strtotime($ps[$lastpost]->post_date_gmt) ); ?></pubDate>
  <lastBuildDate><?php yoast_rss_date( strtotime($ps[$lastpost]->post_date_gmt) ); ?></lastBuildDate>
  <managingEditor>cronkitenews@asu.edu</managingEditor>
<?php foreach ($posts as $post) { ?>
  <item>
    <title><?php echo get_the_title($post->ID); ?></title>
    <link><?php echo get_permalink($post->ID); ?></link>
    <description>
    <?php 
    echo '<![CDATA[';
    $cn_slug = get_post_custom_values('slug', $post->ID);
    $cn_note = get_post_custom_values('editors_note', $post->ID);
    $cn_publishable_note = get_post_custom_values('publishable_editors_note', $post->ID);
    $cn_byline1 = get_post_custom_values('byline1', $post->ID);
	$cn_byline2 = get_post_custom_values('byline2', $post->ID);
	$cn_byline3 = get_post_custom_values('byline3', $post->ID);
	
	//Make bylines uppercase
	$cn_byline1[0] = strtoupper($cn_byline1[0]);
	$cn_byline2[0] = strtoupper($cn_byline2[0]);
	$cn_byline3[0] = strtoupper($cn_byline3[0]);
	
	echo '<ul><li>';
	echo 'Slug: ';
	echo $cn_slug[0];
	echo '</li>';
	if ($cn_note[0]) {
		echo '<li>Note: ';
		echo $cn_note[0];
		echo '</li>';
	}
    if ($cn_publishable_note[0]) {
    	echo '<li>Publishable editor\'s note: ';
    	echo $cn_publishable_note[0];
    	echo '</li>';
    }
    
    echo '</ul>';
    
    	//Roll credits
     	
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

	echo 'Cronkite News<br /><br />';

    
	echo $post->post_content.'<br/>';
	
	//echo '<img src="';
	
	$cn_photo1 = get_post_custom_values('photo1', $post->ID); 
	$cn_photo2 = get_post_custom_values('photo2', $post->ID); 
	$cn_photo3 = get_post_custom_values('photo3', $post->ID); 
	$cn_photo4 = get_post_custom_values('photo4', $post->ID); 
	$cn_photo5 = get_post_custom_values('photo5', $post->ID); 
	$cn_photo6 = get_post_custom_values('photo6', $post->ID); 
	$cn_photo7 = get_post_custom_values('photo7', $post->ID); 
	$cn_photo8 = get_post_custom_values('photo8', $post->ID); 
	$cn_photo9 = get_post_custom_values('photo9', $post->ID); 
	$cn_photo10 = get_post_custom_values('photo10', $post->ID); 

	if ($cn_photo1[0]) {
		$cn_thumb1 = get_post_custom_values('photo1_thumb', $post->ID); 
		$cn_credit1 = get_post_custom_values('photo1_credit', $post->ID); 
		$cn_caption1 = get_post_custom_values('photo1_caption', $post->ID); 
		echo '<a href="';
      	echo $cn_photo1[0];
      	echo '">';
      	echo '<img src="';
      	echo $cn_thumb1[0];
      	echo '" /> </a><br />';
      	echo $cn_caption1[0];
		echo '<br />';
      	echo $cn_credit1[0];
      	echo '<br />';	
	}
	
		if ($cn_photo2[0]) {
		$cn_thumb2 = get_post_custom_values('photo2_thumb', $post->ID); 
		$cn_credit2 = get_post_custom_values('photo2_credit', $post->ID); 
		$cn_caption2 = get_post_custom_values('photo2_caption', $post->ID); 
		echo '<a href="';
      	echo $cn_photo2[0];
      	echo '">';
      	echo '<img src="';
      	echo $cn_thumb2[0];
      	echo '" /> </a><br />';
      	echo $cn_caption2[0];
		echo '<br />';
      	echo $cn_credit2[0];
      	echo '<br />';	
	}
	
		if ($cn_photo3[0]) {
		$cn_thumb3 = get_post_custom_values('photo3_thumb', $post->ID); 
		$cn_credit3 = get_post_custom_values('photo3_credit', $post->ID); 
		$cn_caption3 = get_post_custom_values('photo3_caption', $post->ID); 
		echo '<a href="';
      	echo $cn_photo3[0];
      	echo '">';
      	echo '<img src="';
      	echo $cn_thumb3[0];
      	echo '" /> </a><br />';
      	echo $cn_caption3[0];
		echo '<br />';
      	echo $cn_credit3[0];
      	echo '<br />';	
	}
	
		if ($cn_photo4[0]) {
		$cn_thumb4 = get_post_custom_values('photo4_thumb', $post->ID); 
		$cn_credit4 = get_post_custom_values('photo4_credit', $post->ID); 
		$cn_caption4 = get_post_custom_values('photo4_caption', $post->ID); 
		echo '<a href="';
      	echo $cn_photo4[0];
      	echo '">';
      	echo '<img src="';
      	echo $cn_thumb4[0];
      	echo '" /> </a><br />';
      	echo $cn_caption4[0];
		echo '<br />';
      	echo $cn_credit4[0];
      	echo '<br />';	
	}
	
		if ($cn_photo5[0]) {
		$cn_thumb5 = get_post_custom_values('photo5_thumb', $post->ID); 
		$cn_credit5 = get_post_custom_values('photo5_credit', $post->ID); 
		$cn_caption5 = get_post_custom_values('photo5_caption', $post->ID); 
		echo '<a href="';
      	echo $cn_photo5[0];
      	echo '">';
      	echo '<img src="';
      	echo $cn_thumb5[0];
      	echo '" /> </a><br />';
      	echo $cn_caption5[0];
		echo '<br />';
      	echo $cn_credit5[0];
      	echo '<br />';	
	}
	
		if ($cn_photo6[0]) {
		$cn_thumb6 = get_post_custom_values('photo6_thumb', $post->ID); 
		$cn_credit6 = get_post_custom_values('photo6_credit', $post->ID); 
		$cn_caption6 = get_post_custom_values('photo6_caption', $post->ID); 
		echo '<a href="';
      	echo $cn_photo6[0];
      	echo '">';
      	echo '<img src="';
      	echo $cn_thumb6[0];
      	echo '" /> </a><br />';
      	echo $cn_caption6[0];
		echo '<br />';
      	echo $cn_credit6[0];
      	echo '<br />';	
	}
	
		if ($cn_photo7[0]) {
		$cn_thumb7 = get_post_custom_values('photo7_thumb', $post->ID); 
		$cn_credit7 = get_post_custom_values('photo7_credit', $post->ID); 
		$cn_caption7 = get_post_custom_values('photo7_caption', $post->ID); 
		echo '<a href="';
      	echo $cn_photo7[0];
      	echo '">';
      	echo '<img src="';
      	echo $cn_thumb7[0];
      	echo '" /> </a><br />';
      	echo $cn_caption7[0];
		echo '<br />';
      	echo $cn_credit7[0];
      	echo '<br />';	
	}
	
	if ($cn_photo8[0]) {
		$cn_thumb8 = get_post_custom_values('photo8_thumb', $post->ID); 
		$cn_credit8 = get_post_custom_values('photo8_credit', $post->ID); 
		$cn_caption8 = get_post_custom_values('photo8_caption', $post->ID); 
		echo '<a href="';
      	echo $cn_photo8[0];
      	echo '">';
      	echo '<img src="';
      	echo $cn_thumb8[0];
      	echo '" /> </a><br />';
      	echo $cn_caption8[0];
		echo '<br />';
      	echo $cn_credit8[0];
      	echo '<br />';	
	}
	
		if ($cn_photo9[0]) {
		$cn_thumb9 = get_post_custom_values('photo9_thumb', $post->ID); 
		$cn_credit9 = get_post_custom_values('photo9_credit', $post->ID); 
		$cn_caption9 = get_post_custom_values('photo9_caption', $post->ID); 
		echo '<a href="';
      	echo $cn_photo9[0];
      	echo '">';
      	echo '<img src="';
      	echo $cn_thumb9[0];
      	echo '" /> </a><br />';
      	echo $cn_caption9[0];
		echo '<br />';
      	echo $cn_credit9[0];
      	echo '<br />';	
	}
	
		if ($cn_photo10[0]) {
		$cn_thumb10 = get_post_custom_values('photo10_thumb', $post->ID); 
		$cn_credit10 = get_post_custom_values('photo10_credit', $post->ID); 
		$cn_caption10 = get_post_custom_values('photo10_caption', $post->ID); 
		echo '<a href="';
      	echo $cn_photo10[0];
      	echo '">';
      	echo '<img src="';
      	echo $cn_thumb10[0];
      	echo '" /> </a><br />';
      	echo $cn_caption10[0];
		echo '<br />';
      	echo $cn_credit10[0];
      	echo '<br />';	
	}

	
	echo ']]>';  
	
	?>
    
    </description>
    	

    
    <pubDate><?php yoast_rss_date( strtotime($post->post_date_gmt) ); ?></pubDate>
    <guid><?php echo get_permalink($post->ID); ?></guid>
  </item>
<?php } ?>
</channel>
</rss>