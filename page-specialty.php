
<?php


defined( 'ABSPATH' ) || exit;

get_header( 'shop' );



?>
<div id="kaffeDesign">	
<header class="woocommerce-products-header">
<div class="container">

    
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>
        <p id="kaffeBeskrivelse">Her finder du vores fulde sortiment af specialtykaffer til filter og espresso. Vi leverer friskristede kaffebønner, fordi det giver den bedste kaffeoplevelse. 
			Kaffen smager bedst efter at have hvilet i et par dage op til ca. 3 uger, derfor rister vi løbende på vores mikroristeri. 
			Dette sikrer, at vores kunder altid får den bedste smagsoplevelse med friskristede bønner.
			 Når vi vælger kaffe, er det vigtigt, at den er 100% arabica, dyrket med ansvarlighed og af højeste kvalitet.
</p>
        <div class="woocommerce-notices-wrapper"></div><p class="woocommerce-result-count">
		Sortér efter produkt</p>
<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby" aria-label="Shop order">
	<option value="menu_order"  selected='selected'>Normal sortering</option>
					<option value="popularity" >Sorter efter populæreste</option>
					<option value="rating" >Sorter efter bedst anmeldte</option>
					<option value="date" >Sorter efter nyeste</option>
					<option value="price" >Sorter fra pris: Lav til høj</option>
					<option value="price-desc" >Sort fra pris: Høj til lav</option>
			</select>
	<input type="hidden" name="paged" value="1" />
	</form>
	

	<?php endif; ?>

<?php 






echo do_shortcode('[products columns=6 limit=10 category=specialty ]'); 








	?>
	

	<h3>Relaterede kaffeprodukter</h3>
	<section class="endPoints">


	<div class="entryPoint">
<h2>Specialiteter</h2>
<div id="entryPic">
<a href="<?php echo site_url('/specialiteter') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>


	<div class="entryPoint">
<h2>Classic Kaffe</h2>
<div id="entryPic3">
<a href="<?php echo site_url('/classic-kaffe') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>
	
	<div class="entryPoint">
<h2>Rå kaffebønner</h2>
<div id="entryPic4">
<a href="<?php echo site_url('/raa-kaffebonner') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>



	<div class="entryPoint">
<h2>Gaveideer</h2>
<div id="entryPic6">
<a href="<?php echo site_url('/gaveideer') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	

</header>
    </div>
	
<?php



get_footer();
