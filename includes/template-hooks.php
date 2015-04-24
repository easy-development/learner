<?php

/**
 * Content Wrappers
 *
 * @see learner_output_content_wrapper()
 * @see learner_output_content_wrapper_end()
 */
add_action( 'learner_before_main_content', 'learner_output_content_wrapper', 10 );
add_action( 'learner_after_main_content', 'learner_output_content_wrapper_end', 10 );
