<?php

/*
 * Plugin Name: Advanced Custom Fields: Animate Parameters
 * Plugin URI: https://github.com/reyhoun/acf-animate-parameter
 * Description: Get Animation Parameters from user.
 * Version: 1.1.0
 * Author: Reyhoun Team
 * Author URI: http://reyhoun.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-animate-parameters', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_animate_parameters( $version ) {
	
	include_once('acf-animate-parameters-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_animate_parameters');	
?>