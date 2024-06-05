
<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */


?>
<header class="woocommerce-products-header">
<div class="container">
    
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>
        <p id="kaffeBeskrivelse">Her finder du vores fulde sortiment af classic sort kaffe og classic espresso.
Vi ønsker med denne kaffeserie, at bygge bro imellem den klassiske kop kaffe og den unikke smagsoplevelse, som man får, når man smager en kop af den fineste specialkaffe.
Denne kaffe er til dig som ønsker lidt mere end klassisk kaffe.
Vi rister denne serie mørkere, end vi normalt rister kaffe. Dog ikke så mørk, at alle nuancer og aromaer forsvinder.</p>
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






echo do_shortcode('[products columns=6 limit=10 category=classic ]'); 








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
<h2>Specialty Kaffe</h2>
<div id="entryPic2">
<a href="<?php echo site_url('/specialty') ?>"> 
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
