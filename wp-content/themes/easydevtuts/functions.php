<?php

/**
* Load CSS and Javascript
*/

function load_styles_and_scripts() {

  // load styles
  wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css');

  // load scripts
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
  wp_enqueue_script('bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js');

}
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/**
* Register main nav
*/

register_nav_menus(array(
	'main-nav' => 'Main navigation'
));

/**
* Register sidebar
*/

register_sidebar(array(
  'name'          => 'main-sidebar',
  'id'            => 'sidebar-1',
  'description'   => 'This is the main sidebar',
  'before_widget' => '<div class="span4">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

?>
