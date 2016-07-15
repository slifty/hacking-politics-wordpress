<?php

// Check to make sure ACF is installed
if( ! class_exists('acf') && is_admin()) {
    $class = 'notice notice-error';
    $message = __( '<a href="https://www.advancedcustomfields.com">ACF</a> is required for this theme to function.', 'hacking-politics' );
    printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message );
}

/**
 * Register custom fields
 */
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_submission-fields',
        'title' => 'Submission Fields',
        'fields' => array (
            array (
                'key' => 'field_57895fdc44090',
                'label' => 'Submission URL',
                'name' => 'submission_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_57895fe944091',
                'label' => 'Submission Type',
                'name' => 'submission_type',
                'type' => 'select',
                'choices' => array (
                ),
                'default_value' => '',
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_57895ff744092',
                'label' => 'Assignment',
                'name' => 'assignment',
                'type' => 'select',
                'choices' => array (
                ),
                'multiple' => 0,
                'allow_null' => 0,
                'default_value' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}


// Load the theme settings
function load_politics_theme_resources() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/lib/bootstrap.min.js', array('jquery'), '2.3.2', true );
}
add_action('wp_enqueue_scripts', 'load_politics_theme_resources');


// This theme has a custom type for ad submissions
function register_submission_type() {
    register_post_type( 'submission',
        array(
            'rewrite' => array('with_front' => false, 'slug' => 'ad'),
            'labels' => array(
                'name' => __( 'Submissions' ),
                'singular_name' => __( 'Submission' ),
                'add_new_item' => __( 'Add New Submission' ),
                'edit_item' => __( 'Edit Submission' ),
                'new_item' => __( 'New Submission' ),
                'view_item' => __( 'View Submission' ),
                'search_items' => __( 'Search Submissions' ),
                'not_found' => __( 'No submissions found' ),
                'not_found_in_trash' => __( 'No submissions found in Trash' ),
                'parent_item_colon' => __( 'Parent Submission' ),
            ),
            'capabilities' => array(
                'edit_post'          => 'edit_submission',
                'read_post'          => 'read_submission',
                'delete_post'        => 'delete_submission',
                'delete_posts'       => 'delete_submissions',
                'edit_posts'         => 'edit_submissions',
                'edit_others_posts'  => 'edit_others_submissions',
                'publish_posts'      => 'publish_submissions',
                'read_private_posts' => 'read_private_submissions',
                'create_posts'       => 'create_submissions',
            ),
            'description' => __( 'A political ad identified and tracked by the Internet Archive.' ),
            'public' => true,
            'menu_icon' => 'dashicons-media-video',
            'has_archive' => true,
            'supports' => array( 'title')
        )
    );

    // Set up editor capabilities
    $roles = ['editor', 'administrator'];
    foreach ( $roles as $roleName ) {

      // Get the author role
      $role = get_role( $roleName );

      // Add full political ad edit capabilities
      $role->add_cap( 'edit_submission' );
      $role->add_cap( 'read_submission' );
      $role->add_cap( 'delete_submission' );
      $role->add_cap( 'edit_submissions' );
      $role->add_cap( 'edit_others_submissions' );
      $role->add_cap( 'publish_submissions' );
      $role->add_cap( 'read_private_submissions' );
      $role->add_cap( 'create_submissions' );
    }

    // Set up author capabilities
    $roles = ['author'];
    foreach ( $roles as $roleName ) {

      // Get the author role
      $role = get_role( $roleName );

      // Add full political ad edit capabilities
      $role->add_cap( 'edit_submission' );
      $role->add_cap( 'read_submission' );
      $role->add_cap( 'delete_submission' );
      $role->add_cap( 'edit_submissions' );
      $role->add_cap( 'publish_submissions' );
      $role->add_cap( 'create_submissions' );
    }
}

add_action('init', 'register_submission_type');
