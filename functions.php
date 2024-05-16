<?php 

function HolyBeans_file() {
    wp_enqueue_script('holybeans-js', get_theme_file_uri('app.js'), NULL, 1.0, true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins');
    wp_enqueue_style('holybeans_styles', get_theme_file_uri('css/style.css'));
    wp_enqueue_style('holybeans_styles_mediaquery1', get_theme_file_uri('/responsive/iphonepro.css'));

   
 
}

add_action ('wp_enqueue_scripts', 'HolyBeans_file', 'init');


// WooCommerce
add_theme_support('woocommerce');

function remove_woocommerce_styles($enqueue_styles) {
    unset ($enqueue_styles['woocommerce-genereal'] ); 
    //unset( $enqueue_styles['woocommerce-layout'] ); 
    //unset( $enqueue_styles['woocommerce-smallscreen'] ); 
    return $enqueue_styles;
}

add_filter ('woocommerce_queue_styles', 'remove_woocommerce_styles');