<?php get_header(); ?>



<div class="container">
    <section class="oko">


    <h1>Aktuelle kurser</h1>
    <?php
        $query = new WP_Query(array(
            'post_type' => "events",
            'posts_per_page' => 5
        ));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>


   <img src="<?php the_post_thumbnail_url(); ?>" id="cardImg">
  <h2> <?php the_title() ?></h2>
  <p id="author">Udgivet af <?php the_author(); ?></p>
<p><?php the_content() ?></p>
<?php echo get_field("test123"); ?>
<?php



            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Ingen indlæg fundet i denne kategori.</p>';
        endif;
        ?>

    </section>
</div>

<?php get_footer(); ?>
