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

<section class="risterietIntro">
<img src="<?php the_post_thumbnail_url(); ?>" id="risterietImg">
<div id="kaffeKvalitetTxt">
<h1>Kaffe i høj kvalitet</h1>
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
<?php 

get_footer();

?>