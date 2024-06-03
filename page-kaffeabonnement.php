<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>
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

<div class="container">
 <section class="kaffeabonnementInformation">
<p>Få leveret friskristet specialty kaffe hver måned. Med en abonnementsløsning fra Holy Bean sørger vi for, at du aldrig løber tør for dejlig kaffe af den højeste kvalitet. 
    Du får mulighed for at stifte bekendtskab med alle vores friskristede specialty kaffer fra vores standard kaffesortiment, og i hver forsendelse forkæler vi dig med en lille overraskelse. 
    Du kan vælge imellem espresso eller filterkaffe.</p>
</section>

<div id="kaffeabonnementPris">
<h2>Pris</h2>
<p>2 x 250 g 185 kr plus fragt </p>
<p>2 x 500 g 340 kr plus fragt</p>
</div>

<section class="kaffeabonnementInformation">
<p>Hver måned modtager du enten 2 x 250 g eller 2 x 500 g kaffe. Vi pakker dine kaffer først på måneden, og pengene trækkes, når kaffen afsendes.</p>
</section>


<section id="kaffeabonnementValg">
    <h3>Vælg vægt</h3>
<select>
<option value="0">Vælg vægt</option>
<option value="0">Vælg vægt</option>
<option value="0">Vælg vægt</option>
<option value="0">Vælg vægt</option>
</select>

<h3>Vælg kaffetype</h3>
<select>
<option value="0">Vælg vægt</option>
<option value="0">Vælg vægt</option>
<option value="0">Vælg vægt</option>
<option value="0">Vælg vægt</option>
</select>

<button class="valgMuligheder">TILFØJ TIL KURV</button>
</section>

<div id="kaffeabonnementAccordion">
<button class="kaffeabonnementAc">Beskrivelse</button>
<div class="beskrivelse">
    <p>Beskrivelse</p>
</div>
</div>
</div>

<?php 

get_footer();

?>