<?php

/**
Plugin Name: Creativa Plugin
Plugin URI: https://github.com/yamilelias/anchor-menu-plugin
Description: This plugin is to add functionality and to customize the Theme installed for Creativa  .
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
         * Plugin version.
         *
         * @var string
         */
        public $version = '1.0.0';

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
         * Plugin constructor.
         *
         * @since 1.0.0
         */
        public function __construct() {

            $this->define_constants();
            $this->includes();
            // that's it!

        }

        /**
         * Define constants used in the plugin.
         */
        private function define_constants() {
            $this->define( 'CREATIVA_PLUGIN_FILE', __FILE__ );
            $this->define( 'CREATIVA_ABSPATH', dirname( __FILE__ ) . '/' );
            $this->define( 'CREATIVA_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
            $this->define( 'CREATIVA_VERSION', $this->version );
        }

        /**
         * Define constant if not already set.
         *
         * @param  string $name
         * @param  string|bool $value
         */
        private function define( $name, $value ) {
            if ( ! defined( $name ) ) {
                define( $name, $value );
            }
        }

        /**
         * Include required core files used in admin and on the frontend.
         */
        public function includes() {
            include_once( CREATIVA_ABSPATH . 'inc/creativa-functions.php' );
            include_once( CREATIVA_ABSPATH . 'inc/creativa-template-functions.php' );
            include_once( CREATIVA_ABSPATH . 'inc/creativa-hooks.php' );
        }
    }
}