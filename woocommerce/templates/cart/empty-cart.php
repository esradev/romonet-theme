<?php get_header(); ?>

<!-- Empty Cart Section -->
<section class="py-20">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <!-- Empty Cart Icon -->
    <div class="mb-8 flex justify-center">
      <div class="w-32 h-32 bg-gray-800 rounded-full flex items-center justify-center">
        <svg class="w-16 h-16 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
        </svg>
      </div>
    </div>

    <!-- Empty Cart Message -->
    <h1 class="text-4xl font-bold mb-4">Your Cart is Empty</h1>
    <p class="text-xl text-gray-400 mb-8">
      Looks like you haven't added any services yet. Start exploring our offerings!
    </p>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="shop.html" class="bg-linear-to-r from-sky-500 to-sky-500 text-white px-8 py-3 rounded-lg hover:from-sky-600 hover:to-sky-600 transition text-lg font-semibold">
        Browse Services
      </a>
      <a href="pricing.html" class="bg-gray-800 text-white px-8 py-3 rounded-lg hover:bg-gray-700 transition text-lg font-semibold border border-gray-700">
        View Pricing
      </a>
    </div>

    <!-- Popular Services -->
    <div class="mt-16">
      <h2 class="text-2xl font-bold mb-8">Popular Services</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <!-- Service Card 1 -->
        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700 hover:border-sky-500 transition">
          <div class="w-12 h-12 bg-linear-to-br from-sky-500 to-sky-500 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold mb-2">SMS Panel</h3>
          <p class="text-gray-400 text-sm mb-4">Send bulk SMS with high delivery rates</p>
          <div class="text-2xl font-bold text-sky-400 mb-4">$29<span class="text-sm text-gray-400">/month</span></div>
          <a href="single-product.html?product=sms" class="block text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
            View Details
          </a>
        </div>

        <!-- Service Card 2 -->
        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700 hover:border-sky-500 transition">
          <div class="w-12 h-12 bg-linear-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold mb-2">Cloud Hosting</h3>
          <p class="text-gray-400 text-sm mb-4">Fast and reliable cloud hosting</p>
          <div class="text-2xl font-bold text-purple-400 mb-4">$19<span class="text-sm text-gray-400">/month</span></div>
          <a href="single-product.html?product=hosting" class="block text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
            View Details
          </a>
        </div>

        <!-- Service Card 3 -->
        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700 hover:border-sky-500 transition">
          <div class="w-12 h-12 bg-linear-to-br from-sky-500 to-emerald-500 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold mb-2">Domain Names</h3>
          <p class="text-gray-400 text-sm mb-4">Register your perfect domain name</p>
          <div class="text-2xl font-bold text-sky-400 mb-4">$12<span class="text-sm text-gray-400">/year</span></div>
          <a href="single-product.html?product=domain" class="block text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
            View Details
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
