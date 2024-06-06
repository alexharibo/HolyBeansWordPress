<?php get_header(); ?>


<?php while(have_posts()) 
    the_post(); ?>


<div id="desktopRisteriet">
<div class="container">
    <section class="desktopRisterietIntro">
<h1><?php the_title() ?></h1>
<p><?php the_content() ?></p>

</section>

<section class="desktopRisterietIntroGrid">
    <div id="introGridIMG">
<img src="<?php the_post_thumbnail_url(); ?>">
</div>

<div id="introGridTekst">
<p><?php echo get_field("tekstRisteriet1") ?></p>
<p><?php echo get_field("tekstRisteriet2") ?> </p>
<p><?php echo get_field("tekstRisteriet3") ?></p>
</div>

</div>
</section>

<section class="desktopRisterietIntro2">
    <div id="introGridIMG2">
<img src="<?php echo get_field("risteriet"); ?>">
</div>

<div id="desktopRisterietIntro2txt">
<h2>Kaffe af høj kvalitet</h2>
</div>

<div id="desktopRisterietIntro2txt">
<p><?php echo get_field("tekstRisteriet4") ?></p>
</div>

<div id="desktopRisterietIntro2txt">
<p><?php echo get_field("tekstRisteriet5") ?></p>
</div>
</section>





















</div>
</div>





    <div id="mobileRisteriet">
<div class="container">
<section class="risterietIntro">
<img src="<?php the_post_thumbnail_url(); ?>" id="risterietImg">
<div id="risterietTxt">
<h1>Risteriet</h1>
<p><?php the_content(); ?></p>

</div>

<div id="risterietTxt">
<p><?php echo get_field("tekstRisteriet1") ?></p>

</div>

<div id="risterietTxt">
<p><?php echo get_field("tekstRisteriet2") ?></p>

</div>
</section>
</div>

<section class="risterietKvalitetskaffe">
<img src="<?php echo get_field("risteriet"); ?>" id="risterietImg">
<div id="risterietTxt">
<h1>Kaffe i høj kvalitet</h1>
<p><?php echo get_field("tekstRisteriet3") ?></p>

</div>

<div id="risterietTxt">
<p><?php echo get_field("tekstRisteriet4") ?></p>
<p><?php echo get_field("tekstRisteriet5") ?></p>

</div>
</div>
</div>

</section>

<?php 

get_footer();

?>