<?php

define( 'WEC_VERION', '0.1' );

if ( ! defined( 'WEC_PATH' ) ) {
	define( 'WEC_PATH', plugin_dir_path( WEC_FILE ) );
}

if ( ! defined( 'WEC_BASENAME' ) ) {
	define( 'WEC_BASENAME', plugin_basename( WEC_FILE ) );
}


/* default to product for safety */
if ( ! defined( 'WEC_ENVIRONMENT' ) ) {
	define( 'WEC_ENVIRONMENT', 'production' );
}

/* use minified version in production */
if ( ! defined( 'WEC_CSSJS_SUFFIX' ) ) {
	define( 'WEC_CSSJS_SUFFIX', ( 'development' !== WEC_ENVIRONMENT ) ? '.min' : '' );
}

/*=================================================================*/
/*=================================================================*/
/*=================================================================*/

/**
 * Plugin Loading 
 */

function wec_init(){
	//enqueue js/css
	require_once WEC_PATH . 'admin/wec_enqueue.php';
	
	require_once WEC_PATH . 'inc/wec-functions.php';	
	require_once WEC_PATH . 'inc/shortcodes/sc_enquiry-cart.php';
}

/** Plugin Bootstrap **/
if( ! wp_installing() ){
	add_action( 'plugins_loaded', 'wec_init', 14 );
}
