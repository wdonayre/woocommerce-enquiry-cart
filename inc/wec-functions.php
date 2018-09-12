<?php

function add_to_enquiry_trigger_func(){
    echo '<div class="wec-trigger-outer"><button class="wec-btn wec-add-trigger">Add to Enquiry</button></div>';
}
//add_action( 'woocommerce_product_thumbnails', 'add_to_enquiry_trigger_func', 15 );

//woocommerce_after_shop_loop_item_title
function add_to_enquiry_trigger_in_loop_func(){
    echo '<div class="wec-trigger-outer"><button class="wec-btn wec-add-trigger">Add to Enquiry</button> <button class="wec-btn wec-learn-more">Learn More</button> </div>';
}
add_action( 'woocommerce_after_shop_loop_item_title', 'add_to_enquiry_trigger_in_loop_func', 15 );