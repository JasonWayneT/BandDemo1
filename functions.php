<?php
add_theme_support('menus');

// Add Custom Post Types
function add_Events_posts(){
    
}

function register_theme_menus() {

    register_nav_menus(
	    array(
		    'primary-menu' 	=> __( 'Primary Menu' )		
		)	
    );
}

add_action( 'init', 'register_theme_menus' );

function wpband1_theme_styles(){
    wp_enqueue_style('grid_css', get_template_directory_uri() . '/css/grid.css'  );
    wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css'  );
    wp_enqueue_style('mediaelementplayer_css', get_template_directory_uri() . '/css/mediaelementplayer.css');
    wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css'  );
    wp_enqueue_style('font_meri_lime',  'https://fonts.googleapis.com/css?family=Limelight|Merriweather:300,400,700'); 
}

add_action('wp_enqueue_scripts', 'wpband1_theme_styles');

function wpband1_theme_js(){
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/script.js', array('jquery'),'',true);
}

add_action('wp_enqueue_scripts', 'wpband1_theme_js');


