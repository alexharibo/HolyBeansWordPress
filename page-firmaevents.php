<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>
    <div class="container">
    <section class="firmaeventsIntro">
<img src="<?php the_post_thumbnail_url(); ?>" id="firmaeventsImg">
<div id="firmaeventsTxt">
<h1>Firmaevents</h1>
<p>Så vil vi give dig lidt inspiration til et anderledes og hyggeligt firmaevent sammen med dine kolleger. Kaffe er nemlig ikke bare kaffe. Det er en yderst kompleks råvare ligesom vin, og kaffesmagning er bestemt en oplevelse for sig.
Med et arrangement hos jer eller i risteriet på Vestfyn, giver vi sanserne frit spil. 
I lytter, dufter, smager og bliver klogere på denne fantastiske råvare, kafferegioner og bryggemetoder.
Vi er et meget fleksibelt mikroristeri, så sammen planlægger vi indhold, tid og sted, så arrangementet bliver lige som I ønsker.
Hvad koster det? Pris fra kr. 275,- pr. person ved min. 10 deltagere (ex moms og kørsel).
Ønsker I lidt mad og drikkelse til eventet i form af sandwich og vand/sodavand, så er prisen 325,- pr. person.
<button class="valgMuligheder">VÆLG MULIGHEDER</button>
</div>

<div id="firmaeventsTxt">
<h1>Hvem er vi?</h1>
<p>Hos Holy Bean Coffee Roasters indkøber vi altid vores kaffe med omtanke.
     Det vil sige, at vi for eksempel indkøber økologiske bønner, køber kaffen til en høj pris pga vores høje kvaliteter.
      På den måde er vi med til at sikre farmeren en mere fair kilopris eller vi støtter projekter i lokalområdet,
       hvor kaffen dyrkes. Det kan være projekter som La Finca Humana,
       som sætter fokus på økologisk dyrkning og uddannelse af børn til en mere bæredygtig levevis med mindre kriminalitet.
<button class="kontaktKnap">KONTAKT</button>
</div>

</section>
</div>

<?php 

get_footer();

?>