<?php
/**
 * The Template for displaying an single course item
 *
 * Override this template by copying it to yourtheme/learner/single-course.php
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

?>

<?php get_header( 'learner' ); ?>

<?php do_action( 'learner_before_main_content' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php learner_get_template_part( 'content', 'single-course' ); ?>

<?php endwhile; // end of the loop. ?>

<?php do_action( 'learner_after_main_content' ); ?>

<?php get_footer( 'learner' ); ?>
