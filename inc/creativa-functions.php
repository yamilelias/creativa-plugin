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
 * Include the styles and scripts for this plugin.
 *
 * @since 1.0.0
 */
function creativa_styles_and_scripts() {
    wp_enqueue_style('creativa', plugins_url( 'assets/css/creativa.css', dirname(__FILE__) ));
}

/**
 * Display the content of the set page in the homepage.
 *
 * @since 1.0.0
 */
function creativa_homepage_content() {
    $post = get_post();
    echo $post->post_content;
}