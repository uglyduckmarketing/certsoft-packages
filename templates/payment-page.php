<?php
get_header();

if( have_rows('school_information', 'options') ) : while( have_rows('school_information', 'options') ): the_row();

  $school_name = get_sub_field('school_name');
  $school_logo = get_sub_field('school_logo');
  $school_primary_color = get_sub_field('school_primary_color');
  $school_login_link = get_sub_field('school_login_link');
  $school_type = get_sub_field('school_type');
  $school_state = get_sub_field('school_state');

endwhile; endif;

include plugin_dir_path(__FILE__) . 'headers/header-01.php';

if($school_type == 'Boating School') {
  include plugin_dir_path(__FILE__) . 'boating-packages.php';
} elseif($school_state == 'texas') {
  include plugin_dir_path(__FILE__) . 'texas-packages.php';
} else {
  include plugin_dir_path(__FILE__) . 'packages.php';
}

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

if($package_matched) {

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
                  <?php if(get_field('terms', 'options')) : ?>
                    <?php echo get_field('terms', 'options'); ?>
                  <?php else : ?>
                  <strong class="text-center"><?php echo do_shortcode('[company_name]'); ?> Terms of Service</strong>
                  <br /><br />
                  Please read all terms and conditions carefully. Your use of this Site or our services is conditioned upon your acceptance of these terms. If you do not agree to the terms, do not use this Site or the services entered.
                  <br /><br />
                  <strong>Notice:</strong> Our terms contain a class action waiver of a right to a jury trial, as well as a mandatory arbitration clause.
                  <br /><br />
                  This Approved Traffic School, LLC Terms of Use Agreement (“CONTRACT”) is a legal agreement between (“STUDENT”) and Approved Traffic School, LLC (“ATS, LLC”). By clicking on the Purchase Course (or similar) button at the bottom of this CONTRACT, accessing and using this Site, or using the ATS, LLC real estate course service (“Mobile App and/or Online course”), STUDENT agrees to be bound by the terms of this CONTRACT.
                  <br /><br />
                  <strong>SECURITY AND VALIDATION POLICY:</strong> STUDENT acknowledges that: (i) it is illegal to attempt to circumvent this Mobile App and/or Online course; (ii) any attempt to circumvent this course may result in loss of Certificate of Course Completion, court fines, and/or forfeiture of payment for the course; and (iii) circumvention includes, but is not limited to, having someone other than the registered STUDENT taking or participating in the Online course/Mobile App. STUDENT represents that the information provided to ATS, LLC is true and correct and that if ATS, LLC determines that STUDENT has misrepresented his/her/their/they identity, STUDENT will be removed from the Online course and or Mobile App and will forfeit any and all fees paid/transacted. STUDENT acknowledges that misrepresenting his/her/their/they/its identity in order to complete this state-approved course may constitute perjury and other criminal violations, in addition to possible civil penalties. STUDENT understands, agrees, and consents to ATS, LLC accessing and using third-party databases (pertaining to drivers licenses, DMV records, credit information, housing history, and other data containing STUDENT’s personal information) to obtain information to verify the accuracy of personal information submitted by STUDENT to ATS, LLC, prevent fraud, or for any other permissible purpose. ATS, LLC may request that STUDENT provide a notarized Statement of Assurance verifying STUDENT’s identity and compliance with this Security and Validation Policy. STUDENT agrees to provide such Statement of Assurance if requested by ATS, LLC.
                  <br /><br />
                  <strong>TUITION SCHEDULE:</strong> The total cost of the Mobile App and/or Online course is stated at the time of purchase.
                  <br /><br />
                  <strong>COURSE SCHEDULE:</strong> The Mobile App and/or Online course shall generally be accessible and available to STUDENT twenty-four (24) hours per day following receipt of payment for the Mobile App and/or Online course ( START COURSE”). STUDENT’s access to and use of the Mobile App and/or Online course shall be subject to the license granted herein. STUDENT will have 365 days from COURSE START to successfully complete the Mobile App and/or Online course. STUDENT must have an Apple iOS device running operating system 6.0 or higher. At this time, the course is accessible through iOS devices, Android devices, and computers with Internet browsers. Circumstances that would affect the twenty-four hour availability of the Mobile App and/or Online course include, but are not limited to, system failure, site failure, user and provider connection failures, and user and provider phone line failure. STUDENT assumes all responsibility for the equipment, systems, requirements, procedures, and/or other matters related to STUDENT’s ability to access the Mobile App and/or Online course. If, at any time, STUDENT is unable to access the Mobile App and/or Online course, ATS, LLC will adjust the COURSE END date to reflect the period of time when access was unavailable, if and only if, STUDENT contacts ATS, LLC by telephone 800-406-9026 and informs ATS, LLC of the unavailability of access, and if the unavailability of access is the fault of ATS, LLC. STUDENT acknowledges and agrees that interruptions in Internet service may occur over which ATS, LLC has no control or responsibility. 
                  <br /><br />
                  <strong>REFUND POLICY:</strong> ATS, LLC courses are partially refundable if the STUDENT has not completed the course AND if the refund request is made within 13 days of purchase. An admin fee of $15.00 will be withheld from the purchase amount. Please contact customer support (help@trafficschoolassist.com) to request a refund. 
                  <br /><br />
                  <strong>CANCELLATION POLICY:</strong> A partial refund for the course will be made to any STUDENT who cancels the enrollment contract before midnight of the thirtieth day after the enrollment contract is signed by the STUDENT, unless the STUDENT has successfully completed the course or received a failing grade on the course examination. A STUDENT failing the personal or course validation is considered to have completed the course but failed. 
                  <br /><br />
                  <strong>STUDENT REGISTRATION OBLIGATIONS:</strong> In consideration of STUDENT’s use of the Mobile App and/or Online course, STUDENT: (a) agrees to provide true, accurate, current and complete information his/her/their/they/its identify upon his/her/their/they/its registration to take the Mobile App and/or Online course (such information being the “Registration Data”); (b) agrees to maintain and promptly update the Registration Data to keep it true, accurate, current and complete; (c) acknowledges and agrees that ATS, LLC shall not be liable to STUDENT or any third party for any termination of his/her/their/they/its access to his/her/their/they/its password/username, account or the Mobile App and/or Online course ; and (d) certifies that he or she is at least 18 years old, or if STUDENT is younger than 18 years old, that the legal guardian of STUDENT consents to STUDENT accessing the Mobile App and/or Online course gives permission for ATS, LLC to collect information on STUDENT, and consents to STUDENT taking the Mobile App and/or Online course. If STUDENT is not 18 years or older proceed no further, until STUDENT’s legal guardian has reviewed this CONTRACT and consents to STUDENT accessing the Mobile App and/or Online course. If STUDENT provides any information that is untrue, inaccurate, not current, or incomplete, or ATS, LLC has reasonable grounds to suspect that such information is untrue, inaccurate, not current, or incomplete, ATS, LLC has the right to suspend or terminate STUDENT’s access to the Mobile App and/or Online course and refuse any and all current or future use of the Mobile App and/or Online course (or any portion).
                  <br /><br />
                  <strong>STUDENT ACCOUNT, PASSWORD, AND SECURITY:</strong> STUDENT will create a login id (email) and password, or the system will auto generate a username during the initial registration process. Additionally, the student may use other ID authentication methods such as Facebook Auth ID or Google One login. STUDENT acknowledges that he or she is responsible for maintaining the confidentiality of the password, username and account, and that his/her/their/they/its/he/she is fully responsible for all activities that occur under his or her password, username or account. STUDENT agrees to (a) immediately notify ATS, LLC of any unauthorized use of his or her password or account or any other breach of security, and (b) ensure that he or she exits from his or her account at the end of each session. ATS, LLC cannot and will not be liable for any loss or damage arising from STUDENT’s failure to comply with this Section.
                  <br /><br />
                  <strong>NO RESALE OF SERVICE:</strong> STUDENT agrees not to sell, resell or exploit for any commercial purposes, any portion of the Mobile App and/or Online course, use thereof, or access thereof.
                  <br /><br />
                  <strong>GENERAL PRACTICES REGARDING USE AND STORAGE:</strong> STUDENT agrees that ATS, LLC has no responsibility or liability for the deletion or failure to store any messages and other communications or other content maintained or transmitted by the Mobile App and/or Online course. STUDENT acknowledges that ATS, LLC reserves the right to log off accounts that are inactive for an extended period of time. STUDENT further acknowledges that ATS, LLC reserves the right to change these general practices and limits at any time, in its sole discretion, with or without notice.
                  <br /><br />
                  <strong>TERMINATION:</strong> If ATS, LLC believes that STUDENT has violated or acted inconsistently with the letter or spirit of this CONTRACT, STUDENT agrees that ATS, LLC, in its sole discretion and at any time, may terminate STUDENT’s access to his/her/their/they/its username, password, account (or any part), or his/her/their/they/its access to or use of the Mobile App and/or Online course. STUDENT acknowledges and agrees that any termination of his/her/their/they/its access to his/her/their/they/its username, password, account or access to or use of the Mobile App and/or Online course may be effected without prior notice and that ATS, LLC may immediately deactivate or delete his/her/their/they/its account and all related information and files in his/her/their/they/its account and/or bar any further access to such files or the Mobile App and/or Online course. Further, STUDENT acknowledges and agrees that ATS, LLC shall not be liable to STUDENT or any third-party for any termination of his/her/their/they/its access to his/her/their/they/its password, username and account or the Mobile App and/or Online course. Termination or cancellation of this CONTRACT shall not affect any other right or relief to which ATS, LLC may be entitled, whether at law or in equity. Upon termination of this CONTRACT, all rights granted to STUDENT will terminate and revert to ATS, LLC, regardless of the reason for cancellation or termination. All provisions in this CONTRACT relating to proprietary rights, indemnification and limitation of liability shall survive termination.
                  <br /><br />
                  <strong>ATS, LLC’S PROPRIETARY RIGHTS, COPYRIGHT AND TRADEMARK INFORMATION AND USE RESTRICTIONS:</strong> All of the information included in the Mobile App and/or Online course, including all the software text, course materials, graphics, logos, photographs, graphs, sounds, data, images, audio, page headers, software, buttons, video and other icons and the arrangement and compilation of this information (collectively, the “Information”) is the valuable property of ATS, LLC. ATS, LLC and its associated logos, and all page headers, custom graphics, buttons, and other icons are service marks, trademarks, registered service marks, or registered trademarks of ATS, LLC. The Information is protected by contract law and various intellectual property laws, including domestic and international copyright and trademark laws, and all intellectual property rights in the Mobile App and/or Online course belong to ATS, LLC or its licensors. The Information is the valuable, exclusive property of ATS, LLC. Nothing in this CONTRACT shall be construed as transferring or assigning any ownership rights in the Information to STUDENT or any other person or entity. Ownership of the Mobile App and/or Online course and the Information shall remain at all times with ATS, LLC or its licensors. STUDENT is granted a license to use the Mobile App and/or Online course hereunder, as long as STUDENT complies with the terms of this CONTRACT or until ATS, LLC terminates this CONTRACT or STUDENT’s access rights. STUDENT may use the Information solely for taking the Mobile App and/or Online course. STUDENT agrees that he or she will not (nor allow any third party to) (i) resell, redistribute, broadcast or transfer the Information or use the Information in a searchable, machine-readable database or file; (ii) remove, alter or obscure any copyright, legal or proprietary notices in or on any portions of the Information; or (iii) use the Information for any purpose other than for taking the Mobile App and/or Online course. STUDENT further agrees to use the Mobile App and/or Online course and the Information for lawful purposes only.
                  <br /><br />
                  <strong>LICENSE GRAN:</strong> ATS, LLC grants STUDENT a limited, personal, non-assignable, non-transferable and non-exclusive right and license to use the Mobile App and/or Online course and the Information on a single computer until ATS, LLC terminates this CONTRACT or STUDENT’s access rights; provided and expressly conditioned upon STUDENT’s agreement that all such access and use shall be governed by all of the terms and conditions set forth in this CONTRACT and provided that STUDENT does not (and does not allow any third party to) copy, modify, create a derivative work of, reverse engineer, reverse assemble or otherwise attempt to discover any source code, sell, assign, sublicense, grant a security interest in or otherwise transfer any right in the Information. STUDENT agrees not to modify the Information in any manner or form, or to use modified versions of the Information, including (without limitation) for the purpose of obtaining unauthorized access to the Mobile App and/or Online course or creating a competitive product. STUDENT agrees not to access the Mobile App and/or Online course by any means other than through the interface that is provided by ATS, LLC for use in accessing the Mobile App and/or Online course. LIMITATION ON LIABILITY. Except as otherwise expressly provided in the foregoing sentence, ATS, LLC provides the Mobile App and/or Online course on an “as is with all faults” basis and STUDENT assumes all risks of using the Mobile App and/or Online course and all risk of errors and/or omissions, including the transmission or translation of the information in the Mobile App and/or Online course. ATS, LLC does not warrant that the functions contained in the Mobile App and/or Online course will be uninterrupted or error-free, that defects will be corrected or that the Mobile App and/or Online course or the server that makes it available are free of viruses or other harmful components and all such warranties are expressly disclaimed. STUDENT assumes the entire cost of all necessary servicing, repair or correction. STUDENT assumes full responsibility for implementing sufficient procedures and checks to satisfy his or her requirements for the accuracy and sustainability of the Mobile App and/or Online course.
                  <br />
                  Some states do not allow limitations on how long an implied warranty lasts, so the above limitation may not apply to STUDENT. This warranty gives student specific legal rights. STUDENT may also have other rights which vary from state to state.
                  STUDENT agrees that in no event shall ATS, LLC (including its officers, directors, employees, affiliates, agents, representatives or subcontractors) be liable for and STUDENT releases ATS, LLC from any liability for the following: (i) any decision or action taken, or not taken by STUDENT in reliance upon the information contained or provided through the Mobile App and/or Online course; (ii) any conduct contemplated by this CONTRACT or in any other manner related to STUDENT’s use of the Mobile App and/or Online course; (iii) any errors, inaccuracies, omissions or other defects in, or untimeliness or lack of authenticity of, the Mobile App and/or Online course or for any delay or interruption in the transmission to STUDENT, or for any claim or loss arising therefrom or occasioned thereby. STUDENT further agrees that in no event shall ATS, LLC be liable for and STUDENT releases ATS, LLC from many any and all non-direct damages, including but not limited to, any special, incidental, punitive, or consequential damages whether or not arising out of or related to this CONTRACT. In no event shall ATS, LLC’s total aggregate liability for all damages, losses and causes of action (whether in contract, tort (including, but not limited to, negligence and strict liability), or otherwise) arising out of or related to this CONTRACT, the Mobile App and/or Online course, and/or use of ATS, LLC’s web site and mobile application, exceed the cost of tuition paid by STUDENT for the Mobile App and/or Online course even if ATS, LLC or its affiliates have been advised of the possibility of such damages. If and to the extent any payment required to be made under this CONTRACT or damage limitation set forth herein is deemed to constitute liquidated damages, STUDENT acknowledges and agrees that such damages are difficult and impossible to determine and that such payment is intended to be a reasonable approximation of the amount of such damages and not a penalty. Notwithstanding anything to the contrary contained here, STUDENT’s sole and exclusive remedy for any breach of this CONTRACT and/or any liability arising out of or related to this CONTRACT and/or the Mobile App and/or Online course shall be a refund of the tuition paid by STUDENT for the Mobile App and/or Online course. This limited liability shall be complete and exclusive. Some states do not allow the exclusion or limitation of incidental or consequential damages, so the above limitation or exclusion may not apply. This clause gives STUDENT specific legal rights. STUDENT may also have other rights which vary state by state.
                  <br /><br />
                  <strong>INDEMNIFICATION:</strong> STUDENT agrees to indemnify, defend and hold harmless ATS, LLC, its subsidiaries, licensors, affiliates and its and their officers, directors, employees, affiliates, agents, representatives or subcontractors, for any against all claims or demands, including reasonable attorney’s fees, arising from or related to STUDENT’s access, connection to, or use of, or STUDENT’s inability to use, access or connect to the Mobile App and/or Online course (including the Information obtained through the Mobile App and/or Online course), STUDENT’s violation of this CONTRACT, or STUDENT’s violation of any rights of another.
                  <br /><br />
                  <strong>DELAYS IN SERVICE:</strong> Any delays in or failure of performance by ATS, LLC or any of its licensors, service providers or service sponsors (including its and their officers, directors, employees, affiliates, agents, representatives and subcontractors) shall not give rise to any claims for damages, or any loss or liability, if and to the extent caused by interruptions due to electronic or mechanical equipment failures, telephone interconnect problems, defects, or occurrences beyond ATS, LLC’s control, including but not limited to acts of governmental authority, weather, fire, floods, explosions, acts of God, strikes or other concerted acts of workers, riots, armed conflicts, acts of war, or sabotage. ATS, LLC shall have no responsibility to provide STUDENT access to the Mobile App and/or Online course while interruption of the Mobile App and/or Online course due to any such or similar cause shall continue.
                  <br /><br />
                  <strong>ASSIGNMENT:</strong> STUDENT assigns and grants all right, title and interest to ATS, LLC to gather, process, analyze, and retain any of the information STUDENT voluntarily supplies during STUDENT’s use of the Mobile App and/or Online course. STUDENT consents to the disclosure by ATS, LLC of any of this information to third party entities in accordance with the Privacy Policy posted on ATS, LLC’s Web Site and Mobile Application, and incorporated herein by reference. STUDENT consents to the aggregation of his or her non-identifying information with like information from other people, and consents to the release of such aggregated information to other parties, including but not limited to the sponsors or third party service providers of ATS, LLC. STUDENT agrees that ATS, LLC may mail him or her or email him or her information about ATS, LLC programs or events. This CONTRACT shall not be assigned in whole or in part by STUDENT without the prior written consent of ATS, LLC and any attempted assignment in contravention of this section shall be void.
                  NOTICE:. Notices to STUDENT may be made via either email, regular mail or by displaying notices or links to notices generally on ATS, LLC’s Web Site and Mobile Application.
                  <br /><br />
                  <strong>PRIVACY POLICY:</strong> THE ATS, LLC Privacy Policy may be found from a link at the bottom of the ATS, LLC home page. By accepting the CONTRACT, STUDENT agrees that he or she has read, understands and agrees to the PRIVACY POLICY.
                  <br /><br />
                  <strong>GOVERNING LAW AND FORUM SELECTION:</strong> The CONTRACT is construed under the laws of the State of California, without reference to its conflict of laws provisions. STUDENT agrees that any action at law or in equity arising out of or relating to the Mobile App and/or Online course can be filed only and exclusively in a state or federal court located in Kern County, Bakersfield, California, and STUDENT irrevocably and unconditionally consents and submits to the exclusive jurisdiction and venue of such courts over any suit, action or proceeding arising out of the Mobile App and/or Online course. STUDENT knowingly, voluntarily, intelligently, and irrevocably waives any available affirmative defenses under federal law or any states' laws to venue and jurisdiction in Kern County, Bakersfield California, including without limitation improper venue, forum non conveniens, lack of in personam jurisdiction, and all related defenses. STUDENT agrees that this forum-selection clause shall apply to any and all claims under federal law or any states' laws and that arise from or relate in any way to the Mobile App and/or Online course, including, without limitation, contract, tort, and all other statutory or common law claims seeking equitable or legal relief, whether asserted as a cause of action, counterclaim, cross-claim, affirmative defense, or otherwise, and whether asserted on an individual basis or as putative representative of a class.
                  <br /><br />
                  <strong>CLASS ACTION WAIVER:</strong> For disputes arising between STUDENT and ATS, LLC, or any other user, STUDENT and ATS, LLC agree that each can only bring a claim against each other on an individual basis. Neither STUDENT nor ATS, LLC can bring a claim as a plaintiff or class member in a class action, consolidated action, or representative action. If a court decides that this “Class Action Waiver” section is not enforceable or is invalid, then this section shall cease to have effect, however, the remaining portions of the CONTRACT will remain in full force and effect.
                  <br /><br />
                  <strong>WAIVER OF RIGHT TO JURY TRIAL:</strong> STUDENT knowingly, voluntarily, intelligently, and irrevocably waives his or her rights to a jury trial of any claim or cause of action based upon, arising out of, or in any manner relating to this CONTRACT and/or ATS, LLC’s performance or failure to perform. The scope of this waiver is intended to be all-encompassing and shall apply to any and all claims arising under federal law or any states' laws and that arise from or relate in any way to the subject matter of the CONTRACT and/or ATS, LLC’s performance, including, without limitation, contract, tort, and all other statutory or common law claims seeking equitable or legal relief, whether asserted as a cause of action, counterclaim, cross-claim, affirmative defense, or otherwise, and whether asserted on an individual basis or as putative representative of a class. STUDENT expressly acknowledges that this provision is an essential aspect of the bargain embodied by the CONTRACT. If a court decides that this “Waiver of Right to Jury Trial” section is not enforceable or is invalid, then this section shall cease to have effect, however, the remaining portions of the CONTRACT will remain in full force and effect.
                  <br /><br />
                  <strong>CLAIMS SUBJECT TO MANDATORY AND BINDING ARBITRATION:</strong> Subject to and without limiting the Governing Law and Forum Selection section, STUDENT expressly agrees that any claim or cause of action that arises from, relates to, or has connection with the Mobile App and/or Online course shall be adjudicated exclusively and finally by arbitration in Kern County, Bakersfield California, administered by the American Arbitration Association. The arbitration award shall be final and binding, and judgment on the award rendered by the arbitrator(s) may be entered in any court having jurisdiction. Except as required by applicable law, STUDENT knowingly, voluntarily, intelligently, and irrevocably waives any right to appeal from the arbitration award, including but not limited to any appeal from any judgment entered on the arbitration award or any order based thereupon. STUDENT agrees that any claim or cause of action that is subjection to arbitration under the CONTRACT must be brought in his or her individual capacity and not as a plaintiff or class member in any purported class or representative proceeding. STUDENT agrees that the arbitrator shall not consolidate more than one person’s claims and may not otherwise preside over any form of a representative or class proceeding. If a court decides this “Mandatory and Binding Arbitration” section is not enforceable or is invalid, then this section shall cease to have effect, however, the remaining portions of the CONTRACT will remain in full force and effect. ATTORNEY’S FEES. If ATS, LLC takes action (by itself or through its representatives) to enforce any of the provisions of this CONTRACT, including collection of any amounts due hereunder, in addition to all sums to which it is entitled or any other relief, at law or in equity, ATS, LLC shall be entitled to recover from STUDENT and STUDENT agrees to pay, reasonable and necessary attorney’s fees and all costs of any litigation or other dispute resolution proceeding.
                  <br /><br />
                  <strong>NO CONFLICTING TERMS:</strong> If there is a conflict between this CONTRACT or other documents relating to the Mobile App and/or Online course, this CONTRACT shall govern, whether or not such agreement or other document is prior to or subsequent to this CONTRACT, or is signed or acknowledged by any director, officer, employee, representative or agent of ATS, LLC.
                  <br /><br />
                  <strong>GENERAL INFORMATION:</strong> This CONTRACT constitutes the entire agreement between STUDENT and ATS, LLC and govern STUDENT’s use of the Mobile App and/or Online course superseding any prior agreements between STUDENT and ATS, LLC. The failure of ATS, LLC to exercise or enforce any right or provision of this CONTRACT shall not constitute a waiver of such right or provision. If any provision of this CONTRACT is found by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties’ intentions as reflected in the provision, and the other provisions of this CONTRACT remain in full force and effect. STUDENT agrees that regardless of any statute or law to the contrary, in order to avoid waiver, STUDENT must give ATS, LLC notice of any claim or course of action (“Claim”) arising out of or related to use of the Mobile App and/or Online course within one (1) year after STUDENT becomes aware of the material facts and circumstances giving rise to such Claim and any Claim must be filed within one (1) year after such claim arose or be forever barred.
                  <br /><br />
                  <strong>TECHNOLOGY SUPPORT SERVICES:</strong> Students may contact ATS, LLC’s Customer Experience team for technology and troubleshooting support Monday - Friday, 8am-5pm Pacific Standard Time. These services are available via email at help@trafficschoolassist, or phone at 800-406-9026.
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
          <button type="button" class="inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto bg-primary text-white" id="terms-agree">Agree</button>
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
    <input type="hidden" value="<?php echo $packageTitle; ?>" name="package_title" class="package_title" id="package_title">
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
            Secure Payment
          </button>
          <?php if($school_type !== 'Boating School') : ?>
          <button class="progress-button" id="progress-button-03">
            Ticket Information
          </button>
          <?php endif; ?>
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
              <span class="text-primary text-xs mb-2 block font-semibold">Create Account</span>
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
              <label for="password">Create A Password <span class="text-red-500">*</span></label>
              <div class="mt-1 relative">
                <input type="password" name="password" id="password" required>
                <span class="view-password absolute right-4 top-4 -mt-0.5 text-gray-500 hover:text-gray-900 cursor-pointer transition-all duration-300">
                  <i class="fa-solid fa-eye"></i>
                </span>
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
              <label for="license">Driver License Number</label>
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
			 <?php if(empty(get_field('disable_apple_pay', 'options'))) : ?>
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
			  
	  <?php endif; ?>

        
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
            <h2 class="text-2xl md:text-3xl mb-4 md:pr-12 text-gray-900 font-semibold tracking-tight hidden md:block"><?php echo $packageTitle; ?></h2>
			  <div class="md:hidden package-description-toggle">
				  
			  <h2 class="text-lg text-gray-900 font-semibold tracking-tight flex justify-between gap-4 md:hidden details-trigger">
				<?php echo $packageTitle; ?>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
				  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
				</svg>
			  </h2>
			  </div>
			  <span class="text-xs text-gray-500 font-medium md:hidden">View Details</span>
			      <div class="text-base text-gray-900 package-description"><?php echo $packageDescription; ?></div>
          </div>
          <dl class="space-y-6 border-opacity-20 px-4 py-6 sm:px-6 bg-white bg-opacity-10 price-box">
            <div class="flex items-center justify-between">
              <dt class="text-base font-bold text-gray-900">Course Total</dt>
              <dd class="text-base font-bold text-gray-900">$<?php echo $packagePrice; ?></dd>
            </div>
          </dl>
        </div>
        <?php if($school_type !== 'Boating School') : ?>
		    <div class="block mt-12 text-gray-700">
			    <a href="<?php bloginfo('url'); ?>/get-started/" class="text-sm gap-2 flex items-center edit-package">
				    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
				      <path fill-rule="evenodd" d="M12.5 9.75A2.75 2.75 0 0 0 9.75 7H4.56l2.22 2.22a.75.75 0 1 1-1.06 1.06l-3.5-3.5a.75.75 0 0 1 0-1.06l3.5-3.5a.75.75 0 0 1 1.06 1.06L4.56 5.5h5.19a4.25 4.25 0 0 1 0 8.5h-1a.75.75 0 0 1 0-1.5h1a2.75 2.75 0 0 0 2.75-2.75Z" clip-rule="evenodd" />
				    </svg>
				  Edit Package
        </a>
		  </div>
      <?php endif; ?>
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
	.details-trigger svg {
		transition: all .3s ease;
	}
	.rotate-icon {
		transform: rotate(180deg);
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
		.package-description, .edit-package {
			display: none;
		}
	}
</style>

<?php get_footer(); ?>

<?php if($school_type === 'Boating School') : ?>
<script>
  document.getElementById('progress-button-02').addEventListener('click', function() {
    document.getElementById('progress-bar').style.width = '50%';
  });
</script>
<?php endif; ?>

<script>

// Change Password Field to Text Field
document.querySelector('.view-password').addEventListener('click', function() {
  const password = document.getElementById('password');
  const icon = document.querySelector('.view-password svg');
  if(password.type === 'password') {
    password.type = 'text';
    icon.classList.toggle('fa-eye-slash');
  } else {
    password.type = 'password';
    icon.classList.toggle('fa-eye');
  }
});

jQuery(document).ready(function($){
	
	$('.package-description-toggle').click(function(e) {
		e.preventDefault();
		$('.package-description').slideToggle();
		$('.package-description-toggle svg').toggleClass('rotate-icon');
	})

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
		if($form.valid()) {
			
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
      var package_title = $("#package_title").val();
			
			$("#payButton").html("Processing...");
			
			$.ajax({
				  type: 'POST',
				  url: "<?= admin_url('admin-ajax.php') ?>",
				  data: { 
							package_id: package_id,
							school_id: school_id,
							certsoft_auth_token: certsoft_auth_token,
							package_amount: package_amount,
              package_title: package_title,
							nmi_payment_token:  response.token,
							action: 'checkout_process',
						},
				  dataType : 'json',
				  success: function (response) {
					  
					  if(response.status == true) {
              console.log(response);
						  $("#payButton").html("Processing...");
							$("#checkout_response").removeClass("custom-text-danger");
							$("#checkout_response").addClass("custom-text-success");
							$("#checkout_response").text("");
							$("#checkout_response").text(response.message);
							thankyouPage = window.location.pathname + '/payment-successful?txn_id='+response.transaction_id;
							window.location.href= thankyouPage;
							return true;
					  } else {
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