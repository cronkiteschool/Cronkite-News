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

load_theme_textdomain('carrington-jam');

function disable_autop() {
	global $post;
	$disable_autop_var = get_post_meta($post->ID, 'disable_autop', TRUE);
	//var_dump(get_post_meta($post->ID,'disable_autop', TRUE));
	if ( !empty( $disable_autop_var ) ) {
		remove_filter('the_content', 'wpautop');
	}
}
add_action ('loop_start', 'disable_autop');

/**
 * Proper way to enqueue scripts and styles
 */
function cronkitenews_scripts() {
	wp_deregister_script('jquery');

	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', false, '1.7.2', true );
	wp_register_script( 'shadowbox-js', get_template_directory_uri() . '/js/shadowbox/shadowbox.js', false, '3.0.3', true );
	wp_register_script( 'quester-fullscreen', get_template_directory_uri() . '/js/quester/fullscreen.js', array( 'jquery' ), '1.1', true );
	wp_register_script( 'quester-gallery', get_template_directory_uri() . '/js/quester/gallery.js', array( 'jquery' ), '1.1', true );
	wp_register_script( 'jquery-li-scroller', get_template_directory_uri() . '/js/jquery.li-scroller.1.0.js', array( 'jquery' ), '1.0', true );
	wp_register_script( 'jquery-ui-custom', get_template_directory_uri() . '/js/jquery-ui-1.7.3.custom.min.js', array( 'jquery' ), '1.7.3', true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'shadowbox-js');
	wp_enqueue_script( 'quester-fullscreen');
	wp_enqueue_script( 'quester-gallery');
	wp_enqueue_script( 'jquery-li-scroller');

	if ( is_page( 'page-election2010-races-popup.php' ) ) { 
		wp_enqueue_script( 'jquery-ui-custom');
	}

	wp_register_style( 'default_css', get_stylesheet_uri() );
	wp_register_style( 'blueprint_screen', get_template_directory_uri() . '/css/blueprint/screen.css', array( ), '0.9', 'screen, projection' );
	wp_register_style( 'blueprint_print', get_template_directory_uri() . '/css/blueprint/print.css', array( ), '0.9', 'print' );
	wp_register_style( 'quester_css', get_template_directory_uri() . '/css/quester.css', array( ), '1.1', 'screen, projection' );
	wp_register_style( 'cn_css', get_template_directory_uri() . '/css/cn.css', array( ), null, 'screen, projection' );
	wp_register_style( 'li-scroller_css', get_template_directory_uri() . '/js/li-scroller.css', array( ), '1.0', 'screen' );
	wp_register_style( 'shadowbox_css', get_template_directory_uri() . '/js/shadowbox/shadowbox.css', array( ), '3.0.3' );

	wp_enqueue_style( 'default_css' );
	wp_enqueue_style( 'blueprint_screen' );
	wp_enqueue_style( 'blueprint_print' );
	wp_enqueue_style( 'quester_css' );
	wp_enqueue_style( 'cn_css' );
	wp_enqueue_style( 'li-scroller_css' );
	wp_enqueue_style( 'shadowbox_css' );
}
add_action( 'wp_enqueue_scripts', 'cronkitenews_scripts' );

// Clean up the <head> section
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'template_redirect', 'wp_shortlink_header' );

// Remove smart quotes
remove_filter(‘the_content’, ‘wptexturize’);
remove_filter(‘the_title’, ‘wptexturize’);

//define('CFCT_DEBUG', true);
define('CFCT_PATH', trailingslashit(TEMPLATEPATH));

include_once(CFCT_PATH.'carrington-core/carrington.php');
include_once(CFCT_PATH.'functions/sidebars.php');

register_post_type('newswatch', array(	'label' => 'NewsWatch','public' => true,'show_ui' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'newswatch'),'query_var' => true,'supports' => array('title','custom-fields','revisions','author','page-attributes',)) );

register_post_type('enespanol', array(	'label' => 'NewsWatch En Espanol','public' => true,'show_ui' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'enespanol'),'query_var' => true,'supports' => array('title','custom-fields','revisions','author','page-attributes',)) );

register_post_type('sundevils101', array(	'label' => 'Sun Devils 101','public' => true,'show_ui' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'sundevils101'),'query_var' => true,'supports' => array('title','custom-fields','revisions','author','page-attributes',)) );

?>