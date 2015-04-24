<?php

class Learner_Lesson_Register {

  public function __construct() {
    add_action( 'init', array($this, 'register_post_type'), 0 );
  }

  public function register_post_type() {
    if( post_type_exists('lesson') )
      return;

    do_action( 'learner_lesson_register' );

    $labels = array(
        'name'                => _x( 'Lessons', 'Post Type General Name', 'learner' ),
        'singular_name'       => _x( 'Lesson', 'Post Type Singular Name', 'learner' ),
        'menu_name'           => __( 'Lessons', 'learner' ),
        'name_admin_bar'      => __( 'Lesson', 'learner' ),
        'parent_item_colon'   => __( 'Parent Lesson:', 'learner' ),
        'all_items'           => __( 'All Lessons', 'learner' ),
        'add_new_item'        => __( 'Add New Lesson', 'learner' ),
        'add_new'             => __( 'Add New', 'learner' ),
        'new_item'            => __( 'New Lesson', 'learner' ),
        'edit_item'           => __( 'Edit Lesson', 'learner' ),
        'update_item'         => __( 'Update Lesson', 'learner' ),
        'view_item'           => __( 'View Lesson', 'learner' ),
        'search_items'        => __( 'Search Lesson', 'learner' ),
        'not_found'           => __( 'Not found', 'learner' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'learner' ),
    );

    $args = array(
        'label'               => __( 'Lesson', 'learner' ),
        'description'         => __( '-', 'learner' ),
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => 'learner',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    $args = apply_filters('learner_lesson_register_args', $args);

    register_post_type( 'lesson', $args );

    do_action( 'learner_lesson_register_after' );
  }

}

return new Learner_Lesson_Register();