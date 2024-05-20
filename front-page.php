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
<section class="popularProducts">
<h2>Populære kaffeprodukter</h2>

<div class="wrapper">
<div class="carousel">



<?php echo do_shortcode('[products columns=4 limit=4 category=popular ]'); ?>





</div>
</div>

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
  <li><?php the_title() ?><li>
<?php }
?>


</section>


</body>
</html>


    <?php }
    get_footer();
?>