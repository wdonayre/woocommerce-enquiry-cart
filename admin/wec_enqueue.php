<?php
/**
 * Script
*/
if( ! function_exists( 'wec_enqueue_script' )){
    
    function wec_enqueue_script(){
        wp_enqueue_script('wec-main-script', plugin_dir_url(WEC_BASENAME) . '/js/dist/wec.js', false, filemtime( WEC_PATH . '/js/dist/wec.js' ), true);
    }
    add_action( 'wp_enqueue_scripts', 'wec_enqueue_script' );
}

/**
 * Stylesheets
 */
if( ! function_exists('wec_enqueue_style')){
    function wec_enqueue_style(){
        wp_enqueue_style('wec-main-style', plugin_dir_url(WEC_BASENAME) . '/css/dist/wec.css', array(), filemtime( WEC_PATH . '/css/dist/wec.css' ), 'all');
    }
    add_action( 'wp_enqueue_scripts', 'wec_enqueue_style' );
}
