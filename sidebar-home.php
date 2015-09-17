<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>

<!-- Sidebar for homepage -->


<div class="span-5 last sidebar">

<?php include 'youtube.php'; ?>



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
      
      
      
<?php cfct_misc('the-latest-home'); ?>
      


<?php cfct_misc('sidebarlinks-home'); ?>


    </div><!-- sidebar -->
