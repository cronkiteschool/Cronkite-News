<?php
/**
 * @package WordPress
 * @subpackage N21_Theme
 * Template Name: Election 2010 Races Popup
*/

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
<?php get_header(); ?>

<style type="text/css">
#props {width: 590px; height: 235px; border: solid 1px #333333;}
.box {position: relative; width: 80px; height: 80px; overflow: hidden;background-color: #555555; float: left; margin: 1px; text-align: center; font-family: sans-serif;}
.box:hover {background-color: #999999;}

.passed {position: relative; width: 80px; height: 80px; overflow: hidden;float: left; margin: 1px; text-align: center; font-family: sans-serif;background-color: #339933; padding: 18px;}
.passed:hover {background-color: #99cc99;}

.failed{position: relative; width: 80px; height: 80px; overflow: hidden;float: left; margin: 1px; text-align: center; font-family: sans-serif;background-color: #993333; padding: 18px;}
.failed:hover {background-color: #cc6666;}

h2 { color: #ffffff; font-weight: 100; font-family: sans-serif; line-height: 100%; }
.box p { }

#fed, #state {width: 590px; overflow: auto; height: 235px; border: solid 1px #333333;}

</style>

<div id="props">

    <div class="passed">
        <h2>106</h2>
        <p>Health Care</p>
    </div>

    <div class="failed">
        <h2>107</h2>
        <p>Affirmative Action</p>
    </div>

    <div class="box">
        <h2>109</h2>
        <p>Hunting Rights</p>
    </div>

    <div class="box">
        <h2>110</h2>
        <p>Land Swaps</p>
    </div>

    <div class="box">
        <h2>111</h2>
        <p>Lt. Governor</p>
    </div>

    <div class="box">
        <h2>112</h2>
        <p>Initiatives</p>
    </div>

    <div class="box">
        <h2>113</h2>
        <p>Union Ballots</p>
    </div>

    <div class="box">
        <h2>203</h2>
        <p>Medical Marijuana</p>
    </div>

    <div class="box">
        <h2>301</h2>
        <p>State Debt</p>
    </div>

    <div class="box">
        <h2>302</h2>
        <p>State Debt</p>
    </div>
    <div style="clear:both;width:100%;}"></div>
<div id="fed">
<iframe width="425" height="300" frameborder="0"
 scrolling="no" marginheight="0" marginwidth="0"
 src="http://www.govtrack.us/embed/mapframe.xpd?state=AZ&bounds=-121.17919921875,39.36827914916011,-101.97509765625,30.845647420182598"></iframe>

</div>

<div id="state">
<h3>Statewide Elected:</h3>

<p>Governor:</p>
<p>Attorney General:</p>
<p>Secretary of State:</p>
<p>Superintendent of Public Instruction:</p>
<p>Corporation Commission:</p>
<p>Treasurer:</p>
<p>State Mine Inspector:</p>
</div>

<a href="<?php bloginfo('url'); ?>">View Congressional Race Results</a> | <a href="http://www.google.com/maps/ms?ie=UTF8&hl=en&msa=0&msid=104360049505016815502.000476526c754cba76675&z=11">View Statewide Race Results</a>
</div>
<div style="clear:both;width:100%;}"></div>
