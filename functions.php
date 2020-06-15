<?php

/** Enqueue scripts and style */
function sasai_enqueue_scripts() {
  // all styles
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), 202005 );
  wp_enqueue_style( 'sasai', get_stylesheet_directory_uri() . '/style.css', array(), 202005 );
  // all scripts
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '202005', true );
  wp_enqueue_script( 'sasai', get_template_directory_uri() . '/js/sasai.js', array('jquery'), '202005', true );
  wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/7cd815e053.js', array('jquery'), '202005', true );
}
add_action( 'wp_enqueue_scripts', 'sasai_enqueue_scripts' );

function sasai_theme_setup(){
  register_nav_menus( array(
      'primary' => __( 'Primary Menu'),
      'secondary' => __('Secondary Menu')
  ) );
  
  add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ) );

  add_theme_support('post-thumbnails');
  
}
add_action('after_setup_theme','sasai_theme_setup');

/** Register Custom Navigation Walker*/
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//Custom Options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'SASAI Content',
		'menu_title'	=> 'SASAI Content',
		'menu_slug' 	=> 'sasai-content',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Latest News Section',
		'menu_title'	=> 'Latest News section',
		'parent_slug'	=> 'sasai-content',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Donate',
		'menu_title'	=> 'Donate',
		'parent_slug'	=> 'sasai-content',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'sasai-content',
	));
}

?>