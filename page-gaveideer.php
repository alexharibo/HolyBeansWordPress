
<?php


defined( 'ABSPATH' ) || exit;

get_header( 'shop' );



?>

<div class="container">
    
<div id="gaveDesign">	
	
<?php 



echo do_shortcode('[products columns=6 limit=20 category=gaveideer]'); 


?>
</div>
	
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



	

</header>
    </div>
<?php



get_footer();
