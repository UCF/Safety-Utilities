<?php
/**
 * Overrides to the UCF FAQ plugin for the Safety site
 */

namespace Safety\Utils\Plugins;


/**
 * Modifies registered ACF Fields in the UCF FAQ plugin.
 *
 * @since 1.0.0
 * @author Jo Dickson
 */
function faq_acf_fields() {
	// Can't get a local field, return.
	if ( ! function_exists( 'acf_get_local_field' ) ) return;

	$sort_order_key = 'field_5b917a3820356';
	$sort_order_field = acf_get_local_field( $sort_order_key );
	if ( ! $sort_order_field ) return;

	// Modify existing sort order field settings to force
	// a default value.
	$sort_order_field['default_value'] = 99999;
	acf_remove_local_field( $sort_order_key );
	acf_add_local_field( $sort_order_field );
}

add_action( 'acf/init', __NAMESPACE__ . '\faq_acf_fields', 11, 0 );
