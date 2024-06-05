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


<!-- DESKTOP -->
<div id="desktopKaffeabonnement">
<div class="container">
<div class="kaffeabonnementFlex">
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



</div>


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


</section>

<button class="kaffeabonnementvalgMuligheder">TILFØJ TIL KURV</button>



<div id="kaffeabonnementAccordion">
<button class="kaffeabonnementAc">Beskrivelse</button>
<div class="beskrivelse">
    <div id="manedskaffe">
    <h3>Vores månedskaffer er: </h3>


<p>Jan: Honduras & Etiopien</p>
<p>Feb: Brasilien & Burundi</p>
<p>Mar: Peru & El Salvador</p>
<p>Apr: Surprice & Etiopien</p>
<p>Maj: Brasilien & Burundi</p>
<p>Jun: Peru & El Salvado</p>
<p>Aug: Brasilien & Burundi</p>
<p>Sep: Peru & El Salvador</p>
<p>Okt: Honduras & Etiopien</p>
<p>Nov: Brasilien & Burundi</p>
<p>Dec: Peru & El Salavador</p>
</div>

<div id="friskristet">
<h3>Friskristet kaffe på abonnement</h3>
<p>Hver måned modtager du enten 2 x 250 g eller 2 x 500 g kaffe. Vi pakker kaffen først på måneden,
    og penge trækkes, når kaffen afsendes.
</p>

<div id="obs">
<p>VÆR OBS PÅ: DIT KAFFEABONNEMENT STARTER ALTID I DEN FØRSTKOMMENDE MÅNED. Dsv. bestiller du abonnement d. 10.
    feb. så pakkes din kaffe i den efterfølgende måned, og pengene trækkes herefter. Abonnementet vil 
    derfor træde i kraft fra marts måned.
</div>
</div>
</div>
</div>

</div>
</div>




















<!-- MOBIL -->
 <div id="mobilKaffeabonnement">

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
    <div id="manedskaffe">
    <h3>Vores månedskaffer er: </h3>


<p>Jan: Honduras & Etiopien</p>
<p>Feb: Brasilien & Burundi</p>
<p>Mar: Peru & El Salvador</p>
<p>Apr: Surprice & Etiopien</p>
<p>Maj: Brasilien & Burundi</p>
<p>Jun: Peru & El Salvado</p>
<p>Aug: Brasilien & Burundi</p>
<p>Sep: Peru & El Salvador</p>
<p>Okt: Honduras & Etiopien</p>
<p>Nov: Brasilien & Burundi</p>
<p>Dec: Peru & El Salavador</p>
</div>

<div id="friskristet">
<h3>Friskristet kaffe på abonnement</h3>
<p>Hver måned modtager du enten 2 x 250 g eller 2 x 500 g kaffe. Vi pakker kaffen først på måneden,
    og penge trækkes, når kaffen afsendes.
</p>

<div id="obs">
<p>VÆR OBS PÅ: DIT KAFFEABONNEMENT STARTER ALTID I DEN FØRSTKOMMENDE MÅNED. Dsv. bestiller du abonnement d. 10.
    feb. så pakkes din kaffe i den efterfølgende måned, og pengene trækkes herefter. Abonnementet vil 
    derfor træde i kraft fra marts måned.
</div>
</div>
</div>

</div>

</div>
</div>

<?php 

get_footer();

?>