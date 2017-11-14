<?php

/**
Plugin Name: Creativa Plugin
Plugin URI: https://github.com/yamilelias/anchor-menu-plugin
Description: This plugin is to add functionality and to customize the Foody Theme.
Version: 1.0.0
Author: Yamil Elías
Author URI: https://yamilelias.github.io
License: GPLv3
 */


if( ! class_exists( 'creativa' ) ) {
    class creativa {
        /**
         * Reusable object instance.
         *
         * @type object
         */
        protected static $instance = null;

        /**
         * Creates a new instance. Called on 'init'.
         * May be used to access class methods from outside.
         *
         * @see    __construct()
         */
        public static function instantiate() {
            null === self :: $instance AND self :: $instance = new self;
            return self :: $instance;
        }

        /**
         * wp_anchor_link constructor.
         *
         * @since 0.5.0
         */
        public function __construct() {

            // Enqueue scripts
            add_action( 'init', array( $this, 'enqueue_scripts' ), 999 );

            // that's it!

        }
    }
}