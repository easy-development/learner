<?php

class Learner_Course {

  /**
   * @return array
   */
  public static function get() {
    $args = array(
      'post_type' => 'course'
    );

    $args = apply_filters('learner_course_get_args', $args);

    return get_posts($args);
  }

}

/**
 * @return array
 */
function learner_courses() {
  return Learner_Course::get();
}