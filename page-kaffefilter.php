
<?php

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );



?>
<div class="container">
    
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>
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






echo do_shortcode('[products columns=6 limit=22 category=kaffefiltre ]'); 








	?>
	
	<h3>Relaterede kaffeudstyr</h3>
	<section class="endPoints">
 

	<div class="entryPoint">
<h2>Kaffekopper</h2>
<div id="entryPic2">
<a href="<?php echo site_url('/kaffekopper') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>

	<div class="entryPoint">
<h2>Kaffebryggere</h2>
<div id="entryPic3">
<a href="<?php echo site_url('/kaffebryggere') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>

	<div class="entryPoint">
<h2>Kaffevægte</h2>
<div id="entryPic4">
<a href="<?php echo site_url('/kaffevaegt') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>

	<div class="entryPoint">
<h2>Elkedel</h2>
<div id="entryPic6">
<a href="<?php echo site_url('/elkedel') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>

	<div class="entryPoint">
<h2>Kaffekværne</h2>
<div id="entryPic6">
<a href="<?php echo site_url('/kaffekvaern') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>

	<div class="entryPoint">
<h2>Kaffekander</h2>
<div id="entryPic6">
<a href="<?php echo site_url('/kaffekande') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>



	</section>
</header>
    </div>
<?php



get_footer();
