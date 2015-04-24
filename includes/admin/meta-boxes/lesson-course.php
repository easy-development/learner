<?php

class Learner_Meta_Box_Lesson_Course {

  public function __construct() {
    add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
    add_action( 'save_post', array($this, 'learner_lesson_course_save') );
  }

  public function add_meta_boxes() {
    add_meta_box(
        'learner_lesson_course',
        __( 'Course Information', 'learner' ),
        array($this, 'learner_lesson_course_callback'),
        'lesson',
        'side'
    );
  }

  /**
   * @param $post
   */
  public function learner_lesson_course_callback($post) {
    wp_nonce_field( 'learner_lesson_course', 'learner_lesson_course_nonce' );

    $value = get_post_meta( $post->ID, '_course_id', true );

    echo '<select name="learner_lesson_course_id" class="postform">';

    foreach(Learner_Course::get() as $course)
      echo '<option value="' . $course->ID . '" ' . selected($value, $course->ID) . '>' .
              $course->post_title .
           '</option>';

    echo '</select>';
  }

  public function learner_lesson_course_save($post_id) {
    if ( ! isset( $_POST['learner_lesson_course_nonce'] ) )
      return;
    if ( ! wp_verify_nonce( $_POST['learner_lesson_course_nonce'], 'learner_lesson_course' ) )
      return;

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
      return;

    if ( ! isset( $_POST['learner_lesson_course_id'] ) )
      return;

    update_post_meta( $post_id, '_course_id', intval($_POST['learner_lesson_course_id']) );
  }

}

return new Learner_Meta_Box_Lesson_Course();