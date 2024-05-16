<?php 

function HolyBeans_file() {
    wp_enqueue_script('holybeans-js', get_theme_file_uri('app.js'), NULL, 1.0, true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins');
    wp_enqueue_style('holybeans_styles', get_theme_file_uri('css/style.css'));
    wp_enqueue_style('holybeans_styles_mediaquery1', get_theme_file_uri('/responsive/iphone12.css'));
    wp_enqueue_style('holybeans_styles_mediaquery2', get_theme_file_uri('/responsive/iphone14.css'));
    wp_enqueue_style('holybeans_styles_mediaquery3', get_theme_file_uri('/responsive/ipadpro.css'));

   
 
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

add_filter ('woocommerce_enqueue_styles', 'remove_woocommerce_styles');


// Laver min egen woocommerce style

function wp_enqueue_woocommerce_style () {
    wp_register_style('mytheme-woocommerce', get_template_directory_uri() . '/css/woocommerce/woocommerce.scss');
   
    if ( class_exists ('woocommerce') ) {
        wp_enqueue_style('mytheme-woocommerce');
    }
}

add_action ('wp_enqueue_scripts' , 'wp_enqueue_woocommerce_style' );