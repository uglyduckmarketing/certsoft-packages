<?php
/*
Plugin Name: Certsoft Packages
Description: Add the Certsoft signup and payments.
Author: Matt Lewis
Version: 1.1.5
*/

function certsoft_plugin_activation()
{      
  global $wpdb; 
  $charset_collate = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}certsoft_nmi_payments` (
	  `ID` int(11) NOT NULL AUTO_INCREMENT,
	  `user_firstname` varchar(255) DEFAULT NULL,
	  `user_lastname` varchar(255) DEFAULT NULL,
	  `user_email` varchar(255) DEFAULT NULL,
	  `user_pass` varchar(255) DEFAULT NULL,
	  `user_id` int(11) DEFAULT NULL,
	  `package_id` int(11) DEFAULT NULL,
	  `package_amount` varchar(255) DEFAULT NULL,
	  `school_id` varchar(255) DEFAULT NULL,
	  `drivers_license_dob` varchar(255) DEFAULT NULL,
	  `drivers_license_number` text DEFAULT NULL,
	  `drivers_license_state` varchar(255) DEFAULT NULL,
	  `nmi_payment_token` text DEFAULT NULL,
	  `certsoft_auth_token` text DEFAULT NULL,
	  `transaction_id` varchar(255) DEFAULT NULL,
	  `payment_status` varchar(255) DEFAULT NULL,
	  `created_at` datetime NOT NULL,
	  PRIMARY KEY (`ID`)
      )$charset_collate;";

   require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
   dbDelta( $sql );
} 

register_activation_hook( __FILE__, 'certsoft_plugin_activation' );


function cs_enqueue() {
  wp_enqueue_style( 'cs-tailwind', plugin_dir_url( __FILE__ ) . 'src/output.css');
  wp_enqueue_style( 'cs-payment', plugin_dir_url( __FILE__ ) . 'src/payment.css');
  wp_enqueue_script( 'cs-js-jquery', plugin_dir_url( __FILE__ ) . 'js/jquery.min.js');
  wp_enqueue_script( 'cs-js-validate', plugin_dir_url( __FILE__ ) . 'js/jquery.validate.min.js');
  wp_enqueue_script( 'cs-js-app', plugin_dir_url( __FILE__ ) . 'js/app.js', array(), '1.0.0', true );
  echo '<script src="https://secure.pswwgateway.com/token/Collect.js" data-tokenization-key="ASf7jR-Z38WcP-RkX3VV-dgmRQr" data-variant="inline"></script>';
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
ADD SIGNUP PAGE TEMPLATE 03
------------------------------------------- */

function signup_v3_page_template ($templates) {
  $templates['page-stepped-signup-02.php'] = 'Stepped Traffic Signup New';
  return $templates;
}

add_filter ('theme_page_templates', 'signup_v3_page_template');

function singup_v3_redirect_page_template ($template) {
  $post = get_post(); $page_template = get_post_meta( $post->ID, '_wp_page_template', true ); 
  if ('page-stepped-signup-02.php' == basename ($page_template ))
    $template = plugin_dir_path(__FILE__) . 'templates/page-stepped-signup-02.php';
    return $template;
  }
add_filter ('page_template', 'singup_v3_redirect_page_template');

/* ----------------------------------------
ADD THANK YOU PAGE TEMPLATE 
------------------------------------------- */

function payment_successful_page_template ($templates) {
  $templates['page-payment-successful-page.php'] = 'Payment Successful Page Template';
  return $templates;
}

add_filter ('theme_page_templates', 'payment_successful_page_template');

function payment_successful_redirect_page_template ($template) {
  $post = get_post(); $page_template = get_post_meta( $post->ID, '_wp_page_template', true ); 
  if ('page-payment-successful-page.php' == basename ($page_template ))
    $template = plugin_dir_path(__FILE__) . 'templates/page-payment-successful-page.php';
    return $template;
  }
add_filter ('page_template', 'payment_successful_redirect_page_template');

/* ----------------------------------------
ADD GOOGLE MAPS API KEY
------------------------------------------- */

function cs_google_api( $api ){
  $api['key'] = 'AIzaSyB7Z4YoEup77-FJAz_WMPiwNfhePa2-KhI';
  return $api;
}
add_filter('acf/fields/google_map/api', 'cs_google_api');

/* ----------------------------------------
UPDATE PATH FOR ACF-JSON (ACF)
------------------------------------------- */

define( 'MY_PLUGIN_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
 
function cs_json_path( $path ) {
  $path = MY_PLUGIN_DIR_PATH . '/acf-json';
  return $path;   
}
add_filter('acf/settings/save_json', 'cs_json_path');

/* ----------------------------------------
LOAD ACF-JSON
------------------------------------------- */

function cs_json_load_point( $paths ) {
    // Remove the original path (optional).
    unset($paths[0]);

    // Append the new path and return it.
    $paths[] = MY_PLUGIN_DIR_PATH . '/acf-json';

    return $paths;    
}
add_filter( 'acf/settings/load_json', 'cs_json_load_point' );


add_action('after_setup_theme', 'cs_remove_admin_bar_for_customers');
function cs_remove_admin_bar_for_customers() {
  if (current_user_can('subscriber') && !is_admin()) {
    show_admin_bar(false);
  }
}


// Register_user
add_action('wp_ajax_register_user', 'register_user');
add_action('wp_ajax_nopriv_register_user', 'register_user');

function register_user(){
		
		$status = false;
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
 	 	
		$dob = isset($_POST['dob']) ? $_POST['dob'] : null; 	 	 	
		$license_number = isset($_POST['license_number']) ? $_POST['license_number'] : null; 	 	 	
		$license_state = isset($_POST['license_state']) ? $_POST['license_state'] : null;
		
		$user_pass = md5($password);
		$fullname = $firstname.' '.$lastname;
		
		$user = get_user_by( 'login', $email );
	
		if ( !$user && strpos($email, '@' ) ) {
			$user = get_user_by( 'email',  $email );
		} 
	
		if(empty(get_current_user_id()) && !$user){
			
			$new_user_id = wp_insert_user(array(
					'user_login'		=> $email,
					'user_pass'	 		=> $user_pass,
					'user_email'		=> $email,
					'display_name'		=> $fullname,
					'user_registered'	=> date('Y-m-d H:i:s'),
					'role'				=> 'subscriber'
				)
			); 
			
			// Autologin user
			wp_set_current_user( $new_user_id );
			wp_set_auth_cookie( $new_user_id );			

			add_user_meta( $new_user_id, 'certsoft_user_firstname', $firstname);
			add_user_meta( $new_user_id, 'certsoft_user_lastname', $lastname);
			add_user_meta( $new_user_id, 'certsoft_user_dob', $dob);
			add_user_meta( $new_user_id, 'certsoft_user_license_number', $license_number);
			add_user_meta( $new_user_id, 'certsoft_user_license_state', $license_state);
			
			$status = true;
			
			echo json_encode(['status' => $status, 'user_id' => $new_user_id, 'message' => 'Student details captured successfully, proceed to Payment step above.']);
	        die;
			
		} else {
				
				// Autologin if user try to register again with same email.
				$existing_user_id = $user->ID;

				$userdata = array(
					'ID' => $existing_user_id,
					'user_pass' => $user_pass,
					'display_name' => $fullname,
				);

				wp_update_user( $userdata );
		
				wp_set_current_user( $existing_user_id );
				wp_set_auth_cookie( $existing_user_id );
		
			    update_user_meta( $existing_user_id, 'certsoft_user_firstname', $firstname);
			    update_user_meta( $existing_user_id, 'certsoft_user_lastname', $lastname);
				update_user_meta( $existing_user_id, 'certsoft_user_dob', $dob);
				update_user_meta( $existing_user_id, 'certsoft_user_license_number', $license_number);
				update_user_meta( $existing_user_id, 'certsoft_user_license_state', $license_state);

                $status = true;				
			
			echo json_encode(['status' => $status, 'message' => 'Student details captured successfully, proceed to Payment step above.']);
	        die;
		}
			
}

// Checkout_process
add_action('wp_ajax_checkout_process', 'checkout_process');
add_action('wp_ajax_nopriv_checkout_process', 'checkout_process');

function checkout_process(){
		
		$status = false;
		global $wpdb;
		$tablename = $wpdb->prefix."certsoft_nmi_payments";
		
        $current_user_id = get_current_user_id();
		
		if( !empty($current_user_id) && !empty($_POST['package_amount']) && !empty($_POST['nmi_payment_token']) ){
			
			//Get NMI Payment
			$current_user = wp_get_current_user();
						
			$user_firstname = $current_user->certsoft_user_firstname ? $current_user->certsoft_user_firstname : null;
			$user_lastname = $current_user->certsoft_user_lastname ? $current_user->certsoft_user_lastname : null;
			//$display_name = $current_user->display_name ? $current_user->display_name : null;
			$user_email = $current_user->user_email ? $current_user->user_email : null;
			$user_pass = $current_user->user_pass ? $current_user->user_pass : null;
			
			$package_amount = $_POST['package_amount']; 	 	 	
			$nmi_payment_token = $_POST['nmi_payment_token']; 	 	 	
			
			$package_id = isset($_POST['package_id']) ? $_POST['package_id'] : null; 	 	 	
			$school_id = isset($_POST['school_id']) ? $_POST['school_id'] : null;
			$certsoft_auth_token = isset($_POST['certsoft_auth_token']) ? $_POST['certsoft_auth_token'] : null;
			
			$drivers_license_dob = $current_user->certsoft_user_dob ? $current_user->certsoft_user_dob : null;
			$drivers_license_number = $current_user->certsoft_user_license_number ? $current_user->certsoft_user_license_number : null;
			$drivers_license_state = $current_user->certsoft_user_license_state ? $current_user->certsoft_user_license_state : null;
			$website_url = get_site_url();
			
			//merchant_defined_field_1 = nmi_payment_token
			//merchant_defined_field_2 = certsoft_auth_token
			//merchant_defined_field_3 = drivers_license_dob
			//merchant_defined_field_4 = drivers_license_number
			//merchant_defined_field_5 = drivers_license_state
			//merchant_defined_field_6 = package_id
			//merchant_defined_field_7 = school_id
			//website = $website_url
			
			$postData = array('security_key' => 'fzJ6c3Zze68ExXwa3qK87AMy8yB7CVG4',
						  'type' => 'sale',
						  'amount' => $package_amount,
						  'payment_token' => $nmi_payment_token,
						  'first_name' => $user_firstname,
						  'last_name' => $user_lastname,
						  'email' => $user_email,
						  'package_id' => $package_id,
						  'school_id' => $school_id,
						  'drivers_license_dob' => $drivers_license_dob,
						  'drivers_license_number' => $drivers_license_number,
						  'drivers_license_state' => $drivers_license_state,
						  'website' => $website_url,
						  'merchant_defined_field_1' => $nmi_payment_token,
						  'merchant_defined_field_2' => $certsoft_auth_token,
						  'merchant_defined_field_3' => $drivers_license_dob,
						  'merchant_defined_field_4' => $drivers_license_number,
						  'merchant_defined_field_5' => $drivers_license_state,
						  'merchant_defined_field_6' => $package_id,
						  'merchant_defined_field_7' => $school_id
						);
									
			$values = [];
			$curl = curl_init();
			
			curl_setopt_array($curl, array(
			  CURLOPT_URL => 'https://secure.nmi.com/api/transact.php',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
			  CURLOPT_CUSTOMREQUEST => 'POST',
			  CURLOPT_POSTFIELDS => http_build_query($postData),
			  CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded'
			  ),
			));
			
			$response = curl_exec($curl);
			parse_str($response, $values);
		
			curl_close($curl);
		
			if($values && $values['response'] == 1 && $values['responsetext'] == 'SUCCESS'){
				
				$transaction_id = $values['transactionid'];
				
					$arr =  array(					
						"user_firstname" => $user_firstname,
						"user_lastname" => $user_lastname,
						"user_email" => $user_email,
						"user_pass" => $user_pass,
						"user_id" => $current_user_id,
						"package_id" => $package_id,
						"package_amount" => $package_amount,
						"school_id" => $school_id,
						"drivers_license_dob" => $drivers_license_dob,
						"drivers_license_number" => $drivers_license_number,
						"drivers_license_state" => $drivers_license_state,
						"nmi_payment_token" => $nmi_payment_token,
						"certsoft_auth_token" => $certsoft_auth_token,
						"transaction_id" => $transaction_id,
						"payment_status" => 'Paid',
						"created_at" => date('Y-m-d H:i:s'),
					);
					$wpdb->insert($tablename,$arr);
				
					$record_insert_id = $wpdb->insert_id;;
					$status = true;
					
					echo json_encode(['status' => $status, 'record_insert_id' => $record_insert_id, 'transaction_id' => $transaction_id, 'message' => 'Payment Successful. Redirecting...']);
					die;
			}else{
				echo json_encode(['status' => false, 'message' => $values['responsetext']]);
				die;
			}
			
		} else {
				echo json_encode(['status' => $status, 'message' => 'Missing User ID, Payment Token or Package Amount!']);
				die;
		}
			
}

// Get_transaction_details
function get_transaction_details($transaction_id){
	global $wpdb;
	$data = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}certsoft_nmi_payments WHERE transaction_id=$transaction_id");
	return $data;
}

// ACF FIELDS
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
					'key' => 'field_660b30bea3505',
					'label' => 'Certsoft Auth Token',
					'name' => 'certsoft_auth_token',
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