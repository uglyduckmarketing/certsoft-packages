<?php /* Template Name: Stepped Traffic Signup v2 */ ?>

<?php get_header(); ?>

<?php include plugin_dir_path(__FILE__) . 'headers/header-01.php'; ?>

<button class="mt-12 course-options faq-button bg-white py-2 px-4 border b-4 border-gray-600 rounded-full text-sm flex gap-1 content-center text-gray-600 font-medium md:mb-0 mx-auto z-50 slide-trigger fixed bottom-6 right-8">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="-ml-1.5 w-5 h-5 text-gray-500">
    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
  </svg>
  <span>Have Questions?</span>
</button>

<!-- Fields 01 -->
<fieldset id="fields-01" class="max-w-4xl mx-auto mb-4 mt-12 bg-white border border-gray-150 rounded-lg shadow-sm p-5 block active-field relative">
  <div class="container flex gap-2 items-center">
    <span class="text-gray-700 text-sm font-semibold w-10 h-10 rounded-full grid items-center justify-center bg-white border-2 step-number">1</span>
    <span class="finished bg-green-400 text-white p-1 rounded-full border-4 border-opacity-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
      </svg>
    </span>
    <h2 class="text-base font-semibold leading-6 text-gray-900 block">Pass Guarantee Offer</h2>
    <button class="edit-fields edit-fields-01 absolute right-6">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
    </svg>
    </button>
  </div>

  <div class="p-4 mt-4 rounded-md border bg-gray-50 border-gray-150 fieldset-container">
    <div class="grid md:grid-cols-2 gap-3">

    <!-- Step 01 Yes -->
    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none col-span-2" id="field-01-button">
      <input type="radio" name="guarantee-type" value="yes" class="sr-only" aria-labelledby="guarantee-yes" aria-describedby="guarantee-yes">
      <div class="grid md:flex items-start p-2 gap-6">
        <div class="block relative">
          <img src="https://hatchingbigideas.com/certsoft/wp-content/uploads/2024/02/drivers-icon-03.png" class="bg-white rounded-md w-28 md:w-96 h-auto object-contain object-center" />
        </div>
        <div class="grid gap-2">
          <div class="flex items-center gap-4 w-full">
            <h3 class="py-0 my-0 font-semibold text-gray-900 text-lg tracking-tight">Add Our Pass <span class="text-primary">Guarantee</span>.</h3>
            <span class="inline-flex items-center gap-x-1.5 rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">
              Recommended
            </span>
            <span class="ml-auto font-semibold text-gray-700 text-sm md:pr-2">$4.95</span>
          </div>
          <div class="mt-2">
            <div class="text-sm text-gray-500 mb-4 md:pr-8 leading-6">Have test anxiety or don’t want to waste valuable time? Choose our "pass guarantee" and you say goodbye to your worries. The DMV only allows you 2 attempts to pass the final exam (it's ridiculous). If you fail both we'll reset your account so you can try again for <strong>FREE!</strong></div>
            <div class="mt-4">
              <div class="flex gap-6 w-full md:justify-end items-center leading">
                <div>
                  <div class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2" role="switch" aria-checked="false">
                    <span class="sr-only">Use setting</span>
                    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                    <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                  </div>
                </div>
                <div class="bg-primary hover:bg-black text-white text-sm font-semibold py-2 px-4 rounded-md hover:cursor-pointer inline-flex gap-2 items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M9.661 2.237a.531.531 0 0 1 .678 0 11.947 11.947 0 0 0 7.078 2.749.5.5 0 0 1 .479.425c.069.52.104 1.05.104 1.59 0 5.162-3.26 9.563-7.834 11.256a.48.48 0 0 1-.332 0C5.26 16.564 2 12.163 2 7c0-.538.035-1.069.104-1.589a.5.5 0 0 1 .48-.425 11.947 11.947 0 0 0 7.077-2.75Zm4.196 5.954a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                  </svg>
                  <span>Click To Add Pass Guarantee</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </label>
    <!-- End Step 01 Yes -->

    <!-- Step 01 No -->
    <label class="relative cursor-pointer focus:outline-none col-span-2 no-select" id="field-01-button">
      <input type="radio" name="guarantee-type" value="no" class="sr-only" aria-labelledby="guarantee-no" aria-describedby="project-type-0-description-0 project-type-0-description-1">
      <span class="block">
        <span class="text-gray-500 text-xs font-semibold p-2">No Thanks, I'll Risk It.</span>
      </span>
    </label>
    <!-- End Step 01 No -->

    </div>
  </div>
</fieldset>

<!-- End Fields 01 -->

<!-- Fields 02 -->

<fieldset id="fields-02" class="max-w-4xl mx-auto mb-4 mt-4 bg-white border border-gray-150 rounded-lg shadow-sm p-5 block relative">

  <div class="container flex gap-2 items-center">
    <span class="text-gray-700 text-sm font-semibold w-10 h-10 rounded-full grid items-center justify-center bg-white border-2 step-number">2</span>
    <span class="finished bg-green-400 text-white p-1 rounded-full border-4 border-opacity-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
      </svg>
    </span>
    <h2 class="text-base font-semibold leading-6 text-gray-900 block">Certification Method</h2>

    <button class="edit-fields edit-fields-02 absolute right-6">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
      </svg>
    </button>
  </div>

  <div class="bg-gray-50 p-4 mt-4 rounded-md border border-gray-150 fieldset-container">

    <div class="grid md:grid-cols-2 gap-3">

    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none col-span-2" id="field-02-button">
      <input type="radio" name="certification-type" value="yes" class="sr-only" aria-labelledby="certification-yes" aria-describedby="certification-yes">

      <div class="grid md:flex items-start p-2 gap-6">
        <div class="block relative">
          <img src="https://hatchingbigideas.com/certsoft/wp-content/uploads/2024/02/drivers-icon-02.png" class="bg-white rounded-md w-28 md:w-96 h-auto object-contain object-center" />
        </div>
        <div class="grid gap-2">
          <div class="flex items-center gap-4 w-full">
            <h3 class="py-0 my-0 font-semibold text-gray-900 text-lg tracking-tight">Add DMV Processed Verification.</h3>
            <span class="inline-flex items-center gap-x-1.5 rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">
              Recommended
            </span>
            <span class="ml-auto font-semibold text-gray-700 text-sm md:pr-2">$3.95</span>
          </div>
          <div class="mt-2">

            <div class="text-sm text-gray-500 mb-4 md:pr-8 leading-6">We do the heavy lifting to ensure your matter is resolved! Our heroic support staff will monitor your ticket and confirm that it was successfully processed with the DMV and Court and will email you a confirmation number.</div>

            <div class="mt-4">
              <div class="flex gap-6 w-full md:justify-end items-center leading">
                <div>
                  <div class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2" role="switch" aria-checked="false">
                    <span class="sr-only">Use setting</span>
                    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                    <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                  </div>
                </div>

                <div class="bg-primary hover:bg-black text-white text-sm font-semibold py-2 px-4 rounded-md hover:cursor-pointer inline-flex gap-2 items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M9.661 2.237a.531.531 0 0 1 .678 0 11.947 11.947 0 0 0 7.078 2.749.5.5 0 0 1 .479.425c.069.52.104 1.05.104 1.59 0 5.162-3.26 9.563-7.834 11.256a.48.48 0 0 1-.332 0C5.26 16.564 2 12.163 2 7c0-.538.035-1.069.104-1.589a.5.5 0 0 1 .48-.425 11.947 11.947 0 0 0 7.077-2.75Zm4.196 5.954a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                  </svg>
                  <span>Click To Add DMV Verification</span>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </label>

    <label class="relative cursor-pointer focus:outline-none col-span-2 no-select" id="field-02-button">
      <input type="radio" name="certification-type" value="no" class="sr-only" aria-labelledby="certification-no">
      <span class="block">
        <span class="text-gray-500 text-xs font-semibold p-2">No thanks, I'll monitor it on my own time.</span>
      </span>
    </label>

    </div>
  </div>
</fieldset>

<!-- End Fields 02 -->

<!-- Fields 03 -->

<fieldset id="fields-03" class="max-w-4xl mx-auto mb-4 mt-4 bg-white border border-gray-150 rounded-lg shadow-sm p-5 block">

  <div class="container flex gap-2 items-center">
    <span class="text-gray-700 text-sm font-semibold w-10 h-10 rounded-full grid items-center justify-center bg-white border-2 step-number">3</span>
    <span class="finished bg-green-400 text-white p-1 rounded-full border-4 border-opacity-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
      </svg>
    </span>
    <h2 class="text-base font-semibold leading-6 text-gray-900 block">Processing Method</h2>
  </div>

    <div class="bg-gray-50 p-4 mt-4 rounded-md border border-gray-150 fieldset-container">

    <div class="grid md:grid-cols-2 gap-3">

    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none col-span-2" id="field-03-button">
      <input type="radio" name="processing-type" value="yes" class="sr-only" aria-labelledby="processing-yes" aria-describedby="processing-yes">

      <div class="grid md:flex items-start p-2 gap-6">
        <div class="block relative">
          <img src="https://hatchingbigideas.com/certsoft/wp-content/uploads/2024/02/drivers-icon-01.png" class="bg-white rounded-md w-28 md:w-96 h-auto object-contain object-center" />
        </div>
        <div class="grid gap-2">
          <div class="flex items-center gap-4 w-full">
            <h3 class="py-0 my-0 font-semibold text-gray-900 text-lg tracking-tight"><span class="text-primary">In A Hurry?</span> Add Instant Processing.</h3>
            <span class="inline-flex items-center gap-x-1.5 rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">
              Recommended
            </span>
            <span class="ml-auto font-semibold text-gray-700 text-sm md:pr-2">$9.95</span>
          </div>
          <div class="mt-2">

            <div class="text-sm text-gray-500 mb-4 md:pr-8 leading-6">We will process your certificate instantly 24/7 365 days a year.We recommend this options due to the inefficiencies at the Court/DMV level we have seen in our 24 years of experience.</div>

            <div class="mt-4">
              <div class="flex gap-6 w-full md:justify-end items-center leading">
                <div>
                  <div class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2" role="switch" aria-checked="false">
                    <span class="sr-only">Use setting</span>
                    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                    <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                  </div>
                </div>

                <div class="bg-primary hover:bg-black text-white text-sm font-semibold py-2 px-4 rounded-md hover:cursor-pointer inline-flex gap-2 items-center">
                  <span>Add Processing & Proceed To Checkout</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path d="M1 1.75A.75.75 0 0 1 1.75 1h1.628a1.75 1.75 0 0 1 1.734 1.51L5.18 3a65.25 65.25 0 0 1 13.36 1.412.75.75 0 0 1 .58.875 48.645 48.645 0 0 1-1.618 6.2.75.75 0 0 1-.712.513H6a2.503 2.503 0 0 0-2.292 1.5H17.25a.75.75 0 0 1 0 1.5H2.76a.75.75 0 0 1-.748-.807 4.002 4.002 0 0 1 2.716-3.486L3.626 2.716a.25.25 0 0 0-.248-.216H1.75A.75.75 0 0 1 1 1.75ZM6 17.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM15.5 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                  </svg>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </label>

    <label class="relative cursor-pointer focus:outline-none col-span-2 no-select" id="field-03-button">
      <input type="radio" name="processing-type" value="no" class="sr-only" aria-labelledby="processing-no">
      <span class="block">
        <span class="text-gray-500 text-xs font-semibold p-2">No rush, I'll stick with standard processing.</span>
      </span>
    </label>

    </div>
  </div>
</fieldset>

<!-- End Fields 03 -->

<div class="max-w-4xl mx-auto my-4 bg-white border border-gray-150 rounded-lg shadow-sm p-5 block cursor-not-allowed mb-12">
  <div class="container flex gap-2 items-center">
    <span class="text-gray-700 text-sm font-semibold w-10 h-10 rounded-full grid items-center justify-center bg-white border-2 step-number">4</span>
    <h2 class="text-base font-semibold leading-6 text-gray-900 block opacity-50">Payment</h2>
  </div>
</div>

<?php include plugin_dir_path(__FILE__) . 'side-panel.php'; ?>


<div class="bg-white pb-12">
  <h2 class="sr-only">Our perks</h2>
  <div class="mx-auto max-w-6xl divide-y divide-gray-200 lg:flex lg:justify-center lg:divide-x lg:divide-y-0 lg:py-8">
    <div class="py-8 lg:w-1/3 lg:flex-none lg:py-0">
      <div class="mx-auto flex max-w-xs items-center px-4 lg:max-w-none lg:px-8">
        <svg class="h-8 w-8 flex-shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
        </svg>
        <div class="ml-4 flex flex-auto flex-col-reverse">
          <h3 class="font-medium text-gray-900">10-year all-inclusive warranty</h3>
          <p class="text-sm text-gray-500">We’ll replace it with a new one</p>
        </div>
      </div>
    </div>
    <div class="py-8 lg:w-1/3 lg:flex-none lg:py-0">
      <div class="mx-auto flex max-w-xs items-center px-4 lg:max-w-none lg:px-8">
        <svg class="h-8 w-8 flex-shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
        </svg>
        <div class="ml-4 flex flex-auto flex-col-reverse">
          <h3 class="font-medium text-gray-900">Free shipping on returns</h3>
          <p class="text-sm text-gray-500">Send it back for free</p>
        </div>
      </div>
    </div>
    <div class="py-8 lg:w-1/3 lg:flex-none lg:py-0">
      <div class="mx-auto flex max-w-xs items-center px-4 lg:max-w-none lg:px-8">
        <svg class="h-8 w-8 flex-shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
        </svg>
        <div class="ml-4 flex flex-auto flex-col-reverse">
          <h3 class="font-medium text-gray-900">Free, contactless delivery</h3>
          <p class="text-sm text-gray-500">The shipping is on us</p>
        </div>
      </div>
    </div>
  </div>
</div>



<style>
  html, body {
    background: #ffffff;
    border-bottom: none !important;
    padding-bottom: 0 !important;
    font-family: 'Inter', sans-serif;
  }
  h1, h2, h3, h4 {
    font-family: 'Inter', sans-serif;
  }
  h2 {
    opacity: 50%;
  }
  fieldset.active-field h2 {
    opacity: 1;
  }
  fieldset h3 {
    margin-bottom: .5rem;
    margin-top: 1rem;
  }
  label svgzzz {
    display: none;
    position: absolute;
    right: 20px;
  }
  label span {
    text-align: center;
  }
  .step-number {
    opacity: 50%;
  }
  .active-field .step-number {
    opacity: 100%;
  }
  .fieldset-container {
    display: none;
  }
  .active-field .fieldset-container {
    height: auto;
    pointer-events: auto;
    display: block;
  }
  .finished {
    display: none;
    border-width: 0;
    position: absolute;
    margin-top: -1px;
    margin-left: 10px;
    opacity: 1 !important;
  }
  .completed-field .finished {
    display: block;
  }
  .edit-fields {
    opacity: .25;
    cursor: not-allowed;
  }
  .completed-field .edit-fields {
    opacity: 1;
    cursor: pointer;
    transition: all .3s ease;
  }
  .completed-field .edit-fields:hover {
    color: #584CFB;
  }

  .no-select {
    outline: none !important;
  }

  .selected .translate-x-0 {
    transform: translateX(1.2rem);
  }


@media (min-width: 768px) {
  .md\:w-96 {
    width: 9rem;
    min-width: 9rem;
  }
}
</style>

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


  document.querySelectorAll('input[type="radio"]').forEach((radio) => {
    radio.addEventListener('change', (e) => {
      document.querySelectorAll('input[type="radio"]').forEach((radio) => {
        radio.parentNode.classList.remove('selected');
        // radio.parentNode.querySelector('svg').style.display = 'none';
      });
      e.target.parentNode.classList.add('selected');
      // e.target.parentNode.querySelector('svg').style.display = 'block';
    });
  });

  document.querySelectorAll('#field-01-button').forEach((button) => {
    button.addEventListener('click', (e) => {
      setTimeout(() => {
        document.getElementById('fields-01').classList.remove('active-field');
        document.getElementById('fields-01').classList.add('completed-field');
        document.getElementById('fields-02').classList.add('active-field');
      }, timeout = 600);
    });
  });

  document.querySelectorAll('#field-02-button').forEach((button) => {
    button.addEventListener('click', (e) => {
      setTimeout(() => {
        document.getElementById('fields-02').classList.remove('active-field');
        document.getElementById('fields-02').classList.add('completed-field');
        document.getElementById('fields-03').classList.add('active-field');
      }, timeout = 600);
    });
  });

    document.querySelectorAll('#field-03-button').forEach((button) => {
    button.addEventListener('click', (e) => {
      setTimeout(() => {
        document.getElementById('fields-03').classList.remove('active-field');
        document.getElementById('fields-03').classList.add('completed-field');

        const $s1 = document.querySelector('input[name="guarantee-type"]:checked').value;
        const $s2 = document.querySelector('input[name="certification-type"]:checked').value;
        const $s3 = document.querySelector('input[name="processing-type"]:checked').value;

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

        window.location.href = '/payment/?id=' + packageID;

      }, timeout = 600);
    });
  });

  document.querySelectorAll('.edit-fields').forEach((edit) => {
    edit.addEventListener('click', (e) => {
      document.querySelectorAll('.completed-field').forEach((field) => {
        field.classList.remove('completed-field');
        field.classList.add('active-field');
      });
    });
  });
  

</script>

<?php get_footer(); ?>
