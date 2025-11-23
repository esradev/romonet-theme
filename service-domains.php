<?php
/* Template Name: Service Domains */
get_header();
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-sky-500/10 border border-sky-500/20 rounded-full text-sky-400 text-sm mb-6">
          <i class="fas fa-globe"></i>
          <span>Domain Services</span>
        </div>
        <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight text-balance">
          Find Your Perfect <span class="text-sky-400">Domain Name</span>
        </h1>
        <p class="text-xl text-slate-400 mb-8 leading-relaxed">
          Search and register your ideal domain name from hundreds of extensions. Secure your online identity today.
        </p>
        <div class="bg-slate-900 border border-slate-800 rounded-lg p-2 flex gap-2 mb-6" x-data="{ domain: '' }">
          <input x-model="domain" type="text" placeholder="Enter your domain name..." class="flex-1 bg-transparent px-4 py-3 focus:outline-none text-slate-100">
          <button class="px-6 py-3 bg-linear-to-r from-sky-600 to-sky-600 hover:from-sky-700 hover:to-sky-700 rounded-lg font-semibold transition-all">
            Search
          </button>
        </div>
        <p class="text-slate-400 text-sm">Starting from <span class="text-sky-400 font-semibold">$9.99/year</span></p>
      </div>
      <div class="relative">
        <div class="absolute inset-0 bg-linear-to-br from-sky-500/20 to-sky-500/20 rounded-2xl blur-3xl"></div>
        <img src="/placeholder.svg?height=500&width=600" alt="Domain Services" class="relative rounded-2xl border border-slate-800">
      </div>
    </div>
  </div>
</section>

<!-- Popular Extensions -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-slate-900/50">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Popular Domain Extensions</h2>
      <p class="text-xl text-slate-400">Choose from a wide range of domain extensions</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 hover:border-sky-500/50 transition-colors">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-sky-400">.com</span>
          <span class="text-xl font-semibold">$12.99</span>
        </div>
        <p class="text-slate-400 text-sm mb-4">Most popular extension</p>
        <button onclick="addToCart('.com Domain', 12.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg font-semibold transition-colors">
          Add to Cart
        </button>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 hover:border-sky-500/50 transition-colors">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-sky-400">.net</span>
          <span class="text-xl font-semibold">$14.99</span>
        </div>
        <p class="text-slate-400 text-sm mb-4">Perfect for networks</p>
        <button onclick="addToCart('.net Domain', 14.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg font-semibold transition-colors">
          Add to Cart
        </button>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 hover:border-sky-500/50 transition-colors">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-sky-400">.org</span>
          <span class="text-xl font-semibold">$13.99</span>
        </div>
        <p class="text-slate-400 text-sm mb-4">Great for organizations</p>
        <button onclick="addToCart('.org Domain', 13.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg font-semibold transition-colors">
          Add to Cart
        </button>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 hover:border-sky-500/50 transition-colors">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-sky-400">.io</span>
          <span class="text-xl font-semibold">$34.99</span>
        </div>
        <p class="text-slate-400 text-sm mb-4">Tech startups favorite</p>
        <button onclick="addToCart('.io Domain', 34.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg font-semibold transition-colors">
          Add to Cart
        </button>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 hover:border-sky-500/50 transition-colors">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-sky-400">.co</span>
          <span class="text-xl font-semibold">$24.99</span>
        </div>
        <p class="text-slate-400 text-sm mb-4">Business alternative</p>
        <button onclick="addToCart('.co Domain', 24.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg font-semibold transition-colors">
          Add to Cart
        </button>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 hover:border-sky-500/50 transition-colors">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-sky-400">.app</span>
          <span class="text-xl font-semibold">$19.99</span>
        </div>
        <p class="text-slate-400 text-sm mb-4">Ideal for applications</p>
        <button onclick="addToCart('.app Domain', 19.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg font-semibold transition-colors">
          Add to Cart
        </button>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 hover:border-sky-500/50 transition-colors">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-sky-400">.dev</span>
          <span class="text-xl font-semibold">$15.99</span>
        </div>
        <p class="text-slate-400 text-sm mb-4">For developers</p>
        <button onclick="addToCart('.dev Domain', 15.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg font-semibold transition-colors">
          Add to Cart
        </button>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 hover:border-sky-500/50 transition-colors">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-sky-400">.xyz</span>
          <span class="text-xl font-semibold">$9.99</span>
        </div>
        <p class="text-slate-400 text-sm mb-4">Modern and affordable</p>
        <button onclick="addToCart('.xyz Domain', 9.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg font-semibold transition-colors">
          Add to Cart
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Domain Features</h2>
      <p class="text-xl text-slate-400">Everything included with your domain</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-sky-500/50 transition-colors">
        <div class="w-14 h-14 bg-sky-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-shield-alt text-sky-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Free WHOIS Privacy</h3>
        <p class="text-slate-400 leading-relaxed">Protect your personal information from public WHOIS databases.</p>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-sky-500/50 transition-colors">
        <div class="w-14 h-14 bg-sky-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-lock text-sky-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Domain Lock</h3>
        <p class="text-slate-400 leading-relaxed">Secure your domain against unauthorized transfers.</p>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-sky-500/50 transition-colors">
        <div class="w-14 h-14 bg-sky-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-sync text-sky-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Auto-Renewal</h3>
        <p class="text-slate-400 leading-relaxed">Never lose your domain with automatic renewal options.</p>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-sky-500/50 transition-colors">
        <div class="w-14 h-14 bg-sky-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-cog text-sky-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Easy DNS Management</h3>
        <p class="text-slate-400 leading-relaxed">Full control over DNS records with an intuitive interface.</p>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-sky-500/50 transition-colors">
        <div class="w-14 h-14 bg-sky-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-exchange-alt text-sky-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Free Domain Transfer</h3>
        <p class="text-slate-400 leading-relaxed">Transfer your existing domains to us at no extra cost.</p>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-sky-500/50 transition-colors">
        <div class="w-14 h-14 bg-sky-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-headset text-sky-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Expert Support</h3>
        <p class="text-slate-400 leading-relaxed">24/7 support from domain experts for all your needs.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-linear-to-br from-sky-900/20 to-sky-900/20">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-6 text-balance">Secure Your Domain Today</h2>
    <p class="text-xl text-slate-400 mb-8 leading-relaxed">
      Don't wait - register your perfect domain name before someone else does.
    </p>
    <a href="#" class="inline-block px-8 py-4 bg-linear-to-r from-sky-600 to-sky-600 hover:from-sky-700 hover:to-sky-700 rounded-lg font-semibold transition-all">
      Search Domains Now
    </a>
  </div>
</section>

<?php get_footer();
