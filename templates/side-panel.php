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

<style>
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
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const slideTrigger = document.querySelector('.slide-trigger');
    const slideTriggerClose = document.querySelector('.close-slide');
    const slidePanel = document.querySelector('.slide-panel');
    const slideBackdrop = document.querySelector('.slide-backdrop');
    const slideContainer = document.querySelector('.slide-container');

    slideTrigger.addEventListener('click', function() {
      document.body.classList.add('slide-visible');
    });

    slideTriggerClose.addEventListener('click', function() {
      document.body.classList.remove('slide-visible');
    });

    slideBackdrop.addEventListener('click', function() {
      document.body.classList.remove('slide-visible');
    });
  });
</script>