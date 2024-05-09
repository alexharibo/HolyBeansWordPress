<?php


get_header();

while(have_posts()) {
    the_post(); ?>





<div id="eventhosjerintroimg">
   
 <img src="<?php the_post_thumbnail_url() ?>" id="entryCover">
 <p2 id="forsideCovertext">Vi hjælper<span id="DIG"> DIG </span>mod dit næste event</p2>
</div>

</div>
</div>


<?php the_content(); ?>


     

 
      







    <h2 id="virksomhedAnbefaler">Virksomheder, der <span class="orangeText">anbefaler os</span></h2>
<div class="partnere ">

<img src="<?php echo get_field('logo1') ?>" id="partnerIkon" ></i>
<img src="<?php echo get_field('logo2') ?>" id="partnerIkon" ></i>
<img src="<?php echo get_field('logo3') ?>" id="partnerIkon" ></i>


</p>
</div>



</div>


<div class="introAnmeldelser">
    <div class="anmeldelseTekst hidden">
        <h2>Det siger vores kunder</h2>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
      
        <p id="anmeldelse">
        <p><?php echo get_field('testimonial1') ?></p>
        </p>
        <p2>- Bofællesskabet Frederiksgade</p2>
        
    </div>
    <!-- ANMELDELSE 2 -->
    <div class="anmeldelseTekst hidden">
        <h2>Det siger vores kunder</h2>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
    
      
        <p id="anmeldelse">     
            <p><?php echo get_field('testimonial1') ?></p>
        </p>
        <p2>- Louise</p2>

    </div>
    <!-- ANMELDELSE 3 -->
    <div class="anmeldelseTekst hidden">
        <h2>Det siger vores kunder</h2>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
        <i class="fa-solid fa-star" id="introStars"></i>
    
    
      
        <p id="anmeldelse">     <p><?php echo get_field('testimonial1') ?></p>
        <p2>- Caroline</p2>
        
</div>

</div>

    <!-- ENTRYPOINT, EVENTKATALOG -->
    
    <div class="entryPoints">
       
        <div class="introTekst hidden">
      
        <h2>Vores <span class="orangeText">eventkatalog</span></h2>
        <p>
            Velkommen til vores eventkatalog, hvor vi tilbyder en bred vifte af spændende aktivitetspakker til enhver lejlighed. Uanset om du planlægger en firmaudflugt, et teambuilding-arrangement eller en særlig begivenhed med venner og familie, har vi noget for enhver smag. 
         
        </p>

        <p>   Vores pakker er designet til at skabe uforglemmelige oplevelser og styrke båndene mellem deltagerne. 
        </p>
        <a href="<?php echo site_url('/eventkatalog') ?>" > <button class="introButton">Se eventkatalog</button></a>
                </div>
                <div id="introPic">
                    <img src="<?php echo get_theme_file_uri('/assets/introKatalog.jpg') ?>" alt="Billede af kajakpolo og paintball kombineret for at lave eventkatalog" id="entryPic">
                    </div>
    </div>

        <!-- ENTRYPOINT, EVENTS HOS JER -->
    <div class="entryPoints">

        <div id="introPic">
            <img src="<?php echo get_theme_file_uri('/assets/introEvents.jpg') ?>" alt="Billede af en medarbejder og solnedgang" id="entryPic">
            </div>

        <div class="introTekst hidden">
        <h2>Events <span class="orangeText">hos jer</span></h2>
       <p>Hos os skaber vi mindeværdige oplevelser, som du ikke glemmer!
        Vi har mulighed for at planlægge din næste kommende arrangement, hvor teamwork spiller en kæmpe rolle.
        </p>
        
        <a href="<?php echo site_url('/eventhosjer') ?>"> <button class="introButton">Se events</button></a>
                </div>
    </div>

    <!-- ENTRYPOINT, TEAMBUILDING -->

    <div class="entryPoints">
        
        <div class="introTekst hidden">

        <h2>Teambuilding <span class="orangeText">aktiviteter</span></h2>
        <p>Vores aktiviteter skaber en unik oplevelse, der styrker relationerne og fremmer teamwork gennem sjove udfordringer og kreative opgaver. 
            Lad os sammen skabe et miljø, hvor I som team vokser og styrkes sammen.
        </p>
<br>
        <p>Så se vores udvalg af aktiviteter, vi kan planlægge for at skabe det bedst mulige arrangement.
        </p>
        <a href="<?php echo site_url('/teambuilding') ?>"> <button class="introButton">Se events</button></a>
                </div>
                <div id="introPic">
                    <img src="<?php echo get_theme_file_uri('/assets/introTeambuilding.jpg') ?>" alt="Billede af et hold, der spiller ballebold for at understøtte teambuilding" id="entryPic">
                    </div>
                 
                    

                    
    </div>

    <!-- Mobil Spacing -->
<div class="mobileSpace">
</div>
 

<!-- Mobil Navigation -->
<div class="mobileNav">
    <div class="mobileForside">
        <a href="<?php echo site_url('') ?>">
    <i class="fa-solid fa-house" id="mobileIkon"></i>
</a>
    <p>Forside</p>
</div>

<div class="mobileForside">
    <a href="<?php echo site_url('eventkatalog') ?>">
  <i class="fa-solid fa-cube" id="mobileIkon"></i>
</a>
    <p>Katalog</p>
</div>

<div class="mobileForside">
    <a href="<?php echo site_url('eventhosjer') ?>">
    <i class="fa-solid fa-house" id="mobileIkon"></i>
</a>
    <p>Events</p>
</div>

<div class="mobileForside">
    <a href="<?php echo site_url('teambuilding') ?>">
    <i class="fa-solid fa-people-group" id="mobileIkon"></i>
    </a>
    <p>Team</p>
</div>

<div class="mobileForside">
    <a href="<?php echo site_url('mad-og-drikke') ?>">
    <i class="fa-solid fa-utensils" id="mobileIkon"></i>
    </a>
    <p>Café</p>
</div>

<div class="mobileForside">
    <a href="<?php echo site_url('kontakt') ?>">
    <i class="fa-solid fa-envelope" id="mobileIkon"></i>
    </a>
    <p>Kontakt</p>
</div>
</div>




    <?php }
    get_footer();
?>