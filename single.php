<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>
    <div class="bgContainer">
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
 
    <p><?php the_content(); ?></p>

    <section class="socialsBlogs">
        <p>Del på</p>
    <i class="fa-brands fa-facebook" id="socialsBlogsIcon"></i>
    <i class="fa-brands fa-instagram" id="socialsBlogsIcon"></i>

</section>


    </div>
    </div>
</div>
</div>

</section>

<div class="container">
<section class="relatedBlogs">
<h2>Relaterede blogindlæg</h2>
<?php {
$related = new WP_Query(array(
'posts_per_page' => 2
));



while($related->have_posts()) {
    $related->the_post(); ?>
  

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



<?php }
?>


</section>
</div>

</div>

<?php }

get_footer();

?>