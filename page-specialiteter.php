
<?php


defined( 'ABSPATH' ) || exit;

get_header( 'shop' );



?>
<header class="woocommerce-products-header">
<div class="container">
    
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>
        <p id="kaffeBeskrivelse">Velkommen til denne side om kaffe.</p>
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






echo do_shortcode('[products columns=6 limit=10 category=specialiteter ]'); 







	?>
		<h3>Relaterede kaffeprodukter</h3>
	<section class="endPoints">


	<div class="entryPoint">
<h2>Specialty Kaffe</h2>
<div id="entryPic2">
<a href="<?php echo site_url('/specialty') ?>"> 
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



	</section>


</header>
    </div>
<?php



get_footer();
