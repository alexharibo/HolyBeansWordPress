<?php 

function HolyBeans_file() {
    wp_enqueue_script('holybeans-js', get_theme_file_uri('app.js'), NULL, 1.0, true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins');
    wp_enqueue_style('holybeans_styles', get_theme_file_uri('css/style.css'));
    wp_enqueue_style('holybeans_styles_mediaquery3', get_theme_file_uri('/responsive/ipadpro.css'));
    wp_enqueue_style('holybeans_styles_mediaquery2', get_theme_file_uri('/responsive/iphone14.css'));
    wp_enqueue_style('holybeans_styles_mediaquery1', get_theme_file_uri('/responsive/iphone12.css'));

   
 
}

add_action ('wp_enqueue_scripts', 'HolyBeans_file', 'init');



add_theme_support('woocommerce');

function remove_woocommerce_styles($enqueue_styles) {
    unset ($enqueue_styles['woocommerce-general'] ); 
    //unset( $enqueue_styles['woocommerce-layout'] ); 
    //unset( $enqueue_styles['woocommerce-smallscreen'] ); 
    return $enqueue_styles;
}

add_filter ('woocommerce_enqueue_styles', 'remove_woocommerce_styles');
// 		add_filter( 'woocommerce_enqueue_styles', '__return_false' );

	

// Laver min egen woocommerce style

function wp_enqueue_woocommerce_style () {

    
    wp_register_style('mytheme-woocommerce', get_template_directory_uri() . '/css/woocommerce/woocommerce.css');


    

    
   
    if ( class_exists ('woocommerce') ) {
        wp_enqueue_style('mytheme-woocommerce');
    }
}

add_action ('wp_enqueue_scripts' , 'wp_enqueue_woocommerce_style' );


// Custom Post Types


function HolyBeans_post_types () {
    register_post_type('events', array(
           'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'category'),
           'rewrite' => array('slug' => 'events'),
           'public' => true,
           'labels' => array(
               'name' => 'Event',
               'add_new_item' => 'Tilføj event',
               'edit_item' => 'Ændr event',
               'all_items' => 'Alle events',
               'singular_name' => 'Event'
           ),
           'menu_icon' => 'dashicons-star-filled'
       ));


    }

    register_post_type('kurser', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'category'),
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

    add_action('init', 'HolyBeans_post_types');


    // Kategorier til blogge
    function blog_kategori() {
        register_taxonomy(
            'blog_kategori', 
            'blog', 
            array(
                'label' => 'Kategori', 
                'rewrite' => array('slug' => 'blog_kategori'), 
                'hierarchical' => true, 
            )
        );
    }
  
    
     add_action('init', 'blog_kategori');

     function custom_remove_single_product_reviews() {
        if (is_product()) {
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
        }
    }
    add_action('wp', 'custom_remove_single_product_reviews', 20);

    