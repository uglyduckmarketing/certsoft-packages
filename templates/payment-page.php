<?php
get_header();

include plugin_dir_path(__FILE__) . 'headers/header-01.php';
require_once plugin_dir_path(__FILE__) . 'packages.php';

// Included from packages.php
$package_details = $packages;

// Get package price by 
$pkg_id = $_GET['id'];

$package_matched = array();
foreach($package_details as $index => $columns) {
    foreach($columns as $key => $value) {
        if ($key == 'packageID' && $value == $pkg_id) {
            $package_matched[] = $columns;
        }
    }
}
//print_r($package_matched);

// Check and set package missing error
$if_package_missing = '';

if($package_matched){

	$packageID = isset($package_matched[0]['packageID']) ? $package_matched[0]['packageID'] : null;
	$packagePrice = isset($package_matched[0]['packagePrice']) ? $package_matched[0]['packagePrice'] : null;
	
	//$packagePrice = number_format($packagePrice, 2);
	
	$packageTitle = isset($package_matched[0]['packageTitle']) ? $package_matched[0]['packageTitle'] : null;
	$packageDescription = isset($package_matched[0]['packageDescription']) ? $package_matched[0]['packageDescription'] : null;	

} else {
	$if_package_missing =  'Package amount is missing, Package ID did not match!!!';
} 

// Get logged in user details
global $current_user;
	wp_get_current_user();

	$user_firstname = isset($current_user->certsoft_user_firstname) ? $current_user->certsoft_user_firstname : null;
	$user_lastname = isset($current_user->certsoft_user_lastname) ? $current_user->certsoft_user_lastname : null;
	$display_name = isset($current_user->display_name) ? $current_user->display_name : null;
	$user_email = isset($current_user->user_email) ? $current_user->user_email : null;
	$drivers_license_dob = isset($current_user->certsoft_user_dob) ? $current_user->certsoft_user_dob : null;
	$drivers_license_number = isset($current_user->certsoft_user_license_number) ? $current_user->certsoft_user_license_number : null;
	$drivers_license_state = isset($current_user->certsoft_user_license_state) ? $current_user->certsoft_user_license_state : null;

?>

<style>
.invalid-feedback {
	color: #ff0000;
	font-size: 14px;
}
.custom-text-success {
	color: #198754;
}
.custom-text-danger {
	color: #dc3545;
}
.CollectJSInlineIframe {
    height: 50px !important;
}
</style>

<!-- Modal -->
<div class="relative z-10 hidden" id="terms-modal" aria-labelledby="modal-title" role="dialog" aria-modal="true">

  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

  <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
      <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
              <h3 class="text-xl font-semibold leading-6 text-gray-900" id="modal-title">Terms &amp; Conditions</h3>
              <div class="mt-2">
                <div class="text-sm text-gray-500 h-60 overflow-scroll py-4">
                  Go To www.ItsFastTrafficSchool.com Terms of Service
                  <br /><br />
                  I certify under penalty of perjury that I alone will study the Go To www.ItsFastTrafficSchool.com course materials, take the quizzes and final exam without any outside assistance. I understand that if it is determined that I have not completed Go To www.ItsFastTrafficSchool.com without outside assistance, make false statements or present falsified documents to the court or Go To www.ItsFastTrafficSchool.com, this may be a felony and the completion certificate will not be accepted and I will receive no refund. I have reviewed the list of licensed traffic schools and understand that Go To www.ItsFastTrafficSchool.com is a DMV Licensed traffic school for the state of California in the English Language Only. I certify that I have a valid drivers license and am eligible for traffic school.
                  <br /><br />
                  I agree to utilize the services of Go To www.ItsFastTrafficSchool.com in an environment fit for learning. While the information contained in Go To www.ItsFastTrafficSchool.com course has been compiled from sources believed to be reliable and correct, the publisher makes no warranty, expressed or implied, with respect to the use of any information, method, or process disclosed in this publication nor that such use may not infringe upon privately owned rights, and does not assume any liabilities or responsibilities, expressed or implied, with respect to the use of, or for damages resulting from, the use of any information, method, or process disclosed in the publication or the accuracy of the information contained herein.
                  <br /><br />
                  This publication, study material or guide is in English only and is not intended or designed to give legal advice on the compliance with Federal, State, or Local laws and regulations and should be noted that laws, regulations, and standards are subject to revisions, additions, or deletions, at any time.
                  <br /><br />
                  I agree to pay the transaction total and have verified that Go To www.ItsFastTrafficSchool.com is a DMV Licensed Traffic School #E9633. Go To www.ItsFastTrafficSchool.com will electronically process my certificate to the DMV and Court Database free of charge.
                  <br /><br />
                  Verification of DMV License E9633 can be verified at: https://www.dmv.ca.gov/portal/dmv/detail/portal/olinq2/tsl
                  <br /><br />
                  I understand and agree the DMV requires and allows all traffic schools to provide only 2 attempts to pass the final exam per account. I understand I may purchase a package that will allow unlimited attempts to take and pass the course during sign up or via upgrade at a later date. I agree to extend my best efforts to study and pass the course in its entirety. I understand my initial fee will not be refunded in the event I do not utilize the course or pass the final exam.
                  <br /><br />
                  I understand and agree that all upgrades purchased are optional and non-refundable. I understand CA Law states that a driver may attend traffic school only one time every 18 months.
                  <br /><br />
                  In the event I would like to pursue a refund I agree to notify Go To www.ItsFastTrafficSchool.com via email (help@trafficschoolassist.com) within 24 hours of payment. I agree that I will not pursue a refund through my credit card company, bank, or financial institution. Any refund provided may be subject to a nominal administration fee.
                  <br /><br />
                  I agree to pay any and all penalty fee(s) incurred by Go To www.ItsFastTrafficSchool.com within 15 days if I perform a chargeback for any reason with my credit card company, bank, or financial institution.
                  <br /><br />
                  I agree to notify Go To www.ItsFastTrafficSchool.com via email and afford 24 hours for corrections as needed if there is a technical issue. In the unlikely event Go To www.ItsFastTrafficSchool.com cannot make corrections I within 24 hours I will be refunded.
                  <br /><br />
                  I understand that Go To www.ItsFastTrafficSchool.com will quickly review my request and if it is determined that there was a technical problem resting solely upon Go To www.ItsFastTrafficSchool.com Web servers or Web-based applications, I will receive my refund. I understand that in the event Go To www.ItsFastTrafficSchool.com was not the fault of any errors, computers or operating systems, then I am not entitled to a refund.
                  <br /><br />
                  I acknowledge and understand processing of certificates occurs only on Business Days UNLESS Instant Processing is opted for. In the event I need (opt to have) my certificate processed faster I may opt for Next Day or Instant Processing at a later date for an additional fee. I understand this option fee is non-negotiable and is Premium in nature. I understand the package price will provide greater value vs. single upgrade(s).
                  <br /><br />
                  Certificate Submission:
                  I understand the information I provide before my final exam must be complete and accurate. In the event my certificate is not accepted by the court or dmv for any reason I will be charged a re-processing fee of $10.00 for Go To www.ItsFastTrafficSchool.com to resubmit my certificate of completion. There will be no exceptions.
                  <br /><br />
                  SYSTEM REQUIREMENTS
                  <br /><br />
                  I understand and agree that the Go To www.ItsFastTrafficSchool.com course is an e-learning, internet-dependent, interactive learning service that requires proper communication via the Internet. I understand that Go To www.ItsFastTrafficSchool.com makes every reasonable effort to ensure the proper operation of its technology and internet communication. However, Go To www.ItsFastTrafficSchool.com cannot guarantee the proper operation of my (user, student, registrant, etc.) computer, or the Internet.
                  <br /><br />
                  Go To www.ItsFastTrafficSchool.com SHALL NOT BE LIABLE for my (user, student, registrant, etc.) inability to complete the course due to technical problems including, but not limited to, technical problems with the internet, internet service provider(s), and/or my own computer or email software.
                  <br /><br />
                  I have read and understand Go To www.ItsFastTrafficSchool.com's technical requirements and have determined that I can use this system. If I plan on taking Go To www.ItsFastTrafficSchool.com's course using a Macintosh computer with an older version operating system than OSX, or if I am using a PC computer running Windows XP or older operating system, or if I am using the Linux OS, Firefox or AOL browser, or if I am behind a corporate firewall, I understand that Go To www.ItsFastTrafficSchool.com's web-based application may not function properly and may not be supported. I understand that Go To www.ItsFastTrafficSchool.com will use EMAIL as a primary method of communicating important deadlines, receipts and tracking information about my traffic school course. I understand that I am responsible for ensuring that all Go To www.ItsFastTrafficSchool.com emails are not blocked by my email SPAM filters and that any and all emails that are returned to Go To www.ItsFastTrafficSchool.com due to misinformation or Spam filters will not be re-sent unless I make a special request to: Go To www.ItsFastTrafficSchool.com to do so.
                  <br /><br />
                  I agree to notify Go To www.ItsFastTrafficSchool.com during normal business hours in the event I fail the course and wait until further instruction is provided.
                  <br /><br />
                  Only 1 Low Price Guarantee may be applied per account and I must notify Go To www.ItsFastTrafficSchool.com via email prior to sign up to take advantage of the offer. No credit can be give AFTER payment has been made.
                  <br /><br />
                  I agree that all matters arising from any and all dispute(s) shall be heard by Bakersfield Superior Court, Bakersfield California.
                  <br /><br />
                  BY CLICKING ON "Submit Payment " BELOW, I AM CONFIRMING THAT I HAVE READ AND AGREE TO THE FOLLOWING TERMS AND CONDITIONS OF THE Go To www.ItsFastTrafficSchool.com WEBSITE AND UNDERSTAND THAT THE FOLLOWING TERMS AND CONDITIONS WILL BIND ME AND Go To www.ItsFastTrafficSchool.com TO A VALID AND ENFORCEABLE CONTRACT. I ALSO AGREE THAT UNDER PENALTY OF PERJURY YOU ARE THE INDIVIDUAL TAKING THIS COURSE AND HAVE A VALID DRIVERS LICENSE.
                  *These terms and conditions are subject to change without notice.
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
          <button type="button" class="inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto bg-primary" id="terms-agree">Agree</button>
          <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" id="cancel-button">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Form -->

<div class="bg-white payment-form">

  <div class="mx-auto sm:px-6 lg:max-w-7xl lg:px-8 pb-6 md:py-16">

    <!--form id="payment-form" class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16" onsubmit="return false;" novalidate-->
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">

      <div class="form-container mt-4">

    <form id="payment-form">
      
	<?php if (!empty($_GET['id']) && isset($_GET['id'])) { ?>
	    <input type="hidden" value="<?php echo $packageID; ?>" name="package_id" class="package_id" id="package_id">
		<input type="hidden" value="<?php echo $packagePrice; ?>" name="package_amount" class="package_amount" id="package_amount">
	<?php } else {
		     die('Package ID missing');
	      } 
	?>
	
	<?php	
	if( !empty($if_package_missing) && isset($if_package_missing) ) {
		echo $if_package_missing;
		die();
	}
	?>

	<?php if( have_rows('school_information', 'options') ) : while( have_rows('school_information', 'options') ): the_row(); ?>
	<?php if(!empty(get_sub_field('school_id'))) : ?>
        <input type="hidden" name="school_id" class="school_id" id="school_id" value="<?php echo get_sub_field( 'school_id' ); ?>">
	<?php endif; ?>

	<?php if(!empty(get_sub_field('certsoft_auth_token'))) : ?>
        <input type="hidden" name="certsoft_auth_token" class="certsoft_auth_token" id="certsoft_auth_token" value="<?php echo get_sub_field( 'certsoft_auth_token' ); ?>">
	<?php endif; ?>
	<?php endwhile; endif; ?>

        <div class="progress mb-8">
          <div class="progress-bar bg-primary" id="progress-bar"></div>
          <button class="progress-button active-progress" id="progress-button-01">
            Create Account
          </button>
          <button class="progress-button" id="progress-button-02">
            Payment Details
          </button>
          <button class="progress-button" id="progress-button-03">
            Ticket Information
          </button>
          <button class="progress-button" id="progress-button-04">
            Start Course
          </button>
        </div>

      <?php if( have_rows('payment_options', 'options') ) : while( have_rows('payment_options', 'options') ): the_row(); ?>
      <?php if(!get_sub_field('hide_ticket_information')) : ?>
        <!-- County / Court Information -->
        <div class="mb-10 border-b border-gray-200 pb-10 ticket-info hidden">
          <h2 class="text-2xl md:text-3xl font-medium text-gray-900 block mb-6">Ticket Information</h2>
          <div class="mt-4 grid md:flex gap-3 items-end w-full">
            <div class="w-full">
              <label>Where Did You Get Your Ticket?</label>
              <select id="county" name="county">
                <option>Choose County</option>
                <option>County One</option>
                <option>County Two</option>
              </select>
            </div>
            <div class="w-full">
              <select id="court" name="court">
                <option>Choose Court</option>
                <option>Court One</option>
                <option>Court Two</option>
              </select>
            </div>
          </div>

          <div class="mt-6">
            <label for="due_date">Certificate Due Date</label>
            <div class="mt-1">
              <input type="date" name="due_date" id="due_date">
            </div>
          </div>

          <div class="mt-6">
            <label for="case_number">Case Or Docket Number</label>
            <div class="mt-1">
              <input type="text" name="case_number" id="case_number">
            </div>
          </div>

        </div>
        <?php endif; ?>
        <?php endwhile; endif; ?>

        <div class="student-details" id="step-01">

          <div class="step-heading flex justify-between items-center">
            <div>
              <span class="text-primary text-xs mb-2 block font-semibold">Step 01.</span>
              <h2 class="text-2xl md:text-3xl font-medium text-gray-900 block mb-6">Student Details</h2>
            </div>
            <button id="step-01-edit">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
            </button>
          </div>

          <div class="step-01-container">

          <div class="mt-4 grid grid-cols-1 gap-y-3 sm:grid-cols-2 sm:gap-x-4">
            <div>
              <label for="first-name">First Name <span class="text-red-500">*</span></label>
              <div class="mt-1">
                <input type="text" id="first-name" name="first-name" value="<?= isset($user_firstname) ? $user_firstname : '' ?>" autocomplete="given-name" required>
              </div>
            </div>

            <div>
              <label for="last-name">Last Name <span class="text-red-500">*</span></label>
              <div class="mt-1">
                <input type="text" id="last-name" name="last-name" value="<?= isset($user_lastname) ? $user_lastname : '' ?>" autocomplete="family-name" required>
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="email">Email Address <span class="text-red-500">*</span></label>
              <div class="mt-1">
                <input type="email" name="email" id="email" value="<?= isset($user_email) ? $user_email : '' ?>" autocomplete="email" required>
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="confirm_email">Confirm Email Address <span class="text-red-500">*</span></label>
              <div class="mt-1">
                <input type="email" name="confirm_email" id="confirm_email" value="<?= isset($user_email) ? $user_email : '' ?>" autocomplete="email" required>
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="password">Password <span class="text-red-500">*</span></label>
              <div class="mt-1">
                <input type="password" name="password" id="password" required>
              </div>
            </div>

            <?php if( have_rows('payment_options', 'options') ) : while( have_rows('payment_options', 'options') ): the_row(); ?>
            <?php if(!empty(get_sub_field('ask_for_date_of_birth'))) : ?>
            <div class="sm:col-span-2">
              <label for="dob">Date Of Birth</label>
              <div class="mt-1">
                <input type="date" id="dob" name="dob" value="<?= isset($drivers_license_dob) ? $drivers_license_dob : '' ?>">
              </div>
            </div>
            <?php endif; ?>
            <?php endwhile; endif; ?>

            <?php if( have_rows('payment_options', 'options') ) : while( have_rows('payment_options', 'options') ): the_row(); ?>
            <?php if(!empty(get_sub_field('ask_for_drivers_license'))) : ?>
            <div class="sm:col-span-2">
              <label for="license">License Number</label>
              <div class="mt-1">
                <input type="text" id="license-number" name="license-number" value="<?= isset($drivers_license_number) ? $drivers_license_number : '' ?>">
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="license-state">License State of Issuance</label>
              <div class="mt-1">
                <select id="license-state" name="license-state">
                <option <?php if($drivers_license_state == 'AL') echo "selected"; ?> value="AL">Alabama</option>
                <option <?php if($drivers_license_state == 'AK') echo "selected"; ?> value="AK">Alaska</option>
                <option <?php if($drivers_license_state == 'AZ') echo "selected"; ?> value="AZ">Arizona</option>
                <option <?php if($drivers_license_state == 'AR') echo "selected"; ?> value="AR">Arkansas</option>
                <option <?php if($drivers_license_state == 'CA') echo "selected"; ?> value="CA" selected>California</option>
                <option <?php if($drivers_license_state == 'CO') echo "selected"; ?> value="CO">Colorado</option>
                <option <?php if($drivers_license_state == 'CT') echo "selected"; ?> value="CT">Connecticut</option>
                <option <?php if($drivers_license_state == 'DE') echo "selected"; ?> value="DE">Delaware</option>
                <option <?php if($drivers_license_state == 'DC') echo "selected"; ?> value="DC">District Of Columbia</option>
                <option <?php if($drivers_license_state == 'FL') echo "selected"; ?> value="FL">Florida</option>
                <option <?php if($drivers_license_state == 'GA') echo "selected"; ?> value="GA">Georgia</option>
                <option <?php if($drivers_license_state == 'HI') echo "selected"; ?> value="HI">Hawaii</option>
                <option <?php if($drivers_license_state == 'ID') echo "selected"; ?> value="ID">Idaho</option>
                <option <?php if($drivers_license_state == 'IL') echo "selected"; ?> value="IL">Illinois</option>
                <option <?php if($drivers_license_state == 'IN') echo "selected"; ?> value="IN">Indiana</option>
                <option <?php if($drivers_license_state == 'IA') echo "selected"; ?> value="IA">Iowa</option>
                <option <?php if($drivers_license_state == 'KS') echo "selected"; ?> value="KS">Kansas</option>
                <option <?php if($drivers_license_state == 'KY') echo "selected"; ?> value="KY">Kentucky</option>
                <option <?php if($drivers_license_state == 'LA') echo "selected"; ?> value="LA">Louisiana</option>
                <option <?php if($drivers_license_state == 'ME') echo "selected"; ?> value="ME">Maine</option>
                <option <?php if($drivers_license_state == 'MD') echo "selected"; ?> value="MD">Maryland</option>
                <option <?php if($drivers_license_state == 'MA') echo "selected"; ?> value="MA">Massachusetts</option>
                <option <?php if($drivers_license_state == 'MI') echo "selected"; ?> value="MI">Michigan</option>
                <option <?php if($drivers_license_state == 'MN') echo "selected"; ?> value="MN">Minnesota</option>
                <option <?php if($drivers_license_state == 'MS') echo "selected"; ?> value="MS">Mississippi</option>
                <option <?php if($drivers_license_state == 'MO') echo "selected"; ?> value="MO">Missouri</option>
                <option <?php if($drivers_license_state == 'MT') echo "selected"; ?> value="MT">Montana</option>
                <option <?php if($drivers_license_state == 'NE') echo "selected"; ?> value="NE">Nebraska</option>
                <option <?php if($drivers_license_state == 'NV') echo "selected"; ?> value="NV">Nevada</option>
                <option <?php if($drivers_license_state == 'NH') echo "selected"; ?> value="NH">New Hampshire</option>
                <option <?php if($drivers_license_state == 'NJ') echo "selected"; ?> value="NJ">New Jersey</option>
                <option <?php if($drivers_license_state == 'NM') echo "selected"; ?> value="NM">New Mexico</option>
                <option <?php if($drivers_license_state == 'NY') echo "selected"; ?> value="NY">New York</option>
                <option <?php if($drivers_license_state == 'NC') echo "selected"; ?> value="NC">North Carolina</option>
                <option <?php if($drivers_license_state == 'ND') echo "selected"; ?> value="ND">North Dakota</option>
                <option <?php if($drivers_license_state == 'OH') echo "selected"; ?> value="OH">Ohio</option>
                <option <?php if($drivers_license_state == 'OK') echo "selected"; ?> value="OK">Oklahoma</option>
                <option <?php if($drivers_license_state == 'OR') echo "selected"; ?> value="OR">Oregon</option>
                <option <?php if($drivers_license_state == 'PA') echo "selected"; ?> value="PA">Pennsylvania</option>
                <option <?php if($drivers_license_state == 'RI') echo "selected"; ?> value="RI">Rhode Island</option>
                <option <?php if($drivers_license_state == 'SC') echo "selected"; ?> value="SC">South Carolina</option>
                <option <?php if($drivers_license_state == 'SD') echo "selected"; ?> value="SD">South Dakota</option>
                <option <?php if($drivers_license_state == 'TN') echo "selected"; ?> value="TN">Tennessee</option>
                <option <?php if($drivers_license_state == 'TX') echo "selected"; ?> value="TX">Texas</option>
                <option <?php if($drivers_license_state == 'UT') echo "selected"; ?> value="UT">Utah</option>
                <option <?php if($drivers_license_state == 'VT') echo "selected"; ?> value="VT">Vermont</option>
                <option <?php if($drivers_license_state == 'VA') echo "selected"; ?> value="VA">Virginia</option>
                <option <?php if($drivers_license_state == 'WA') echo "selected"; ?> value="WA">Washington</option>
                <option <?php if($drivers_license_state == 'WV') echo "selected"; ?> value="WV">West Virginia</option>
                <option <?php if($drivers_license_state == 'WI') echo "selected"; ?> value="WI">Wisconsin</option>
                <option <?php if($drivers_license_state == 'WY') echo "selected"; ?> value="WY">Wyoming</option>
                </select>
              </div>
            </div>
            <?php endif; ?>
            <?php endwhile; endif; ?>

          </div>

            <div class="flex mx-auto gap-2 h-6 items-center col-span-4 mt-4">
              <div class="flex items-center gap-2">
                <input id="terms" name="terms" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600" required>
                <span class="block text-sm font-medium text-gray-700">I Accept The <button class="text-primary" id="terms-trigger">Terms &amp; Conditions</button></span>
              </div>
            </div>

            <div id="check_response" class="col-span-4 mt-2"></div>
			
            <div class="mt-6 col-span-4">
			<?php if(get_current_user_id()){ ?>
              <div id="check_response" class="custom-text-success col-span-4 mt-2 text-center mb-4 text-sm">You're already logged in, please fill out any aditional fields and proceed to payment to purchase course.</div>
              <button id="student-details-confirm" class="w-full rounded-md border border-transparent bg-blue-600 px-4 py-3 text-base font-medium text-gray-900 shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-50 flex gap-4 items-center justify-center bg-primary">
                Next Step
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </button>
			<?php } else { ?>
              <button id="student-details-confirm" class="w-full rounded-md border border-transparent bg-blue-600 px-4 py-3 text-base font-medium text-gray-900 shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-50 flex gap-4 items-center justify-center bg-primary">
                Next Step
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </button>
			<?php } ?>
            </div>

          </div>

        </div>
		</form>
		
		<form id="checkout-form">
		
        <!-- Payment -->
        <div class="mt-10 is-editable" id="step-02">

          <div class="step-heading flex justify-between items-center">
            <div>
              <span class="text-primary text-xs mb-2 block font-semibold">Step 02.</span>
              <h2 class="text-2xl md:text-3xl font-medium text-gray-900 block mb-6">Payment</h2>
            </div>
            <button id="step-02-edit">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
            </button>
          </div>


          <div class="step-02-container">
          <div>
            <button type="button" class="flex w-full items-center justify-center rounded-md border border-transparent bg-black py-3 text-gray-900 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 apple-button">
            <span class="sr-only">Pay with Apple Pay</span>
            <svg class="h-4 w-auto" fill="currentColor" viewBox="0 0 50 20">
              <path d="M9.536 2.579c-.571.675-1.485 1.208-2.4 1.132-.113-.914.334-1.884.858-2.484C8.565.533 9.564.038 10.374 0c.095.951-.276 1.884-.838 2.579zm.829 1.313c-1.324-.077-2.457.751-3.085.751-.638 0-1.6-.713-2.647-.694-1.362.019-2.628.79-3.323 2.017-1.429 2.455-.372 6.09 1.009 8.087.676.99 1.485 2.075 2.552 2.036 1.009-.038 1.409-.656 2.628-.656 1.228 0 1.58.656 2.647.637 1.104-.019 1.8-.99 2.475-1.979.771-1.122 1.086-2.217 1.105-2.274-.02-.019-2.133-.828-2.152-3.263-.02-2.036 1.666-3.007 1.742-3.064-.952-1.408-2.437-1.56-2.951-1.598zm7.645-2.76v14.834h2.305v-5.072h3.19c2.913 0 4.96-1.998 4.96-4.89 0-2.893-2.01-4.872-4.885-4.872h-5.57zm2.305 1.941h2.656c2 0 3.142 1.066 3.142 2.94 0 1.875-1.142 2.95-3.151 2.95h-2.647v-5.89zM32.673 16.08c1.448 0 2.79-.733 3.4-1.893h.047v1.779h2.133V8.582c0-2.14-1.714-3.52-4.351-3.52-2.447 0-4.256 1.399-4.323 3.32h2.076c.171-.913 1.018-1.512 2.18-1.512 1.41 0 2.2.656 2.2 1.865v.818l-2.876.171c-2.675.162-4.123 1.256-4.123 3.159 0 1.922 1.495 3.197 3.637 3.197zm.62-1.76c-1.229 0-2.01-.59-2.01-1.494 0-.933.752-1.475 2.19-1.56l2.562-.162v.837c0 1.39-1.181 2.379-2.743 2.379zM41.1 20c2.247 0 3.304-.856 4.227-3.454l4.047-11.341h-2.342l-2.714 8.763h-.047l-2.714-8.763h-2.409l3.904 10.799-.21.656c-.352 1.114-.923 1.542-1.942 1.542-.18 0-.533-.02-.676-.038v1.779c.133.038.705.057.876.057z" />
            </svg>
          </button>
         </div>

        <div class="relative mt-7">
          <div class="absolute inset-0 flex items-center or-title" aria-hidden="true">
            <div class="w-full border-t border-gray-200"></div>
          </div>
          <div class="relative flex justify-center">
            <span class="bg-white px-4 text-sm font-medium text-gray-500">or</span>
          </div>
        </div>

        
        <div class="mt-6 grid grid-cols-4 gap-x-4 gap-y-3">
        <!--div class="mt-6 grid gap-x-4 gap-y-3"-->

          <div class="flex hidden col-span-4 items-center gap-3 mb-4" id="name-container">
            <h2 class="text-2xl" id="cc-name"></h2>
            <button class="text-gray-500" id="edit-name">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
            </button>
          </div>

          <div class="col-span-4" id="card-name">
            <label for="name-on-card">Name On Card <span class="text-red-500">*</span></label>
            <div class="mt-1">
              <input type="text" id="name-on-card" value="<?= isset($display_name) ? $display_name : '' ?>" name="name-on-card" autocomplete="cc-name">
            </div>
          </div>

            <div class="col-span-4">
              <label for="card-number">Card Number <span class="text-red-500">*</span></label>
              <div class="mt-1">
                <div id="ccnumber"></div>
              </div>
            </div>

            <div class="col-span-2">
              <label for="expiration-date">Expiration (MM/YY) <span class="text-red-500">*</span></label>
              <div class="mt-1">
                <div id="ccexp"></div>
              </div>
            </div>

            <div class="col-span-2">
              <label for="cvc">CVC <span class="text-red-500">*</span></label>
              <div class="mt-1">
                <div id="cvv"></div>
              </div>
            </div>	  

            <div id="checkout_response" class="col-span-4 mt-2"></div>
            <div class="border-t border-gray-300 col-span-4 pt-4">
              <button id="payButton" name="form-submit" class="w-full rounded-md border border-transparent bg-blue-600 px-4 py-3 text-base font-medium text-gray-900 shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-50 flex gap-4 items-center justify-center bg-primary">
                $<?php echo $packagePrice; ?> <span style="width: 1px; height: 20px; background: rgba(255,255,255,.4);"></span> Purchase Course
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
              </button>
            </div>
            
        </div>
        </form>

          </div>
        </div>
      </div>

      <!-- Order summary -->
      <div class="-order-1">

        <div class="md:rounded-lg shadow-sm md:top-6 course-details">
          <div class="course-info">
            <span class="mb-4 mt-2 text-gray-900 text-xs block package-eyebrow">Selected Package</span>
            <h2 class="text-2xl md:text-3xl mb-4 md:pr-12 text-gray-900 font-semibold tracking-tight"><?php echo $packageTitle; ?></h2>
			      <div class="text-base text-gray-900"><?php echo $packageDescription; ?></div>
          </div>
          <dl class="space-y-6 border-opacity-20 px-4 py-6 sm:px-6 bg-white bg-opacity-10 price-box">
            <div class="flex items-center justify-between">
              <dt class="text-base font-bold text-gray-900">Course Total</dt>
              <dd class="text-base font-bold text-gray-900">$<?php echo $packagePrice; ?></dd>
            </div>
          </dl>
        </div>
		<div class="block mt-12 text-gray-700">
			<a href="<?php bloginfo('url'); ?>/get-started/" class="text-sm gap-2 flex items-center">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
				  <path fill-rule="evenodd" d="M12.5 9.75A2.75 2.75 0 0 0 9.75 7H4.56l2.22 2.22a.75.75 0 1 1-1.06 1.06l-3.5-3.5a.75.75 0 0 1 0-1.06l3.5-3.5a.75.75 0 0 1 1.06 1.06L4.56 5.5h5.19a4.25 4.25 0 0 1 0 8.5h-1a.75.75 0 0 1 0-1.5h1a2.75 2.75 0 0 0 2.75-2.75Z" clip-rule="evenodd" />
				</svg>
				Edit Package</a>
		  </div>
      </div>
  </div>
</div>
	
<style>
	@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

	html, body {
		font-family: 'Poppins', sans-serif !important;
	}
	.header__01, footer {
		display: none;
	}	
  .course-details {
    background: #f9fafb;
    border: 1px solid rgba(0,0,0,.1);
    position: relative;
    overflow: hidden;
/* 	position: sticky;
    top: 2rem; */
  }
  .course-info {
    padding: 2rem;
  }
  .course-info li {
    padding-left: 30px;
    position: relative;
    margin-bottom: 8px;
    font-weight: 500;
  }
  .course-info small {
    line-height: 1.5;
    color: #5a5a5a;
    margin-top: 2rem;
    display: block;
    font-size: 14px;
  }
  .course-info small::before {
	content: "*";
	color: red;
	margin-right: 4px;
  }
  .package-eyebrow {
    color: var(--primary);
    font-weight: 600;
    font-size: 14px;
  }
  .price-box {
    border-top: 1px solid rgba(0,0,0,.1);
  }
  button#student-details-confirm, button#payButton {
    color: white !important;
  }
  .payment-form {
    padding-bottom: 3rem;
  }
  .course-info li::before {
    content: '';
    width: 20px;
    height: 20px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='%23035FFF'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z' /%3E%3C/svg%3E%0A");
    display: inline-block;
    vertical-align: middle;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 0;
  }
	@media(max-width: 992px) {
		.payment-form .progress-bar {
			transform: translateY(-12px);
		}
		.payment-form {
			padding-bottom: 1rem;
		}
		.course-info {
			padding: 1.5rem;
		}
	}
</style>

<?php get_footer(); ?>

<script>
jQuery(document).ready(function($){

	var $form;
	$form = $("#payment-form");
	$form.validate({
				errorElement: 'span',
				errorClass: 'invalid-feedback',
				ignore: "",
				highlight: function (element) {
					$(element).addClass('is-invalid');
				},
				unhighlight: function(element) {
					$(element).removeClass('is-invalid');
				},
				rules: {
					"first-name": {
						required: true,
					},
					"last-name": {
						required: true,
					},
					"email": {
						required: true,
					},
					"confirm_email": {
						required: true,
						equalTo: "#email",
					},
					"password": {
						required: true,
						minlength: 8,
					},
					"terms": {
						required: true,
					},
				},
				messages: {
					"confirm_email": {
						equalTo: "Emails addresses do not match.",
					},
					"password": {
						minlength: "Please enter at least 8 characters.",
					},
				},
	});
	
	$("#student-details-confirm").click(function(event){	
	
		event.preventDefault();

		$form.validate();	
		if($form.valid()){
			
			var firstname = $("#first-name").val();
			var lastname = $("#last-name").val();
			var email = $("#email").val();
			var password = $("#password").val();
			var dob = $("#dob").val();
			var license_number = $("#license-number").val();
			var license_state = $('#license-state option:selected').val();
			
			$.ajax({
				  type: 'POST',
				  url: "<?= admin_url('admin-ajax.php') ?>",
				  data: { 
							firstname: firstname,
							lastname: lastname,
							email: email,
							password: password,
							dob: dob,
							license_number: license_number,
							license_state: license_state,
							action: 'register_user',
						},
				  dataType : 'json',
				  success: function (response) {
					  if(response.status == true){
							$("#check_response").removeClass("custom-text-danger");
							$("#check_response").addClass("custom-text-success");
							$("#check_response").text("");
							$("#check_response").text(response.message);
							$("#progress-button-02").trigger("click");
							return true;
					  }else{
							$("#check_response").removeClass("custom-text-success");
							$("#check_response").addClass("custom-text-danger");
							$("#check_response").text("");
							$("#check_response").text(response.message);
							return false
					  }
					 
				  }
			});
			
		}
		
	});

});

document.addEventListener('DOMContentLoaded', function () {
  CollectJS.configure({
    'callback': function (response) {
						
			var package_id = $("#package_id").val();
			var school_id = $("#school_id").val();
			var package_amount = $("#package_amount").val();
			var certsoft_auth_token = $("#certsoft_auth_token").val();
			
			$("#payButton").html("Processing...");
			
			$.ajax({
				  type: 'POST',
				  url: "<?= admin_url('admin-ajax.php') ?>",
				  data: { 
							package_id: package_id,
							school_id: school_id,
							certsoft_auth_token: certsoft_auth_token,
							package_amount: package_amount,
							nmi_payment_token:  response.token,
							action: 'checkout_process',
						},
				  dataType : 'json',
				  success: function (response) {
					  
					  if(response.status == true){
						    $("#payButton").html("Processing...");
							$("#checkout_response").removeClass("custom-text-danger");
							$("#checkout_response").addClass("custom-text-success");
							$("#checkout_response").text("");
							$("#checkout_response").text(response.message);
							thankyouPage = window.location.pathname + '/payment-successful?txn_id='+response.transaction_id;
							window.location.href= thankyouPage;
							return true;
					  }else{
						    $("#payButton").html("Purchase Course <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5'><path stroke-linecap='round' stroke-linejoin='round' d='M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z' /></svg>" );
							$("#checkout_response").removeClass("custom-text-success");
							$("#checkout_response").addClass("custom-text-danger");
							$("#checkout_response").text("");
							$("#checkout_response").text(response.message);
							return false
					  }
					 
				  }
			});

		//console.log(response);
    },
    variant: 'inline',
    googleFont: 'Abel',
    invalidCss: {
      color: '#ff0000'
    },
    validCss: {
      color: '#14855F'
    },
    customCss: {
      'border-color': 'rgb(0 0 0 / 25%)',
      'border-style': 'solid',
	  'border-width': '1px',
	  'padding': '0.85rem',
	  'font-size': '16px',
	  'border-width': '1px',
	  'height': '50px'
    },
    focusCss: {
      'border-color': '#1CC48B',
      'border-style': 'solid',
      'border-width': '3px'
    },
    fields: {
      cvv: {
        placeholder: 'CVV'
      },
      ccnumber: {
          placeholder: 'Credit Card'
      },
      ccexp: {
          placeholder: 'MM / YY'
      }
    }
  });
});
          
</script>