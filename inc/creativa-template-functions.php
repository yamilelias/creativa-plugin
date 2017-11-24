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

        if ( storefront_is_woocommerce_activated() ) {

            $args = apply_filters( 'storefront_recent_products_args', array(
                'limit' 			=> 4,
                'columns' 			=> 4,
                'title'				=> __( 'New In', 'storefront' ),
            ) );

            $shortcode_content = storefront_do_shortcode( 'recent_products', apply_filters( 'storefront_recent_products_shortcode_args', array(
                'per_page' => intval( $args['limit'] ),
                'columns'  => intval( $args['columns'] ),
            ) ) );

            /**
             * Only display the section if the shortcode returns products
             */
            if ( false !== strpos( $shortcode_content, 'product' ) ) {

                echo '<section class="storefront-product-section storefront-recent-products" aria-label="' . esc_attr__( 'Recent Products', 'storefront' ) . '">';

                do_action( 'storefront_homepage_before_recent_products' );

                echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

                do_action( 'storefront_homepage_after_recent_products_title' );

                echo '<div class="owl-carousel">';

                echo $shortcode_content;

                echo '</div>';

                do_action( 'storefront_homepage_after_recent_products' );

                echo '</section>';

            }
        }
    }
}