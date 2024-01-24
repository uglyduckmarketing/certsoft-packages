<?php get_header(); ?>

<?php include plugin_dir_path(__FILE__) . 'headers/header-01.php'; ?>

<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8 py-8 md:py-16">

    <form class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16 faded">
      

      <div class="form-container mt-4">

        <div class="progress mb-8">
          <div class="progress-bar bg-primary" id="progress-bar"></div>
          <button class="progress-button active-progress" id="progress-button-01">
            Create Account
          </button>
          <button class="progress-button" id="progress-button-02">
            Payment
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
              <label for="first-name">First Name</label>
              <div class="mt-1">
                <input type="text" id="first-name" name="first-name" autocomplete="given-name">
              </div>
            </div>

            <div>
              <label for="last-name">Last Name</label>
              <div class="mt-1">
                <input type="text" id="last-name" name="last-name" autocomplete="family-name">
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="email">Email Address</label>
              <div class="mt-1">
                <input type="email" name="email" id="email" autocomplete="email">
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="email">Confirm Email Address</label>
              <div class="mt-1">
                <input type="email" name="confirm_email" id="confirm_email" autocomplete="email">
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="password">Password</label>
              <div class="mt-1">
                <input type="password" name="passowrd" id="password">
              </div>
            </div>

            <?php if( have_rows('payment_options', 'options') ) : while( have_rows('payment_options', 'options') ): the_row(); ?>
            <?php if(!empty(get_sub_field('ask_for_date_of_birth'))) : ?>
            <div class="sm:col-span-2">
              <label for="dob">Date Of Birth</label>
              <div class="mt-1">
                <input type="date" id="dob" name="dob">
              </div>
            </div>
            <?php endif; ?>
            <?php endwhile; endif; ?>

            <?php if( have_rows('payment_options', 'options') ) : while( have_rows('payment_options', 'options') ): the_row(); ?>
            <?php if(!empty(get_sub_field('ask_for_drivers_license'))) : ?>
            <div class="sm:col-span-2">
              <label for="license">License Number</label>
              <div class="mt-1">
                <input type="text" id="license-number" name="license-number">
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="license-state">License State</label>
              <div class="mt-1">
                <select id="license-state" name="license-state">
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option selected value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
            <?php endif; ?>
            <?php endwhile; endif; ?>

          </div>

            <div class="flex mx-auto gap-2 h-6 items-center col-span-4 mt-4">
              <div class="flex items-center gap-2">
                <input id="terms" name="terms" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                <span class="block text-sm font-medium text-gray-700">I Accept The <button class="text-primary">Terms & Conditions</button></span>
              </div>
            </div>

            <div class="mt-6 col-span-4">
              <button id="student-details-confirm" class="w-full rounded-md border border-transparent bg-blue-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-50 flex gap-4 items-center justify-center bg-primary">
                Next step
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </button>
            </div>

          </div>

        </div>

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
            <button type="button" class="flex w-full items-center justify-center rounded-md border border-transparent bg-black py-3 text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 apple-button">
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

          <div class="flex hidden col-span-4 items-center gap-3 mb-4" id="name-container">
            <h2 class="text-2xl" id="cc-name"></h2>
            <button class="text-gray-500" id="edit-name">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
            </button>
          </div>

          <div class="col-span-4" id="card-name">
            <label for="name-on-card">Name On Card</label>
            <div class="mt-1">
              <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name">
            </div>
          </div>

            <div class="col-span-4">
              <label for="card-number">Card Number</label>
              <div class="mt-1">
                <input type="text" id="card-number" name="card-number" autocomplete="cc-number">
              </div>
            </div>

            <div class="col-span-3">
              <label for="expiration-date">Expiration Date (MM/YY)</label>
              <div class="mt-1">
                <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp">
              </div>
            </div>

            <div>
              <label for="cvc">CVC</label>
              <div class="mt-1">
                <input type="text" name="cvc" id="cvc" autocomplete="csc">
              </div>
            </div>

            <div class="border-t border-gray-300 col-span-4 mt-4 pt-4">
              <button type="submit" class="w-full rounded-md border border-transparent bg-blue-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-50 flex gap-4 items-center justify-center bg-primary">
                Purchase Course
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
              </button>
            </div>
            
            </div>

          </div>
        </div>
      </div>

      <!-- Order summary -->
      <div class="mt-10 lg:mt-0 -order-1">

        <div class="mt-4 rounded-lg bg-indigo-950 shadow-sm sticky top-6 faded">
          <div class="p-10">
            <span class="mb-4 mt-2 text-white text-xs block">Selected Package</span>
            <h2 class="text-3xl mb-4 md:pr-12 text-white">California Traffic School: Pass Guarantee, DMV Confirmation</h2>
            <p class="text-base text-gray-200">Licensed by the DMV, we have helped over 1 million drivers mask their traffic ticket. We electronic filing of your certificate at the DMV & court. The course is an open-book final exam with only 6 short chapters and 25 easy questions!</p>
            <ul class="text-sm mt-6 text-gray-200 grid gap-3">
              <li class="flex gap-1.5 pr-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600 text-primary">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                Plus, Guaranteed Pass Policy = Take it until you pass for free. NO additional fees required. We will notify the DMV & Court of Completion INSTANTLY.
              </li>
              <li class="flex gap-1.5 pr-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600 text-primary">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                Plus, DMV Processed Verification = Our heroic support staff will monitor your ticket and confirm that it was successfully processed with the DMV and Court and will email you a confirmation number.</li>
            </ul>
          </div>
          <dl class="space-y-6 border-t border-white border-opacity-20 px-4 py-6 sm:px-6 bg-white bg-opacity-10">
            <div class="flex items-center justify-between">
              <dt class="text-base font-medium text-white">Total</dt>
              <dd class="text-base font-medium text-white">$34.85</dd>
            </div>
          </dl>

        </div>
      </div>
    </form>
  </div>
</div>

<script>
  const lastName = document.getElementById('last-name');
  const firstName = document.getElementById('first-name');
  const ccName = document.getElementById('cc-name');
  const ccInput = document.getElementById('card-name');
  const nameContainer = document.getElementById('name-container');
  const editButton = document.getElementById('edit-name');
  const nameOnCard = document.getElementById('name-on-card');
  const studentDetailsConfirmation = document.getElementById('student-details-confirm');
  const emailAddress = document.getElementById('email');
  const confirmEmailAddress = document.getElementById('confirm_email');
  const progressBar = document.getElementById('progress-bar');
  const progressButtons = document.querySelectorAll('.progress-button');
  const preogressOneButton = document.getElementById('progress-button-01');
  const progressTwoButton = document.getElementById('progress-button-02');

  progressButtons.forEach(button => {
    button.addEventListener('click', function(e) {
      progressButtons.forEach(button => {
        e.preventDefault();
      });
    });
  });

  preogressOneButton.addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('step-01').classList.toggle('is-editable');
    document.getElementById('step-02').classList.toggle('is-editable');
    document.getElementById('progress-button-02').classList.toggle('active-progress');
    progressBar.style.width = '10%';
  });

  progressTwoButton.addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('step-01').classList.toggle('is-editable');
    document.getElementById('step-02').classList.toggle('is-editable');
    document.getElementById('progress-button-02').classList.toggle('active-progress');
    progressBar.style.width = '35%';
  });


  confirmEmailAddress.addEventListener('blur', function() {
    if(emailAddress.value === confirmEmailAddress.value) {
      studentDetailsConfirmation.disabled = false;
    }
  });

  lastName.addEventListener('blur', function() {

    if(lastName.value && firstName.value) {
      nameContainer.classList.remove('hidden');
      ccName.innerHTML = firstName.value + ' ' + lastName.value;
      nameOnCard.value = firstName.value + ' ' + lastName.value;
      ccInput.classList.add('hidden');
    }
    
  });

  editButton.addEventListener('click', function(e) {
    e.preventDefault();
    ccInput.classList.remove('hidden');
  });

  nameOnCard.addEventListener('change', function() {
    ccName.innerHTML = nameOnCard.value;
  });

  studentDetailsConfirmation.addEventListener('click', function(e) {
    e.preventDefault();
    window.scroll({top: 0, left: 0, behavior: 'smooth'});
    document.getElementById('step-01').classList.toggle('is-editable');
    document.getElementById('step-02').classList.toggle('is-editable');
    document.getElementById('progress-button-02').classList.toggle('active-progress');
    progressBar.style.width = '35%';
    
  });
  
</script>

<style>
  #header, #footer {
    display: none;
  }
  input[type="text"], input[type="email"], input[type="password"], input[type="date"], textarea, select {
    padding: .85rem;
    border: 1px solid rgba(0,0,0,.25);
    font-size: 16px;
    background: white;
    width: 100%;
  }
  ul li svg {
    min-width: 36px !important;
  }
  label {
    display: block;
    color: #374151;
    font-size: 0.875rem;
    line-height: 1.25rem;
    font-weight: 500;
    margin-bottom: .65rem;
  }
  input, select, textarea {
    width: 100%;
    border: 1px solid rgba(0,0,0,.25) !important;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    border-radius: 0.375rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
  }
  select {
    appearance: none;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right .75rem center;
    background-size: 1em;
  }


  .is-editable {
    transition: all .3s ease;
    cursor: pointer;
    border: 1px solid rgba(0,0,0,.25) !important;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    border-radius: 0.375rem;
    width: 100%;
    padding: 1.5rem 0;
    background: #f9f9f9;
  }
  .step-heading, .step-01-container, .step-02-container {
    padding: 0 1rem !important;
  }
  .is-editable .step-heading {
    transition: all .3s ease;
  } 
  .step-heading {
    padding: 0;
    transition: all .3s ease;
  }
  #step-02 .step-02-container {
    display: block;
  }
  .is-editable .step-02-container, .is-editable .step-01-container {
    display: none !important;
  }
  .is-editable h2 {
    margin-bottom: 0;
  }
  .is-editable:hover {
    background: #efefef;
    box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  }
  .or-title {
    display: flex !important;
  }

  #step-01, #step-02 {
    transition: all .3s ease;
  }

  .apple-button svg {
    color: white !important;
  }

  #step-01-edit svg, #step-02-edit svg {
    display: none;
  }
  .is-editable #step-01-edit svg, .is-editable #step-02-edit svg {
    display: block;
  }

  .is-editable {
    display: none;
  }

  .progress {
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5rem;
  }
  .progress-bar {
    height: 6px;
    width: 10%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    border-radius: 100pc;
    transition: all .3s ease;
  }
  .progress button {
    transform: translateY(32px);
    font-size: 13px;
    font-weight: 600;
    position: relative;
    color: #374151;
  }
  .progress button::before {
    content: '';
    width: 20px;
    height: 20px;
    background: white;
    border-radius: 100pc;
    position: absolute;
    top: -32px;
    left: 0;
    right: 0;
    margin: 0 auto;
    border: 1px solid rgba(0,0,0,.2);
  }
  .progress button.active-progress::after {
    content: '';
    width: 10px;
    height: 10px;
    border-radius: 100pc;
    position: absolute;
    top: -27px;
    left: 0;
    right: 0;
    margin: 0 auto;
  }
    
</style>

<?php get_footer(); ?>