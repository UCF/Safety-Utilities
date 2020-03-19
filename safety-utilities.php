<?php
/*
Plugin Name: Safety Utilities
Description: Utilities for UCF's Safety website.
Version: 1.0.0
Author: UCF Web Communications
License: GPL3
GitHub Plugin URI: UCF/Safety-Utilities
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'UCF_SAFETY_UTILS__PLUGIN_URL', plugins_url( basename( dirname( __FILE__ ) ) ) );
define( 'UCF_SAFETY_UTILS__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'UCF_SAFETY_UTILS__STATIC_URL', UCF_SAFETY_UTILS__PLUGIN_URL . '/static' );
define( 'UCF_SAFETY_UTILS__PLUGIN_FILE', __FILE__ );


require_once UCF_SAFETY_UTILS__PLUGIN_DIR . 'plugin-filters/faq.php';
