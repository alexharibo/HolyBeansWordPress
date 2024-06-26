<?php 

function HolyBeans_file() {
    wp_enqueue_script('holybeans-js', get_theme_file_uri('app.js'), NULL, 1.0, true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins');
    wp_enqueue_style('holybeans_styles', get_theme_file_uri('css/style.css'));
    wp_enqueue_style('holybeans_styles_mediaquery3', get_theme_file_uri('/responsive/ipadmini.css'));
    wp_enqueue_style('holybeans_styles_mediaquery2', get_theme_file_uri('/responsive/iphone14.css'));
    wp_enqueue_style('holybeans_styles_mediaquery1', get_theme_file_uri('/responsive/iphone12.css'));

   
 
}

add_action ('wp_enqueue_scripts', 'HolyBeans_file', 'init');



add_theme_support('woocommerce');




// Custom Post Types


function HolyBeans_post_types () {

    
    register_post_type('events', array(
           'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
           'rewrite' => array('slug' => 'events'),
           'public' => true,
           'labels' => array(
               'name' => 'Events',
               'add_new_item' => 'Tilføj event',
               'edit_item' => 'Ændr event',
               'all_items' => 'Alle events',
               'singular_name' => 'Event'

           ),
           'menu_icon' => 'dashicons-star-filled'
       ));


   

    register_post_type('kurser', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'kurser'),
        'public' => true,
        'labels' => array(
            'name' => 'Kurser',
            'add_new_item' => 'Tilføj kurser',
            'edit_item' => 'Ændr kurser',
            'all_items' => 'Alle kurser',
            'singular_name' => 'Kursus'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));

    register_post_type('medarbejder', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'medarbejder'),
        'public' => true,
        'labels' => array(
            'name' => 'Medarbejder',
            'add_new_item' => 'Tilføj medarbejdere',
            'edit_item' => 'Ændr medarbejder',
            'all_items' => 'Alle medarbejderne',
            'singular_name' => 'Medarbejder'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));
}
add_action('init', 'HolyBeans_post_types');








  

  


    