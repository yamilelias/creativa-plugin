<?php
/**
 * Author: yamilelias
 * Author URI: <yamileliassoto@gmail.com>
 * Date: 14/11/17
 * Time: 12:58 PM
 */

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