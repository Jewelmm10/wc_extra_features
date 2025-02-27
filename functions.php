<?php

function child_enqueue_files() {
    // Parent and child theme styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style','elementor-frontend'));
}

add_action('wp_enqueue_scripts', 'child_enqueue_files', 20);

// require files
require_once get_stylesheet_directory() . '/inc/addons.php';




// Register the custom product type
// function register_service_product_type() {
//     if (!class_exists('WC_Product_Service')) {
//         class WC_Product_Service extends WC_Product {
//             public function __construct($product) {
//                 $this->product_type = 'service';
//                 parent::__construct($product);
//             }
//         }
//     }
// }
// add_action('init', 'register_service_product_type');

// // Add "Service" to WooCommerce product type dropdown
// function add_service_product_type($types) {
//     unset($types['grouped']);   
//     unset($types['external']);
//     $types['service'] = __('Service Product', 'woocommerce');
//     return $types;
// }
// add_filter('product_type_selector', 'add_service_product_type');

