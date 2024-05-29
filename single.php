<?php 

get_header();

while(have_posts()) {
    the_posts(); ?>

<h2><?php the_title(); ?>

<?php 
}

?>