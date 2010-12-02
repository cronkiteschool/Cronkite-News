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
if (CFCT_DEBUG) { cfct_banner(__FILE__); } ?>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
 
 	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.li-scroller.1.0.js"></script>
	
	<script type="text/javascript">
	

	function search_tweets_callback(data){
		if (data.results){
			for(var i=0; i<data.results.length;i++){
				$("#twiticker").append("<li><a href='http://twitter.com/" + data.results[i]['from_user'] + "' class='twiticker-link'> <span class='twiticker-user'>" + data.results[i]['from_user'] + "</span> " + data.results[i]['text'] + "</a></li>");
			}
						for(var i=0; i<data.results.length;i++){
				$("#twiticker").append("<li><a href='http://twitter.com/" + data.results[i]['from_user'] + "' class='twiticker-link'> <span class='twiticker-user'>" + data.results[i]['from_user'] + "</span> " + data.results[i]['text'] + "</a></li>");
			}


			$("ul#twiticker").liScroll();
		}
		else {
			$("div.theticker").html(" Sorry, Twitter seems to be down");
		}
	}

	function search_tweets(term){
		$.getJSON("http://search.twitter.com/search.json?q=" + term + "&callback=?",{}, search_tweets_callback);
	}

	function init(){
		search_tweets("from:cronkite_asu");
	}

	$(document).ready(function() {
		init();
	});
	
	
	// pass in the 'created_at' string returned from twitter //
	// stamp arrives formatted as Tue Apr 07 22:52:51 +0000 2009 //
	function parseTwitterDate($stamp)
	{		
	// convert to local string and remove seconds and year //		
		var date = new Date(Date.parse($stamp)).toLocaleString().substr(0, 16);
	// get the two digit hour //
		var hour = date.substr(-5, 2);
	// convert to AM or PM //
		var ampm = hour<12 ? ' a.m.' : ' p.m.';
		if (hour>12) hour-= 12;
		if (hour==0) hour = 12;
	// return the formatted string //
		return date.substr(0, 7)+' @ ' + hour + ':' + date.substr(13) + ampm;
	}
	
	</script>
	
 <div class="span-24 last footer">
      <div class="span-4 contactbox"> <!-- contactbox -->
      	<table class="contactus" style="margin-left: -30px;">
      	<tr>
      	<td>
      	<a href="http://www.facebook.com/#!/cronkitenewsonline?ref=ts"><img src="<?php bloginfo('template_directory'); ?>/img/logo-facebook.gif" width="45" height="45" alt="Facebook" /></a><br />Facebook
      	</td>
		<td>
      	<a href="http://twitter.com/cronkitenews"><img src="<?php bloginfo('template_directory'); ?>/img/logo-twitter.gif" width="45" height="45" alt="Twitter" /><br /></a>Twitter
      	</td></tr>
      	<tr>
      	<td>
      	<a href="<?php bloginfo('url'); ?>/feed"><img src="<?php bloginfo('template_directory'); ?>/img/logo-rss.gif" width="45" height="45" alt="RSS" /><br /></a>RSS
      	</td>
		<td>
      	<a href="mailto:cronkitenews@asu.edu"><img src="<?php bloginfo('template_directory'); ?>/img/logo-email.gif" width="45" height="45" alt="E-mail" /><br /></a>Contact
      	</td>
		</tr>
		</table>
      </div> <!-- contactbox -->
      <div class="span-18 last newssourcesbox"> <!-- newssourcebox -->
      	<table class="newssources">
      	<tr>
      	<td colspan="5">
      	<p class="subhedwhite">OTHER ARIZONA NEWS SOURCES</p>
      	</td>
      	</tr>
      	<tr class="yellowhed">
      	<td>
      	Phoenix Newspapers
      	</td>
		<td width="80">
      	TV News
      	</td>
		<td>
      	Arizona Politics on the Air
      	</td>
		<td>
      	AZ News: National Outlets
      	</td>
		<td>
      	Other State News
      	</td>
      	</tr>
		<tr class="whitetext">
      	<td>
      	<a href="http://azcapitoltimes.com/">Arizona Capitol Times</a><br />
      	<a href="http://www.azcentral.com/">Arizona Republic</a><br />
      	<a href="http://www.eastvalleytribune.com/">East Valley Tribune</a><br />
      	<a href="http://phoenix.bizjournals.com/phoenix/">Phoenix Business Journal</a><br />
      	<a href="http://www.phoenixnewtimes.com/">Phoenix New Times</a><br />
      	</td>
		<td>
      	<a href="http://www.azfamily.com/">3TV</a><br />
      	<a href="http://www.kpho.com/">CBS 5</a><br />
      	<a href="http://www.myfoxphoenix.com/">FOX 10</a><br />
      	<a href="http://www.azcentral.com/12news/">12 News</a><br />
      	<a href="http://www.abc15.com/">ABC15</a>      	
      	</td>
		<td>
      	<a href="http://kjzz.org/programs/hereandnow/">Here and Now (KJZZ)</a><br />
      	<a href="http://www.azpbs.org/horizon/index.php">Horizon (Eight)</a><br />
      	<a href="http://www.myfoxphoenix.com/subindex/news/politics/newsmaker_sunday">Newsmaker Sunday (FOX10)</a><br />
      	<a href="http://www.azfamily.com/results/?search=site&searchbutton=Go&keywords=politics+unplugged">Politics Unplugged (3TV)</a><br />
      	<a href="http://www.azcentral.com/results.php?catId=&aff=1100&searchkeyword=&searchcategory=*&cx=015840973018584549539%3A4mugrvjtm6k&cof=FORID%3A9&ie=UTF-8&q=sunday+square+off&address=">Sunday Square Off (12News)</a><br />
      	</td>
		<td>
      	<a href="http://www.foxnews.com/search-results/search?q=Arizona">FOX News</a><br />
      	      	<a href="http://www.msnbc.msn.com/?id=11881780&q=arizona&p=1&st=1&sm=user">MSNBC</a><br />
      	<a href="http://topics.nytimes.com/top/news/national/usstatesterritoriesandpossessions/arizona/index.html?scp=1-spot&sq=arizona&st=cse">New York Times</a><br />
      	<a href="http://www.npr.org/search/index.php?searchinput=ARIZONA">NPR</a><br />
      	<a href="http://find.politico.com/index.cfm?sort=date&reporters=&dt=all&key=ARIZONA">Politico</a><br />
      	</td>
		<td>
      	<a href="http://azstarnet.com/">Arizona Daily Star (Tucson)</a><br />
      	<a href="http://www.prescottaz.com/">Daily Courier (Prescott)</a><br />
      	<a href="http://azdailysun.com/">Daily Sun (Flagstaff)</a><br />
      	<a href="http://ktar.com/">KTAR (Phoenix)</a><br />
      	<a href="http://www.yumasun.com/">The Sun (Yuma)</a><br />
      	</td>
		</tr>
		
		</table>
		
      </div> <!-- newssourcebox -->
      <div class="span-24 last newstickerbox"> <!-- newstickerbox -->
      	<div class="span-1">
      	&nbsp;
      	</div>
      	<div class="span-3 newsticker"> <!-- newsticker -->
      	NEWS TICKER
      	</div> <!-- newsticker -->
      	<div class="span-19 last theticker"> <!-- theticker -->
      	<ul id="twiticker"></ul>
      	</div> <!-- theticker -->
		<div class="span-1 last">
			&nbsp;
		</div>
      </div> <!-- newstickerbox -->
  

            <div class="span-24 last"> <!-- copyright -->
      			
      
			   <div class="footerbox_bottom_wrapper">
                   
		  <div class="footerbox_bottom"><div> <p class="copyright">© COPYRIGHT WALTER CRONKITE SCHOOL OF JOURNALISM AND MASS COMMUNICATION<br />
		  ARIZONA STATE UNIVERSITY</p>
		  </div></div>
		 
		  </div>
      </div> <!-- copyright -->

 

   </div> <!-- footer --> 

 

  </div> <!-- wrapper for main content -->
  
<?php wp_footer(); ?>
    
  </div><!-- container -->  
  
</body> 
</html>

