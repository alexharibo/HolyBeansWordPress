<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */



		do_action( 'woocommerce_before_main_content' );

		
	?>
	
<div class="singleProductStyle">
	<div class="container">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

		

			<?php wc_get_template_part( 'content', 'single-product' ); ?>
	
		

		<?php endwhile; // end of the loop. ?>



	


		
		</div>
		</div>
		
		</div>
		</div>
	
		

<?php
get_footer( 'shop' );

