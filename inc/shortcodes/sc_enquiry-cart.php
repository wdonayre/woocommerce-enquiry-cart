<?php

/**
 * Enquiry cart button shortcode.
 * [wec_enquiry_cart]
 *
 * @return string
 */
function wec_enquiry_cart__func() {
    //return yoast_breadcrumb( '', '', false );
    return '';
}

add_shortcode( 'wec_enquiry_cart', 'wec_enquiry_cart__func' );