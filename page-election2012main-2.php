<?php
/**
 * @package WordPress
 * @subpackage N21_Theme
 * Template Name: 2012 v.2 Election Home Page
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>


<div class="span-15 append-2 singlestory"> <!-- singlestory -->

<img width="650" height="60" src="http://cronkitenews.asu.edu/assets/images/election/election2012_banner.gif">
<br><br>

<div style="background:#eee; border: 1px solid #ddd; height: 100px; width: 630px;">
<p style="margin-left:-20px;"><img width="600" height="60" src="http://cronkitenews.asu.edu/assets/images/election/live_blog_header.png" alt="Cronkite News live blog coverage" /></p>
<h2 style="margin-top: -25px;"><center>
Cronkite News Election Coverage
</center></h2>
</div>
<div id="dynamiccontent"></div>

<?php
	
	cfct_misc('sharethis'); 
	echo '</div>';

		$ajax_url = 'http://'.$_SERVER[HTTP_HOST].'/'.'election2012-content'.'/';
	?>

			<script type="text/javascript">
				window.setInterval(callAjaxContent, 60000);
				jQuery(document).ready(function(){
					jQuery.ajaxSetup({cache:false});
					callAjaxContent();
				});
				function callAjaxContent() { 
					jQuery("#ajaxloader").html("<img src='<?php bloginfo('template_directory'); ?>/img/ajax-loader.gif' />");
					jQuery("#dynamiccontent").load("<?php echo $ajax_url; ?>", function() {
  							jQuery("#ajaxloader").html("");
  						
						}
					);
				}

			</script>

<?php 

get_sidebar('election2012');

get_footer();

?>