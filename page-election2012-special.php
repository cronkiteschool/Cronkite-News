<?php
/**
 * @package WordPress
 * @subpackage N21_Theme
 * Template Name: 2012 Election Special
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>


<div class="span-15 append-2 singlestory"> <!-- singlestory -->


<img src="http://cronkitenews.asu.edu/assets/images/election/election-banner-usaaz3.jpg" width="650" height="80" />
<br /><br />

<div id="election-wrapper">

<div id="election-main">
	
<table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#eee">
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td width="270" rowspan="2" valign="top"><a href="http://cronkitenewsonline.com/election-coverage-2012/"><img src="http://cronkitenews.asu.edu/assets/images/12/11/7-election-front.jpg" alt="Cronkite News Service Special Election Day Coverage" border="0" /></a></td>
        <td width="316"><h3><a href="http://cronkitenewsonline.com/2012/11/cronkite-news-election-day-coverage/">Cronkite News Election Day Coverage</a></h3></td>
      </tr>
      <tr>
        <td valign="top">
        <p class="topstories_byline">By Cronkite News Staff</p>
        <p class="story">If you missed any of the Election Day coverage by Cronkite News Service, including our live blog posts, results on Arizona races and propositions and the NewsWatch special Election Day newscast, go to our Election 2012 page. </p><br />
        <p style="clear:both; float:right; margin-right:10px;">
<a href="http://cronkitenewsonline.com/2012/11/cronkite-news-election-day-coverage/">Read story.</a>
</p>
        
        
        </td>
      </tr>
    </table></td>
  </tr>
</table>

</div>


<div id="election-left">
<h5>Full Election Coverage</h5>
<hr />
<?php query_posts('category_name=Election2012&posts_per_page=30'); ?>
  <?php while (have_posts()) : the_post(); ?>

<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

<?php endwhile;?>
</div>

<div id="election-right">
<h5>Proposition Coverage</h5>
<hr />
<strong>Proposition 114</strong><br />
<?php query_posts('category_name=Proposition&tag=prop114'); ?>
  <?php while (have_posts()) : the_post(); ?>

<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

<?php endwhile;?>

<strong>Proposition 115</strong><br />
<?php query_posts('category_name=Proposition&tag=prop115'); ?>
  <?php while (have_posts()) : the_post(); ?>

<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

<?php endwhile;?>

<strong>Proposition 116</strong><br />
<?php query_posts('category_name=Proposition&tag=prop116'); ?>
  <?php while (have_posts()) : the_post(); ?>

<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

<?php endwhile;?>

<strong>Proposition 117</strong><br />
<?php query_posts('category_name=Proposition&tag=prop117'); ?>
  <?php while (have_posts()) : the_post(); ?>

<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

<?php endwhile;?>

<strong>Proposition 118</strong><br />
<?php query_posts('category_name=Proposition&tag=prop118'); ?>
  <?php while (have_posts()) : the_post(); ?>

<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

<?php endwhile;?>

<strong>Proposition 119</strong><br />
<?php query_posts('category_name=Proposition&tag=prop119'); ?>
  <?php while (have_posts()) : the_post(); ?>

<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

<?php endwhile;?>
<strong>
 Proposition 120</strong><br />
<?php query_posts('category_name=Proposition&tag=prop120'); ?>
  <?php while (have_posts()) : the_post(); ?>

<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

<?php endwhile;?>

<strong>Proposition 121</strong><br />
<?php query_posts('category_name=Proposition&tag=prop121'); ?>
  <?php while (have_posts()) : the_post(); ?>

<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

<?php endwhile;?>

<strong>Proposition 204</strong><br />
<?php query_posts('category_name=Proposition&tag=prop204'); ?>
  <?php while (have_posts()) : the_post(); ?>

<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

<?php endwhile;?>
</div>

</div>


<?php
	
	
	echo '</div>';



get_sidebar('election2012-static');

get_footer();

?>