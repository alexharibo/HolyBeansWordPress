<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>
<div class="container">
<section class="ansvarlighedIntro">
<img src="<?php the_post_thumbnail_url(); ?>" id="risterietImg">
<div id="ansvarlighedTxt">
<h1>Vores ansvarlighed</h1>
<p>Hos Holy Bean er vi bevidste om det aftryk, vi sætter i verden, og de valg vi træffer.
     Derfor arbejder vi fokuseret med bæredygtighed og de 17 verdensmål.
      For os handler det primært om ansvarligt forbrug og produktion, hvorfor størstedelen af vores 
      speciality kaffer er fra nøje udvalgte farme med fokus på social ansvarlighed, 
      biodiversitet og miljø. Men bæredygtighed for os handler også om lokale projekter, 
      som kan være med til at sætte fokus på uddannelse, kvinders rettigheder, klima og miljø samt minimering af spild. 
      I bund og grund handler det om sund fornuft og det at have hjertet på rette sted uanset,
       om vi snakker den lokale kaffefarmer, vores kunder eller klima.

</div>

<div id="ansvarlighedTxt">
<p>Vi ved også, at vi har påbegyndt en lang rejse mod en mere ansvarlig måde at drive mikroristeri på.
     Vi kan ikke ændre verden alene, men de små skridt, vi tager sammen, kan gøre en forskel. 

</div>

<div id="ansvarlighedTxt">
<p>Et af vores fokusområder i disse år er vores brug af emballage. Derfor har vi for eksempel skiftet vores hvide poser over til genanvendelige hvide poser. 
    Det vil sige, de nu kan sorteres med plastik frem for restaffald. Et andet tiltag er vores nyopstartede samarbejde med RE-ZIP, som er cirkulær emballage til vores forsendelser.
     Hvis du vil vide mere om RE-ZIP cirkulær emballage kan du læse mere nedenfor. 

</div>
</section>
</div>

<section class="risterietKvalitetskaffe">
<img src="<?php the_post_thumbnail_url(); ?>" id="risterietImg">
<div id="ansvarlighedTxt">
<h1>Re-Zip</h1>
<p>Hos Holy Bean har vi et ønske om at minimere vores aftryk på verden.
     Derfor er vi for år tilbage påbegyndt vores rejse mod en mere ansvarlig måde
      at drive vores kafferisteri på.res kaffe fra La Cumbre i El Salvador.
</div>

<div id="ansvarlighedTxt">
<p>Et af vores tiltag er samarbejdet med RE-ZIP. RE-ZIP er cirkulær emballage, som gør op med brug-og-smid-væk kulturen. Hver gang vi producerer ny emballage belaster vi unødigt miljøet. Derfor har RE-ZIP produceret emballage, som kan indgå et cirkulært kredsløb, hvor emballagerne genbruges mange gange før de genanvendes.
     Og NU er det også muligt for dig at få sendt din kaffe i en cirkulær RE-ZIP emballage.
</div>

<div id="ansvarlighedTxt">
    <h2>Så nemt er det</h2>
<p>1. Bestil din kaffe ganske som du plejer</p>
<p>2. Vælg RE-ZIP emballage, når du går til kurven</p>
<p>3. Din nye cirkulære emballage lægges i kurven. Det koster kr. 15,-.
     Til gengæld kvitterer vi med 10% i rabat på dit næste kaffekøb, 
     når du returnerer emballagen.</p>
<p>4. Når du har modtaget din kaffe, så scan QR koden på kassen med din
     smartphone for at finde dit nærmeste returpunkt.</p>
<p>5. Aflever RE-ZIP emballagen ved dit returpunkt. Når dit returpunkt registrerer emballagen korrekt modtager du din rabatkode via din e-mail. 
    Du modtager IKKE en rabatkode, hvis pakken sendes retur til Holy Bean, 
    smides ud eller andet.</p>
</div>

<div id="ansvarlighedTxt">
   <p>Ved at bruge RE-ZIP cirkulær emballage er du med til at reducere 
    CO2e-udledningen med 80%, 89% reduceret vandforbrug og 93% reduceret træforbrug.</p>
</div>

<div id="ansvarlighedTxt">
   <p>Du kan læse meget mere om RE-ZIP og hele deres tankegang bag RE-ZIP lige her.</p>
</div>



</div>


</section>

<?php 

get_footer();

?>