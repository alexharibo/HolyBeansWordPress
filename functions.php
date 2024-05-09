<?php 

function HolyBeans_file() {
    wp_enqueue_script('holybeans-js', get_theme_file_uri('app.js'), NULL, 1.0, true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins');
    wp_enqueue_style('holybeans_styles', get_theme_file_uri('style.css'));
    wp_enqueue_style('holybeans_styles_mediaquery1', get_theme_file_uri('/responsive/iphonepro.css'));

   
 
}

add_action ('wp_enqueue_scripts', 'HolyBeans_file', 'init');
