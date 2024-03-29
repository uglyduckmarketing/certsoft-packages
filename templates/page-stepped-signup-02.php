<?php /* Template Name: Stepped Traffic Signup v2 */ ?>

<?php get_header(); ?>

<?php include plugin_dir_path(__FILE__) . 'headers/header-01.php'; ?>

<?php if( have_rows('school_information', 'options') ) : while( have_rows('school_information', 'options') ): the_row(); ?>
<?php if(get_sub_field('license_number')) : ?>
<?php $license_number = get_sub_field('license_number'); ?>
<?php endif; ?>
<?php endwhile; endif; ?>

<button class="mt-12 course-options faq-button bg-white py-2 px-4 border b-4 border-gray-600 rounded-full text-sm flex gap-1 content-center text-gray-600 font-medium md:mb-0 mx-auto z-50 slide-trigger fixed bottom-6 right-8">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="-ml-1.5 w-5 h-5 text-gray-500">
    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
  </svg>
  <span>Have Questions?</span>
</button>

<section class="grid grid-cols-12 md:gap-6 mx-auto max-w-6xl">

<div class="col-span-12 md:col-span-3 lg:order-2 md:pt-12">
  <div class="p-4 md:rounded-md border border-gray-150 md:shadow-sm sticky md:top-6 w-full">
    <img src="https://www.ca.gov/images/logo-and-bear.png" class="p-1 md:p-3 h-12 md:h-20 w-auto md:mx-auto object-contain" />

    <div>
      <div class="grid gap-2 mb-2 mt-4">
        <div class="text-base font-semibold text-gray-700 leading-5 tracking-tight">This Course is California Traffic School for CA Traffic Tickets.</div>
      </div>
      <div class="text-sm text-gray-500">Licensed by the DMV #<?php echo $license_number; ?>. We've helped over 200,000 drivers mask their traffic ticket.</div>
    </div>

      <div class="flow-root">
        <ul role="list" class="mt-5 mb-5">


          <li>
            <div class="relative pb-5">
              <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
              <div class="relative flex space-x-3 items-center">
                <div>
                  <span class="h-8 w-8 rounded-full bg-white flex items-center justify-center ring-8 ring-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-400">
                      <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5Zm6.61 10.936a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                      <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                    </svg>
                  </span>
                </div>
                <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                  <div>
                    <p class="text-sm text-gray-500"><span class="font-medium text-gray-900">FREE</span> Electronic Certificate Submission to Court & DMV.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="relative pb-5">
              <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
              <div class="relative flex space-x-3 items-center">
                <div>
                  <span class="h-8 w-8 rounded-full bg-white flex items-center justify-center ring-8 ring-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-400">
                      <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                    </svg>
                  </span>
                </div>
                <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                  <div>
                    <p class="text-sm text-gray-500"><span class="font-medium text-gray-900">Open-book</span> 25 Question Final Exam.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="relative pb-5">
              <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
              <div class="relative flex space-x-3 items-center">
                <div>
                  <span class="h-8 w-8 rounded-full bg-white flex items-center justify-center ring-8 ring-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-400">
                      <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875Zm5.845 17.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V12a.75.75 0 0 0-1.5 0v4.19l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z" clip-rule="evenodd" />
                      <path d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z" />
                    </svg>
                  </span>
                </div>
                <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                  <div>
                    <p class="text-sm text-gray-500"><span class="font-medium text-gray-900">FREE</span> Certificate PDF Download.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="relative">
              <div class="relative flex space-x-3 items-center">
                <div>
                  <span class="h-8 w-8 rounded-full bg-white flex items-center justify-center ring-8 ring-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-400">
                      <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </div>
                <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                  <div>
                    <p class="text-sm text-gray-500"><span class="font-medium text-gray-900">Only</span> 6 Short And Easy Chapters.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>


        </ul>
      </div>


  </div>
</div>

<div class="col-span-12 md:col-span-9">

<!-- Fields 01 -->
<fieldset id="fields-01" class="max-w-4xl mx-auto mb-4 md:mt-12 bg-white md:border border-gray-150 md:rounded-lg md:shadow-sm p-5 block active-field relative">
  <div class="container flex gap-2 items-center">
    <span class="text-gray-700 text-sm font-semibold w-10 h-10 rounded-full grid items-center justify-center bg-white border-2 step-number">1</span>
    <span class="finished bg-green-400 text-white p-1 rounded-full border-4 border-opacity-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
      </svg>
    </span>
    <h2 class="text-base font-semibold leading-6 text-gray-900 block">Pass Guarantee Offer</h2>
    <div class="ml-auto mr-6 text-xs font-medium text-gray-500 flex hidden mt-1 gap-2 items-center guarantee-check pr-6 pointer-events-none">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-500 -mt-0.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
      </svg>
      <span>Pass Guarantee Added</span>
    </div>
    <button class="edit-fields edit-fields-01 absolute right-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
    </svg>
    </button>
  </div>

  <div class="p-2 md:p-4 mt-4 rounded-md border bg-gray-50 border-gray-150 fieldset-container">
    <div class="grid md:grid-cols-2 gap-3">

    <!-- Step 01 Yes -->
    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 focus:outline-none col-span-2" id="field-01-button">
      <input type="radio" name="guarantee-type" value="yes" class="sr-only" aria-labelledby="guarantee-yes" aria-describedby="guarantee-yes">
      <div class="grid md:flex items-start p-2 gap-6">
        <div class="block relative">
          <img src="https://hatchingbigideas.com/certsoft/wp-content/uploads/2024/02/drivers-icon-03.png" class="bg-white rounded-full border-4 border-gray-100 w-20 md:w-96 h-auto object-contain object-center" />
        </div>
        <div class="grid gap-2">
          <div class="flex items-center gap-4 w-full">
            <h3 class="py-0 my-0 font-semibold text-gray-900 text-lg tracking-tight">Add Our Pass <span class="text-primary">Guarantee</span>.</h3>
            <span class="inline-flex items-center gap-x-1.5 rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">
              Recommended
            </span>
            <span class="md:inline-block top-8 right-8 md:top-0 md:right-0 md:relative ml-auto font-semibold text-gray-700 text-sm md:pr-2 price">$4.95</span>
          </div>
          <div class="mt-2">
            <div class="text-sm text-gray-500 mb-4 md:pr-8 leading-6">Take the stress out of traffic school with our “pass guarantee”! DMV law only allows you 2 tries to pass the final. With our guarantee we will reset your account, so you can try again and again for <strong>FREE!</strong></div>
            <div class="mt-4">
              <div class="grid md:flex gap-2 md:gap-6 w-full md:justify-end items-center leading">
                <div>
                  <div class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2" role="switch" aria-checked="false">
                    <span class="sr-only">Use setting</span>
                    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                    <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                  </div>
                </div>
                <div class="bg-primary hover:bg-black text-white text-sm font-semibold py-2 px-4 rounded-md hover:cursor-pointer inline-flex gap-2 items-center justify-center">
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
        <span class="text-gray-700 bg-white py-2 px-4 rounded-md border boreder-gray-200 transition-all duration-300 hover:text-white hover:bg-gray-900 text-sm font-semibold p-2 my-2 md:my-1 inline-block">No Thanks, I'll Risk It.</span>
      </span>
    </label>
    <!-- End Step 01 No -->

    </div>
  </div>
</fieldset>

<!-- End Fields 01 -->

<!-- Fields 02 -->

<fieldset id="fields-02" class="max-w-4xl mx-auto md:mb-4 md:mt-4 bg-white border-t md:border border-gray-150 md:rounded-lg md:shadow-sm p-5 block relative">

  <div class="container flex gap-2 items-center">
    <span class="text-gray-700 text-sm font-semibold w-10 h-10 rounded-full grid items-center justify-center bg-white border-2 step-number">2</span>
    <span class="finished bg-green-400 text-white p-1 rounded-full border-4 border-opacity-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
      </svg>
    </span>
    <h2 class="text-base font-semibold leading-6 text-gray-900 block">Certification Method</h2>
    <div class="ml-auto mr-6 text-xs font-medium text-gray-500 flex hidden mt-1 gap-2 items-center processing-check pr-6 pointer-events-none">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-500 -mt-0.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
      </svg>
      <span>DMV Processing Added</span>
    </div>
    <button class="edit-fields edit-fields-02 absolute right-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
      </svg>
    </button>
  </div>

  <div class="bg-gray-50 p-2 md:p-4 mt-4 rounded-md border border-gray-150 fieldset-container">

    <div class="grid md:grid-cols-2 gap-3">

    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 focus:outline-none col-span-2" id="field-02-button">
      <input type="radio" name="certification-type" value="yes" class="sr-only" aria-labelledby="certification-yes" aria-describedby="certification-yes">

      <div class="grid md:flex items-start p-2 gap-6">
        <div class="block relative">
          <img src="https://hatchingbigideas.com/certsoft/wp-content/uploads/2024/02/drivers-icon-02.png" class="bg-white rounded-full border-4 border-gray-100 w-20 md:w-96 h-auto object-contain object-center" />
        </div>
        <div class="grid gap-2">
          <div class="flex items-center gap-4 w-full">
            <h3 class="py-0 my-0 font-semibold text-gray-900 text-lg tracking-tight">DMV Processed Verification.</h3>
            <span class="inline-flex items-center gap-x-1.5 rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">
              Recommended
            </span>
            <span class="md:inline-block top-8 right-8 md:top-0 md:right-0 md:relative ml-auto font-semibold text-gray-700 text-sm md:pr-2 price">$3.95</span>
          </div>
          <div class="mt-2">

            <div class="text-sm text-gray-500 mb-4 md:pr-8 leading-6">Our team verifies that your ticket gets masked! We monitor your ticket and confirm that it gets processed to both the DMV and Court. We will email you a confirmation number once processed.</div>

            <div class="mt-4">
              <div class="grid md:flex gap-2 md:gap-6 w-full md:justify-end items-center leading">
                <div>
                  <div class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2" role="switch" aria-checked="false">
                    <span class="sr-only">Use setting</span>
                    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                    <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                  </div>
                </div>

                <div class="bg-primary hover:bg-black text-white text-sm font-semibold py-2 px-4 rounded-md hover:cursor-pointer inline-flex gap-2 items-center justify-center">
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
        <span class="text-gray-700 bg-white py-2 px-4 rounded-md border boreder-gray-200 transition-all duration-300 hover:text-white hover:bg-gray-900 text-sm font-semibold p-2 my-2 md:my-1 inline-block">No thanks, I'll monitor it on my own time.</span>
      </span>
    </label>

    </div>
  </div>
</fieldset>

<!-- End Fields 02 -->

<!-- Fields 03 -->

<fieldset id="fields-03" class="max-w-4xl mx-auto md:mb-4 md:mt-4 bg-white border border-gray-150 md:rounded-lg md:shadow-sm p-5 block">

  <div class="container flex gap-2 items-center">
    <span class="text-gray-700 text-sm font-semibold w-10 h-10 rounded-full grid items-center justify-center bg-white border-2 step-number">3</span>
    <span class="finished bg-green-400 text-white p-1 rounded-full border-4 border-opacity-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
      </svg>
    </span>
    <h2 class="text-base font-semibold leading-6 text-gray-900 block">Processing Method</h2>
  </div>

    <div class="bg-gray-50 p-2 md:p-4 mt-4 rounded-md border border-gray-150 fieldset-container">

    <div class="grid md:grid-cols-2 gap-3">

    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 focus:outline-none col-span-2" id="field-03-button">
      <input type="radio" name="processing-type" value="yes" class="sr-only" aria-labelledby="processing-yes" aria-describedby="processing-yes">

      <div class="grid md:flex items-start p-2 gap-6">
        <div class="block relative">
          <img src="https://hatchingbigideas.com/certsoft/wp-content/uploads/2024/02/drivers-icon-01.png" class="bg-white rounded-full border-4 border-gray-100 w-20 md:w-96 h-auto object-contain object-center" />
        </div>
        <div class="grid gap-2">
          <div class="flex items-center gap-4 w-full">
            <h3 class="py-0 my-0 font-semibold text-gray-900 text-lg tracking-tight"><span class="text-primary">Instant Processing!</span> DMV &amp; Court.</h3>
            <span class="inline-flex items-center gap-x-1.5 rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">
              Recommended
            </span>
            <span class="md:inline-block top-8 right-8 md:top-0 md:right-0 md:relative ml-auto font-semibold text-gray-700 text-sm md:pr-2 price">$9.95</span>
          </div>
          <div class="mt-2">

            <div class="text-sm text-gray-500 mb-4 md:pr-8 leading-6">We will process your certificate instantly 24/7 365 days a year. We recommend this options due to the inefficiencies at the Court/DMV level we have seen in our 24 years of experience.</div>

            <div class="mt-4">
              <div class="grid md:flex gap-2 md:gap-6 w-full md:justify-end items-center leading">
                <div>
                  <div class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2" role="switch" aria-checked="false">
                    <span class="sr-only">Use setting</span>
                    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                    <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                  </div>
                </div>

                <div class="bg-primary hover:bg-black text-white text-sm font-semibold py-2 px-4 rounded-md hover:cursor-pointer inline-flex gap-2 items-center justify-center">
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
        <span class="text-gray-700 bg-white py-2 px-4 rounded-md border boreder-gray-200 transition-all duration-300 hover:text-white hover:bg-gray-900 text-sm font-semibold p-2 my-2 md:my-1 inline-block">No rush, I'll stick with standard processing.</span>
      </span>
    </label>

    </div>
  </div>
</fieldset>

<!-- End Fields 03 -->

<div class="max-w-4xl mx-auto md:my-4 bg-white border border-gray-150 md:rounded-lg md:shadow-sm p-5 block cursor-not-allowed md:mb-12">
  <div class="container flex gap-2 items-center">
    <span class="text-gray-700 text-sm font-semibold w-10 h-10 rounded-full grid items-center justify-center bg-white border-2 step-number">4</span>
    <h2 class="text-base font-semibold leading-6 text-gray-900 opacity-50 flex gap-2 items-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 -mt-0.5">
  <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
      <span>Secure Checkout Page</span>
    </h2>
</svg>
</h2>
  </div>
</div>

</div>
</section>

<?php include plugin_dir_path(__FILE__) . 'side-panel.php'; ?>


<div class="bg-white pb-12 pt-6">
  <h2 class="sr-only">Why you should buy from us</h2>
  <div class="flex mx-auto max-w-6xl py-6 md:py-0">
    <div class="mx-auto grid gap-0 md:gap-12  md:flex px-4 py-3 sm:px-6 lg:px-8 w-full">
      <div class="flex items-start text-sm font-medium text-primary gap-2 pt-4 w-full md:pr-8 md:pt-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-6 w-6 flex-none mt-0.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
        </svg>
        <p class="text-gray-600">Secure SSL Payments <span class="block text-xs text-gray-400 mt-1">All payments are processed securely with military grade SSL encryption.</span></p>
      </div>
      <div class="flex items-start text-sm font-medium text-primary gap-2 pt-4 w-full md:pr-8 md:pt-0">
        <svg class="mr-2 h-6 w-6 flex-none mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
        </svg>
        <p class="text-gray-600">Pass Guarantee Option <span class="block text-xs text-gray-400 mt-1">Choose our pass guarantee for an added piece of mind.</span></p>
      </div>
      <div class="flex items-start text-sm font-medium text-primary gap-2 pt-4 w-full md:pr-8 md:pt-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-6 w-6 flex-none mt-0.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
        </svg>
        <p class="text-gray-600">CA DMV Licensed <span class="block text-xs text-gray-400 mt-1">Our course is licensed with the California DMV. License #<?php echo $license_number; ?></span></p>
      </div>
    </div>
  </div>
</div>



<style>
  header.header__01, header.header__02, header.header__03, footer, .cta-one, .cta-two, .cta-three {
    display: none !important;
  }
  html, body {
    background: #ffffff;
    border-bottom: none !important;
    padding-bottom: 0 !important;
    font-family: 'Inter', sans-serif;
  }
  .container {
    width: auto;
    max-width: 100%;
    padding-left: 0;
    padding-right: 0;
    margin: 0 auto;
    position: relative;
  }

  @media (min-width: 640px) {
    .container {
        max-width: 640px;
    }
  }
  @media (min-width: 768px) {
    .container {
        max-width: 768px;
    }
  }
  @media (min-width: 1024px) {
    .container {
        max-width: 1024px;
    }
  }
  @media (min-width: 1280px) {
    .container {
        max-width: 1280px;
    }
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
  .info-iconX {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 25px;
    height: 25px;
    opacity: .65;
  }

  @media (min-width: 768px) {
    .md\:w-96 {
      width: 9rem;
      min-width: 9rem;
    }
  }
  @media(max-width: 992px) {
    .guarantee-check span, .processing-check span {
      display: none;
    }
    .price {
      position: absolute;
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
        if(radio.checked) {
          radio.parentNode.classList.add('selected');
        } else {
          radio.parentNode.classList.remove('selected');
        }
      });
      e.target.parentNode.classList.add('selected');
    });
  });

  document.querySelectorAll('#field-01-button').forEach((button) => {
    button.addEventListener('click', (e) => {
      setTimeout(() => {
        const $s1 = document.querySelector('input[name="guarantee-type"]:checked').value;
        document.getElementById('fields-01').classList.remove('active-field');
        document.getElementById('fields-01').classList.add('completed-field');
        document.getElementById('fields-02').classList.add('active-field');
        if($s1 == 'yes') {
          document.querySelector('.guarantee-check').classList.remove('hidden');
        } else {
          document.querySelector('.guarantee-check').classList.add('hidden');
        }
      }, timeout = 600);
    });
  });

  document.querySelectorAll('#field-02-button').forEach((button) => {
    button.addEventListener('click', (e) => {
      setTimeout(() => {
        const $s2 = document.querySelector('input[name="certification-type"]:checked').value;
        document.getElementById('fields-02').classList.remove('active-field');
        document.getElementById('fields-02').classList.add('completed-field');
        document.getElementById('fields-03').classList.add('active-field');
        if($s2 == 'yes') {
          document.querySelector('.processing-check').classList.remove('hidden');
        } else {
          document.querySelector('.processing-check').classList.add('hidden');
        }
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

        // window.location.href = '/payment/?id=' + packageID;
        window.location.href = '/course/?view=signup&registration=discount&validation_code=' + packageID;

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
