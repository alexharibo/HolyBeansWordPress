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

function eventpartner_menus() {
    $locations = array(
        'primary' => "Desktop Primary",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'eventpartner_menus');



function eventpartner_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'eventpartner_features');


function remove_posts_menu() {
    remove_menu_page('edit.php'); 
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_posts_menu');


 

  function pakke_kategori() {
      register_taxonomy(
          'pakke_kategori', 
          'pakke', 
          array(
              'label' => 'Kategori', 
              'rewrite' => array('slug' => 'pakke-kategori'), 
              'hierarchical' => true, 
          )
      );
  }

  
   add_action('init', 'pakke_kategori');
   

//    Tilføjet mu

function eventpartner_post_types () {
 register_post_type('Events', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'video'),
        'rewrite' => array('slug' => 'Events'),
        'public' => true,
        'labels' => array(
            'name' => 'Populæreste events',
            'add_new_item' => 'Tilføj event',
            'edit_item' => 'Ændr events',
            'all_items' => 'Alle events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-star-filled'


    ));



    register_post_type('pakke', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'video'),
        'rewrite' => array('slug' => 'Pakkeløsning'),
        'public' => true,
        'labels' => array(
            'name' => 'Eventkatalog',
            'add_new_item' => 'Tilføj eventkatalog',
            'edit_item' => 'Ændr katalog',
            'all_items' => 'Alle pakker i katalog',
            'singular_name' => 'Eventkatalog'
        ),
        'menu_icon' => 'dashicons-category'


    ));

   

    register_post_type('medarbejder', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'video'),
        'rewrite' => array('slug' => 'Medarbejder'),
        'public' => true,
        'labels' => array(
            'name' => 'Medarbejder',
            'add_new_item' => 'Tilføj medarbejdere',
            'edit_item' => 'Ændr medarbejder',
            'all_items' => 'Alle medarbejdere',
            'singular_name' => 'Medarbejder'
        ),
        'menu_icon' => 'dashicons-groups'


    ));

  

    register_post_type('eventpakke', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'video'),
        'rewrite' => array('slug' => 'Eventpakke'),
        'public' => true,
        'labels' => array(
            'name' => 'Eventpakke',
            'add_new_item' => 'Tilføj eventpakke',
            'edit_item' => 'Ændr eventpakke',
            'all_items' => 'Alle eventpakker',
            'singular_name' => 'Eventpakken'
        ),
        'menu_icon' => 'dashicons-category'


    ));






    register_post_type('escapegames', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'video'),
        'rewrite' => array('slug' => 'Escape Games'),
        'public' => true,
        'labels' => array(
            'name' => 'Escape Games',
            'add_new_item' => 'Tilføj Escape Games',
            'edit_item' => 'Ændr Escape Games',
            'all_items' => 'Alle Escape Games',
            'singular_name' => 'Escape Games'
        ),
        'menu_icon' => 'dashicons-controls-play'


    ));

    register_post_type('teambuilding', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'Teambuilding'),
        'public' => true,
        'labels' => array(
            'name' => 'Teambuilding',
            'add_new_item' => 'Tilføj teambuilding',
            'edit_item' => 'Ændr teambuilding',
            'all_items' => 'Alle teambuilding',
            'singular_name' => 'Teambuilding'
        ),
        'menu_icon' => 'dashicons-groups'


    ));

    register_post_type('challenge', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'video'),
        'rewrite' => array('slug' => 'Challenge'),
        'public' => true,
        'labels' => array(
            'name' => 'Challenge',
            'add_new_item' => 'Tilføj Challenge',
            'edit_item' => 'Ændr Challenge',
            'all_items' => 'Alle Challenges',
            'singular_name' => 'Challenge'
        ),
        'menu_icon' => 'dashicons-games'


    ));

    register_post_type('fredagsbar', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'video'),
        'rewrite' => array('slug' => 'Fredagsbar'),
        'public' => true,
        'labels' => array(
            'name' => 'Fredagsbar',
            'add_new_item' => 'Tilføj fredagsbar',
            'edit_item' => 'Ændr fredagsbar',
            'all_items' => 'Alle fredagsbar',
            'singular_name' => 'Fredagsbar'
        ),
        'menu_icon' => 'dashicons-bell'


    ));

    

    
}

add_action('init', 'eventpartner_post_types');


