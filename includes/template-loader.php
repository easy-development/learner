<?php
/**
 * Template Loader
 */
class Learner_Template_Loader {

  /**
   * Hook in methods
   */
  public static function init() {
    add_filter( 'template_include', array( __CLASS__, 'template_loader' ) );
  }

  /**
   * Load a template.
   *
   * Handles template usage so that we can use our own templates instead of the themes.
   *
   * Templates are in the 'templates' folder. learner looks for theme
   * overrides in /theme/learner/ by default
   *
   *
   * @param mixed $template
   * @return string
   */
  public static function template_loader( $template ) {
    $find = array( );
    $file = '';

    if ( is_single() && get_post_type() == 'course' ) {
      $file 	= 'single-course.php';
      $find[] = $file;
      $find[] = Learner()->template_path() . $file;
    }

    if ( $file ) {
      $template = locate_template( array_unique( $find ) );

      if ( ! $template )
        $template = LEARNER_PLUGIN_DIR . '/templates/' . $file;
    }

    return $template;
  }

}

Learner_Template_Loader::init();
