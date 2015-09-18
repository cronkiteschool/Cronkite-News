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
     
<!-- STORY-RELATED CONTENT GOES HERE -->
		<!-- Video -->	
		
	  <?php $cn_videofile = get_post_custom_values('video_file'); 
       if ($cn_videofile[0]) { //We have video
       // Figure out if this is Vimeo or Cronkite News
		   $url = parse_url($values[0]);
			$player_height = 360;
			if ($url[host] == "player.vimeo.com") {
				$player_height = 394;	
			}
       echo '<p class="subhed">VIDEO STORY</p>';
        $cn_videoposter = get_post_custom_values('video_poster_image');
		$cn_videocredit = get_post_custom_values('video_credit');
		$cn_videocaption = get_post_custom_values('video_caption');
       
      	?>
      	
      	<div class="sidebar_image">
      	<a href="<?php echo $cn_videofile[0]; ?>" rel="shadowbox;height=<?php echo $player_height; ?>;width=700" alt="<?php echo $cn_videocaption[0]; ?>" />
      	<img src="<?php echo $cn_videoposter[0]; ?>" alt="<?php echo $cn_videocaption[0]; ?>" />
      	<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
      	</a>
      	<p class="sidecaption_video"><?php echo $cn_videocaption[0]; ?></p>
      	<?php 
      	$video_credit = get_post_custom_values('video_credit'); 
      	if ($video_credit) {
      	echo '<p class="photo_credit">Video story by ';
      	echo $video_credit[0];
		echo '</p>';
		}
		?>
      	
      	</div>
      
      <?php	} ?>
      
      
      <!-- End video -->
      
	
	
		<!-- Video -->
	  <?php $cns_videofile = get_post_custom_values('cns_video_file'); 
       if ($cns_videofile[0]) { //We have CNS video
       // Figure out if this is Vimeo or Cronkite News
		   $url = parse_url($values[0]);
			$player_height = 360;
			if ($url[host] == "player.vimeo.com") {
				$player_height = 394;	
			}
       echo '<p class="subhed">MORE ON THIS STORY</p>';
        $cns_videoposter = get_post_custom_values('cns_video_poster_image');
		$cns_videocredit = get_post_custom_values('cns_video_credit');
		$cns_videocaption = get_post_custom_values('cns_video_caption');
       
      	?>
      	
      	<div class="sidebar_image">
      	<a class="video_link" href="<?php echo $cns_videofile[0]; ?>" rel="shadowbox;height=<?php echo $player_height; ?>;width=700" alt="<?php echo $cns_videocaption[0]; ?>" />
      	<img src="<?php echo $cns_videoposter[0]; ?>" alt="<?php echo $cns_videocaption[0]; ?>" />
      	<span class="overlay"><img src="<?php bloginfo('template_directory'); ?>/img/tp24.png" width="58" height="58" alt="Watch video" /></span><br />
      	</a>
      	<p class="sidecaption"><?php echo $cns_videocaption[0]; ?></p>

		<?php
		echo '<p class="photo_credit">Video story by ';
      	echo $cns_videocredit[0];
      	echo '</p>';
		?>
      	
      	</div>
      <?php	} ?>
      
      
      <!-- End video -->	
	
      <?php $cn_photo1 = get_post_custom_values('photo1'); 
       if ($cn_photo1[0]) { //Photo1      
       	$cn_thumb1 = get_post_custom_values('photo1_thumb'); 
      	echo '<div class="sidebar_image">';
      	echo '<a href="';
      	echo $cn_photo1[0];
      	echo '" rel="shadowbox" alt="';
      	$caption1 = get_post_custom_values('photo1_caption'); 
      	echo $caption1[0];      	
      	echo '" >';
      	echo '<img src="';
      	echo $cn_thumb1[0];
      	echo ' "alt="';
      	echo $caption1[0];
      	echo '" title="';
      	echo $caption1[0];
      	echo '" /> </a>';
      	echo '<p class="sidecaption">';
      	echo $caption1[0];
      	echo '</p>';
		echo '<p class="photo_credit">Photo by ';
      	$cn_credit1 = get_post_custom_values('photo1_credit'); 
      	echo $cn_credit1[0];
      	echo '</p>';
      	echo '</div>';
      	}
      ?>
      
      <?php $cn_photo2 = get_post_custom_values('photo2'); 
       if ($cn_photo2[0]) { //Photo2   
       	$cn_thumb2 = get_post_custom_values('photo2_thumb'); 
      	echo '<div class="sidebar_image">';
      	echo '<a href="';
      	echo $cn_photo2[0];
      	echo '" rel="shadowbox" alt="';
      	$caption2 = get_post_custom_values('photo2_caption'); 
      	echo $caption2[0];
      	echo '" >';
      	echo '<img src="';
      	echo $cn_thumb2[0];
      	echo ' "alt="';
      	echo $caption2[0];
      	echo '" title="';
      	echo $caption2[0];
      	echo '" /> </a>';
      	      	echo '<p class="sidecaption">';
      	echo $caption2[0];
      	      	echo '</p>';
		echo '<p class="photo_credit">Photo by ';
      	$cn_credit2 = get_post_custom_values('photo2_credit'); 
      	echo $cn_credit2[0];
      	echo '</p>';
      	echo '</div>';
      	}
      ?>
      
      <?php $cn_photo3 = get_post_custom_values('photo3'); 
       if ($cn_photo3[0]) { //Photo3
       	$cn_thumb3 = get_post_custom_values('photo3_thumb'); 
      	echo '<div class="sidebar_image">';
      	echo '<a href="';
      	echo $cn_photo3[0];
      	echo '" rel="shadowbox" alt="';
      	$caption3 = get_post_custom_values('photo3_caption'); 
      	echo $caption3[0];
      	echo '" >';
      	echo '<img src="';
      	echo $cn_thumb3[0];
      	echo ' "alt="';
      	echo $caption3[0];
      	echo '" title="';
      	echo $caption3[0];
      	echo '" /> </a>';
      	      	echo '<p class="sidecaption">';
      	echo $caption3[0];
      	      	echo '</p>';
		echo '<p class="photo_credit">Photo by ';
      	$cn_credit3 = get_post_custom_values('photo3_credit'); 
      	echo $cn_credit3[0];
      	echo '</p>';
      	echo '</div>';
      	}
      ?>
      
      <?php $cn_photo4 = get_post_custom_values('photo4'); 
       if ($cn_photo4[0]) { //Photo4
       	$cn_thumb4 = get_post_custom_values('photo4_thumb'); 
      	echo '<div class="sidebar_image">';
      	echo '<a href="';
      	echo $cn_photo4[0];
      	echo '" rel="shadowbox" alt="';
      	$caption4 = get_post_custom_values('photo4_caption'); 
      	echo $caption4[0];
      	echo '" >';
      	echo '<img src="';
      	echo $cn_thumb4[0];
      	echo '" alt="';
      	echo $caption4[0];
      	echo '" title="';
      	echo $caption4[0];
      	echo '" /> </a>';
      	      	echo '<p class="sidecaption">';
      	echo $caption4[0];
      	      	echo '</p>';
		echo '<p class="photo_credit">Photo by ';
      	$cn_credit4 = get_post_custom_values('photo4_credit'); 
      	echo $cn_credit4[0];
      	echo '</p>';
      	echo '</div>';
      	}
      ?>
      
      <?php $cn_photo5 = get_post_custom_values('photo5'); 
       if ($cn_photo5[0]) { //Photo5
       	$cn_thumb5 = get_post_custom_values('photo5_thumb'); 
      	echo '<div class="sidebar_image">';
      	echo '<a href="';
      	echo $cn_photo5[0];
      	echo '" rel="shadowbox" alt="';
      	$caption5 = get_post_custom_values('photo5_caption'); 
      	echo $caption5[0];
      	echo '" >';
      	echo '<img src="';
      	echo $cn_thumb5[0];
      	echo '" alt="';
      	echo $caption5[0];
      	echo '" title="';
      	echo $caption5[0];
      	echo '" /> </a>';
      	      	echo '<p class="sidecaption">';
      	echo $caption5[0];
      	      	echo '</p>';
		echo '<p class="photo_credit">Photo by ';
      	$cn_credit5 = get_post_custom_values('photo5_credit'); 
      	echo $cn_credit5[0];
      	echo '</p>';
      	echo '</div>';
      	}
      ?>
      
      <?php $cn_photo6 = get_post_custom_values('photo6'); 
       if ($cn_photo6[0]) { //Photo6
       	$cn_thumb6 = get_post_custom_values('photo6_thumb'); 
      	echo '<div class="sidebar_image">';
      	echo '<a href="';
      	echo $cn_photo6[0];
      	echo '" rel="shadowbox" alt="';
      	$caption6 = get_post_custom_values('photo6_caption'); 
      	echo $caption6[0];
      	echo '" >';
      	echo '<img src="';
      	echo $cn_thumb6[0];
      	echo '" alt="';
      	echo $caption6[0];
      	echo '" title="';
      	echo $caption6[0];
      	echo '" /> </a>';
      	      	echo '<p class="sidecaption">';
      	echo $caption6[0];
      	      	echo '</p>';
		echo '<p class="photo_credit">Photo by ';
      	$cn_credit6 = get_post_custom_values('photo6_credit'); 
      	echo $cn_credit6[0];
      	echo '</p>';
      	echo '</div>';
      	}
      ?>
      
      <?php $cn_photo7 = get_post_custom_values('photo7'); 
       if ($cn_photo7[0]) { //Photo7
       	$cn_thumb7 = get_post_custom_values('photo7_thumb'); 
      	echo '<div class="sidebar_image">';
      	echo '<a href="';
      	echo $cn_photo7[0];
      	echo '" rel="shadowbox" alt="';
      	$caption7 = get_post_custom_values('photo7_caption'); 
      	echo $caption7[0];
      	echo '" >';
      	echo '<img src="';
      	echo $cn_thumb7[0];
      	echo '" alt="';
      	echo $caption7[0];
      	echo '" title="';
      	echo $caption7[0];
      	echo '" /> </a>';
      	      	echo '<p class="sidecaption">';
      	echo $caption7[0];
      	      	echo '</p>';
		echo '<p class="photo_credit">Photo by ';
      	$cn_credit7 = get_post_custom_values('photo7_credit'); 
      	echo $cn_credit7[0];
      	echo '</p>';
      	echo '</div>';
      	}
      ?>


      <?php $cn_photo8 = get_post_custom_values('photo8'); 
       if ($cn_photo8[0]) { //Photo8
       	$cn_thumb8 = get_post_custom_values('photo8_thumb'); 
      	echo '<div class="sidebar_image">';
      	echo '<a href="';
      	echo $cn_photo8[0];
      	echo '" rel="shadowbox" alt="';
      	$caption8 = get_post_custom_values('photo8_caption'); 
      	echo $caption8[0];
      	echo '" >';
      	echo '<img src="';
      	echo $cn_thumb8[0];
      	echo '" alt="';
      	echo $caption8[0];
      	echo '" title="';
      	echo $caption8[0];
      	echo '" /> </a>';
      	      	echo '<p class="sidecaption">';
      	echo $caption8[0];
      	      	echo '</p>';
		echo '<p class="photo_credit">Photo by ';
      	$cn_credit8 = get_post_custom_values('photo8_credit'); 
      	echo $cn_credit8[0];
      	echo '</p>';
      	echo '</div>';
      	}
      ?>
      
      <?php $cn_photo9 = get_post_custom_values('photo9'); 
       if ($cn_photo9[0]) { //Photo9
       	$cn_thumb9 = get_post_custom_values('photo9_thumb'); 
      	echo '<div class="sidebar_image">';
      	echo '<a href="';
      	echo $cn_photo9[0];
      	echo '" rel="shadowbox" alt="';
      	$caption9 = get_post_custom_values('photo9_caption'); 
      	echo $caption9[0];
      	echo '" >';
      	echo '<img src="';
      	echo $cn_thumb9[0];
      	echo '" alt="';
      	echo $caption9[0];
      	echo '" title="';
      	echo $caption9[0];
      	echo '" /> </a>';
      	      	echo '<p class="sidecaption">';
      	echo $caption9[0];
      	      	echo '</p>';
		echo '<p class="photo_credit">Photo by ';
      	$cn_credit9 = get_post_custom_values('photo9_credit'); 
      	echo $cn_credit9[0];
      	echo '</p>';
      	echo '</div>';
      	}
      ?>
      
      <?php $cn_photo10 = get_post_custom_values('photo10'); 
       if ($cn_photo10[0]) { //Photo5
       	$cn_thumb10 = get_post_custom_values('photo10_thumb'); 
      	echo '<div class="sidebar_image">';
      	echo '<a href="';
      	echo $cn_photo10[0];
      	echo '" rel="shadowbox" alt="';
      	$caption10 = get_post_custom_values('photo10_caption'); 
      	echo $caption10[0];
      	echo '" >';
      	echo '<img src="';
      	echo $cn_thumb10[0];
      	echo '" alt="';
      	echo $caption10[0];
      	echo '" title="';
      	echo $caption10[0];
      	echo '" /> </a>';
      	      	echo '<p class="sidecaption">';
      	echo $caption10[0];
      	      	echo '</p>';
		echo '<p class="photo_credit">Photo by ';
      	$cn_credit10 = get_post_custom_values('photo10_credit'); 
      	echo $cn_credit10[0];
      	echo '</p>';
      	echo '</div>';
      	}
      ?>

      <!-- END OF PIX -->
      
      <!-- START GLANCE BOX -->
      <?php 
      $boxinpage = get_post_custom_values('glance_box_in_page');
      
      if ((!$boxinpage[0] == 'yes') || ($boxinpage[0] == 'no')) {
      
		  $values = get_post_custom_values('glance_box_headline'); 
		   if ($values[0]) { 
			echo '<div class="glance_box_headline">';
	
			echo $values[0];
			echo '</div>';
			}
	 		$values = get_post_custom_values('glance_box'); 
		   	if ($values[0]) { 
				echo '<div class="glance_box">';
				echo wpautop($values[0], $br=1);
				echo '</div>';
			}
      } 
      
      // End Glance Box
      ?>       
      
      <!-- END GLANCE BOX -->

	<?php include 'youtube.php'; ?>

</div><!-- sidebar -->
