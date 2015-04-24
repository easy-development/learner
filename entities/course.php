<?php

class Learner_Entity_Course {

  public function __construct() {
    add_action( 'init', array($this, 'registerPostType'), 0 );
  }

  public function registerPostType() {
    if( post_type_exists('course') )
      return;

    do_action( 'learner_course_register' );

    $labels = array(
        'name'                => _x( 'Courses', 'Post Type General Name', 'learner' ),
        'singular_name'       => _x( 'Course', 'Post Type Singular Name', 'learner' ),
        'menu_name'           => __( 'Courses', 'learner' ),
        'name_admin_bar'      => __( 'Course', 'learner' ),
        'parent_item_colon'   => __( 'Parent Course:', 'learner' ),
        'all_items'           => __( 'All Courses', 'learner' ),
        'add_new_item'        => __( 'Add New Course', 'learner' ),
        'add_new'             => __( 'Add New', 'learner' ),
        'new_item'            => __( 'New Course', 'learner' ),
        'edit_item'           => __( 'Edit Course', 'learner' ),
        'update_item'         => __( 'Update Course', 'learner' ),
        'view_item'           => __( 'View Course', 'learner' ),
        'search_items'        => __( 'Search Course', 'learner' ),
        'not_found'           => __( 'Not found', 'learner' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'learner' ),
    );

    $args = array(
        'label'               => __( 'Course', 'learner' ),
        'description'         => __( '-', 'learner' ),
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    $args = apply_filters('learner_course_register_args', $args);

    register_post_type( 'course', $args );

    do_action( 'learner_course_register_after' );
  }

}