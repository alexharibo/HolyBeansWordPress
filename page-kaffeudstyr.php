
<?php


defined( 'ABSPATH' ) || exit;

get_header( 'shop' );




?>
<header class="woocommerce-products-header">
<div class="container">
    
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
    

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
<a href="<?php echo site_url('/kaffekander') ?>"> 
	<img src="<?php echo get_theme_file_uri('/assets/burundiespresso.png') ?>"></a>
</div>
	</div>

	</section>
	<?php endif; ?>
<?php 







	?>
</header>
    </div>
<?php



get_footer();
