<?php get_header(); ?>






<?php while(have_posts()) 
    the_post(); ?>
<div class="container">
<img src="<?php the_post_thumbnail_url(); ?>" id="cafeIMG">
<div id="design1">
<h1>Kaffe til Café og Restaurant</h1>

</div>

<div class="vilkaarDesign">

<div id="design2">
<h2>Giv dine gæster en unik kaffeoplevelse</h2>
<p>Lægger du vægt på kvalitet, de rene råvarer og den ultimative smagsoplevelse, så vil vi anbefale dig at vælge en kaffe som efterlever dette i hver eneste servering.
</div>

<div id="design3">
<h2>Kvalitet og velsmag</h2>
<p>Hos Holy Bean Coffee Roasters går vi ikke på kompromis med hverken smagen eller kvaliteten. Vi tror på de rene råvarer og udvælger de fineste speciality kaffer,
     fordi vi ved, at det påvirker de mange hænder, når vi vælger at købe og drikke kaffe af en høj kvalitet. Hos Holy Bean Coffe Roasters ønsker vi at bevare kaffens unikke karakteristika samt smagsnuancer, hvorfor vi altid lysrister vores kaffer.
     Hos Holy Bean Coffee Roasters er friske råvarer noget af det allervigtigste. Derfor er vores kaffe altid friskristet.</p>
</div>

<div id="design4">
<h2>Det gode håndværk</h2>
<p>For os går det gode håndværk  hånd i hånd med den unikke kaffeoplevelse, som smag og kvalitet. Vi arbejder konstant på at forfine håndværket og riste vores kaffe til perfektion, 
    så smagsnuancerne bevares. Vi vægter et godt samarbejde med leverandørerne samt en tæt og åben dialog med farmerne højt. 
    Kun på den made ved vi, hvordan farmerne arbejder og hvad de står for i selve dyrkningen af kaffebønnen.</p>
</div>

<div id="design5">
    <h2>Kaffe dyrket og ristet med omtanke</h2>
    <p>Hos Holy Bean Coffee Roasters producerer vi med omtanke. Det vil sige, at de fleste af vores kaffer er økologisk dyrket, støtter forskellige lokale projekter som for eksempel La Finca Humana eller noget helt tredje. Det kan vi, fordi vi altid køber kaffe af en høj kvalitet.
Vi forsøger, så vidt det er muligt, altid at handle direkte med farmeren og på den måde minimere fordyrrende mellemled. Herved kan vi sikre bonden en langt mere fair pris og samtidig opbygge en tættere relation og forståelse for hinandens arbejde.
 Derfor har vi også besøgt størstedelen af vores leverandører og kan tilbyde vores kunder kafferejser til vores kaffefarmere.</p>
</div>

    <div id="design6">
<h2>Høj service og leveringssikkerhed</h2>
<p>Holy Bean Coffee Roasters er et mikroristeri på Fyn, hvor høj service og leveringssikkerhed er nogle af nøgleordene. For os er det vigtigt, at du som restaurantchef, 
    barista eller nyopstartet caféejer er klædt på med vores viden og erfaring, så du kan give dine kunder den bedste helheds-kaffeoplevelse. Derfor tilbyder vi også skoling og uddannelse inden for kaffens univers, og vi følger vores samarbejdspartnere tæt. Relationen mellem os og vores partnere er vigtig, og vi lægger vægt på en høj gennemsigtighed i den måde, vi driver forretning på. Hos Holy Bean Coffee Roasters har vi investeret i produktionsfaciliteter, 
    som sikrer dig en høj leveringssikkerhed, men også fleksibilitet i produktionen og løsningen af dine opgaver.</p>
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