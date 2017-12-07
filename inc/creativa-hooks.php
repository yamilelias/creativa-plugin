<?php
/**
 * Author: yamilelias
 * Author URI: <yamileliassoto@gmail.com>
 * Date: 14/11/17
 * Time: 12:58 PM
 */

add_action('wp_enqueue_scripts', 'creativa_styles_and_scripts', 90);

remove_action('storevilla_homepage', 'storevilla_main_slider', 10);
add_action('storevilla_homepage', 'creativa_homepage_content', 10);