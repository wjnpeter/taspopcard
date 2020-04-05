<?php
/**
 * 
 */

add_action( 'init', 'init_actions_parent_theme');
function init_actions_parent_theme() {
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );

	// Home
	remove_action( 'storefront_header', 'storefront_header_cart',     60 );
	
}

// override footer copyright
if ( ! function_exists( 'storefront_credit' ) ) {
	function storefront_credit() {
		?>
		<div class="site-info">
			<a href="/privacy-policy">Privacy</a>
			<br>
			<em>Design by <a href="#" target="_blank">PC Studio</a></em>
		</div><!-- .site-info -->
		<?php
	}
}

if ( ! function_exists( 'storefront_site_title_or_logo' ) ) {
	function storefront_site_title_or_logo( $echo = true ) {
		
		$html = format_site_title();

		if ( '' !== get_bloginfo( 'description' ) ) {
			$html .= '<p class="site-description">' . esc_html( get_bloginfo( 'description', 'display' ) ) . '</p>';
		}
		
		if ( ! $echo ) {
			return $html;
		}

		echo $html;
	}
}

function format_site_title() {
	$tag = is_home() ? 'h1' : 'div';
	$html = '<' . esc_attr( $tag ) . ' class="beta site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home"><span class="site-title-1st">POP</span><span class="site-title-2nd">CARD</span></a></' . esc_attr( $tag ) .'>';

	return $html;
}

?>
