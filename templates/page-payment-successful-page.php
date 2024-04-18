<?php
/* Template Name: Thank You Page Template */

get_header();

include plugin_dir_path(__FILE__) . 'headers/header-01.php';

if( !isset($_GET['txn_id']) || empty($_GET['txn_id']) ) {
	die('Transaction ID missing!!!');
}

$transaction_id = $_GET['txn_id'];
$transaction = get_transaction_details($transaction_id);

$packagePrice = isset($package_details->packagePrice) ? $package_details->packagePrice : null;
if( !isset($transaction->transaction_id) || empty($transaction->transaction_id) ) {
	die('Invalid Transaction ID missing!!!');
}

// Delete user account if they paid successfully
if($transaction->user_id) {
require_once( ABSPATH.'wp-admin/includes/user.php' );
wp_delete_user( $transaction->user_id );
}
	
$user_firstname = isset($transaction->user_firstname) ? $transaction->user_firstname : '';
$user_lastname = isset($transaction->user_lastname) ? $transaction->user_lastname : '';
$user_email = isset($transaction->user_email) ? $transaction->user_email : '';
$package_id = isset($transaction->package_id) ? $transaction->package_id : '';
$package_amount = isset($transaction->package_amount) ? $transaction->package_amount : '';
$school_id = isset($transaction->school_id) ? $transaction->school_id : '';
$drivers_license_dob = isset($transaction->drivers_license_dob) ? $transaction->drivers_license_dob : '';
$drivers_license_number = isset($transaction->drivers_license_number) ? $transaction->drivers_license_number : '';
$drivers_license_state = isset($transaction->drivers_license_state) ? $transaction->drivers_license_state : '';
$nmi_payment_token = isset($transaction->nmi_payment_token) ? $transaction->nmi_payment_token : '';
$transaction_id = isset($transaction->transaction_id) ? $transaction->transaction_id : '';
$payment_status = isset($transaction->payment_status) ? $transaction->payment_status : '';
$created_at = isset($transaction->created_at) ? $transaction->created_at : '';
?>

<section class="mx-auto max-w-4xl grid items-center pt-6 pb-12 px-6">

  <fieldset id="step-01" data-step="01">
    
    <div class="mb-7 text-center">
    <div>
      <h2 class="block mb-4 text-2xl font-semibold tracking-tight mt-6">Your payment has been received successfully.</h2>
      <p class="text-gray-700 text-base md:text-lg mb-12 md:mb-0">This is to inform you that we have <span class="px-2 py-1 bg-blue-50 rounded-md text-base font-semibold text-blue-600">"Received The Payment Successfully"</span> for the buying package. You can find the transaction details below related to your purchase.</p>
    </div>
  </div>
    
    <div class="-space-y-px rounded-md bg-white">

      <label class="relative flex border p-4 focus:outline-none receipt">
        <span class="ml-3 flex flex-col">
          <div class="block pb-4 text-md font-semibold tracking-tight flex items-center">Student Name: <?php echo $user_firstname; ?> <?php echo $user_lastname; ?></div>
          <div class="block pb-4 text-md font-semibold tracking-tight flex items-center">Email Address: <?php echo $user_email; ?></div>
          <div class="block pb-4 text-md font-semibold tracking-tight flex items-center">Package Amount: <?php echo $package_amount; ?></div>
		  <div class="block pb-4 text-md font-semibold tracking-tight flex items-center">Transaction ID: <?php echo $transaction_id; ?></div>
          <div class="block pb-4 text-md font-semibold tracking-tight flex items-center">Payment Status : <span class="ml-2 px-2 py-1 bg-blue-50 rounded-md text-base font-semibold text-blue-600"><?php echo $payment_status; ?></span></div>
          <div class="block pb-4 text-md font-semibold tracking-tight flex items-center">Date : <?php echo $created_at; ?></div>
        </span>
      </label>

    </div>
	
  <div class="mt-12">
	  
	  <? // ?payment_token= ?>
    
    <a target="_blank" href="<?php echo get_site_url()."/course/?view=login&login_token=".$nmi_payment_token; ?>">
		<button class="faq-button bg-primary rounded-full py-2 px-4 text-white text-sm font-semibold flex items-center md:mb-0 mx-auto z-50 gap-2">Access Account <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
		  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
		</svg>
		</button>	
	</a>
	
  </div>
  
  </fieldset>

</section>


<style>
	.header__01, footer {
		display: none;
	}	
.receipt {
    background: #f8f8f8;
    padding: 1rem 1rem 2rem;
    --mask: conic-gradient(from -45deg at bottom, #0000, #000 1deg 89deg, #0000 90deg) 50% / 30px 100%;
    -webkit-mask: var(--mask);
    mask: var(--mask);
    width: 400px;
    text-align: center !important;
    justify-content: center;
    margin: 0 auto;
    padding-top: 2rem;
	border: none;
}
</style>

<?php get_footer(); ?>