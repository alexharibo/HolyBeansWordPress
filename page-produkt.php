<?php


get_header();

while(have_posts()) {
    the_post(); ?>






    <section class="produkttest">


    <?php echo do_shortcode('[products columns=4 limit=4 category=hoodies]'); ?>

    <p>Test</p>
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