<?php

/*
Template Name: Flash Page
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>
<div class="span-24 singlestory">

<?php 

if ( have_posts() ) while ( have_posts() ) : the_post(); 

echo '<h1 class="singlehed">';
echo the_title();
echo '</h1>';

the_content(); 

endwhile;
?>


</div>  <!-- main archives div -->
<?php

get_footer();

?>