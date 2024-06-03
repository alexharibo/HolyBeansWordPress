<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>
<div class="container">
<section class="risterietIntro">
<img src="<?php the_post_thumbnail_url(); ?>" id="risterietImg">
<div id="risterietTxt">
<h1>Risteriet</h1>
<p>Hos Holy Bean er vi bevidste om det aftryk, vi sætter i verden, og de valg vi træffer.
     Derfor arbejder vi fokuseret med bæredygtighed og de 17 verdensmål.
      For os handler det primært om ansvarligt forbrug og produktion, hvorfor størstedelen af vores 
      speciality kaffer er fra nøje udvalgte farme med fokus på social ansvarlighed, 
      biodiversitet og miljø. Men bæredygtighed for os handler også om lokale projekter, 
      som kan være med til at sætte fokus på uddannelse, kvinders rettigheder, klima og miljø samt minimering af spild. 
      I bund og grund handler det om sund fornuft og det at have hjertet på rette sted uanset,
       om vi snakker den lokale kaffefarmer, vores kunder eller klima.

</div>

<div id="risterietTxt">
<p>Vi ved også, at vi har påbegyndt en lang rejse mod en mere ansvarlig måde at drive mikroristeri på.
     Vi kan ikke ændre verden alene, men de små skridt, vi tager sammen, kan gøre en forskel. 

</div>

<div id="risterietTxt">
<p>Et af vores fokusområder i disse år er vores brug af emballage. Derfor har vi for eksempel skiftet vores hvide poser over til genanvendelige hvide poser. 
    Det vil sige, de nu kan sorteres med plastik frem for restaffald. Et andet tiltag er vores nyopstartede samarbejde med RE-ZIP, som er cirkulær emballage til vores forsendelser.
     Hvis du vil vide mere om RE-ZIP cirkulær emballage kan du læse mere nedenfor. 

</div>
</section>
</div>

<section class="risterietKvalitetskaffe">
<img src="<?php the_post_thumbnail_url(); ?>" id="risterietImg">
<div id="risterietTxt">
<h1>Kaffe i høj kvalitet</h1>
<p>Kaffe er en fantastisk råvare, og vi tror på, at det påvirker rigtig mange mennesker, 
    når vi vælger at købe og drikke kaffe af en høj kvalitet. Kaffe af en høj kvalitet, 
    er lig med kaffe til en højere pris og dermed en tilsvarende højere løn til farmerne i de kaffeproducerende lande. 
    Derfor udvælger vi de fineste speciality kaffer. Alle kaffer scores ud fra kvalitet, og speciality kaffer er de kaffer, som scorer højest. Speciality ligger fra 80 point og op til 100 point, og det er de allerfærreste kaffer, 
    som scorer over 90 point og dermed kvalificerer sig til Cup of Excellence som for eksempel vores kaffe fra La Cumbre i El Salvador.

</div>

<div id="risterietTxt">
<p>Den endelige ristning og kaffebrygning er altafgørende for den gode smag.
     At riste kaffen til perfektion betyder også, at vi anerkender og værdsætter kaffebøndernes store arbejde! 
     Derfor rister vi vores kaffer nænsomt og ud fra en klar vision om, hvordan kafferne skal smage, 
     afhængigt af blandt andet oprindelse og forarbejdning. 
     Vi tror på kaffens unikke karakteristika og arbejder hver dag for at frembringe kaffens naturlige karakter. 
     Ved at riste lyst bevarer vi så mange unikke smagsnuancer som muligt, 
     og mange vil opleve vores kaffer som florale og frugtige.
      Modsat vil en mere mørkristet kaffe, som oftest smage mere brændt. 
      Når vi rister lyst er det ligeledes sværere at “skjule” fejl i kaffen,
       hvorimod en mørkristet kaffe nemmere slører defekterne, hvis de måtte findes i kaffen. 
       Kort sagt kan man sige, at pris, kvalitet og ristegrad som oftest hænger sammen.


</div>


</section>

<?php 

get_footer();

?>