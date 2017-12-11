<?php
/**
 * Author: yamilelias
 * Author URI: <yamileliassoto@gmail.com>
 * Date: 14/11/17
 * Time: 12:58 PM
 */

/**
 * Display Site Branding
 * @since  1.0.0
 * @return void
 */
function creativa_branding_header() { ?>
    <div class="header-wrap clearfix">
        <div class="store-container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                ?>
                    <div class="sv-logo-wrap">
                        <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                        <?php
                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) :
                            ?>
                            <p class="site-description"><?php echo $description; ?></p>
                        <?php endif; ?>
                    </div>
                <?php } ?>
            </div><!-- .site-branding -->
            <div class="search-cart-wrap clearfix">
                <?php

                /**
                 * Display Product Search
                 * @since  1.0.0
                 * @uses  storevilla_is_woocommerce_activated() check if WooCommerce is activated
                 * @return void
                 */

                if ( storevilla_is_woocommerce_activated() ) { ?>
                    <div class="advance-search">
                        <?php storevilla_product_search(); ?>
                    </div>
                <?php } else{ ?>
                    <div class="normal-search">
                        <?php get_search_form(); ?>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <?php
}

/**
 * Display the theme credit
 * @since  1.0.0
 * @return void
 */
function creativa_credit() {
    ?>

    <div class="bottom-footer-wrap clearfix">

    <div class="store-container">

    <div class="site-info">
        <?php $copyright = get_theme_mod( 'storevilla_footer_copyright' );
        if( !empty( $copyright ) ) { ?>
            <?php echo  wp_kses_post($copyright) ; ?>
        <?php } else { ?>
            <?php echo apply_filters( 'storevilla_copyright_text', $content = '&copy; ' . date_i18n( 'Y' ) . ' - ' . get_bloginfo( 'name' ) ); ?>
        <?php } ?>
    </div><!-- .site-info -->
    <?php
}