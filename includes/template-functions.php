<?php

if ( ! function_exists( 'learner_output_content_wrapper' ) ) {

  /**
   * Output the start of the page wrapper.
   */
  function learner_output_content_wrapper() {
    learner_get_template( 'global/wrapper-start.php' );
  }
}

if ( ! function_exists( 'learner_output_content_wrapper_end' ) ) {

  /**
   * Output the end of the page wrapper.
   */
  function learner_output_content_wrapper_end() {
    learner_get_template( 'global/wrapper-end.php' );
  }
}
