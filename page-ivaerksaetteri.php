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
<?php 
$lort =  new WP_Query(
    array(
        'posts_per_page' => 10,
        'post_type' => 'blog',
        'orderby' => 'title',
        
    )
);

while ($lort->have_posts()) {
    $lort->the_post();  

    // Hent kategorier for det aktuelle indlæg
    $kategorier = get_the_terms(get_the_ID(), 'blog_kategori');
    
    // Tjek om der er kategorier og om en af dem har slug'en 'aalborg'
    if ($kategorier && !is_wp_error($kategorier)) {
        foreach ($kategorier as $blog) {
            if ($blog->slug === 'ivarksatteri') {
                // Udskriv indholdet kun hvis indlægget tilhører 'aalborg' kategorien
                ?>
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
                <?php
            }
        }
    }
}
?>

<?php }

get_footer();

?>