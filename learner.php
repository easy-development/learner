<?php
/*
Plugin Name: Learner
Plugin URI: http://easy-development.com
Description: Learner is an intuitive and flexible way to manage e-learning platforms.
Version: 1.0.0
Author: Andrei-Robert Rusu
Author URI: http://www.easy-development.com
*/

if(!class_exists('Learner')) {

  final class Learner {

    protected static $_instance;

    public static function instance() {
      if(self::$_instance == null)
        self::$_instance = new self();

      return self::$_instance;
    }

    public function __construct() {
      $this->setup_constants();
      $this->includes();
    }

    private function setup_constants() {
      if ( ! defined( 'LEARNER_VERSION' ) )
        define( 'LEARNER_VERSION', '1.0.0' );
      if ( ! defined( 'LEARNER_PLUGIN_DIR' ) )
        define( 'LEARNER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
      if ( ! defined( 'LEARNER_PLUGIN_URL' ) )
        define( 'LEARNER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
      if ( ! defined( 'LEARNER_PLUGIN_FILE' ) )
        define( 'LEARNER_PLUGIN_FILE', __FILE__ );
    }

    private function includes() {
      require_once(LEARNER_PLUGIN_DIR . "/includes/posts/course.php");
      require_once(LEARNER_PLUGIN_DIR . "/includes/posts/lesson.php");

      require_once(LEARNER_PLUGIN_DIR . "/includes/course.php");
      require_once(LEARNER_PLUGIN_DIR . "/includes/lesson.php");

      if( is_admin() ) {
        require_once(LEARNER_PLUGIN_DIR . "/includes/admin/menus.php");

        require_once(LEARNER_PLUGIN_DIR . "/includes/admin/meta-boxes/lesson-course.php");
      }
    }

    /**
     * Throw error on object clone
     *
     * The whole idea of the singleton design pattern is that there is a single
     * object therefore, we don't want the object to be cloned.
     *
     * @since 1.6
     * @access protected
     * @return void
     */
    public function __clone() {
      _doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'learner' ), '1.0.0' );
    }
    /**
     * Disable unserializing of the class
     *
     * @since 1.6
     * @access protected
     * @return void
     */
    public function __wakeup() {
      _doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'learner' ), '1.0.0' );
    }

  }

}

function learner() {
  return Learner::instance();
}

learner();