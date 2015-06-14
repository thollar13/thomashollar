<?php
/**
* Plugin Name: Stripe E-Commerce
* Plugin URI: http://thomashollar.com
* Description: Allows for e-commerce via Stripe payment gateway.
* Version: 0.1
* Author: Thomas Hollar
* Author URI: http://thomashollar.com
* License: 
*/
?>
<?php
add_action('admin_menu', 'stripe_ecommerce_menu');
add_action( 'admin_init', 'plugin_settings' );
add_action( 'init', 'create_post_type' );

function create_post_type() {
  include 'products_post.php';
}

function stripe_ecommerce_menu() {
	/// page title, menu title, capability, menu slug, function, icon, position
	add_menu_page(
		'Stripe E-Commerce Settings', 
		'Stripe', 
		'administrator', 
		'stripe-ecommerce-settings', 
		'stripe_ecommerce_settings_page', 
		'dashicons-admin-generic'
	);
}
function stripe_ecommerce_settings_page() {
	include 'api_credentials.php';
}

function plugin_settings() {
	register_setting( 'stripe-settings-group', 'test_secret_key' );
	register_setting( 'stripe-settings-group', 'test_publishable_key' );
	register_setting( 'stripe-settings-group', 'live_secret_key' );
	register_setting( 'stripe-settings-group', 'live_publishable_key' );
}

?>