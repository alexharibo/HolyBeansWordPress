<?php 

function EventPartner_files() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins');
    wp_enqueue_style('eventpartner_styles', get_theme_file_uri('style.css'));
    wp_enqueue_style('eventpartner_styles_mediaquery1', get_theme_file_uri('largerdevices.css'));
    wp_enqueue_style('eventpartner_styles_mediaquery2', get_theme_file_uri('ipadpro.css'));
    wp_enqueue_style('eventpartner_styles_mediaquery3', get_theme_file_uri('ipadmini.css'));
    wp_enqueue_style('eventpartner_styles_mediaquery4', get_theme_file_uri('surfaceduo.css'));
    wp_enqueue_style('eventpartner_styles_mediaquery5', get_theme_file_uri('iphonepro.css'));
    wp_enqueue_style('eventpartner_styles_mediaquery6', get_theme_file_uri('iphone.css'));



 
   
    wp_enqueue_script('eventpartner-js', get_theme_file_uri('app.js'), NULL, 1.0, true);
   
}

add_action ('wp_enqueue_scripts', 'EventPartner_files', 'init');
