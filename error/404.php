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

get_header();

?>

<div class="span-15 append-2 singlestory"> <!-- singlestory -->

<h1 class="singlehed">Not found</h1>

<p>Sorry, it looks like you’re following an outdated or mistyped URL.</p>
<p>Please use the search box in the sidebar to find what you’re looking for.</p>

</div>

<?php
get_sidebar('archives');

get_footer();

?>