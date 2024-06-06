<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>
<div class="container">
<img src="<?php the_post_thumbnail_url(); ?>" id="cafeIMG">
<div id="design1">
<h1>Kaffeløsning til kontor</h1>

</div>

<div class="vilkaarDesign">

<div id="design2">
<h2>Kaffe dyrket og ristet med omtanke</h2>
<p>Nu kan Holy Bean A/S, via vores dygtige samarbejdspartnere, tilbyde en full-service kaffeløsning til kontorer med friskristet kaffe af den højeste kvalitet.
</div>

<div id="design3">
<h2>Vi sørger for:</h2>
<p>Hos Holy Bean Coffee Roasters indkøber vi altid vores kaffe med omtanke. Det vil sige, at vi for eksempel indkøber økologiske bønner, 
    køber kaffen til en høj pris pga vores høje kvaliteter. På den måde er vi med til at sikre farmeren en mere fair kilopris eller støtter projekter i lokalområdet, hvor kaffen dyrkes. 
    Det kan være projekter som La Finca Humana, som sætter fokus på økologisk dyrkning og uddannelse af børn til en mere bæredygtig levevis med mindre kriminalitet.</p>
</div>

<div id="design4">
<h2>Kvalitets kaffeløsning med et højt serviceniveau og leveringssikkerhed</h2>
<p>Er du træt af, at der aldrig er kaffe mandag morgen eller maskinen altid blinker med en fejl, så er det måske på tide at kigge efter en ny og bedre kaffeløsning til jeres kontor?</p>
</div>

<div id="design5">
    <h2>Høj service og leveringssikkerhed</h2>
    <p>Hos Holy Bean Coffee Roasters er et højt serviceniveau, leveringssikkerhed og relationen noget af det vigtigste i en god kaffeløsning til kontoret. Vi ved, hvor vigtigt det er, at der er friskbrygget kaffe mandag morgen, og derfor følger vi vores samarbejdspartnere tæt. 
        Vi vil være sikre på, at I har fået den helt rigtige løsning og derfor er det naturligt for os at tilbyde skoling og uddannelse i såvel kaffen som brygningen af den.
         Vi hjælper også gerne med at finde den helt rette maskine enten til leasing eller køb. 
         I Holy Bean har vi investeret i et produktionsfaciliteter, som sikrer dig og dit kontor, at der altid er friskbrygget kaffe på kanden. 
         Samtidig giver det os en vis fleksibilitet i vores produktion, og vi står altid klar til at hjælpe vores samarbejdspartnere, hvis det en dag skulle brænde på.</p>
</div>

    <div id="design6">
<h2>Matcher din virksomheds værdier med kaffen?</h2>
<p>Vil du forkæle dine medarbejdere eller bare sikre dig, at virksomhedens værdier også matcher den kaffe, du serverer for dine kunder, så vil vi anbefale, 
    at du prøver en af vores lysristede kaffer. For os er smag og kvalitet det allervigtigste, og derfor udvælger vi de bedste speciality kaffer. Vi tror på de rene råvarer og arbejder hele tiden for at bevare de mange smagsnuancer, som gør kaffeoplevelsen mere unik.
     Vi ved at friskristede bønner giver en langt bedre smagsoplevelse, og derfor rister vi hver uge eller efter behov.</p>
</div>

<div id="design7">
<h2>Yderligere spørgsmål?</h2>
<p>Hvis du skulle have yderligere spørgsmål, er du også velkommen til at kontakte os på: +45 50 50 88 36.</p>
</div>


</div>
    </div>
<?php 

get_footer();

?>