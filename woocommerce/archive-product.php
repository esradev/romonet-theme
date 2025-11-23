<?php
get_header(); ?>

<!-- Shop Header -->
<section class="bg-linear-to-br from-gray-800 via-gray-900 to-gray-800 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h1 class="text-5xl font-bold mb-4">Shop Our Services</h1>
    <p class="text-xl text-gray-400">Find the perfect solution for your business needs</p>
  </div>
</section>

<!-- Filters and Sort -->
<section class="py-8 bg-gray-800 border-b border-gray-700">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ category: 'all', sort: 'popular' }">
    <div class="flex flex-col md:flex-row gap-4 justify-between items-center">
      <!-- Category Filter -->
      <div class="flex gap-2 flex-wrap">
        <button @click="category = 'all'" :class="category === 'all' ? 'bg-sky-500 text-white' : 'bg-gray-700 text-gray-300'" class="px-4 py-2 rounded-lg hover:bg-sky-600 transition">
          All Services
        </button>
        <button @click="category = 'sms'" :class="category === 'sms' ? 'bg-sky-500 text-white' : 'bg-gray-700 text-gray-300'" class="px-4 py-2 rounded-lg hover:bg-sky-600 transition">
          SMS Panel
        </button>
        <button @click="category = 'hosting'" :class="category === 'hosting' ? 'bg-sky-500 text-white' : 'bg-gray-700 text-gray-300'" class="px-4 py-2 rounded-lg hover:bg-sky-600 transition">
          Hosting
        </button>
        <button @click="category = 'domain'" :class="category === 'domain' ? 'bg-sky-500 text-white' : 'bg-gray-700 text-gray-300'" class="px-4 py-2 rounded-lg hover:bg-sky-600 transition">
          Domains
        </button>
      </div>

      <!-- Sort Dropdown -->
      <div>
        <select x-model="sort" class="bg-gray-700 text-white px-4 py-2 rounded-lg border border-gray-600 focus:outline-none focus:border-sky-500">
          <option value="popular">Most Popular</option>
          <option value="price-low">Price: Low to High</option>
          <option value="price-high">Price: High to Low</option>
          <option value="newest">Newest</option>
        </select>
      </div>
    </div>
  </div>
</section>

<!-- Products Grid -->
<section class="py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Product 1: SMS Panel Starter -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-sky-500 transition group">
        <div class="bg-linear-to-br from-sky-500/20 to-sky-500/20 p-8 text-center">
          <div class="w-16 h-16 bg-linear-to-br from-sky-500 to-sky-500 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-2">SMS Panel Starter</h3>
          <div class="text-3xl font-bold text-sky-400">$29<span class="text-base text-gray-400">/month</span></div>
        </div>
        <div class="p-6">
          <ul class="space-y-3 mb-6">
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              10,000 SMS/month
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              API Access
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              99.9% Uptime
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              24/7 Support
            </li>
          </ul>
          <div class="flex gap-2">
            <a href="single-product.html?product=sms-starter" class="flex-1 text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
              View Details
            </a>
            <button class="bg-linear-to-r from-sky-500 to-sky-500 text-white px-6 py-2 rounded-lg hover:from-sky-600 hover:to-sky-600 transition">
              Add to Cart
            </button>
          </div>
        </div>
      </div>

      <!-- Product 2: SMS Panel Pro -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-sky-500 hover:border-sky-500 transition group relative">
        <div class="absolute top-4 right-4 bg-sky-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
          Popular
        </div>
        <div class="bg-linear-to-br from-sky-500/20 to-sky-500/20 p-8 text-center">
          <div class="w-16 h-16 bg-linear-to-br from-sky-500 to-sky-500 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-2">SMS Panel Pro</h3>
          <div class="text-3xl font-bold text-sky-400">$79<span class="text-base text-gray-400">/month</span></div>
        </div>
        <div class="p-6">
          <ul class="space-y-3 mb-6">
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              50,000 SMS/month
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Advanced API Access
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Priority Support
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Custom Sender ID
            </li>
          </ul>
          <div class="flex gap-2">
            <a href="single-product.html?product=sms-pro" class="flex-1 text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
              View Details
            </a>
            <button class="bg-linear-to-r from-sky-500 to-sky-500 text-white px-6 py-2 rounded-lg hover:from-sky-600 hover:to-sky-600 transition">
              Add to Cart
            </button>
          </div>
        </div>
      </div>

      <!-- Product 3: SMS Panel Enterprise -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-sky-500 transition group">
        <div class="bg-linear-to-br from-purple-500/20 to-pink-500/20 p-8 text-center">
          <div class="w-16 h-16 bg-linear-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-2">SMS Panel Enterprise</h3>
          <div class="text-3xl font-bold text-purple-400">$199<span class="text-base text-gray-400">/month</span></div>
        </div>
        <div class="p-6">
          <ul class="space-y-3 mb-6">
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Unlimited SMS
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Dedicated Infrastructure
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              White Label Solution
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Account Manager
            </li>
          </ul>
          <div class="flex gap-2">
            <a href="single-product.html?product=sms-enterprise" class="flex-1 text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
              View Details
            </a>
            <button class="bg-linear-to-r from-purple-500 to-pink-500 text-white px-6 py-2 rounded-lg hover:from-purple-600 hover:to-pink-600 transition">
              Add to Cart
            </button>
          </div>
        </div>
      </div>

      <!-- Product 4: Shared Hosting -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-sky-500 transition group">
        <div class="bg-linear-to-br from-sky-500/20 to-emerald-500/20 p-8 text-center">
          <div class="w-16 h-16 bg-linear-to-br from-sky-500 to-emerald-500 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-2">Shared Hosting</h3>
          <div class="text-3xl font-bold text-sky-400">$9<span class="text-base text-gray-400">/month</span></div>
        </div>
        <div class="p-6">
          <ul class="space-y-3 mb-6">
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              10 GB SSD Storage
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              100 GB Bandwidth
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Free SSL Certificate
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              1 Website
            </li>
          </ul>
          <div class="flex gap-2">
            <a href="single-product.html?product=shared-hosting" class="flex-1 text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
              View Details
            </a>
            <button class="bg-linear-to-r from-sky-500 to-emerald-500 text-white px-6 py-2 rounded-lg hover:from-sky-600 hover:to-emerald-600 transition">
              Add to Cart
            </button>
          </div>
        </div>
      </div>

      <!-- Product 5: VPS Hosting -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-sky-500 transition group">
        <div class="bg-linear-to-br from-orange-500/20 to-red-500/20 p-8 text-center">
          <div class="w-16 h-16 bg-linear-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-2">VPS Hosting</h3>
          <div class="text-3xl font-bold text-orange-400">$39<span class="text-base text-gray-400">/month</span></div>
        </div>
        <div class="p-6">
          <ul class="space-y-3 mb-6">
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              4 vCPU Cores
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              8 GB RAM
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              160 GB SSD Storage
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Root Access
            </li>
          </ul>
          <div class="flex gap-2">
            <a href="single-product.html?product=vps-hosting" class="flex-1 text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
              View Details
            </a>
            <button class="bg-linear-to-r from-orange-500 to-red-500 text-white px-6 py-2 rounded-lg hover:from-orange-600 hover:to-red-600 transition">
              Add to Cart
            </button>
          </div>
        </div>
      </div>

      <!-- Product 6: Dedicated Server -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-sky-500 transition group">
        <div class="bg-linear-to-br from-indigo-500/20 to-purple-500/20 p-8 text-center">
          <div class="w-16 h-16 bg-linear-to-br from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-2">Dedicated Server</h3>
          <div class="text-3xl font-bold text-indigo-400">$149<span class="text-base text-gray-400">/month</span></div>
        </div>
        <div class="p-6">
          <ul class="space-y-3 mb-6">
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Intel Xeon Processor
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              32 GB RAM
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              2 TB SSD Storage
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              100% Uptime SLA
            </li>
          </ul>
          <div class="flex gap-2">
            <a href="single-product.html?product=dedicated-server" class="flex-1 text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
              View Details
            </a>
            <button class="bg-linear-to-r from-indigo-500 to-purple-500 text-white px-6 py-2 rounded-lg hover:from-indigo-600 hover:to-purple-600 transition">
              Add to Cart
            </button>
          </div>
        </div>
      </div>

      <!-- Product 7: Domain Registration -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-sky-500 transition group">
        <div class="bg-linear-to-br from-teal-500/20 to-sky-500/20 p-8 text-center">
          <div class="w-16 h-16 bg-linear-to-br from-teal-500 to-sky-500 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-2">.com Domain</h3>
          <div class="text-3xl font-bold text-teal-400">$12<span class="text-base text-gray-400">/year</span></div>
        </div>
        <div class="p-6">
          <ul class="space-y-3 mb-6">
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Free WHOIS Privacy
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              DNS Management
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Easy Transfer
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Auto-Renewal Option
            </li>
          </ul>
          <div class="flex gap-2">
            <a href="single-product.html?product=domain-com" class="flex-1 text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
              View Details
            </a>
            <button class="bg-linear-to-r from-teal-500 to-sky-500 text-white px-6 py-2 rounded-lg hover:from-teal-600 hover:to-sky-600 transition">
              Add to Cart
            </button>
          </div>
        </div>
      </div>

      <!-- Product 8: Premium Domains -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-sky-500 transition group">
        <div class="bg-linear-to-br from-yellow-500/20 to-orange-500/20 p-8 text-center">
          <div class="w-16 h-16 bg-linear-to-br from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-2">Premium Domains</h3>
          <div class="text-3xl font-bold text-yellow-400">$299+<span class="text-base text-gray-400">/year</span></div>
        </div>
        <div class="p-6">
          <ul class="space-y-3 mb-6">
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Short & Memorable
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              High Search Volume
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              SEO Advantages
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Brand Value
            </li>
          </ul>
          <div class="flex gap-2">
            <a href="single-product.html?product=premium-domain" class="flex-1 text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
              View Details
            </a>
            <button class="bg-linear-to-r from-yellow-500 to-orange-500 text-white px-6 py-2 rounded-lg hover:from-yellow-600 hover:to-orange-600 transition">
              Browse
            </button>
          </div>
        </div>
      </div>

      <!-- Product 9: SSL Certificates -->
      <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-sky-500 transition group">
        <div class="bg-linear-to-br from-pink-500/20 to-rose-500/20 p-8 text-center">
          <div class="w-16 h-16 bg-linear-to-br from-pink-500 to-rose-500 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-2">SSL Certificate</h3>
          <div class="text-3xl font-bold text-pink-400">$49<span class="text-base text-gray-400">/year</span></div>
        </div>
        <div class="p-6">
          <ul class="space-y-3 mb-6">
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              256-bit Encryption
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Trust Seal Included
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              99.9% Browser Recognition
            </li>
            <li class="flex items-center text-gray-300">
              <svg class="w-5 h-5 text-sky-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              30-Day Warranty
            </li>
          </ul>
          <div class="flex gap-2">
            <a href="single-product.html?product=ssl-certificate" class="flex-1 text-center bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
              View Details
            </a>
            <button class="bg-linear-to-r from-pink-500 to-rose-500 text-white px-6 py-2 rounded-lg hover:from-pink-600 hover:to-rose-600 transition">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
