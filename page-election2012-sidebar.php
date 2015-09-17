<?php
/**
 * @package WordPress
 * @subpackage N21_Theme
 * Template Name: 2012 Election Results Sidebar
*/
?>

<?php
	$res = curl_init("http://cronkitenewsonline.com/el2012/web.html");
	curl_exec($res);
?>