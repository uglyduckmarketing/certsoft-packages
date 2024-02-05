<?php /* Template Name: Stepped Traffic Signup v2 */ ?>

<?php get_header(); ?>

<?php include plugin_dir_path(__FILE__) . 'headers/header-01.php'; ?>

<button class="mt-12 course-options faq-button bg-white py-2 px-4 border b-4 border-gray-600 rounded-full text-sm flex gap-1 content-center text-gray-600 font-medium md:mb-0 mx-auto z-50 slide-trigger">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="-ml-1.5 w-5 h-5 text-gray-500">
    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
  </svg>
  <span>Have Questions?</span>
</button>

<!-- Fields 01 -->

<fieldset id="fields-01" class="max-w-4xl mx-auto mb-4 mt-6 bg-white border border-gray-150 rounded-lg shadow-sm p-5 block active-field relative">

  <div class="container flex gap-2 items-center">
    <span class="text-white bg-primary text-sm font-semibold w-12 h-12 rounded-full grid items-center justify-center bg-white border-4 step-number">1</span>
    <span class="finished bg-green-400 text-white p-1 rounded-full border-4 border-opacity-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
      </svg>
    </span>
    <h2 class="text-xl font-semibold leading-6 text-gray-900 block tracking-tight">Select Your Pass Guarantee</h2>
    <button class="edit-fields edit-fields-01 absolute right-6">

      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
      </svg>

    </button>
  </div>

    <div class="p-6 mt-4 rounded-md border bg-gray-50 border-gray-150 fieldset-container">

      <div class="container">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 tracking-tight">Pass Guarantee Options</h2>
        <p class="text-gray-700 mr-0 md:mr-6 text-base">Have test anxiety or don’t want to waste valuable time? Choose our "pass guarantee" and you say goodbye to your worries. The DMV only allows you 2 attempts to pass the final exam (it's ridiculous). If you fail both we'll reset your account so you can try again for <strong>FREE!</strong></p>
      </div>

    <div class="grid md:grid-cols-2 gap-3 mt-6">

    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none">
      <input type="radio" name="guarantee-type" value="no" class="sr-only" aria-labelledby="guarantee-no" aria-describedby="project-type-0-description-0 project-type-0-description-1">
      <span class="flex flex-1">
        <span class="flex flex-col justify-center items-center content-center w-full">
          <h3 id="guarantee-no" class="block text-2xl font-semibold text-gray-900 tracking-tight">No Thanks.</h3>
          <span id="project-type-0-description-0" class="flex items-center text-sm text-gray-500">I’ll risk it and possibly upgrade later.</span>
          <span id="project-type-1-description-1" class="mt-6 text-xs font-medium text-gray-400">Not Recommended</span>
        </span>
      </span>
      <svg class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
      </svg>
    </label>

    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none">
      <input type="radio" name="guarantee-type" value="yes" class="sr-only" aria-labelledby="guarantee-yes" aria-describedby="guarantee-yes project-type-1-description-1">
      <span class="flex flex-1">
        <span class="flex flex-col justify-center items-center content-center w-full">
          <h3 id="project-type-1-label" class="block text-2xl font-semibold text-gray-900 tracking-tight"><span class="text-primary">Yes!</span> Guarantee I'll Pass.</h3>
          <span id="guarantee-yes" class="mt-1 flex items-center text-sm text-gray-500">Unlock unlimited course attempts.</span>
          <span id="project-type-1-description-1" class="mt-6 text-base font-medium text-gray-700 italic tracking-tight">+$4.95</span>
        </span>
      </span>
      <svg class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
      </svg>
    </label>

    <div class="items-end justify-end mt-2 text-right col-span-2">
      <button id="field-01-button" class="rounded-full bg-primary text-white py-3 px-6 text-sm font-semibold">Next Step</button>
    </div>

    </div>
  </div>
</fieldset>

<!-- End Fields 01 -->

<!-- Fields 02 -->

<fieldset id="fields-02" class="max-w-4xl mx-auto mb-4 mt-4 bg-white border border-gray-150 rounded-lg shadow-sm p-5 block relative">

  <div class="container flex gap-2 items-center">
    <span class="text-white bg-primary text-sm font-semibold w-12 h-12 rounded-full grid items-center justify-center bg-white border-4 step-number">2</span>
    <span class="finished bg-green-400 text-white p-1 rounded-full border-4 border-opacity-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
      </svg>
    </span>
    <h2 class="text-xl font-semibold leading-6 text-gray-900 block tracking-tight">Select Your Certification Method</h2>

    <button class="edit-fields edit-fields-02 absolute right-6">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
      </svg>
    </button>

  </div>

    <div class="bg-gray-50 p-6 mt-4 rounded-md border border-gray-150 fieldset-container">

      <div class="container">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 tracking-tight">Certificate Options</h2>
        <p class="text-gray-700 mr-0 md:mr-6 text-base">We will send you an email upon completion of our course. However, we recommend the following options due to the inefficiencies at the Court/DMV level we have seen in our 24 years of experience.</p>
      </div>

    <div class="grid md:grid-cols-2 gap-3 mt-6">

    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none">
      <input type="radio" name="certification-type" value="no" class="sr-only" aria-labelledby="certification-no" aria-describedby="certification-type project-type-0-description-1">
      <span class="flex flex-1">
        <span class="flex flex-col justify-center items-center content-center w-full">
          <h3 id="certification-no" class="block text-2xl font-semibold text-gray-900 tracking-tight">I'll monitor it on my own time.</h3>
          <span id="certification-tpye" class="flex items-center text-sm text-gray-500">Be sure you contact your court 3 weeks after completion. You can upgrade later should you wish.</span>
          <span class="mt-6 text-xs font-medium text-gray-400">Not Recommended</span>
        </span>
      </span>
      <svg class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
      </svg>
    </label>

    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none">
      <input type="radio" name="certification-type" value="yes" class="sr-only" aria-labelledby="certification-yes" aria-describedby="certification-yes">
      <span class="flex flex-1">
        <span class="flex flex-col justify-center items-center content-center w-full">
          <h3 id="project-type-1-label" class="block text-2xl font-semibold text-gray-900 tracking-tight">DMV Processed Verification.</h3>
          <span id="guarantee-yes" class="mt-1 flex items-center text-sm text-gray-500">We do the heavy lifting to ensure your matter is resolved! Our heroic support staff will monitor your ticket and confirm that it was successfully processed with the DMV and Court and will email you a confirmation number.</span>
          <span class="mt-6 text-base font-medium text-gray-700 italic tracking-tight">+$3.95</span>
        </span>
      </span>
      <svg class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
      </svg>
    </label>

    <div class="items-end justify-end mt-2 text-right col-span-2">
      <button id="field-02-button" class="rounded-full bg-primary text-white py-3 px-6 text-sm font-semibold">Next Step</button>
    </div>

    </div>
  </div>
</fieldset>

<!-- End Fields 02 -->

<!-- Fields 03 -->

<fieldset id="fields-03" class="max-w-4xl mx-auto mb-4 mt-4 bg-white border border-gray-150 rounded-lg shadow-sm p-5 block">

  <div class="container flex gap-2 items-center">
    <span class="text-white bg-primary text-sm font-semibold w-12 h-12 rounded-full grid items-center justify-center bg-white border-4 step-number">3</span>
    <span class="finished bg-green-400 text-white p-1 rounded-full border-4 border-opacity-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
      </svg>
    </span>
    <h2 class="text-xl font-semibold leading-6 text-gray-900 block tracking-tight">Select Your Processing Method</h2>
  </div>

    <div class="bg-gray-50 p-6 mt-4 rounded-md border border-gray-150 fieldset-container">

      <div class="container">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 tracking-tight">Certificate Options</h2>
        <p class="text-gray-700 mr-0 md:mr-6 text-base">We will send you an email upon completion of our course. However, we recommend the following options due to the inefficiencies at the Court/DMV level we have seen in our 24 years of experience.</p>
      </div>

    <div class="grid md:grid-cols-2 gap-3 mt-6">

    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none">
      <input type="radio" name="processing-type" value="no" class="sr-only" aria-labelledby="processing-no" aria-describedby="processing-type">
      <span class="flex flex-1">
        <span class="flex flex-col justify-center items-center content-center w-full">
          <h3 class="block text-2xl font-semibold text-gray-900 tracking-tight">Standard Processing - No Rush</h3>
          <span class="flex items-center text-sm text-gray-500">We will process your certificate within 3 business days after completion.</span>
          <span class="mt-6 text-xs font-medium text-gray-400">Not Recommended</span>
        </span>
      </span>
      <svg class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
      </svg>
    </label>

    <label class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none">
      <input type="radio" name="processing-type" value="yes" class="sr-only" aria-labelledby="processing-yes" aria-describedby="processing-yes">
      <span class="flex flex-1">
        <span class="flex flex-col justify-center items-center content-center w-full">
          <h3 class="block text-2xl font-semibold text-gray-900 tracking-tight"><span class="text-primary">In A Hurry!</span>
Instant Processing.</h3>
          <span id="processing-yes" class="mt-1 flex items-center text-sm text-gray-500">We will process your certificate instantly 24/7 365 days a year.</span>
          <span class="mt-6 text-base font-medium text-gray-700 italic tracking-tight">+$9.95</span>
        </span>
      </span>
      <svg class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
      </svg>
    </label>

    <div class="items-end justify-end mt-2 text-right col-span-2">
      <button id="field-03-button" class="rounded-full bg-primary text-white py-3 px-6 text-sm font-semibold">Proceed To Payment</button>
    </div>

    </div>
  </div>
</fieldset>

<!-- End Fields 03 -->

<div class="max-w-4xl mx-auto my-4 bg-white border border-gray-150 rounded-lg shadow-sm p-5 block cursor-not-allowed mb-16">
  <div class="container flex gap-2 items-center">
    <span class="text-white bg-primary text-sm font-semibold w-12 h-12 rounded-full grid items-center justify-center bg-white border-4 opacity-50">4</span>
    <h2 class="text-xl font-semibold leading-6 text-gray-900 block tracking-tight opacity-50">Payment</h2>
  </div>
</div>

<?php include plugin_dir_path(__FILE__) . 'side-panel.php'; ?>

<style>
  html, body {
    background: #F9FAFB;
    border-bottom: none !important;
    padding-bottom: 0 !important;
  }
  body {
    padding-bottom: 4rem;
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
  label svg {
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
    border-width: 2px;
    position: absolute;
    margin-top: -34px;
    margin-left: 30px;
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

</style>

<script>
  document.querySelectorAll('input[type="radio"]').forEach((radio) => {
    radio.addEventListener('change', (e) => {
      document.querySelectorAll('input[type="radio"]').forEach((radio) => {
        radio.parentNode.classList.remove('selected');
        radio.parentNode.querySelector('svg').style.display = 'none';
      });
      e.target.parentNode.classList.add('selected');
      e.target.parentNode.querySelector('svg').style.display = 'block';
    });
  });

  document.getElementById('field-01-button').addEventListener('click', (e) => {
    document.getElementById('fields-01').classList.remove('active-field');
    document.getElementById('fields-01').classList.add('completed-field');
    document.getElementById('fields-02').classList.add('active-field');
  });

  document.getElementById('field-02-button').addEventListener('click', (e) => {
    document.getElementById('fields-02').classList.remove('active-field');
    document.getElementById('fields-02').classList.add('completed-field');
    document.getElementById('fields-03').classList.add('active-field');
  });

  document.getElementById('field-03-button').addEventListener('click', (e) => {

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
