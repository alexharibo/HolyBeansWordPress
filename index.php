<?php get_header(); ?>




<div class=".kategoriCarousel">
<div id="kategoriBanner">
<button class="kategori">Kategori</button>
<button class="kategori">Kategori</button>
<button class="kategori">Kategori</button>


</div>
</div>

<?php while(have_posts()) {
    the_post(); ?>
<div class="container">



<section class="oko">

<div class="card">
  <img src="<?php the_post_thumbnail_url() ?>" id="cardImg">
  <p>By <?php the_author(); ?></p>
  <div class="kategoriUnderBillede">
    <p>Kategori</p>
      </div>

   
    <div class="billedeTekst">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 
    <p><?php the_content(); ?>
    </p>
<?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">Læs mere...</a>
    
    </div>
    </div>

</section>

</div>

<?php }

get_footer();

?>