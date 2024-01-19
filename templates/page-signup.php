<?php /* Template Name: Traffic Signup Packages */ ?>

<?php get_header(); ?>

<header class="border-b border-gray-100 bg-gray-100">
  <div class="container mx-auto py-4 md:py-8">
    <div class="text-center md:hidden border-b border-gray-200 pb-4 mb-4">
      <div class="font-semibold text-sm text-gray-500"><?php echo get_field('school_name'); ?></div>
    </div>
    <div class="flex gap-4 items-center justify-between">
      <div class="flex items-center gap-2 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-blue-500">
          <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />
        </svg>
        <span class="font-semibold text-sm text-gray-500">Secure Online Payments</span>
      </div>
      <div class="font-semibold text-sm text-gray-500 hidden md:block">
      <img class="h-8 w-auto" src="<?php echo get_field('main_logo','options'); ?>" alt="">
      </div>
      <div class="font-semibold text-sm text-gray-500">Returning Customer? <a href="<?php echo get_field('school_login_link'); ?>" class="text-blue-500 hover:text-blue-400">Login</a></div>
    </div>
  </div>
</header>

<div class="bg-white faded">
  <div class="mx-auto max-w-7xl py-12 md:py-24 px-6">
    <div class="sm:align-center sm:flex sm:flex-col">
      <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-gray-900 sm:text-center">California Traffic School, Quick & Easy.</h1>
      <p class="mt-5 text-lg md:text-xl text-gray-500 sm:text-center leading-8 max-w-4xl mx-auto">Start Now, Finish Any time.  We are DMV Licensed & Court Accepted for All California Counties. Our Self Paced Course is Super Easy with an open book final exam!</p>
    </div>
    <div class="mt-12 space-y-4 sm:mt-16 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:mx-auto lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-4">
      <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
        <div class="p-6">
          <h2 class="text-lg font-bold leading-6 text-gray-900">Basic</h2>
          <p class="mt-4 text-base text-gray-500">Traffic Violator School Online</p>
          <p class="mt-8">
            <span class="text-4xl font-bold tracking-tight text-gray-900">$24.95</span>

          </p>
          <a href="<?php echo get_field('package_one_link'); ?>" class="mt-8 block w-full rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">Select This Package</a>
        </div>
        <div class="px-6 pt-6 pb-8">
          <h3 class="text-sm font-medium text-gray-900">What's included:</h3>
          <ul role="list" class="mt-6 space-y-4">
            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Required Traffic School Course 100% Online</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Start Now, Finish Anytime</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Certificate Processing: FREE 2 Day e-filing to Court & DMV Upon Completion </span>
            </li>


            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Instant Grading</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Proof Of Purchase</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Free Completion Certificate</span>
            </li>

          </ul>

          <div class="text-xs border-t mt-8 pt-6 border-gray-200 text-gray-500 leading-6">
            *This Package does not provide the added benefit of Expedited Processing, Insurance/Employer Certificate, Unlimited Course Attempts, or DMV & Court Confirmation Notification Numbers.
          </div>

        </div>
      </div>

      <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
        <div class="p-6">
          <h2 class="text-lg font-bold leading-6 text-gray-900 flex gap-2 items-center"><span>Standard</span> <div class="bg-green-500 text-white px-3 py-2 rounded-full text-xs">Featured</div></h2>
          <p class="mt-4 text-base text-gray-500">Traffic Violator School Online</p>
          <p class="mt-8">
            <span class="text-4xl font-bold tracking-tight text-gray-900">$29.95</span>

          </p>
          <a href="<?php echo get_field('package_two_link'); ?>" class="mt-8 block w-full rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">Select This Package</a>
        </div>
        <div class="px-6 pt-6 pb-8">
          <h3 class="text-sm font-medium text-gray-900">What's included</h3>
          <ul role="list" class="mt-6 space-y-4">
            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Required Traffic School Course 100% Online</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Start Now, Finish Anytime</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Bonus: Guaranteed To Pass</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Bonus: Insurance/Employer Certificate</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Certificate Processing: FREE 2 Day e-filing to Court & DMV Upon Completion</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Instant Grading</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Proof of Purchase</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Free Completion Certificate</span>
            </li>

          </ul>

          <div class="text-xs border-t mt-8 pt-6 border-gray-200 text-gray-500 leading-6">
            Bonus: Guaranteed Pass Policy = Take it until you pass for free. No additional fees required. Insurance/Employer Certificate = Instant Printable Completion Verification Document for Insurance, Employer, etc.
          </div>

        </div>
      </div>

      <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
        <div class="p-6">
          <h2 class="text-lg font-bold leading-6 text-gray-900 flex gap-2 items-center"><span>Deluxe</span> <div class="bg-blue-500 text-white px-3 py-2 rounded-full text-xs">Recommended</div></h2>
          <p class="mt-4 text-base text-gray-500">Traffic Violator School Online</p>
          <p class="mt-8">
            <span class="text-4xl font-bold tracking-tight text-gray-900">$34.95</span>

          </p>
          <a href="<?php echo get_field('package_three_link'); ?>" class="mt-8 block w-full rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">Select This Package</a>
        </div>
        <div class="px-6 pt-6 pb-8">
          <h3 class="text-sm font-medium text-gray-900">What's included</h3>
          <ul role="list" class="mt-6 space-y-4">
            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Required Traffic School Course 100% Online</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Start Now, Finish Anytime</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Bonus: NEXT DAY Certificate Processing with e-Filing to DMV & Court upon completion</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Bonus: DMV Processed Confirmation Number</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Bonus: Guaranteed To Pass</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Instant Grading</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Proof of Purchase</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Completion Certificate</span>
            </li>

          </ul>

          <div class="text-xs border-t mt-8 pt-6 border-gray-200 text-gray-500 leading-6">
            Bonus: Guaranteed Pass Policy = Take it until you pass for free. No additional fees required. We will notify the DMV & Court of Completion NEXT DAY if you are in a rush. We provide a confirmation from DMV that your completion certificate filing has been received. Insurance/Employer Certificate = Instant Printable Completion Verification Document for Insurance, Employer, etc.
          </div>

        </div>
      </div>

      <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
        <div class="p-6">
          <h2 class="text-lg font-bold leading-6 text-gray-900">Premium</h2>
          <p class="mt-4 text-base text-gray-500">Traffic Violator School Online</p>
          <p class="mt-8">
            <span class="text-4xl font-bold tracking-tight text-gray-900">$39.95</span>

          </p>
          <a href="<?php echo get_field('package_four_link'); ?>" class="mt-8 block w-full rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">Select This Package</a>
        </div>
        <div class="px-6 pt-6 pb-8">
          <h3 class="text-sm font-medium text-gray-900">What's included</h3>
          <ul role="list" class="mt-6 space-y-4">
            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Required Traffic School Course 100% Online</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Start Now, Finish Anytime</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Bonus: INSTANT Certificate Processing with E-Filing to DMV & Court upon completion</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Bonus: DMV Processed Confirmation Number</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Bonus: Guaranteed To Pass</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Instant Grading</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Proof of Purchase</span>
            </li>

            <li class="flex space-x-3">
              <!-- Heroicon name: mini/check -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Completion Certificate</span>
            </li>

          </ul>

          <div class="text-xs border-t mt-8 pt-6 border-gray-200 text-gray-500 leading-6">
            Bonus: Guaranteed Pass Policy = Take it until you pass for free. No additional fees required. We will notify the DMV & Court of Completion INSTANTLY. Use this package if you have waited until the last minute. Insurance/Employer Certificate = Instant Printable Completion Verification Document for Insurance, Employer, etc.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<style>
nav, footer {
  display: none;
}
h1 span, h2 span, h3 span {
  color: #101827;
}


.header__01, .header__02, .header__03 {
  display: none !important;
}
</style>

<?php get_footer(); ?>