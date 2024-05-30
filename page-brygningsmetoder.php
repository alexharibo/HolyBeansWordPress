<?php get_header(); ?>




<div class=".kategoriCarousel">
<div id="kategoriBanner">
<button class="kategori1">Kategori</button>
<button onclick="changeContent()" class="kategori2">Kategori</button>
<button class="kategori3">Kategori</button>


</div>
</div>

<?php while(have_posts()) {
    the_post(); ?>
<div class="container">



<section class="oko">

<div class="card">
  <img src="<?php the_post_thumbnail_url() ?>" id="cardImg">
  <p id="author">Udgivet af <?php the_author(); ?></p>
  <div class="kategoriUnderBillede">
    <p><?php the_title(); ?></p>
      </div>

   
    <div class="billedeTekst">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 
    <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>

    <a href="<?php the_permalink(); ?>">Læs mere...</a>
    
    </div>
    </div>

</section>

</div>

<?php }

get_footer();

?>