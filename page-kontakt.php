<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>

<div id="kontaktDesktop">
<div class="container">
<div id="kontaktOs">
<h1>Kontakt os</h2>
<p>Er der noget, vi kan hjælpe med?
Send en mail eller ring os op, så svarer vi hurtigst muligt
</p>
<p id="kontaktTLF"><i class="fa-solid fa-phone"></i> +45 50 50 88 36</p>
    </div>

    <div id="aaben">
<h2>Åbningstider</h2>
<p>Du er altid velkommen til at kigge indenfor i risteriet og afhente eller købe kaffe, men da vi er en produktionsvirksomhed er det ikke altid, vi har så meget tid til dig. 
    Du er velkommen til at besøge os, når vi holder åbent i risteriet:Mandag-torsdag 8.00-15.00, fredag 8.00-13.00.</p>
    </div>
<?php
        $query = new WP_Query(array(
            'post_type' => "medarbejder",
            'posts_per_page' => 9
    
        ));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
            
         
        ?>

<div id="kontaktGrid">
<div id="kontaktGridIMG">
<img src="<?php the_post_thumbnail_url(); ?>" id="kontaktImg">
</div>

<div id="kontaktGridTXT">
<h2> <?php the_title() ?></h2>
  <p><?php echo get_field("stilling") ?></p>
<p>TLF: <?php echo get_field("telefonnummer") ?></p>
<p>MAIL: <?php echo get_field("mail") ?></p>
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









<div id="kontaktMobil">
<div class="container">
<div id="kontaktOs">
<h1>Kontakt os</h2>
<p>Er der noget, vi kan hjælpe med?
Send en mail eller ring os op, så svarer vi hurtigst muligt
</p>
<p id="kontaktTLF"><i class="fa-solid fa-phone"></i> +45 50 50 88 36</p>
 

    <div id="aaben">
<h2>Åbningstider</h2>
<p>Du er altid velkommen til at kigge indenfor i risteriet og afhente eller købe kaffe, men da vi er en produktionsvirksomhed er det ikke altid, vi har så meget tid til dig. 
    Du er velkommen til at besøge os, når vi holder åbent i risteriet:</p>
    <p>Mandag-torsdag 8.00-15.00, fredag 8.00-13.00.</p>
    </div>
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
  <p><?php echo get_field("stilling") ?></p>
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
    </div>
<?php 

get_footer();

?>