<?php get_header(); ?>




<div class=".kategoriCarousel">
<div id="kategoriBanner">

<a href="/index.php/category/ivaerksaetter"><button class="kategori">Iværksætteri</button></a>
<a href="/index.php/category/brygningsmetoder"><button class="kategori">Brygningsmetoder</button></a>
<a href="/index.php/category/kaffesmag"><button class="kategori">Kaffesmag og forarbejdning</button></a>
<a href="/index.php/category/kaffeetik"><button class="kategori">Kaffeetik og kvalitet</button></a>
<a href="/index.php/category/kaffedyrkning"><button class="kategori">Kaffedyrkning og marked</button></a>



</div>
</div>


  

  <div class="container">
    <section class="oko">
        <?php

   

   
        $query = new WP_Query(array(
           
            'posts_per_page' => 5 
        ));


        
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
      

        ?>
                <div class="card">
                    <img src="<?php the_post_thumbnail_url(); ?>" id="cardImg">
                    <p id="author">Udgivet af <?php the_author(); ?></p>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="kategoriUnderBillede">
                        <p><?php the_category(', '); ?></p>
                    </div>
                    <div class="billedeTekst">
              
                        <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>">Læs mere...</a>
                    </div>
                </div>
        <?php
            endwhile;
            // Nulstil postdata
            wp_reset_postdata();
        else :
            echo '<p>Ingen indlæg fundet i denne kategori.</p>';
        endif;
        ?>
    </section>
</div>




    
<?php get_footer(); ?>