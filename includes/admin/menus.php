<?php

class Learner_Admin_Menus {

  public function __construct() {
    add_action( 'admin_menu', array($this, 'admin_menu') );
  }

  public function admin_menu() {
    add_menu_page(
        __( 'Learner', 'learner' ),
        __( 'Learner', 'learner' ),
        'manage_options',
        'learner',
        null,
        null,
        '56'
    );
  }

}

return new Learner_Admin_Menus();