<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

// END ENQUEUE PARENT ACTION


//================================================================================================================

// Removing Add To Cart button from shop and product page
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );


// Adding My Wish List button to the header
add_action( 'storefront_header', 'jk_storefront_header_content', 40 );
function jk_storefront_header_content() { ?>
	<div style="display: block; text-align: right; padding: 0px 0px 20px;">
		
			<a class="button alt" href="/favorites/"><i style="margin-right: 5px;" class="fa fa-heart"></i>MY WISH LIST</a>
		
	</div>
	<?php
}

// Adding contact information the header
add_action( 'storefront_header', 'woocommerce_after_template_part', 40 );
function woocommerce_after_template_part() { ?>
	<div class="info_text" style="display: block; text-align: right; padding: 0px 0px 20px;">
		Have questions about our products? <em>Give us a call:</em> <strong>0800 123 456</strong>
	</div>
	<?php
}

