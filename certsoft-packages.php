<?php
/*
Plugin Name: Certsoft Packages
Description: Add the Certsoft signup and payments.
Author: Matt Lewis
Version: 1.1.4
*/

function cs_enqueue() {
	wp_enqueue_style( 'cs-tailwind', plugin_dir_url( __FILE__ ) . '/src/output.css');
  wp_enqueue_style( 'cs-payment', plugin_dir_url( __FILE__ ) . '/src/payment.css');
  wp_enqueue_script( 'cs-js', plugin_dir_url( __FILE__ ) . '/js/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'cs_enqueue' );

/* ----------------------------------------
ADD SIGNUP PAGE TEMPLATE 01 
------------------------------------------- */

function cs_page_template ($templates) {
  $templates['page-signup.php'] = 'Packages Signup Template';
  return $templates;
}

add_filter ('theme_page_templates', 'cs_page_template');

function cs_redirect_page_template ($template) {
  $post = get_post(); $page_template = get_post_meta( $post->ID, '_wp_page_template', true ); 
  if ('page-signup.php' == basename ($page_template ))
    $template = plugin_dir_path(__FILE__) . 'templates/page-signup.php';
    return $template;
  }
add_filter ('page_template', 'cs_redirect_page_template');

/* ----------------------------------------
ADD SIGNUP PAGE TEMPLATE (STEPPED) 
------------------------------------------- */

function stepped_page_template ($templates) {
  $templates['page-stepped-signup.php'] = 'Stepped Signup Template v1';
  return $templates;
}

add_filter ('theme_page_templates', 'stepped_page_template');

function stepped_redirect_page_template ($template) {
  $post = get_post(); $page_template = get_post_meta( $post->ID, '_wp_page_template', true ); 
  if ('page-stepped-signup.php' == basename ($page_template ))
    $template = plugin_dir_path(__FILE__) . 'templates/page-stepped-signup.php';
    return $template;
  }
add_filter ('page_template', 'stepped_redirect_page_template');

/* ----------------------------------------
ADD SIGNUP PAGE TEMPLATE (STEPPED v2) 
------------------------------------------- */

function stepped_page_template_02 ($templates) {
  $templates['page-stepped-signup-02.php'] = 'Stepped Signup Template v2';
  return $templates;
}

add_filter ('theme_page_templates', 'stepped_page_template_02');

function stepped_redirect_page_template_02 ($template) {
  $post = get_post(); $page_template = get_post_meta( $post->ID, '_wp_page_template', true ); 
  if ('page-stepped-signup-02.php' == basename ($page_template ))
    $template = plugin_dir_path(__FILE__) . 'templates/page-stepped-signup-02.php';
    return $template;
  }
add_filter ('page_template', 'stepped_redirect_page_template_02');

/* ----------------------------------------
ADD PAYMENT PAGE TEMPLATE 
------------------------------------------- */

function payment_page_template ($templates) {
  $templates['payment-page.php'] = 'Payment Page Template';
  return $templates;
}

add_filter ('theme_page_templates', 'payment_page_template');

function payment_redirect_page_template ($template) {
  $post = get_post(); $page_template = get_post_meta( $post->ID, '_wp_page_template', true ); 
  if ('payment-page.php' == basename ($page_template ))
    $template = plugin_dir_path(__FILE__) . 'templates/payment-page.php';
    return $template;
  }
add_filter ('page_template', 'payment_redirect_page_template');

/* ----------------------------------------
ADD GOOGLE MAPS API KEY
------------------------------------------- */

function acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyB7Z4YoEup77-FJAz_WMPiwNfhePa2-KhI';
  return $api;
}
add_filter('acf/fields/google_map/api', 'acf_google_map_api');

/* ----------------------------------------
UPDATE PATH FOR ACF-JSON (ACF)
------------------------------------------- */

define( 'CS_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
 
function acf_json_path( $jsonPath ) {
  $jsonPath = CS_DIR_PATH . '/data/acf-json';
  return $jsonPath;   
}
add_filter('acf/settings/save_json', 'acf_json_path');

/* ----------------------------------------
LOAD ACF-JSON
------------------------------------------- */

function my_acf_json_load_point( $jsonPaths ) {
    // Remove the original path (optional).
    unset($jsonPaths[0]);

    // Append the new path and return it.
    $jsonPaths[] = CS_DIR_PATH . '/data/acf-json';

    return $jsonPaths;    
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );