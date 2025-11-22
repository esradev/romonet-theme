<?php get_header(); ?>

<!-- Search Header -->
<section class="bg-linear-to-br from-gray-900 via-gray-900 to-green-900/20 py-12">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl md:text-4xl font-bold mb-6">Search Results</h1>

    <!-- Search Bar -->
    <form x-data="{ query: new URLSearchParams(window.location.search).get('q') || '' }" class="relative">
      <input
        type="text"
        name="q"
        x-model="query"
        placeholder="Search for services, articles, or help..."
        class="w-full px-6 py-4 bg-gray-900 border border-gray-800 rounded-lg focus:outline-none focus:border-green-500 pr-12">
      <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-green-400 transition">
        <i class="fas fa-search text-xl"></i>
      </button>
    </form>
  </div>
</section>

<!-- Search Results -->
<section class="py-12" x-data="{
        activeTab: 'all',
        query: new URLSearchParams(window.location.search).get('q') || ''
    }">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Results Info -->
    <div class="mb-8">
      <p class="text-gray-400">
        Found <span class="text-white font-semibold">47 results</span> for
        <span class="text-green-400 font-semibold" x-text="query || 'your search'"></span>
      </p>
    </div>

    <!-- Filter Tabs -->
    <div class="flex gap-4 mb-8 border-b border-gray-800 overflow-x-auto">
      <button @click="activeTab = 'all'" :class="activeTab === 'all' ? 'text-green-400 border-green-400' : 'text-gray-400 border-transparent'" class="pb-4 border-b-2 transition whitespace-nowrap">
        All Results (47)
      </button>
      <button @click="activeTab = 'services'" :class="activeTab === 'services' ? 'text-green-400 border-green-400' : 'text-gray-400 border-transparent'" class="pb-4 border-b-2 transition whitespace-nowrap">
        Services (12)
      </button>
      <button @click="activeTab = 'articles'" :class="activeTab === 'articles' ? 'text-green-400 border-green-400' : 'text-gray-400 border-transparent'" class="pb-4 border-b-2 transition whitespace-nowrap">
        Articles (28)
      </button>
      <button @click="activeTab = 'products'" :class="activeTab === 'products' ? 'text-green-400 border-green-400' : 'text-gray-400 border-transparent'" class="pb-4 border-b-2 transition whitespace-nowrap">
        Products (7)
      </button>
    </div>

    <!-- Results Grid -->
    <div class="space-y-6">
      <!-- Service Result -->
      <article class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-green-500/50 transition">
        <div class="flex items-start gap-4">
          <div class="bg-green-600/20 p-3 rounded-lg">
            <i class="fas fa-sms text-2xl text-green-400"></i>
          </div>
          <div class="flex-1">
            <span class="text-xs text-gray-400 uppercase tracking-wide">Service</span>
            <h3 class="text-xl font-semibold mb-2 mt-1">
              <a href="service-sms.html" class="hover:text-green-400 transition">SMS Panel Manager</a>
            </h3>
            <p class="text-gray-400 mb-4">
              Enterprise-grade SMS messaging platform with bulk sending, automation, and analytics. Send up to 1M messages per day with 99.9% delivery rate.
            </p>
            <div class="flex items-center gap-4 text-sm text-gray-500">
              <span><i class="fas fa-tag mr-2"></i>Starting at $29/mo</span>
              <span><i class="fas fa-star mr-2"></i>4.8 rating</span>
            </div>
          </div>
        </div>
      </article>

      <!-- Product Result -->
      <article class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-green-500/50 transition">
        <div class="flex items-start gap-4">
          <div class="bg-green-600/20 p-3 rounded-lg">
            <i class="fas fa-server text-2xl text-green-400"></i>
          </div>
          <div class="flex-1">
            <span class="text-xs text-gray-400 uppercase tracking-wide">Product</span>
            <h3 class="text-xl font-semibold mb-2 mt-1">
              <a href="single-product.html" class="hover:text-green-400 transition">Cloud Hosting Pro</a>
            </h3>
            <p class="text-gray-400 mb-4">
              High-performance cloud hosting with SSD storage, free SSL, and 24/7 support. Perfect for growing businesses and e-commerce sites.
            </p>
            <div class="flex items-center gap-4 text-sm text-gray-500">
              <span><i class="fas fa-dollar-sign mr-2"></i>$49.99/mo</span>
              <span><i class="fas fa-box mr-2"></i>In Stock</span>
            </div>
          </div>
        </div>
      </article>

      <!-- Blog Result -->
      <article class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-green-500/50 transition">
        <div class="flex items-start gap-4">
          <div class="bg-green-600/20 p-3 rounded-lg">
            <i class="fas fa-newspaper text-2xl text-green-400"></i>
          </div>
          <div class="flex-1">
            <span class="text-xs text-gray-400 uppercase tracking-wide">Blog Article</span>
            <h3 class="text-xl font-semibold mb-2 mt-1">
              <a href="blog-post.html" class="hover:text-green-400 transition">How to Choose the Right Hosting Plan</a>
            </h3>
            <p class="text-gray-400 mb-4">
              ...complete guide to selecting the perfect <mark class="bg-green-500/20 text-green-300 px-1">hosting</mark> solution for your business needs. Learn about shared, VPS, and dedicated <mark class="bg-green-500/20 text-green-300 px-1">hosting</mark> options...
            </p>
            <div class="flex items-center gap-4 text-sm text-gray-500">
              <span><i class="far fa-calendar mr-2"></i>Jan 15, 2025</span>
              <span><i class="far fa-clock mr-2"></i>8 min read</span>
              <span><i class="far fa-user mr-2"></i>John Smith</span>
            </div>
          </div>
        </div>
      </article>

      <!-- Service Result -->
      <article class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-green-500/50 transition">
        <div class="flex items-start gap-4">
          <div class="bg-green-600/20 p-3 rounded-lg">
            <i class="fas fa-globe text-2xl text-green-400"></i>
          </div>
          <div class="flex-1">
            <span class="text-xs text-gray-400 uppercase tracking-wide">Service</span>
            <h3 class="text-xl font-semibold mb-2 mt-1">
              <a href="service-domains.html" class="hover:text-green-400 transition">Domain Registration</a>
            </h3>
            <p class="text-gray-400 mb-4">
              Register your perfect domain name with over 500+ TLDs available. Includes free WHOIS privacy and DNS management.
            </p>
            <div class="flex items-center gap-4 text-sm text-gray-500">
              <span><i class="fas fa-tag mr-2"></i>Starting at $9.99/yr</span>
              <span><i class="fas fa-shield-alt mr-2"></i>Free Privacy</span>
            </div>
          </div>
        </div>
      </article>

      <!-- Blog Result -->
      <article class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-green-500/50 transition">
        <div class="flex items-start gap-4">
          <div class="bg-green-600/20 p-3 rounded-lg">
            <i class="fas fa-newspaper text-2xl text-green-400"></i>
          </div>
          <div class="flex-1">
            <span class="text-xs text-gray-400 uppercase tracking-wide">Blog Article</span>
            <h3 class="text-xl font-semibold mb-2 mt-1">
              <a href="blog-post.html" class="hover:text-green-400 transition">SMS Marketing Best Practices</a>
            </h3>
            <p class="text-gray-400 mb-4">
              ...effective <mark class="bg-green-500/20 text-green-300 px-1">SMS</mark> campaigns that engage customers and drive conversions. Discover the optimal sending times, message length, and personalization techniques...
            </p>
            <div class="flex items-center gap-4 text-sm text-gray-500">
              <span><i class="far fa-calendar mr-2"></i>Jan 10, 2025</span>
              <span><i class="far fa-clock mr-2"></i>6 min read</span>
              <span><i class="far fa-user mr-2"></i>John Smith</span>
            </div>
          </div>
        </div>
      </article>

      <!-- Product Result -->
      <article class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-green-500/50 transition">
        <div class="flex items-start gap-4">
          <div class="bg-green-600/20 p-3 rounded-lg">
            <i class="fas fa-database text-2xl text-green-400"></i>
          </div>
          <div class="flex-1">
            <span class="text-xs text-gray-400 uppercase tracking-wide">Product</span>
            <h3 class="text-xl font-semibold mb-2 mt-1">
              <a href="single-product.html" class="hover:text-green-400 transition">VPS Hosting Enterprise</a>
            </h3>
            <p class="text-gray-400 mb-4">
              Dedicated resources with full root access. 16GB RAM, 320GB SSD, unlimited bandwidth. Perfect for high-traffic applications.
            </p>
            <div class="flex items-center gap-4 text-sm text-gray-500">
              <span><i class="fas fa-dollar-sign mr-2"></i>$99.99/mo</span>
              <span><i class="fas fa-box mr-2"></i>In Stock</span>
            </div>
          </div>
        </div>
      </article>

      <!-- Blog Result -->
      <article class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-green-500/50 transition">
        <div class="flex items-start gap-4">
          <div class="bg-green-600/20 p-3 rounded-lg">
            <i class="fas fa-newspaper text-2xl text-green-400"></i>
          </div>
          <div class="flex-1">
            <span class="text-xs text-gray-400 uppercase tracking-wide">Blog Article</span>
            <h3 class="text-xl font-semibold mb-2 mt-1">
              <a href="blog-post.html" class="hover:text-green-400 transition">Domain Name Selection Guide</a>
            </h3>
            <p class="text-gray-400 mb-4">
              ...choosing a <mark class="bg-green-500/20 text-green-300 px-1">domain</mark> name that boosts your brand and SEO performance. Learn about TLD selection, keyword optimization, and brandability...
            </p>
            <div class="flex items-center gap-4 text-sm text-gray-500">
              <span><i class="far fa-calendar mr-2"></i>Jan 5, 2025</span>
              <span><i class="far fa-clock mr-2"></i>5 min read</span>
              <span><i class="far fa-user mr-2"></i>John Smith</span>
            </div>
          </div>
        </div>
      </article>

      <!-- Service Result -->
      <article class="bg-gray-900 border border-gray-800 rounded-xl p-6 hover:border-green-500/50 transition">
        <div class="flex items-start gap-4">
          <div class="bg-green-600/20 p-3 rounded-lg">
            <i class="fas fa-server text-2xl text-green-400"></i>
          </div>
          <div class="flex-1">
            <span class="text-xs text-gray-400 uppercase tracking-wide">Service</span>
            <h3 class="text-xl font-semibold mb-2 mt-1">
              <a href="service-hosting.html" class="hover:text-green-400 transition">Web Hosting Solutions</a>
            </h3>
            <p class="text-gray-400 mb-4">
              Fast, reliable web hosting with 99.9% uptime guarantee. Choose from shared, VPS, or dedicated hosting solutions.
            </p>
            <div class="flex items-center gap-4 text-sm text-gray-500">
              <span><i class="fas fa-tag mr-2"></i>Starting at $4.99/mo</span>
              <span><i class="fas fa-star mr-2"></i>4.9 rating</span>
            </div>
          </div>
        </div>
      </article>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center items-center gap-2 mt-12">
      <button class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition" disabled>
        <i class="fas fa-chevron-left"></i>
      </button>
      <button class="px-4 py-2 bg-green-600 rounded-lg">1</button>
      <button class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">2</button>
      <button class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">3</button>
      <span class="px-4 py-2 text-gray-400">...</span>
      <button class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">10</button>
      <button class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<!-- Popular Searches -->
<section class="py-16 bg-gray-900">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold mb-6">Popular Searches</h2>
    <div class="flex flex-wrap gap-3">
      <a href="?q=hosting" class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">Web Hosting</a>
      <a href="?q=domain" class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">Domain Registration</a>
      <a href="?q=sms" class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">SMS Marketing</a>
      <a href="?q=vps" class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">VPS Hosting</a>
      <a href="?q=ssl" class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">SSL Certificate</a>
      <a href="?q=email" class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">Email Hosting</a>
      <a href="?q=cloud" class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">Cloud Solutions</a>
      <a href="?q=migration" class="px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">Website Migration</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
