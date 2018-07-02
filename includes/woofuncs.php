<?php 

// WOOCOMMERCE CUSTOMIZATION

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Add short description to products on shop page.
 */
add_action( 'woocommerce_after_shop_loop_item', 'woo_show_excerpt_shop_page', 5 );
function woo_show_excerpt_shop_page() {
	global $product;

	echo $product->post->post_excerpt;
}

/**
 * Remove related products from single product view.
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/**
 * Add product category above product titles inside product-cats div.
 */
add_action( 'woocommerce_before_shop_loop_item_title', 'avia_add_product_cat', 10);
function avia_add_product_cat()
	{
		global $product;
		$product_cats = wp_get_post_terms($product->id, 'product_cat');
		echo '<div class="product-cats">';
		$count = count($product_cats);
		foreach($product_cats as $key => $cat)
		{
			echo $cat->name;
			if($key < ($count-1))
			{
				echo ', ';
			}
			else
			{
			
			}
		}
		echo '</div>';
	}
	
/**
 * Add 'Details' button after 'Add to Cart' on shop page.
 */
// function more_information() {
// 	global $product;
// 		if ($product){
// 		$url = esc_url($product->get_permalink() );
// 		echo '<a rel="nofollow" href="' .$url .'" class="product-details"><i class="fa fa-list" aria-hidden="true"></i> Details</a>';
// 		}
// 	}
// add_action( 'woocommerce_after_shop_loop_item', 'more_information' );