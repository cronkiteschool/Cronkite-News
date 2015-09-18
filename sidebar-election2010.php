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
<div class="othernews_box" style="margin-bottom: 10px;">
<p class="subhed" style="margin-bottom: 5px;">NewsWatch Election Coverage</p>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/AC_QuickTime.js" language="JavaScript" type="text/javascript"></script>

<div id="videoslot" style="cursor: pointer;">
	<img src="http://cronkitenews.jmc.asu.edu/assets/video/poster/2010election_poster2.jpg" alt="Click to watch" width="270" height="202" />
</div>
<script language="JavaScript" type="text/javascript">
   $("#videoslot").click(function () { 
       $(this).html('<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" width="270" height="202" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=7,3,0,0" align="middle"><param name="src" value="http://cronkitenews.jmc.asu.edu/assets/video/poster/2010election_poster2.jpg"><param name="type" value="video/quicktime"><param name="autoplay" value="true"><param name="controller" value="true"><param name="scale" value="tofit"><param name="target" value="myself"><param name="qtsrc" value="http://cronkitenews.jmc.asu.edu/assets/video/special/newswatch.mov"><embed src="http://cronkitenews.jmc.asu.edu/assets/video/poster/2010election_poster2.jpg" width="270" height="202" pluginspage="http://www.apple.com/quicktime/download/" align="middle" type="video/quicktime" autoplay="true" controller="true" bgcolor="black" scale="tofit" target="myself" qtsrc="http://cronkitenews.jmc.asu.edu/assets/video/special/newswatch.mov"></object>');
    });
</script>

<p style="padding-top: 10px;"><a href="<?php bloginfo('url'); ?>/newswatch-election-night-coverage/" target="_blank">Watch larger</a></p>

</div> <!--End of streaming video-->

<!-- STORY-RELATED CONTENT GOES HERE -->
	<!-- Election races -->	
	<div style="height:16px;" align="center"><span id="ajaxsidebarloader"></span></div>
	<div id="dynamicresultssidebar">

	<?php include('/Volumes/Election08/results/web.html'); ?>

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

    </div><!-- sidebar -->

	<?php
			$sidebar_ajax_url = 'http://'.$_SERVER[HTTP_HOST].'/'.'election2010results-sidebar-2'.'/';
	?>
			<script type="text/javascript">			
				window.setInterval(callAjaxSidebarContent, 100000);
				function callAjaxSidebarContent() { 
					jQuery("#ajaxsidebarloader").html("<img src='<?php bloginfo('template_directory'); ?>/img/ajax-loader.gif' />");
					jQuery("#dynamicresultssidebar").load("<?php echo $sidebar_ajax_url; ?>", function() {
  							jQuery("#ajaxsidebarloader").html("");
						}
					);
				}

				</script>