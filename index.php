<?php get_header(); ?>




<div class=".kategoriCarousel">
<div id="kategoriBanner">
<a href="<?php echo site_url('ivaerksaetteri') ?>"><button class="kategori1">Iværksætteri</button></a>
<a href="<?php echo site_url('ivaerksaetteri') ?>"><button class="kategori1">Brygningsmetoder</button></a>
<a href="<?php echo site_url('ivaerksaetteri') ?>"><button class="kategori1">Kaffesmag og forarbejdning</button></a>
<a href="<?php echo site_url('ivaerksaetteri') ?>"><button class="kategori1">Kaffeetik og kvalitet</button></a>
<a href="<?php echo site_url('ivaerksaetteri') ?>"><button class="kategori1">Kaffedyrkning og Marked</button></a>



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
    <p>Kategori</p>
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