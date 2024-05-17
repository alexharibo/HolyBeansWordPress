<?php


get_header();

while(have_posts()) {
    the_post(); ?>




    <div id="kategoriList">
        <div class="kategori">
            <p>Kategori</p>
              </div>
              <div class="kategori">
                <p>Kategori</p>
                  </div>
                  <div class="kategori">
                    <p>Kategori</p>
                      </div>
    </div>

    <div id="kategoriList2">
        <div class="kategori">
            <p>Kategori</p>
              </div>
              <div class="kategori">
                <p>Kategori</p>
                  </div>
                  <div class="kategori">
                    <p>Kategori</p>
                      </div>
    </div>
    
<div class="container">


<div class="card">
  <img src="<?php echo get_theme_file_uri('/assets/eksempel.jpg') ?>" id="cardImg">
      <div class="kategori">
    <p>Kategori</p>
      </div>

   
    <div class="billedeTekst">
    <h2>Kaffe med omtanke</h2>
    <p>Hos HolyBeans er vi bevidste om det aftryk, 
        vi sætter i verden, og de valg vi træffer.
        Vi kalder det kaffe med omtanke. Derfor arbejder vi fokuseret med bæredygtighed.
    </p>
    
    </div>
    </div>

    <div class="card">
        <img src="<?php echo get_theme_file_uri('/assets/eksempel.jpg') ?>"  id="cardImg">
            <div class="kategori">
          <p>Kategori</p>
            </div>
      
         
          <div class="billedeTekst">
          <h2>Kaffe med omtanke</h2>
          <p>Hos HolyBeans er vi bevidste om det aftryk, 
              vi sætter i verden, og de valg vi træffer.
              Vi kalder det kaffe med omtanke. Derfor arbejder vi fokuseret med bæredygtighed.
          </p>
          
          </div>
          </div>
    </div>


    <section class="produkttest">

    <?php echo do_shortcode('[products columns=4 limit=4]'); ?>

    
</section>


<!-- WP Query til at oprette mine ACF fields på siderne -->
<?php 
 $kategori1 =  new WP_Query(
    array(
        'posts_per_page' => 1,
        'post_type' => 'kategori1',
    )
 );

 while ($kategori1->have_posts()) {
    $kategori1->the_post();  ?>



<?php echo the_title() ?>
<p>test</p>
        
<p><?php echo get_the_content(); ?>
</p>

    </div>
    


    <?php }
    ?>





</body>
</html>


    <?php }
    get_footer();
?>