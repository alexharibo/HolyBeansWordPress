<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>
    <div class="container">
    <section class="firmaeventsIntro">
<img src="<?php the_post_thumbnail_url(); ?>" id="firmaeventsImg">
<div id="firmaeventsTxt">
<h1>Firmaevents</h1>
</div>

</section>
</div>

<?php 

get_footer();

?>