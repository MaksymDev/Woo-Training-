<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

// END ENQUEUE PARENT ACTION


//================================================================================================================

add_filter( 'woocommerce_loop_add_to_cart_link', 'add_product_link' );
function add_product_link( $link ) {
global $product;
    echo '<form action="' . esc_url( $product->get_permalink( $product->id ) ) . '" method="get">
            <button type="submit" class="button add_to_cart_button product_type_simple">' . __('View Product', 'woocommerce') . '</button>
          </form>';
}


add_action( 'storefront_header', 'jk_storefront_header_content', 40 );
function jk_storefront_header_content() { ?>
	<div style="display: block; text-align: right; padding: 0px 0px 20px;">
		
			<a class="button alt" href="/favorites/"><i style="margin-right: 5px;" class="fa fa-heart"></i>MY WISH LIST</a>
		
	</div>
	<?php
}

add_action( 'storefront_header', 'woocommerce_after_template_part', 40 );
function woocommerce_after_template_part() { ?>
	<div class="info_text" style="display: block; text-align: right; padding: 0px 0px 20px;">
		Have questions about our products? <em>Give us a call:</em> <strong>0800 123 456</strong>
	</div>
	<?php
}

