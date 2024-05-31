<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>
    <div class="bgContainer">
<div class="container">



<section class="oko">

<div class="card">
  <img src="<?php the_post_thumbnail_url() ?>" id="cardImg">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


   

  <p id="author">Afholdes af <?php the_author(); ?></p>
  <p><?php the_field("pris"); ?> DKK</p>
    <p><?php the_content(); ?></p>

<div class="afholdelse">
<h2>Kurset afholdes hos</h2>
<p>FYN: Holy Bean, Cederfeldsgade 18A, 5560 Aarup.</p>
  <p>KBH: Konsjös, Asger Jorns Allé 9a, 2300 København.</p>
</div>

<div id="kursusKnap">
<button class="valgMuligheder">Vælg dato</button>
        </div>


    </div>
    </div>
</div>


</section>

<div class="container">
<section class="relatedBlogs">
<h2>Relaterede blogindlægS</h2>
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
    <p><?php the_category(', '); ?></p>
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