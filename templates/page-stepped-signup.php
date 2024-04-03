<?php /* Template Name: Stepped Traffic Signup v1 */ ?>

<?php get_header(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

  // Empty All Selections If Coming Back To The Form
  const hideRadio = () => {
    let choices = document.getElementsByTagName('input');
    for(var i=0 ;i < choices.length; i++) {
      choices[i].checked = false;
    }
  }
  window.addEventListener( "pageshow", function ( event ) {
    var historyTraversal = event.persisted || ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );
    if ( historyTraversal ) {
      hideRadio();
      // window.location.reload(); // Not needed
    }
  });

</script>

<?php include plugin_dir_path(__FILE__) . 'headers/header-01.php'; ?>

<div class="progress-bar sticky top-0 h-1 bg-primary z-40"></div>

<section class="hidden">
  <div class="bg-white border-b border-gray-150 p-4 mb-10 shadow-sm">
    <div class="flex md:items-center gap-4 md:gap-6 mx-auto max-w-5xl">
      <div class="hidden md:block">
        <img class="rounded-md border border-gray-100 object-cover shadow-sm flag-img" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/ca-bear.png'; ?>" />
      </div>
      <div>
        <h2 class="mb-1.5 font-semibold text-lg md:text-xl text-gray-900 leading-6 mt-2 md:mt-0 tracking-tight">This Course is California Traffic School for California Traffic Tickets.</h2>
        <p class="text-gray-600 text-sm md:text-base mb-2 md:mb-0">Licensed by the DMV #<?php echo get_field('license_number', 'options'); ?>. We've helped nearly 1 million drivers mask their traffic ticket. <span class="font-semibold text-gray-900">Course Info:</span></p>
          <ul class="mt-3 course-info grid md:grid-cols-2 gap-2 font-medium text-gray-700 text-sm mb-1">
          <li class="flex gap-2 items-center">
              <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-primary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>
              </span>
              <span>Free Electronic Certificate Submission to Court & DMV</span>
            </li>
            <li class="flex gap-2 items-center md:ml-2">
              <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-primary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>
              </span>
              <span>Open-book 25 Question Final Exam</span>
            </li>
            <li class="flex gap-2 items-center">
              <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-primary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>
              </span>
              <span>Free Certificate PDF Download</span>
            </li>
            <li class="flex gap-2 items-center md:ml-2">
              <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-primary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>
              </span>
              <span>6 Short Chapters</span>
            </li>
          </ul>  
        
      </div>
    </div>
  </div>  
</section>

<button class="mt-12 course-options faq-button bg-white py-2 px-4 border b-4 border-gray-600 rounded-full text-sm flex gap-1 content-center text-gray-600 font-medium md:mb-0 mx-auto z-50 ">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="-ml-1.5 w-5 h-5 text-gray-500">
    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
  </svg>
  <span>Have Questions?</span>
</button>

<section class="mx-auto max-w-4xl grid items-center pt-6 pb-12 px-6">

  <fieldset id="step-01" data-step="01">
    
    <div class="mb-7">
    <div>
      <span class="text-blue-600 text-xs mb-2 font-semibold block">Step 01.</span>
      <h2 class="block mb-4 text-2xl font-semibold tracking-tight">Pass Guarantee Offer</h2>
      <p class="text-gray-700 text-base md:text-lg mb-12 md:mb-0">Have test anxiety or don’t want to waste valuable time? Choose our <span class="px-2 py-1 bg-blue-50 rounded-md text-base font-semibold text-blue-600">"pass guarantee"</span> and you say goodbye to your worries. The DMV only allows you 2 attempts to pass the final exam (it's ridiculous). If you fail both we'll reset your account so you can try again for <strong>FREE!</strong></p>
    </div>
  </div>
    
    <legend class="sr-only">Processing Setting</legend>
    <div class="-space-y-px rounded-md bg-white">

      <label class="relative flex cursor-pointer rounded-tl-md rounded-tr-md border p-4 focus:outline-none">
        <input type="radio" name="passing-setting" value="yes" class="mt-1.5 h-4 w-4 shrink-0 cursor-pointer border-gray-300 text-blue-600 focus:ring-blue-600" />
        <span class="ml-3 block md:flex flex-col">
          <div class="block pb-2 text-lg font-semibold tracking-tight">+$4.95 - <span class="italic text-blue-600">Yes!</span> Guarantee I'll Pass <span class="ml-2 rounded-full text-xs bg-blue-600 text-white px-3 font-semibold py-1.5 absolute md:right-4 md:top-4 rec">Recommended</span></div>
          <span class="block text-sm md:text-base text-gray-600">Unlock unlimited course attempts. </span>
        </span>
      </label>

      <label class="relative flex cursor-pointer border p-4 focus:outline-none">
        <input type="radio" name="passing-setting" value="no" class="mt-1.5 h-4 w-4 shrink-0 cursor-pointer border-gray-300 text-blue-600 focus:ring-blue-600" />
        <span class="ml-3 flex flex-col">
          <div class="block pb-2 text-lg font-semibold tracking-tight flex items-center">No Thanks</div>
          <span class="block text-sm md:text-base text-gray-600">I’ll risk it and possibly upgrade later.</span>
        </span>
      </label>

    </div>
    
  <div class="mt-5 flex w-full justify-end block">
    
    <button disabled class="next-button bg-primary rounded-full py-3 px-6 text-white text-sm font-semibold flex items-center gap-2">Next <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
    </svg>
    </button>
  </div>
  
  </fieldset>

  <fieldset class="hidden-fieldset" data-step="02">
    
  <div class="mb-7">
    <div>
      <span class="text-blue-600 text-xs mb-2 font-semibold block">Step 02.</span>
      <h2 class="block mb-4 text-2xl font-semibold">Select Your Certification Method</h2>
      <p class="text-gray-700 text-base md:text-lg mb-12 md:mb-0">We will send you an email upon completion of our course. However, we recommend the following options due to the inefficiencies at the Court/DMV level we have seen in our 24 years of experience.</p>
    </div>
  </div>
    
    <legend class="sr-only">Verification Setting</legend>
    <div class="-space-y-px rounded-md bg-white">
      <label class="relative flex cursor-pointer rounded-tl-md rounded-tr-md border p-4 focus:outline-none">
        <input type="radio" name="cert-setting" value="yes" class="mt-1.5 h-4 w-4 shrink-0 cursor-pointer border-gray-300 text-blue-600 focus:ring-blue-600" />
        <span class="ml-3 flex flex-col">

        <div class="block text-lg font-semibold block md:flex items-center pb-2">+$3.95 - DMV Processed Verification <span class="ml-2 rounded-full text-xs bg-gray-900 text-white px-3 font-semibold py-1.5 absolute md:right-4 md:top-4 rec">Suggested</span></div>

          <span class="block text-sm md:text-base text-gray-600 max-w-prose">We do the heavy lifting to ensure your matter is resolved! Our heroic support staff will monitor your ticket and confirm that it was successfully processed with the DMV and Court and will email you a confirmation number.</span>
        </span>
      </label>

      <label class="relative flex cursor-pointer border p-4 focus:outline-none">
        <input type="radio" name="cert-setting" value="no" class="mt-1.5 h-4 w-4 shrink-0 cursor-pointer border-gray-300 text-blue-600 focus:ring-blue-600" />
        <span class="ml-3 flex flex-col">
          <div class="block text-lg font-semibold pb-2">No thanks, I'll monitor it on my own time</div>
          <span class="block text-sm md:text-base text-gray-600">Be sure you contact your court 3 weeks after completion. You can upgrade later should you wish.</span>
        </span>
      </label>
    </div>
    
      <div class="mt-6 flex w-full justify-between block">
    
        <button class="prev-button py-3 px-6 text-gray-600 text-sm font-semibold flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
</svg>
 Previous
</button>
    
    <button disabled class="next-button bg-primary rounded-full py-3 px-6 text-white text-sm font-semibold flex items-center gap-2">Next <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
</svg>
</button>
  </div>
  
  </fieldset>

  <fieldset class="hidden-fieldset" data-step="03">
    
  <div class="mb-7">
    <div>
      <span class="text-blue-600 text-xs mb-2 font-semibold block">Step 03.</span>
      <h2 class="block mb-4 text-2xl font-semibold">Select Your Processing Method</h2>
      <p class="text-gray-700 text-base md:text-lg mb-12 md:mb-0">Your certificate of completion will be processed 3 business days after completion and electronically submitted to the TVCC System shared by both the Court and DMV to verify your certificate of completion.</p>
    </div>
  </div>
    
    <legend class="sr-only">Pass Setting</legend>
    <div class="-space-y-px rounded-md bg-white">
      <label class="relative flex cursor-pointer rounded-tl-md rounded-tr-md border p-4 focus:outline-none">
        <input type="radio" name="guaranteed-setting" value="yes" class="mt-1.5 h-4 w-4 shrink-0 cursor-pointer border-gray-300 text-blue-600 focus:ring-blue-600" />
        <span class="ml-3 flex flex-col">
          <span class="block pb-2 text-lg font-semibold md:flex items-center pb-2">+$9.95 - <span class="italic text-blue-600 mr-1 ml-1">In A Hurry!</span> Instant Processing <span class="ml-2 rounded-full text-xs bg-blue-600 text-white px-3 font-semibold py-1.5 absolute md:right-4 md:top-4 rec">Recommended</span></span>
          <span class="block text-sm md:text-base text-gray-600">We will process your certificate instantly 24/7 365 days a year.</span>
        </span>
      </label>

      <label class="relative flex cursor-pointer border p-4 focus:outline-none">
        <input type="radio" name="guaranteed-setting" value="no" class="mt-1.5 h-4 w-4 shrink-0 cursor-pointer border-gray-300 text-blue-600 focus:ring-blue-600" />
        <span class="ml-3 flex flex-col">
          <div class="block pb-2 text-lg font-semibold pb-2">Standard Processing - No Rush</div>
          <span class="block text-sm md:text-base text-gray-600">We will process your certificate within 3 business days after completion.</span>
        </span>
      </label>
    </div>
    
      <div class="mt-6 flex w-full justify-between block">
    
        <button class="prev-button py-3 px-6 text-gray-600 text-sm font-semibold flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
</svg>
 Previous
</button>
    
    <button disabled class="next-button bg-primary rounded-full py-3 px-6 text-white text-sm font-semibold flex items-center gap-2">Sign Up Now <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
    </svg>
    </button>
  </div>
  
    
  </fieldset>
</section>

<!-- Side Panel -->

<div class="relative slide-panel" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">

  <div class="fixed inset-0 bg-gray-900 bg-opacity-60 slide-backdrop transition duration-300 ease-in-out"></div>

  <div class="fixed inset-0 overflow-hidden slide-trigger-close">
    <div class="absolute inset-0 overflow-hidden">
      <div class="pointer-events-none fixed inset-y-0 flex max-w-full pl-10 slide-container transition-all duration-300 ease-in-out delay-100">

        <div class="pointer-events-auto w-screen max-w-md">
          <div class="flex h-full flex-col bg-white shadow-xl">
            <div class="flex min-h-0 flex-1 flex-col overflow-y-scroll py-6">
              <div class="px-4 sm:px-6 border-b border-gray-100 pb-4">
                <div class="flex items-start justify-between">
                  <h2 class="text-base font-semibold leading-6 text-gray-900" id="slide-over-title">

                    <div class="flex gap-3 items-center">
                      <span class="text-gray-900 text-xl font-bold">Frequently Asked Questions</span>
                    </div>
                    
                  </h2>
                  <div class="ml-3 flex h-7 items-center">
                    <button type="button" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 close-slide">
                      <span class="sr-only">Close Panel</span>
                      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="relative mt-8 flex-1 px-4 sm:px-6">

                <div class="border-b border-gray-200 pb-5 mb-5">
                  <h3 class="pb-2 text-base font-semibold text-gray-900">Am I choosing the right course?</h3>
                  <p class="text-gray-500 text-base">If you got a traffic ticket in California, this is the right course for you.</p>
                </div>

                <div class="border-b border-gray-200 pb-5 mb-5">
                  <h3 class="pb-2 text-base font-semibold text-gray-900">Is this course California DMV licensed?</h3>
                  <p class="text-gray-500 text-base">Yes, Our DMV license is <?php echo get_field('license_number', 'options'); ?>. Visit https://www.dmv.ca.gov/portal/olsis-traffic-schools/ to verify if needed.</p>
                </div>

                <div class="border-b border-gray-200 pb-5 mb-5">
                  <h3 class="pb-2 text-base font-semibold text-gray-900">I thought I paid for traffic school at the court?</h3>
                  <div class="text-gray-500 text-base">We hate to deliver bad news, but here it is. There are 3 fees you pay
                    <ul>
                      <li>1. The fine or bail amount. This is for the violation</li>
                      <li>2. Traffic School or Court Administration fee. Usually $50-$100. This fee goes to the Court and simply makes you eligible for traffic school.</li>
                      <li>3. Our Fee is last. We are not associated with the court nor DMV. All Schools charge a fee for the service. Sorry to deliver the bad news. But rest assured! Our fee is EXTREMELY COMPETITIVE. It's below the average cost and we provide the Fastest, Easiest, Shortest Course allowed by DMV.</li>
                    </ul>
                  </div>
                </div>

                <div class="border-b border-gray-200 pb-5 mb-5">
                  <h3 class="pb-2 text-base font-semibold text-gray-900">What happens if i don't pass the final exam?</h3>
                  <p class="text-gray-500 text-base">Per California law you are allowed 2 attempts to pass the final exam with a score of 70% or greater. (We know, it’s ridiculous) Good news is, we offer a "Pass Guarantee”.</p>
                </div>

                <div class="pb-5 mb-5">
                  <h3 class="pb-2 text-base font-semibold text-gray-900">Do I have to complete the course in one sitting or all at one time?</h3>
                  <p class="text-gray-500 text-base">No, this is a self paced course. Enjoy 24/7 365 unlimited access. We even track and save your progress for you IF you forget to.</p>
                </div>

                 <div class="pb-5 mb-5">
                  <h3 class="pb-2 text-base font-semibold text-gray-900">How do I get a certificate?</h3>
                  <p class="text-gray-500 text-base">We send the DMV & Court an electronic certificate filing for FREE! You can download your FREE PDF copy upon completion.</p>
                </div>

                <div class="pb-5 mb-5">
                  <h3 class="pb-2 text-base font-semibold text-gray-900">How long is the course?</h3>
                  <p class="text-gray-500 text-base">6 short chapters, 25 question final exam. That's it!</p>
                </div>

                <div class="pb-5 mb-5">
                  <h3 class="pb-2 text-base font-semibold text-gray-900">What's a passing score?</h3>
                  <p class="text-gray-500 text-base">70% or better, it's that simple!</p>
                </div>

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Side Panel -->

<style>

button:disabled {
  opacity: .5;
  cursor: not-allowed;
}
.progress-bar {
  width: 0%;
  transition: all .3s ease;
}
.progress-bar.step-01 {
  width: 33%;
}
.progress-bar.step-02 {
  width: 66%;
}
.progress-bar.step-03 {
  width: 100%;
}

html, body {
  min-height: calc(100vh - .5rem);
  font-family: 'Poppins', sans-serif;
  background: #f9fafb;
}

.rec {
  position: absolute;
  right: 1rem;
  padding: 4px 8px;
}
.mb-7 {
  margin-bottom: 2rem;
}
fieldset {
  transition: all .3s ease;
  visibility: visible;
}
fieldset.hidden-fieldset {
  opacity: 0;
  transform: translateY(-45px);
  pointer-events: none;
  position: relative;
  display: none;
  visibility: hidden;
}

nav, footer, .footer-text {
  display: none !important;
}

@media(max-width: 980px) {
  lottie-player {
    width: 85px !important;
    height: 85px !important;
    margin: 0 auto;
  }
}

.flag-img {
  height: 90px;
  width: 160px;
}

input[type="radio"] {
  min-width: 16px !important;
  min-height: 16px !important;
}

#chat-widget, #chat-widget-container {
  display: none!important;
}

.slide-visible {
  overflow-y: hidden;
}
.slide-panel {
  pointer-events: none;
  z-index: 99999999999 !important;
}
.slide-visible .slide-panel {
  pointer-events: auto;
}
.slide-backdrop {
  opacity: 0;
}
.slide-visible .slide-backdrop {
  opacity: 1;
}
.slide-container {
  right: -100%;
}
.slide-visible .slide-container {
  right: 0;
}

@media(max-width: 992px) {
  .req, .rec {
    width: 100%;
    text-align: center;
    border-radius: 0;
    top: -24px;
    right: 0 !important;
    font-size: 12px !important;
    border-top-right-radius: 6px;
    border-top-left-radius: 6px;
  }
}

header.header__01, header.header__02, header.header__03, .cta-one, .cta-two, .topbar, #header, #footer {
  display: none !important;
}

.bg-primary {
  background-color: #000;
}
.text-primary {
  color: #000;
}

</style>

<script>

  jQuery(document).ready(function($) {

    $('.faq-button, .close-slide').click(function(e) {
      e.preventDefault();
      $('body').toggleClass('slide-visible');
    });

    $('.slide-trigger-close').click(function(e) {
      e.preventDefault();
      $('body').removeClass('slide-visible');
    });

    $('input[name=passing-setting]').change(function(e) {
      $('fieldset[data-step="01"] .next-button').removeAttr("disabled");
      $s1 = $(this).val();
    });

    $('input[name=cert-setting]').change(function(e) {
      $('fieldset[data-step="02"] .next-button').removeAttr("disabled");
      $s2 = $(this).val();
    });

    $('input[name=guaranteed-setting]').change(function(e) {
      $('fieldset[data-step="03"] .next-button').removeAttr("disabled");
      $s3 = $(this).val();
    });

    $('fieldset[data-step="03"] .next-button').click(function(e) {

      // $s1 = Pass Guarantee
      // $s2 = Certification Method
      // $s3 = Processing Guarantee

      // None
      if($s1 == 'no' && $s2 == 'no' && $s3 == 'no') { packageID = '1'; }
      // Pass Guarantee Only
      if($s1 == 'yes' && $s2 == 'no' && $s3 == 'no') { packageID = '18'; }
      // Pass Guarantee + DMV Process 
      if($s1 == 'yes' && $s2 == 'yes' && $s3 == 'no') { packageID = '19'; }
      // Pass Guarantee + Dmv Process + In A Hurry
      if($s1 == 'yes' && $s2 == 'yes' && $s3 == 'yes') { packageID = '20'; }
      // Pass Guarantee + In A Hurry
      if($s1 == 'yes' && $s2 == 'no' && $s3 == 'yes') { packageID = '21'; }
      // Cert Inly
      if($s1 == 'no' && $s2 == 'yes' && $s3 == 'no') { packageID = '22'; }
      // Dmv Process + In A Hurry
      if($s1 == 'no' && $s2 == 'yes' && $s3 == 'yes') { packageID = '23'; }
      // Dmv Process + In A Hurry
      if($s1 == 'no' && $s2 == 'no' && $s3 == 'yes') { packageID = '24'; }
      
    });

    $('fieldset[data-step="03"] .next-button').click(function(e) {
      e.preventDefault();
      console.log(packageID);
      idURL = window.location.origin + '/payment?id=' + packageID;
     // alert(idURL);
      window.location.href = idURL;
    });


    // Add step 01 by default
    $('.progress-bar').addClass('step-01');


    $('fieldset[data-step="01"] .next-button').click(function(e) {
      e.preventDefault();
      $('fieldset[data-step="01"]').addClass('hidden-fieldset');
      $('.progress-bar').addClass('step-02');
      $('fieldset[data-step="02"]').removeClass('hidden-fieldset');
      
      window.scroll({top: $('.course-options').offset().top - 20, behavior: "smooth"});

    });

    $('fieldset[data-step="02"] .prev-button').click(function(e) {
      e.preventDefault();
      $('fieldset[data-step="02"]').addClass('hidden-fieldset');
      $('.progress-bar').removeClass('step-02');
      $('.progress-bar').addClass('step-01');
      $('fieldset[data-step="01"]').removeClass('hidden-fieldset');
      
      window.scroll({top: $('.course-options').offset().top - 20, behavior: "smooth"});

    });

    $('fieldset[data-step="02"] .next-button').click(function(e) {
      e.preventDefault();
      $('fieldset[data-step="02"]').addClass('hidden-fieldset');
      $('.progress-bar').addClass('step-03');
      $('fieldset[data-step="03"]').removeClass('hidden-fieldset');
      
      window.scroll({top: $('.course-options').offset().top - 20, behavior: "smooth"});

    });

    $('fieldset[data-step="03"] .prev-button').click(function(e) {
      e.preventDefault();
      $('fieldset[data-step="03"]').addClass('hidden-fieldset');
      $('.progress-bar').removeClass('step-03');
      $('.progress-bar').addClass('step-02');
      $('fieldset[data-step="02"]').removeClass('hidden-fieldset');
      
      window.scroll({top: $('.course-options').offset().top - 20, behavior: "smooth"});
      
    });
 
  });

</script>

<?php get_footer(); ?>
