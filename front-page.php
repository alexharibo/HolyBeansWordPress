<?php


get_header();

while(have_posts()) {
    the_post(); ?>


<div id="introVideo">
<video controls autoplay muted infinite>
  <source src="<?php echo get_theme_file_uri('/assets/holyintro.mp4') ?>" type="video/mp4">
</video>
</div>
<div class="container">



<div id="introTekst">
<?php the_content() ?>
</div>

  

<h2>Populære kaffeprodukter</h2>
<?php echo do_shortcode('[products columns=2 limit=3 category=popular ]'); ?>

</div>
<div class="bgContainer2">

<div class="kaffeabonnementIntro">

<div id="kaffeabonnementTxt">
<h1>Kaffeabonnement</h1>
<p>Få leveret friskristet specialty kaffe hver måned. </p>
<p>Fra: 185,00kr. / md</p>

<button class="valgMuligheder">TILMELD</button>
</div>


</div id="kaffeabonnementImg">
<img src="<?php the_post_thumbnail_url(); ?>" id="kaffeabonnementPic">
</div>
 </div>

 <section class="risterietKvalitetskaffe">
<img src="<?php the_post_thumbnail_url(); ?>" id="risterietImg">
<div id="ansvarlighedTxt">
<h1>Re-Zip</h1>
<p>Hos Holy Bean har vi et ønske om at minimere vores aftryk på verden.
     Derfor er vi for år tilbage påbegyndt vores rejse mod en mere ansvarlig måde
      at drive vores kafferisteri på.res kaffe fra La Cumbre i El Salvador.
</div>

<div id="ansvarlighedTxt">
<p>Et af vores tiltag er samarbejdet med RE-ZIP. RE-ZIP er cirkulær emballage, som gør op med brug-og-smid-væk kulturen. Hver gang vi producerer ny emballage belaster vi unødigt miljøet. Derfor har RE-ZIP produceret emballage, som kan indgå et cirkulært kredsløb, hvor emballagerne genbruges mange gange før de genanvendes.
     Og NU er det også muligt for dig at få sendt din kaffe i en cirkulær RE-ZIP emballage.
</div>
</section>

<div class="container">
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
?>


</section>
</section>


</body>
</html>


    <?php }
    get_footer();
?>