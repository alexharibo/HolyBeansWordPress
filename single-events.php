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
    <p><?php the_content(); ?></p>

<div class="afholdelse">
<h2>Event afholdes hos</h2>
<p>FYN: Holy Bean, Cederfeldsgade 18A, 5560 Aarup.</p>
  <p>KBH: Konsjös, Asger Jorns Allé 9a, 2300 København.</p>
</div>




<div id="kursusKnap">
<button class="valgMuligheder">TILMELD</button>
        </div>


    </div>
    </div>
</div>


</section>

<div class="container">
<h2 id="relatedBlogH2">Relaterede events</h2>
<section class="relatedBlogs">


<?php
$current_post_id = get_the_ID();
$query = new WP_Query(array(
    'post_type' => "events",
    'posts_per_page' => 5,
    'relation' => 'AND',
    'post__not_in' => array($current_post_id)
));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
$related = new WP_Query(array(
'posts_per_page' => 2
));



?>
  

  <div class="card">
  <img src="<?php the_post_thumbnail_url() ?>" id="cardImg">
  <p id="author">Udgivet af <?php the_author(); ?></p>

   
    <div class="billedeTekst">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 
    <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
  
    <a href="<?php the_permalink(); ?>">Læs mere...</a>

    
    </div>

    </div>



    <?php



endwhile;
wp_reset_postdata();
else :
echo '<p>Ingen indlæg fundet i denne kategori.</p>';
endif;
?>

</section>
</div>

</div>



<?php get_footer();

?>



endwhile;
wp_reset_postdata();
else :
echo '<p>Ingen indlæg fundet i denne kategori.</p>';
endif;
?>

</section>
</div>

</div>



<?php get_footer();

?>