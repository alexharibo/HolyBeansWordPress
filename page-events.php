<?php get_header(); ?>





<?php get_header(); ?>


<!-- DESKTOP -->
<div id="desktopKurser">
    <div class="container">
    <h1>Aktuelle events</h1>
    <?php
        $query = new WP_Query(array(
            'post_type' => "events",
            'posts_per_page' => 5
        ));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
<div class="eventsFlex">

<div id="flexEventIMG">
    
   <img src="<?php the_post_thumbnail_url(); ?>" id="eventImg">
</div>

<div id="flexEventTXT">
<h2> <?php the_title() ?></h2>
  <p id="author">Udgivet af <?php the_author(); ?></p>
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

</div>
</div>
</div>








<!-- MOBIL -->
<div id="mobilKurser">
<div class="container">
    <section class="oko">


    <h1>Aktuelle events</h1>
    <?php
        $query = new WP_Query(array(
            'post_type' => "events",
            'posts_per_page' => 5
        ));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
            
         
        ?>


   <img src="<?php the_post_thumbnail_url(); ?>" id="cardImg">
   <div id="mobilEventTXT">
  <h2> <?php the_title() ?></h2>
  <p id="author">Udgivet af <?php the_author(); ?></p>
<p><?php the_content() ?></p>
<a href="<?php the_permalink(); ?>">Læs mere...</a>
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

<?php get_footer(); ?>
