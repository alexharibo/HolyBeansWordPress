<?php get_header();

while(have_posts()) {
    the_post(); ?>



<div id="kategoriBanner">
<button class="kategori">Kategori</button>
</div>



<div class="container">



<section class="oko">


  <?php
  while(have_posts()) {
    the_post(); ?>
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
    <?php }
    ?>
  


</section>

</div>

<?php }

get_footer();

?>