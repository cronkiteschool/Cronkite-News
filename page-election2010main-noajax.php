<?php
/**
 * @package WordPress
 * @subpackage N21_Theme
 * Template Name: 2010 Election Home Page NO AJAX
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();
?>

<div class="span-15 append-2 singlestory"> <!-- singlestory -->

<h1 style="font-weight: bold; color: #D1242A;">LIVE ELECTION COVERAGE</h1>

<!-- PROPS -->

<style type="text/css">
#props { position: relative; width: 580px; }

#props h2, { font-family: Helvetica Neue, sans-serif; padding: 10 0px 0px 10px; margin: 0px; font-size: 20pt; font-weight: 500; }
.explainer { font-weight: 200; font-size: 10pt; }
#title {position: absolute; text-align: center; left: 5; color: #000000; font-weight: 500; font-family: sans-serif; line-height: 100%; font-size: 20pt; padding: 3px; margin: 0px;}
#the { font-size:9pt; font-style: italic;}

#prop_intro { width: 382px; height: 29px;position: relative; overflow: hidden; float: left; margin: 1px; text-align: center; font-family: sans-serif; background-color: #ffffff; border-top: solid 1px #333333;}

.prop_box { width: 190px; height: 32px;position: relative; overflow: hidden; float: left; margin: 1px; text-align: center; font-family: sans-serif; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px;}
.prop_box a { width: 190px; height: 32px; display:block; background-color: #000000; color: #ffffff; text-decoration: none; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px;}
.prop_box a:hover { background-color: #555555; color: #ffffff; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px;}

.passed {position: relative; width: 190px; height: 32px; overflow: hidden;float: left; margin: 1px; text-align: center; font-family: sans-serif; }
.passed a {width: 190px; height: 32px; display: block; background-color: #339933; color: #ffffff; text-decoration: none; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px;}
.passed a:hover {width: 190px; height: 32px; background-color: #99cc99; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px;}

.failed{position: relative; width: 190px; height: 32px; overflow: hidden;float: left; margin: 1px; text-align: center; font-family: sans-serif;}
.failed a {width: 190px; height: 32px; display: block; background-color: #993333; color: #ffffff; text-decoration: none; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px;}
.failed a:hover {width: 190px; height: 32px; background-color: #cc6666; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px;}

.prop_num { position: absolute; text-align: center; left: 5; color: #ffffff; font-weight: 500; font-family: sans-serif; line-height: 100%; font-size: 20pt; padding: 3px; margin: 0px;}
.slug { float: right; text-align: center; font-size: 8pt; padding:0px 5px 5px 5px; margin: 10px 3px 0px 0px; text-transform: uppercase; font-weight: 300;}

#prop_bottom { width: 570px; clear: both;}
#read_more { float: right; padding: 3px; width: 350px; font-weight: 500; font-size: 11pt; text-align: right; }
#legend {float: left; clear: left; padding: 3px; width:200px; font-weight: 200; font-size: 10pt; }
.key { padding: 2px; margin-right: 2px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; color: #ffffff; float: left; font-weight: 200; font-size: 10pt; }
</style>

<div id="props">
    <div id="prop_intro">
       <div id="title">TRACKING<span id="the"> the </span>PROPOSITIONS </div>
    </div>
	<div class="passed">
        <a href="<?php bloginfo('url'); ?>/2010/11/voters-approve-proposition-allowing-health-care-plan-opt-out/"><div class="prop_num">106: </div>
        <div class="slug">Health Care</div></a>
    </div>

    <div class="passed">
        <a href="<?php bloginfo('url'); ?>/2010/11/voters-approve-proposition-to-cut-affirmative-action-by-state-local-governments-2/"><div class="prop_num">107: </div>
        <div class="slug">Affirmative Action</div></a>
    </div>

    <div class="failed">
        <a href="<?php bloginfo('url'); ?>/2010/11/voters-reject-proposition-to-make-hunting-fishing-constitutional-rights-2/"><div class="prop_num">109: </div>
        <div class="slug">Hunting Rights</div></a>
    </div>

    <div class="prop_box">
       <a href="<?php bloginfo('url'); ?>/2010/11/2695/"> <div class="prop_num">110: </div>
        <div class="slug">Land Swaps</div></a>
    </div>

    <div class="failed">
        <a href="<?php bloginfo('url'); ?>/2010/11/voters-say-no-to-lieutenant-governor-for-arizona/"><div class="prop_num">111: </div>
        <div class="slug">Lt. Governor</div></a>
    </div>

    <div class="prop_box">
        <a href="<?php bloginfo('url'); ?>/2010/11/proposition-to-move-up-deadline-for-filing-citizens-initiatives-too-close-to-call-2/"><div class="prop_num">112: </div>
        <div class="slug">Ballot Initiatives</div></a>
    </div>

    <div class="passed">
        <a href="<?php bloginfo('url'); ?>/2010/11/voters-approve-secret-ballot-proposition-for-union-organizing/"><div class="prop_num">113: </div>
        <div class="slug">Union Ballots</div></a>
    </div>

    <div class="prop_box">
        <a href="<?php bloginfo('url'); ?>/2010/11/medical-marijuana-proposition-too-close-to-call/"><div class="prop_num">203: </div>
        <div class="slug">Medical Marijuana</div></a>
    </div>

    <div class="failed">
        <a href="<?php bloginfo('url'); ?>/2010/11/leaders-rejection-of-fund-transfer-propositions-means-deep-cuts/"><div class="prop_num">301: </div>
        <div class="slug">Conservation Fund</div></a>
    </div>

    <div class="failed">
        <a href="<?php bloginfo('url'); ?>/2010/11/leaders-rejection-of-fund-transfer-propositions-means-deep-cuts/"><div class="prop_num">302: </div>
        <div class="slug">First Things First</div></a>
    </div>

<div id="prop_bottom">
	<div id="legend">
		<div class="key" style="color: #000000;">Key:</div> <div class="key" style="background-color:#339933;">passed</div>  <div class="key" style="background-color:#993333;">failed</div> <div class="key" style="background-color:#000000;">TBD</div>
		</div>
	<div id="read_more"><a href="<?php bloginfo('url'); ?>/2010/11/election-results/">See congressional and statewide election results</a></div>
</div>
</div>
   <div style="clear:both;width:100%; padding-bottom: 20px;"></div>

<!-- END PROPS -->

<?php query_posts('category_name=Election2010&posts_per_page=-1'); ?>
  <?php while (have_posts()) : the_post(); ?>

<h1 style="font-size: 22px; font-weight: bold; padding-bottom: 0; margin-bottom: 5px;"><?php the_title() ?></h1>
<?php
$cn_pubed = get_post_custom_values('publishable_editors_note');
if ($cn_pubed) {
	echo '<p class="publishable_editors_note"><b>Editor’s Note: </b>';
	echo $cn_pubed[0];
	echo '</p>';
}
?>
<p class="byline">

 <!-- Get the bylines -->
  <?php 
	$cn_byline1 = get_post_custom_values('byline1');
	$cn_byline2 = get_post_custom_values('byline2');
	$cn_byline3 = get_post_custom_values('byline3');
	
	echo 'By ';
	echo '<span class="upper">';
	echo $cn_byline1[0];
	echo '</span>';
	
	if ($cn_byline3) { //We have three bylines
		
	echo ', ';
	echo '<span class="upper">';
	echo $cn_byline2[0];
	echo '</span>';
	echo ' and ';
	echo '<span class="upper">';
	echo $cn_byline3[0];
	echo '</span>';			
	}
	
	if ($cn_byline2 && !$cn_byline3) { //Two bylines
		echo ' and ';
	echo '<span class="upper">';
	echo $cn_byline2[0];
	echo '</span>';
	}
 ?>

<br /> 

</p>

<?php the_content(); ?>

<?php endwhile;?>

<?php
	
	cfct_misc('sharethis'); 
	echo '</div>';

get_sidebar('election2010-noajax');

get_footer();

?>