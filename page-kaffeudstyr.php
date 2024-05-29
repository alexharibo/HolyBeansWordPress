
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
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
        <p id="kaffeBeskrivelse">Velkommen til denne side om kaffe.</p>
    

	<section class="entrySection">

	<div class="entryPoint">
<h2>Kaffekopper</h2>
<div id="entryPic">
<a href="<?php echo site_url('/kaffekopper') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>

	<div class="entryPoint">
<h2>Kaffebryggere</h2>
<div id="entryPic2">
<a href="<?php echo site_url('/kaffebryggere') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>

	<div class="entryPoint">
<h2>Kaffefilter</h2>
<div id="entryPic3">
<a href="<?php echo site_url('/kaffefilter') ?>"> 
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
	<?php endif; ?>
<?php 


echo do_shortcode('[products columns=6 limit=22 category=kaffekopper ]'); 
echo do_shortcode('[products columns=6 limit=22 category=kaffebryggere ]'); 
echo do_shortcode('[products columns=6 limit=22 category=kaffefiltre ]'); 
echo do_shortcode('[products columns=6 limit=22 category=kaffevagte ]'); 
echo do_shortcode('[products columns=6 limit=22 category=elkedler ]'); 
echo do_shortcode('[products columns=6 limit=22 category=kaffekvarne]'); 
echo do_shortcode('[products columns=6 limit=22 category=kaffekander]'); 





	?>
</header>
    </div>
<?php



get_footer();
