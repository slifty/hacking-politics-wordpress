<?php

// Load the theme settings
function load_politics_theme_resources() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/lib/bootstrap.min.js', array('jquery'), '2.3.2', true );
}
add_action('wp_enqueue_scripts', 'load_politics_theme_resources');



<<<<<<< HEAD
=======
add_action('init', 'register_submission_type');

// Load in custom fields
require_once('acf/submission-fields.php');
>>>>>>> origin/master
