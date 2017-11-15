<?php
/**
 * Author: yamilelias
 * Author URI: <yamileliassoto@gmail.com>
 * Date: 14/11/17
 * Time: 12:58 PM
 */

if ( ! function_exists( 'creativa_recent_products' ) ) {
    /**
     * Display Recent Products
     * Hooked into the `homepage` action in the homepage template
     *
     * @since  1.0.0
     * @param array $args the product section args.
     * @return void
     */
    function creativa_recent_products( $args ) {

        if ( is_woocommerce_activated() ) {

            $args = apply_filters( 'creativa_recent_products_args', array(
                'limit' 			=> 4,
                'columns' 			=> 4,
                'title'				=> __( 'New In', 'creativa' ),
            ) );

            $shortcode_content = do_shortcode( 'recent_products', array(
                'per_page' => intval( $args['limit'] ),
                'columns'  => intval( $args['columns'] ),
            ) );

            /**
             * Only display the section if the shortcode returns products
             */
            echo '<div class="foody-home-product">';

            do_action( 'creativa_homepage_before_recent_products' );

            echo '<h1 class="home_prodct_titl">' . esc_html(get_theme_mod("recent_product_titl")) . '</h1>';

            do_action( 'storefront_homepage_after_recent_products_title' );

            echo wp_kses_post( $shortcode_content );

            do_action( 'creativa_homepage_after_recent_products' );

            echo '</div>';
        }
    }
}