<?php
/**
 * Author: yamilelias
 * Author URI: <yamileliassoto@gmail.com>
 * Date: 14/11/17
 * Time: 12:58 PM
 */

/**
 * Query WooCommerce activation
 */
function is_woocommerce_activated() {
    return class_exists( 'WooCommerce' ) ? true : false;
}

/**
 * Call a shortcode function by tag name.
 *
 * @since  1.4.6
 *
 * @param string $tag     The shortcode whose function to call.
 * @param array  $atts    The attributes to pass to the shortcode function. Optional.
 * @param array  $content The shortcode's content. Default is null (none).
 *
 * @return string|bool False on failure, the result of the shortcode on success.
 */
function do_shortcode( $tag, array $atts = array(), $content = null ) {
    global $shortcode_tags;

    if ( ! isset( $shortcode_tags[ $tag ] ) ) {
        return false;
    }

    return call_user_func( $shortcode_tags[ $tag ], $atts, $content, $tag );
}

/**
 * Include the styles and scripts for this plugin.
 *
 * @since 1.0.0
 */
function creativa_styles_and_scripts() {
    wp_enqueue_style('creativa-css', CREATIVA_ABSPATH . 'assets/css/creativa.css');
}