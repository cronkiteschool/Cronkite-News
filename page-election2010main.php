<?php
/**
 * @package WordPress
 * @subpackage N21_Theme
 * Template Name: 2010 Election Home Page
*/

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();

?>


<div class="span-15 append-2 singlestory"> <!-- singlestory -->


<div id="dynamiccontent"></div>

<?php
	
	cfct_misc('sharethis'); 
	echo '</div>';

		$ajax_url = 'http://'.$_SERVER[HTTP_HOST].'/'.'election2010-content'.'/';
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

get_sidebar('election2010');

get_footer();

?>