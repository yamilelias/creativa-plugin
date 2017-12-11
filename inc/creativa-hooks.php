<?php
/**
 * Author: yamilelias
 * Author URI: <yamileliassoto@gmail.com>
 * Date: 14/11/17
 * Time: 12:58 PM
 */

add_action('wp_enqueue_scripts', 'creativa_styles_and_scripts', 90);

remove_action('storevilla_header', 'storevilla_button_header', 20);
add_action('storevilla_header', 'creativa_branding_header', 20);

remove_action('storevilla_homepage', 'storevilla_main_slider', 10);
remove_action('storevilla_homepage', 'storevilla_brand_logo',  30);
add_action('storevilla_homepage', 'creativa_homepage_content', 10);

remove_action('storevilla_footer', 'storevilla_credit', 20);
add_action('storevilla_footer', 'creativa_credit', 20);