<?php
/*
Plugin Name: Certsoft Packages
Description: Add the Certsoft signup and payments.
Author: Matt Lewis
Version: 1.1.6
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
ADD SIGNUP PAGE TEMPLATE (STEPPED v2) 
------------------------------------------- */

// function stepped_page_template_03 ($templates) {
//   $templates['page-stepped-signup-03.php'] = 'Stepped Signup To Payment v1';
//   return $templates;
// }

// add_filter ('theme_page_templates', 'stepped_page_template_03');

// function stepped_redirect_page_template_03 ($template) {
//   $post = get_post(); $page_template = get_post_meta( $post->ID, '_wp_page_template', true ); 
//   if ('page-stepped-signup-03.php' == basename ($page_template ))
//     $template = plugin_dir_path(__FILE__) . 'templates/page-stepped-signup-03.php';
//     return $template;
//   }
// add_filter ('page_template', 'stepped_redirect_page_template_03');

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

// define( 'CS_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
 
// function acf_json_path( $jsonPath ) {
//   $jsonPath = CS_DIR_PATH . '/data/acf-json';
//   return $jsonPath;   
// }
// add_filter('acf/settings/save_json', 'acf_json_path');

/* ----------------------------------------
LOAD ACF-JSON
------------------------------------------- */

// function my_acf_json_load_point( $jsonPaths ) {
//     // Remove the original path (optional).
//     unset($jsonPaths[0]);

//     // Append the new path and return it.
//     $jsonPaths[] = CS_DIR_PATH . '/data/acf-json';

//     return $jsonPaths;    
// }
// add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );

/* ----------------------------------------
Temporary Fix For ACF-JSON
------------------------------------------- */

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_65a83b7856edc',
	'title' => 'Certsoft Options',
	'fields' => array(
		array(
			'key' => 'field_65a83b780d105',
			'label' => 'School Information',
			'name' => 'school_information',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_65a83cce8781b',
					'label' => 'School Logo',
					'name' => 'school_logo',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
				),
				array(
					'key' => 'field_65a83cdb8781c',
					'label' => 'School Name',
					'name' => 'school_name',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_65a83bad0d106',
					'label' => 'School ID',
					'name' => 'school_id',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_65a83eca50618',
					'label' => 'School State',
					'name' => 'school_state',
					'aria-label' => '',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'california' => 'California',
						'texas' => 'Texas',
					),
					'default_value' => false,
					'return_format' => 'value',
					'multiple' => 0,
					'allow_null' => 1,
					'ui' => 1,
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_65a83ce48781d',
					'label' => 'License Number',
					'name' => 'license_number',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_65a83cf88781e',
					'label' => 'School Address',
					'name' => 'school_address',
					'aria-label' => '',
					'type' => 'google_map',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'center_lat' => '',
					'center_lng' => '',
					'zoom' => '',
					'height' => '',
				),
				array(
					'key' => 'field_65aac9bb45dd4',
					'label' => 'School Primary Color',
					'name' => 'school_primary_color',
					'aria-label' => '',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'enable_opacity' => 0,
					'return_format' => 'string',
				),
			),
		),
		array(
			'key' => 'field_65a83da95b88e',
			'label' => 'Payment Options',
			'name' => 'payment_options',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_65b00cedda6d3',
					'label' => 'Hide Ticket Information',
					'name' => 'hide_ticket_information',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
					'ui' => 1,
				),
				array(
					'key' => 'field_65a83dcd5b88f',
					'label' => 'Show Additional Ticket Details?',
					'name' => 'show_additional_ticket_details',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
					'ui' => 1,
				),
				array(
					'key' => 'field_65a83e2be6de6',
					'label' => 'Ask For Drivers License?',
					'name' => 'ask_for_drivers_license',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
					'ui' => 1,
				),
				array(
					'key' => 'field_65a83e54e6de7',
					'label' => 'Ask For Date Of Birth?',
					'name' => 'ask_for_date_of_birth',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
					'ui' => 1,
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'certsoft-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

add_action( 'acf/init', function() {
	acf_add_options_page( array(
	'page_title' => 'School Options',
	'menu_slug' => 'certsoft-options',
	'icon_url' => 'dashicons-admin-generic',
	'position' => '',
	'redirect' => false,
	'updated_message' => 'Certsoft Options Updated',
) );
} );

