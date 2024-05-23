<?php get_header();


while(have_posts()) {
    the_post(); ?>



<div class="container">






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

</div>
<?php }
get_footer();
?>