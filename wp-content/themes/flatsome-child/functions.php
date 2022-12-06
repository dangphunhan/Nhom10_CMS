<?php
// Add custom Theme Functions here
add_action( 'wp', 'tu_move_wc_archive_description' );
function tu_move_wc_archive_description() {
    if ( is_archive() ) {
        remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
        remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
        add_action( 'woocommerce_after_main_content', 'woocommerce_taxonomy_archive_description', 10 );
        add_action( 'woocommerce_after_main_content', 'woocommerce_product_archive_description', 10 );
    }
}