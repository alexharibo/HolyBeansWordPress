<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>
<div class="container">
<?php
        $query = new WP_Query(array(
            'post_type' => "medarbejder",
            'posts_per_page' => 9
        ));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
            
         
        ?>

<div id="medarbejder">
   <img src="<?php the_post_thumbnail_url(); ?>" id="cardImg">
  <h2> <?php the_title() ?></h2>
  <p><?php echo get_field("medarbejder") ?></p>
<p>TLF: <?php echo get_field("telefonnummer") ?></p>
<p>MAIL: <?php echo get_field("mail") ?></p>
        </div>

       
<?php



            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Ingen indlæg fundet i denne kategori.</p>';
        endif;
        ?>

</div>


</section>

<?php 

get_footer();

?>