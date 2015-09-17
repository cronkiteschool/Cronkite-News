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

  <!-- Start streaming video -->
<img src="http://cronkitenews.asu.edu/assets/images/election/newswatch_after.gif" alt="<b>LIVE:</b> NEWSWATCH ELECTION COVERAGE" width="276" height="40" style="margin-top:10px;margin-left:5px;" /><br /><br />
<div class="esidebar_image">
      	<a alt="Watch the NewsWatch election coverage streaming live" rel="shadowbox;height=460;width=800" href="http://www.ustream.tv/embed/recorded/26767991">
      	<img width="270" alt="LIVE: Click to see NewsWatch election coverage streaming live from 8 - 10:30 p.m." src="http://cronkitenews.jmc.asu.edu/assets/video/poster/2010election_poster2.jpg">
      	<br><br>
      	</a>
        <a alt="Watch the NewsWatch election coverage streaming live" rel="shadowbox;height=460;width=800" href="http://www.ustream.tv/embed/recorded/26767991"><p class="sidecaption_video">Click to see the NewsWatch election coverage.</p></a>
      	
  </div> <!--End of streaming video-->

  
  <!-- Nation wide coverage -->
<img src="http://cronkitenews.asu.edu/assets/images/election/nationwide_coverage.gif" alt="LIVE: NEWSWATCH ELECTION COVERAGE" width="270" height="40" style="margin-top:10px;margin-left:5px;" /><br /><br>
<div class="esidebar_image">

       <div style="width: 80px; height:115px; background-color:#eee; border: 1px solid #ddd; padding:3px; float:left; margin-right:5px; margin-bottom:5px;"><a href="http://www.dia-cny.com/electionday/" target="_blank"><img src="http://www.dia-cny.com/electionday/wp-content/uploads/2010/09/DIA-American-flag-image-thumbnail.jpg" alt="Democracy in Action" width="80" height="80" border="0" title="DIA-American-flag-image thumbnail" /></a><p style="font: 11px Arial, Helvetica, sans-serif; text-align:center;margin-top:5px;">Democracy in Action</p></div><p class="sidecaption_video"> 
       
       
       <strong>Cronkite News Service</strong> is a part of the <a href="http://www.dia-cny.com/electionday/" target="_blank">Democracy in Action</a>, a special project by the S. I. Newhouse School of Public Communications at Syracuse University.</p>
 <br /> <a href="http://www.dia-cny.com/electionday/" target="_blank">>> View national coverage from other schools</a> </div> 
<p>
  <!--End of nation wide coverage-->
  
  <!-- STORY-RELATED CONTENT GOES HERE -->
  
  
  
  
  <!-- Election races -->	
 <img src="http://cronkitenews.asu.edu/assets/images/election/live_results.gif" alt="Live results" width="270" height="40" style="margin-top:10px;margin-left:5px;" /><br /><br>
  Tentatively starting at 8 p.m. live results will be pulled in from the Arizona Secretary of State website. As soon as they're released, the results will be refreshed every five minutes. </p>
<p>To view the complete list of results go to the <a href="http://www.azsos.gov/election/2012/General/ElectionInformation.htm" target="_blank">Arizona Secretary of State website</a>.
</p>

        
        
  <div style="height:16px;" align="center"><span id="ajaxsidebarloader"></span></div>
		<div id="dynamicresultssidebar">

		<?php
				$res = curl_init("http://cronkitenewsonline.com/el2012/web.html");
				curl_exec($res);
		?>
		</div>
  

      
  <div class="searchbox sidefirst">
    <p>SEARCH</p>
    <form id="searchform" method="get" action="<?php bloginfo('url'); ?>/index.php">
      <div>
         <input type="text" name="s" id="s" style="width: 180px;" /><br />
         <input type="submit" value="Search"/>
      </div>
     </form>
     </div> <!-- end searchbox -->

    </div>  <!-- sidebar -->
    <?php
			$sidebar_ajax_url = 'http://'.$_SERVER[HTTP_HOST].'/'.'election-2012-sidebar'.'/';
			

	?>
			<script type="text/javascript">			
				window.setInterval(callAjaxSidebarContent, 300000);
				function callAjaxSidebarContent() { 
					jQuery("#ajaxsidebarloader").html("<img src='<?php bloginfo('template_directory'); ?>/img/ajax-loader.gif' />");
					jQuery("#dynamicresultssidebar").load("<?php echo $sidebar_ajax_url; ?>", function() {
  							jQuery("#ajaxsidebarloader").html("");
						}
					);
				}

				</script>
