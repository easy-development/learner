<?php

class Learner_Lesson {

  /**
   * @param $course_id
   * @return WP_Query
   */
  public static function get_by_course_id($course_id) {
    $args = array(
      'post_type'   => 'lesson',
      'meta_key'    =>  '_course_id',
      'meta_value'  =>  $course_id
    );

    return new WP_Query($args);
  }

}