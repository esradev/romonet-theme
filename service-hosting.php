<?php
/* Template Name: Service Hosting */
get_header(); ?>

<!-- example react component -->
<!-- <div id="render-react-example-here"></div> -->
<!-- end example react component -->

<!-- Hero Section -->
<section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-green-500/10 border border-green-500/20 rounded-full text-green-400 text-sm mb-6">
          <i class="fas fa-server"></i>
          <span>Hosting Services</span>
        </div>
        <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight text-balance">
          Reliable & Fast <span class="text-green-400">Web Hosting</span>
        </h1>
        <p class="text-xl text-slate-400 mb-8 leading-relaxed">
          Experience blazing-fast performance with our enterprise-grade hosting solutions. 99.9% uptime guaranteed with 24/7 support.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#pricing" class="px-8 py-4 bg-linear-to-r from-green-600 to-green-600 hover:from-green-700 hover:to-green-700 rounded-lg font-semibold transition-all">
            View Plans
          </a>
          <a href="contact.html" class="px-8 py-4 border border-slate-700 hover:border-green-500 rounded-lg font-semibold transition-colors">
            Contact Sales
          </a>
        </div>
      </div>
      <div class="relative">
        <div class="absolute inset-0 bg-linear-to-br from-green-500/20 to-green-500/20 rounded-2xl blur-3xl"></div>
        <img src="/placeholder.svg?height=500&width=600" alt="Hosting Services" class="relative rounded-2xl border border-slate-800">
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-slate-900/50">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Powerful Hosting Features</h2>
      <p class="text-xl text-slate-400">Everything you need to run your website successfully</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-green-500/50 transition-colors">
        <div class="w-14 h-14 bg-green-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-bolt text-green-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Lightning Fast SSD</h3>
        <p class="text-slate-400 leading-relaxed">Pure SSD storage with NVMe technology for ultimate speed and performance.</p>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-green-500/50 transition-colors">
        <div class="w-14 h-14 bg-green-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-shield-alt text-green-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Free SSL Certificates</h3>
        <p class="text-slate-400 leading-relaxed">Secure your website with free Let's Encrypt SSL certificates.</p>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-green-500/50 transition-colors">
        <div class="w-14 h-14 bg-green-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-cloud text-green-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Daily Backups</h3>
        <p class="text-slate-400 leading-relaxed">Automatic daily backups with one-click restore functionality.</p>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-green-500/50 transition-colors">
        <div class="w-14 h-14 bg-green-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-tachometer-alt text-green-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">cPanel Control</h3>
        <p class="text-slate-400 leading-relaxed">Industry-leading cPanel for easy website management.</p>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-green-500/50 transition-colors">
        <div class="w-14 h-14 bg-green-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-headset text-green-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">24/7 Support</h3>
        <p class="text-slate-400 leading-relaxed">Round-the-clock expert support via chat, email, and phone.</p>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-green-500/50 transition-colors">
        <div class="w-14 h-14 bg-green-500/10 rounded-lg flex items-center justify-center mb-6">
          <i class="fas fa-infinity text-green-400 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Unlimited Bandwidth</h3>
        <p class="text-slate-400 leading-relaxed">No traffic limits - handle as many visitors as you need.</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Hosting Plans</h2>
      <p class="text-xl text-slate-400">Choose the perfect plan for your needs</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Starter Plan -->
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-green-500/50 transition-colors">
        <h3 class="text-2xl font-bold mb-2">Starter</h3>
        <p class="text-slate-400 mb-6">Perfect for personal websites</p>
        <div class="mb-6">
          <span class="text-5xl font-bold">$4.99</span>
          <span class="text-slate-400">/month</span>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">10 GB SSD Storage</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">1 Website</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Free SSL Certificate</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Unlimited Bandwidth</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Daily Backups</span>
          </li>
        </ul>
        <button onclick="addToCart('Hosting Starter', 4.99)" class="w-full px-6 py-3 border border-slate-700 hover:border-green-500 hover:bg-green-500/10 rounded-lg font-semibold transition-colors">
          Add to Cart
        </button>
      </div>

      <!-- Business Plan -->
      <div class="bg-linear-to-br from-green-900/20 to-green-900/20 border-2 border-green-500 rounded-xl p-8 relative">
        <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 bg-green-500 text-white text-sm font-semibold rounded-full">
          POPULAR
        </div>
        <h3 class="text-2xl font-bold mb-2">Business</h3>
        <p class="text-slate-400 mb-6">Great for growing businesses</p>
        <div class="mb-6">
          <span class="text-5xl font-bold">$9.99</span>
          <span class="text-slate-400">/month</span>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">50 GB SSD Storage</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">5 Websites</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Free SSL Certificate</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Unlimited Bandwidth</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Daily Backups</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Priority Support</span>
          </li>
        </ul>
        <button onclick="addToCart('Hosting Business', 9.99)" class="w-full px-6 py-3 bg-linear-to-r from-green-600 to-green-600 hover:from-green-700 hover:to-green-700 rounded-lg font-semibold transition-all">
          Add to Cart
        </button>
      </div>

      <!-- Enterprise Plan -->
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-green-500/50 transition-colors">
        <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
        <p class="text-slate-400 mb-6">For large-scale operations</p>
        <div class="mb-6">
          <span class="text-5xl font-bold">$24.99</span>
          <span class="text-slate-400">/month</span>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">200 GB SSD Storage</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Unlimited Websites</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Free SSL Certificate</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Unlimited Bandwidth</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Daily Backups</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Dedicated Support</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Free Domain</span>
          </li>
        </ul>
        <button onclick="addToCart('Hosting Enterprise', 24.99)" class="w-full px-6 py-3 border border-slate-700 hover:border-green-500 hover:bg-green-500/10 rounded-lg font-semibold transition-colors">
          Add to Cart
        </button>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-linear-to-br from-green-900/20 to-green-900/20">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-6 text-balance">Ready to Get Started?</h2>
    <p class="text-xl text-slate-400 mb-8 leading-relaxed">
      Join thousands of satisfied customers and experience the best hosting service today.
    </p>
    <div class="flex flex-wrap gap-4 justify-center">
      <a href="#pricing" class="px-8 py-4 bg-linear-to-r from-green-600 to-green-600 hover:from-green-700 hover:to-green-700 rounded-lg font-semibold transition-all">
        Choose a Plan
      </a>
      <a href="contact.html" class="px-8 py-4 border border-slate-700 hover:border-green-500 rounded-lg font-semibold transition-colors">
        Talk to Sales
      </a>
    </div>
  </div>
</section>

<?php get_footer();
