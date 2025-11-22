<?php
get_header(); ?>


<!-- Breadcrumb -->
<section class="bg-gray-800 py-4 border-b border-gray-700">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center gap-2 text-sm text-gray-400">
      <a href="index.html" class="hover:text-white transition">Home</a>
      <span>/</span>
      <a href="shop.html" class="hover:text-white transition">Shop</a>
      <span>/</span>
      <a href="services.html" class="hover:text-white transition">Services</a>
      <span>/</span>
      <span class="text-white">SMS Panel Pro</span>
    </div>
  </div>
</section>

<!-- Product Details -->
<section class="py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12">
      <!-- Product Image -->
      <div>
        <div class="bg-linear-to-br from-green-500/20 to-green-500/20 rounded-2xl p-12 border border-gray-700 mb-4">
          <div class="w-48 h-48 bg-linear-to-br from-green-500 to-green-500 rounded-3xl flex items-center justify-center mx-auto">
            <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
            </svg>
          </div>
        </div>

        <!-- Trust Badges -->
        <div class="grid grid-cols-3 gap-4">
          <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
            <svg class="w-8 h-8 text-green-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
            <div class="text-sm font-semibold">99.9% Uptime</div>
          </div>
          <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
            <svg class="w-8 h-8 text-green-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            <div class="text-sm font-semibold">Fast Delivery</div>
          </div>
          <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
            <svg class="w-8 h-8 text-purple-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <div class="text-sm font-semibold">24/7 Support</div>
          </div>
        </div>
      </div>

      <!-- Product Info -->
      <div x-data="{ selectedPlan: 'monthly', quantity: 1 }">
        <!-- Popular Badge -->
        <div class="inline-block bg-green-500 text-white px-4 py-1 rounded-full text-sm font-semibold mb-4">
          Most Popular
        </div>

        <h1 class="text-4xl font-bold mb-4">SMS Panel Pro</h1>

        <!-- Rating -->
        <div class="flex items-center gap-2 mb-6">
          <div class="flex text-yellow-400">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
          <span class="text-gray-400">(124 reviews)</span>
        </div>

        <!-- Price -->
        <div class="mb-6">
          <div class="flex items-baseline gap-2">
            <span class="text-5xl font-bold text-green-400">$79</span>
            <span class="text-2xl text-gray-400">/month</span>
          </div>
          <p class="text-gray-400 mt-2">Save 20% with annual billing</p>
        </div>

        <!-- Description -->
        <p class="text-gray-300 text-lg mb-6 leading-relaxed">
          Our most popular SMS panel solution for growing businesses. Send up to 50,000 SMS messages per month with advanced features including API access, custom sender ID, and priority support.
        </p>

        <!-- Billing Cycle -->
        <div class="mb-6">
          <label class="block text-sm font-semibold mb-3">Billing Cycle</label>
          <div class="flex gap-3">
            <button @click="selectedPlan = 'monthly'" :class="selectedPlan === 'monthly' ? 'bg-green-500 border-green-500' : 'bg-gray-800 border-gray-700'" class="flex-1 px-6 py-3 rounded-lg border-2 hover:border-green-500 transition">
              <div class="font-semibold">Monthly</div>
              <div class="text-sm text-gray-400">$79/mo</div>
            </button>
            <button @click="selectedPlan = 'annual'" :class="selectedPlan === 'annual' ? 'bg-green-500 border-green-500' : 'bg-gray-800 border-gray-700'" class="flex-1 px-6 py-3 rounded-lg border-2 hover:border-green-500 transition relative">
              <div class="absolute -top-2 -right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">Save 20%</div>
              <div class="font-semibold">Annual</div>
              <div class="text-sm text-gray-400">$63/mo</div>
            </button>
          </div>
        </div>

        <!-- Quantity -->
        <div class="mb-6">
          <label class="block text-sm font-semibold mb-3">Quantity</label>
          <div class="flex items-center gap-4">
            <button @click="quantity > 1 && quantity--" class="w-12 h-12 bg-gray-800 rounded-lg hover:bg-gray-700 transition border border-gray-700">
              <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
              </svg>
            </button>
            <input type="number" x-model="quantity" min="1" class="w-20 h-12 bg-gray-800 rounded-lg text-center border border-gray-700 focus:outline-none focus:border-green-500">
            <button @click="quantity++" class="w-12 h-12 bg-gray-800 rounded-lg hover:bg-gray-700 transition border border-gray-700">
              <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex gap-4 mb-8">
          <button class="flex-1 bg-linear-to-r from-green-500 to-green-500 text-white px-8 py-4 rounded-lg hover:from-green-600 hover:to-green-600 transition text-lg font-semibold">
            Add to Cart
          </button>
          <button class="w-14 h-14 bg-gray-800 rounded-lg hover:bg-gray-700 transition border border-gray-700">
            <svg class="w-6 h-6 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
          </button>
        </div>

        <!-- Features List -->
        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
          <h3 class="font-semibold mb-4">What's Included:</h3>
          <ul class="space-y-3">
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-green-400 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              50,000 SMS messages per month
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-green-400 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Advanced API with webhooks
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-green-400 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Custom sender ID
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-green-400 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Real-time delivery reports
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-green-400 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Priority 24/7 support
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-green-400 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Contact list management
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-green-400 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Scheduled messaging
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-green-400 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              99.9% uptime SLA
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Tabs Section -->
    <div class="mt-16" x-data="{ activeTab: 'description' }">
      <!-- Tab Headers -->
      <div class="flex gap-4 border-b border-gray-700 mb-8">
        <button @click="activeTab = 'description'" :class="activeTab === 'description' ? 'border-green-500 text-white' : 'border-transparent text-gray-400'" class="px-6 py-3 border-b-2 font-semibold transition">
          Description
        </button>
        <button @click="activeTab = 'features'" :class="activeTab === 'features' ? 'border-green-500 text-white' : 'border-transparent text-gray-400'" class="px-6 py-3 border-b-2 font-semibold transition">
          Features
        </button>
        <button @click="activeTab = 'reviews'" :class="activeTab === 'reviews' ? 'border-green-500 text-white' : 'border-transparent text-gray-400'" class="px-6 py-3 border-b-2 font-semibold transition">
          Reviews (124)
        </button>
      </div>

      <!-- Tab Content -->
      <div>
        <!-- Description Tab -->
        <div x-show="activeTab === 'description'" class="prose prose-invert max-w-none">
          <h2 class="text-2xl font-bold mb-4">Product Description</h2>
          <p class="text-gray-300 leading-relaxed mb-4">
            The SMS Panel Pro is our most popular solution designed for growing businesses that need reliable, high-volume SMS messaging capabilities. Whether you're sending marketing campaigns, transaction notifications, or customer updates, our platform ensures your messages are delivered quickly and reliably.
          </p>
          <p class="text-gray-300 leading-relaxed mb-4">
            With support for up to 50,000 messages per month, advanced API integration, and priority support, you'll have everything you need to scale your messaging operations. Our platform is trusted by over 10,000 businesses worldwide and maintains a 99.9% uptime guarantee.
          </p>
          <h3 class="text-xl font-bold mb-3 mt-6">Perfect For:</h3>
          <ul class="text-gray-300 space-y-2">
            <li>Marketing agencies running SMS campaigns</li>
            <li>E-commerce businesses sending order updates</li>
            <li>SaaS companies with notification needs</li>
            <li>Financial services requiring 2FA messages</li>
            <li>Healthcare providers sending appointment reminders</li>
          </ul>
        </div>

        <!-- Features Tab -->
        <div x-show="activeTab === 'features'" class="grid md:grid-cols-2 gap-6">
          <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
            <h3 class="text-xl font-bold mb-4">Advanced API</h3>
            <p class="text-gray-300 mb-4">RESTful API with comprehensive documentation, webhooks for delivery status, and SDKs for popular programming languages.</p>
            <ul class="text-gray-400 space-y-2 text-sm">
              <li>• Complete REST API</li>
              <li>• Webhook notifications</li>
              <li>• Language SDKs</li>
              <li>• Sandbox environment</li>
            </ul>
          </div>
          <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
            <h3 class="text-xl font-bold mb-4">Custom Sender ID</h3>
            <p class="text-gray-300 mb-4">Brand your messages with custom sender IDs to increase recognition and trust with your recipients.</p>
            <ul class="text-gray-400 space-y-2 text-sm">
              <li>• Alphanumeric sender IDs</li>
              <li>• Multiple sender IDs</li>
              <li>• Fast approval process</li>
              <li>• Global coverage</li>
            </ul>
          </div>
          <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
            <h3 class="text-xl font-bold mb-4">Real-time Analytics</h3>
            <p class="text-gray-300 mb-4">Track delivery rates, click rates, and campaign performance with our advanced analytics dashboard.</p>
            <ul class="text-gray-400 space-y-2 text-sm">
              <li>• Delivery reports</li>
              <li>• Click tracking</li>
              <li>• Campaign analytics</li>
              <li>• Export capabilities</li>
            </ul>
          </div>
          <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
            <h3 class="text-xl font-bold mb-4">Priority Support</h3>
            <p class="text-gray-300 mb-4">Get help when you need it with our 24/7 priority support team available via chat, email, and phone.</p>
            <ul class="text-gray-400 space-y-2 text-sm">
              <li>• 24/7 availability</li>
              <li>• Live chat support</li>
              <li>• Dedicated account manager</li>
              <li>• Phone support</li>
            </ul>
          </div>
        </div>

        <!-- Reviews Tab -->
        <div x-show="activeTab === 'reviews'" class="space-y-6">
          <!-- Review 1 -->
          <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
            <div class="flex items-start justify-between mb-4">
              <div>
                <div class="flex items-center gap-3 mb-2">
                  <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center font-bold">
                    JS
                  </div>
                  <div>
                    <div class="font-semibold">John Smith</div>
                    <div class="text-sm text-gray-400">Verified Purchase</div>
                  </div>
                </div>
              </div>
              <div class="flex text-yellow-400">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </div>
            </div>
            <h4 class="font-semibold mb-2">Excellent service and reliability!</h4>
            <p class="text-gray-300 leading-relaxed mb-3">
              We've been using SMS Panel Pro for 6 months now and it's been fantastic. The delivery rates are consistently above 98%, and the API is well-documented and easy to integrate. Support team is very responsive.
            </p>
            <div class="text-sm text-gray-400">Posted on October 15, 2024</div>
          </div>

          <!-- Review 2 -->
          <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
            <div class="flex items-start justify-between mb-4">
              <div>
                <div class="flex items-center gap-3 mb-2">
                  <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center font-bold">
                    SK
                  </div>
                  <div>
                    <div class="font-semibold">Sarah Kim</div>
                    <div class="text-sm text-gray-400">Verified Purchase</div>
                  </div>
                </div>
              </div>
              <div class="flex text-yellow-400">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </div>
            </div>
            <h4 class="font-semibold mb-2">Best SMS solution for e-commerce</h4>
            <p class="text-gray-300 leading-relaxed mb-3">
              Perfect for our e-commerce business. We send thousands of order confirmations and shipping updates daily. The custom sender ID feature helps with brand recognition, and the analytics dashboard is very useful for tracking campaign performance.
            </p>
            <div class="text-sm text-gray-400">Posted on November 2, 2024</div>
          </div>

          <!-- More Reviews Button -->
          <div class="text-center">
            <button class="bg-gray-800 text-white px-8 py-3 rounded-lg hover:bg-gray-700 transition border border-gray-700">
              Load More Reviews
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Related Products -->
    <div class="mt-16">
      <h2 class="text-3xl font-bold mb-8">Related Products</h2>
      <div class="grid md:grid-cols-4 gap-6">
        <!-- Related Product 1 -->
        <a href="single-product.html?product=sms-starter" class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-green-500 transition group">
          <div class="bg-linear-to-br from-green-500/20 to-green-500/20 p-8 text-center">
            <div class="w-12 h-12 bg-linear-to-br from-green-500 to-green-500 rounded-xl flex items-center justify-center mx-auto">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
              </svg>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold mb-2">SMS Panel Starter</h3>
            <div class="text-2xl font-bold text-green-400">$29<span class="text-sm text-gray-400">/mo</span></div>
          </div>
        </a>

        <!-- Related Product 2 -->
        <a href="single-product.html?product=vps-hosting" class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-green-500 transition group">
          <div class="bg-linear-to-br from-orange-500/20 to-red-500/20 p-8 text-center">
            <div class="w-12 h-12 bg-linear-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center mx-auto">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
              </svg>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold mb-2">VPS Hosting</h3>
            <div class="text-2xl font-bold text-orange-400">$39<span class="text-sm text-gray-400">/mo</span></div>
          </div>
        </a>

        <!-- Related Product 3 -->
        <a href="single-product.html?product=domain-com" class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-green-500 transition group">
          <div class="bg-linear-to-br from-teal-500/20 to-green-500/20 p-8 text-center">
            <div class="w-12 h-12 bg-linear-to-br from-teal-500 to-green-500 rounded-xl flex items-center justify-center mx-auto">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
              </svg>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold mb-2">.com Domain</h3>
            <div class="text-2xl font-bold text-teal-400">$12<span class="text-sm text-gray-400">/yr</span></div>
          </div>
        </a>

        <!-- Related Product 4 -->
        <a href="single-product.html?product=ssl-certificate" class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-green-500 transition group">
          <div class="bg-linear-to-br from-pink-500/20 to-rose-500/20 p-8 text-center">
            <div class="w-12 h-12 bg-linear-to-br from-pink-500 to-rose-500 rounded-xl flex items-center justify-center mx-auto">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
              </svg>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold mb-2">SSL Certificate</h3>
            <div class="text-2xl font-bold text-pink-400">$49<span class="text-sm text-gray-400">/yr</span></div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
