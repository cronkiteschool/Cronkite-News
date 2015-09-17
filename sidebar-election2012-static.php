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
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/AC_QuickTime.js" language="JavaScript" type="text/javascript"></script>


<!-- Sidebar for election night w/o AJAX -->


<div class="span-7 last sidebar_inner">

<!-- Start map -->
<div class="electionmap" style="margin-bottom: 10px; margin-top:20px;">
<h5>CONGRESSIONAL DISTRICT RACES</h5>
<hr />
<p>Click on each congressional district to learn more:</p>

<p><a alt="Click on the map to learn more about the congressional district races." rel="shadowbox" href="http://cronkitenews.asu.edu/assets/Interactive/12/10/101012_CongressionalDistricts/CongressionalDistricts2012.html"><img src="http://cronkitenews.asu.edu/assets/images/election/az_congressionaldistrict_races.jpg" border="0"/></a></p>
</div> 
<!--End of map-->

  <div class="electionmap">
    <h5>2012 ELECTION RESOURCES</h5>
    <hr />
    <a href="http://www.azsos.gov/election/2012/General/ElectionInformation.htm" target="_blank"> General Election Information</a><br />
    <a href="http://www.azsos.gov/election/2012/General/fulllisting.htm" target="_blank">List of General Candidates</a>    <br />
    <a href="http://www.azsos.gov/election/2012/Info/PubPamphlet/english/contents.htm" target="_blank"> Ballot Propositions (English)</a><br />
    <a href="http://www.azsos.gov/election/2012/Info/PubPamphlet/spanish/contents.htm" target="_blank">Ballot Propositions (Spanish)</a><br />
    <a href="https://servicearizona.com/webapp/evoter/selectLanguage" target="_blank">Register to Vote</a>
    </div>

		<!-- Election races -->

  <div class="electionsearchbox electionsidefirst">
    <p>SEARCH</p>
    <form id="searchform" method="get" action="<?php bloginfo('url'); ?>/index.php">
      <div>
         <input type="text" name="s" id="s" style="width: 180px;" /><br />
         <input type="submit" value="Search"/>
      </div>
    </form>
    </div> <!-- end searchbox -->

<?php cfct_misc('sidebarlinks'); ?>

</div><!-- sidebar -->
