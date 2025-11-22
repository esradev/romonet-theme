<?php get_header(); ?>

<!-- Success Section -->
<section class="py-20">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <!-- Success Animation -->
    <div class="mb-8 flex justify-center">
      <div class="w-24 h-24 bg-linear-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center animate-bounce">
        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
        </svg>
      </div>
    </div>

    <!-- Success Message -->
    <h1 class="text-5xl font-bold mb-4 bg-linear-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">
      Order Successful!
    </h1>
    <p class="text-2xl text-gray-300 mb-2">Thank you for your purchase</p>
    <p class="text-lg text-gray-400 mb-8">
      Your order has been confirmed and will be processed shortly.
    </p>

    <!-- Order Details -->
    <div class="bg-gray-800 rounded-xl p-8 border border-gray-700 mb-8 text-left">
      <h2 class="text-2xl font-bold mb-6">Order Details</h2>

      <div class="space-y-4 mb-6">
        <div class="flex justify-between items-center pb-4 border-b border-gray-700">
          <span class="text-gray-400">Order Number:</span>
          <span class="font-semibold text-green-400">#CH-2024-001234</span>
        </div>
        <div class="flex justify-between items-center pb-4 border-b border-gray-700">
          <span class="text-gray-400">Order Date:</span>
          <span class="font-semibold">November 21, 2024</span>
        </div>
        <div class="flex justify-between items-center pb-4 border-b border-gray-700">
          <span class="text-gray-400">Email:</span>
          <span class="font-semibold">customer@example.com</span>
        </div>
        <div class="flex justify-between items-center pb-4 border-b border-gray-700">
          <span class="text-gray-400">Payment Method:</span>
          <span class="font-semibold">Credit Card ending in 4242</span>
        </div>
      </div>

      <!-- Order Items -->
      <h3 class="text-xl font-bold mb-4">Items Ordered</h3>
      <div class="space-y-3 mb-6">
        <div class="flex justify-between items-center bg-gray-900 p-4 rounded-lg">
          <div>
            <div class="font-semibold">SMS Panel Pro</div>
            <div class="text-sm text-gray-400">Monthly Subscription</div>
          </div>
          <div class="text-lg font-bold text-green-400">$79.00</div>
        </div>
        <div class="flex justify-between items-center bg-gray-900 p-4 rounded-lg">
          <div>
            <div class="font-semibold">VPS Hosting</div>
            <div class="text-sm text-gray-400">Monthly Subscription</div>
          </div>
          <div class="text-lg font-bold text-green-400">$39.00</div>
        </div>
      </div>

      <!-- Order Total -->
      <div class="pt-4 border-t border-gray-700">
        <div class="flex justify-between items-center mb-2">
          <span class="text-gray-400">Subtotal:</span>
          <span class="font-semibold">$118.00</span>
        </div>
        <div class="flex justify-between items-center mb-2">
          <span class="text-gray-400">Tax:</span>
          <span class="font-semibold">$11.80</span>
        </div>
        <div class="flex justify-between items-center text-xl font-bold pt-2 border-t border-gray-700">
          <span>Total:</span>
          <span class="text-green-400">$129.80</span>
        </div>
      </div>
    </div>

    <!-- Next Steps -->
    <div class="bg-gray-800 rounded-xl p-8 border border-gray-700 mb-8">
      <h2 class="text-2xl font-bold mb-6">What's Next?</h2>
      <div class="grid md:grid-cols-3 gap-6 text-center">
        <div>
          <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
            <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
          </div>
          <h3 class="font-semibold mb-2">Check Your Email</h3>
          <p class="text-sm text-gray-400">We've sent order confirmation and setup instructions to your email.</p>
        </div>
        <div>
          <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
            <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </div>
          <h3 class="font-semibold mb-2">Setup in Progress</h3>
          <p class="text-sm text-gray-400">Your services are being configured and will be ready within minutes.</p>
        </div>
        <div>
          <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
            <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="font-semibold mb-2">Start Using</h3>
          <p class="text-sm text-gray-400">Access your services from the dashboard and start using them right away.</p>
        </div>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="dashboard.html" class="bg-linear-to-r from-green-500 to-green-500 text-white px-8 py-3 rounded-lg hover:from-green-600 hover:to-green-600 transition text-lg font-semibold">
        Go to Dashboard
      </a>
      <a href="shop.html" class="bg-gray-800 text-white px-8 py-3 rounded-lg hover:bg-gray-700 transition text-lg font-semibold border border-gray-700">
        Continue Shopping
      </a>
    </div>

    <!-- Support -->
    <div class="mt-12 p-6 bg-gray-800 rounded-xl border border-gray-700">
      <h3 class="text-xl font-bold mb-2">Need Help?</h3>
      <p class="text-gray-400 mb-4">Our support team is here to assist you 24/7</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="contact.html" class="text-green-400 hover:text-green-300 transition font-semibold">
          Contact Support
        </a>
        <span class="hidden sm:inline text-gray-600">|</span>
        <a href="#" class="text-green-400 hover:text-green-300 transition font-semibold">
          View Documentation
        </a>
        <span class="hidden sm:inline text-gray-600">|</span>
        <a href="#" class="text-green-400 hover:text-green-300 transition font-semibold">
          FAQs
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
