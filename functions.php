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

//define('CFCT_DEBUG', true);
define('CFCT_PATH', trailingslashit(TEMPLATEPATH));

include_once(CFCT_PATH.'carrington-core/carrington.php');
include_once(CFCT_PATH.'functions/sidebars.php');


register_post_type('newswatch', array(	'label' => 'NewsWatch','public' => true,'show_ui' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'newswatch'),'query_var' => true,'supports' => array('title','custom-fields','revisions','author','page-attributes',)) );

register_post_type('enespanol', array(	'label' => 'NewsWatch En Espanol','public' => true,'show_ui' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'enespanol'),'query_var' => true,'supports' => array('title','custom-fields','revisions','author','page-attributes',)) );

register_post_type('sundevils101', array(	'label' => 'Sun Devils 101','public' => true,'show_ui' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'sundevils101'),'query_var' => true,'supports' => array('title','custom-fields','revisions','author','page-attributes',)) );

?>