<?php

if( ! function_exists( 'wec_enqueue_script' )){
    
    function wec_enqueue_script(){
        echo 'testing_wdonayre';
        wp_enqueue_script('wec-main-script', plugin_dir_url(WEC_BASENAME) . '/js/dist/wec.js', false, filemtime( WEC_PATH . '/js/dist/wec.js' ), true);
    }
    add_action( 'wp_enqueue_scripts', 'wec_enqueue_script' );
}
