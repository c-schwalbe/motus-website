<?php

function MOTUS_resources() {
	
	//this should reset the default styles, but i dont think that is is used in the header
	wp_enqueue_style('reset', get_stylesheet_uri('reset.css'));
	
	//set the main css file adn dynamically add the version
	$style_ver = filemtime( get_stylesheet_directory() . '/style.css' );
	wp_enqueue_style( 'main_style', get_stylesheet_directory_uri() . '/style.css', '', $style_ver );
	
}

add_action('wp_enqueue_scripts', 'MOTUS_resources');

//Navigation Menu Registry
register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
	'help' => __( 'Help Menu' ),
));						 

//Get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	return $post->ID;
	
}

//Does page have children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}

//Add Scripts
function MOTUS_scripts() {
	
	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js');
    wp_enqueue_script( 'jquery-2.1.1', get_template_directory_uri() . '/js/jquery-2.1.1.js');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_script( 'background', get_template_directory_uri() . '/js/background.js');
	wp_enqueue_script( 'nav', get_template_directory_uri() . '/js/nav.js');
	wp_enqueue_script( 'fader', get_template_directory_uri() . '/js/fader.js');

}

add_action('wp_enqueue_scripts','MOTUS_scripts');


//Add featured image support
add_theme_support('post-thumbnails');
