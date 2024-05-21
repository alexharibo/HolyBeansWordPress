<?php


get_header();

while(have_posts()) {
    the_post(); ?>


<div class="container">
<div id="introTekst">
<?php the_content() ?>
</div>
</div>

<div id="introVideo">
<video controls autoplay muted infinite>
  <source src="<?php echo get_theme_file_uri('/assets/holyintro.mp4') ?>" type="video/mp4">

</video>

    <section class="container">


<div class="wrapper">
<div class="carousel">

<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>">

<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>">

<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>">

<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>">







</div>
</div>




<section class="popularProducts">
<h2>Populære kaffeprodukter</h2>
<?php echo do_shortcode('[products columns=6 limit=4 category=popular ]'); ?>
</section>


<section class="lastestBlog">
<h2>Seneste på kaffebloggen</h2>
<?php 
$homePosts = new WP_Query(
  array(
      'posts_per_page' => 1,
      'orderby' => 'date',
  )
);


while ($homePosts->have_posts()) {
  $homePosts->the_post(); ?>
 <section class="oko">

<div class="card">
  <img src="<?php the_post_thumbnail_url() ?>" id="cardImg">
  <div class="kategoriUnderBillede">
    <p>Kategori</p>
      </div>

   
    <div class="billedeTekst">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?>
    </p>
    
    </div>
    </div>

</section>
<?php }
?>


</section>
</section>


</body>
</html>


    <?php }
    get_footer();
?>