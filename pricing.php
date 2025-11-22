<?php
/* Template Name: Pricing Page */
get_header();
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto text-center">
    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight text-balance">
      Simple, Transparent <span class="text-green-400">Pricing</span>
    </h1>
    <p class="text-xl text-slate-400 mb-12 max-w-3xl mx-auto leading-relaxed">
      Choose the perfect plan for your needs. All plans include our core features with 24/7 support.
    </p>
    <div class="inline-flex items-center gap-4 p-2 bg-slate-900 border border-slate-800 rounded-lg" x-data="{ billing: 'monthly' }">
      <button @click="billing = 'monthly'" :class="billing === 'monthly' ? 'bg-green-600 text-white' : 'text-slate-400'" class="px-6 py-2 rounded-lg font-semibold transition-colors">
        Monthly
      </button>
      <button @click="billing = 'annual'" :class="billing === 'annual' ? 'bg-green-600 text-white' : 'text-slate-400'" class="px-6 py-2 rounded-lg font-semibold transition-colors">
        Annual <span class="ml-2 text-xs bg-green-500/20 text-green-400 px-2 py-1 rounded">Save 20%</span>
      </button>
    </div>
  </div>
</section>

<!-- SMS Panel Pricing -->
<section class="py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">SMS Panel Manager</h2>
      <p class="text-lg text-slate-400">Scalable SMS solutions for businesses of all sizes</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-green-500/50 transition-colors">
        <h3 class="text-2xl font-bold mb-2">Starter</h3>
        <p class="text-slate-400 mb-6">Perfect for small businesses</p>
        <div class="mb-6">
          <span class="text-5xl font-bold">$29</span>
          <span class="text-slate-400">/month</span>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">5,000 SMS/month</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Basic API Access</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Email Support</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Analytics Dashboard</span>
          </li>
        </ul>
        <button onclick="addToCart('SMS Starter Plan', 29)" class="w-full px-6 py-3 border border-slate-700 hover:border-green-500 hover:bg-green-500/10 rounded-lg font-semibold transition-colors">
          Get Started
        </button>
      </div>

      <div class="bg-linear-to-br from-green-900/20 to-green-900/20 border-2 border-green-500 rounded-xl p-8 relative">
        <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 bg-green-500 text-white text-sm font-semibold rounded-full">
          POPULAR
        </div>
        <h3 class="text-2xl font-bold mb-2">Professional</h3>
        <p class="text-slate-400 mb-6">For growing businesses</p>
        <div class="mb-6">
          <span class="text-5xl font-bold">$79</span>
          <span class="text-slate-400">/month</span>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">25,000 SMS/month</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Advanced API Access</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Priority Support</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Advanced Analytics</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Custom Sender ID</span>
          </li>
        </ul>
        <button onclick="addToCart('SMS Professional Plan', 79)" class="w-full px-6 py-3 bg-linear-to-r from-green-600 to-green-600 hover:from-green-700 hover:to-green-700 rounded-lg font-semibold transition-all">
          Get Started
        </button>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8 hover:border-green-500/50 transition-colors">
        <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
        <p class="text-slate-400 mb-6">For large organizations</p>
        <div class="mb-6">
          <span class="text-5xl font-bold">$199</span>
          <span class="text-slate-400">/month</span>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">100,000 SMS/month</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Full API Access</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Dedicated Support</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">White Label Option</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">Custom Integration</span>
          </li>
          <li class="flex items-center gap-3">
            <i class="fas fa-check text-green-400"></i>
            <span class="text-slate-300">SLA Guarantee</span>
          </li>
        </ul>
        <button onclick="addToCart('SMS Enterprise Plan', 199)" class="w-full px-6 py-3 border border-slate-700 hover:border-green-500 hover:bg-green-500/10 rounded-lg font-semibold transition-colors">
          Get Started
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Hosting Pricing -->
<section class="py-12 px-4 sm:px-6 lg:px-8 bg-slate-900/30">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Web Hosting</h2>
      <p class="text-lg text-slate-400">Fast and reliable hosting solutions</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8">
        <h3 class="text-2xl font-bold mb-2">Basic</h3>
        <div class="mb-6">
          <span class="text-5xl font-bold">$4.99</span>
          <span class="text-slate-400">/month</span>
        </div>
        <ul class="space-y-3 mb-8 text-slate-300">
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> 10 GB Storage</li>
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> 1 Website</li>
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> Free SSL</li>
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> Daily Backups</li>
        </ul>
        <button onclick="addToCart('Hosting Basic', 4.99)" class="w-full px-6 py-3 border border-slate-700 hover:border-green-500 hover:bg-green-500/10 rounded-lg font-semibold transition-colors">
          Get Started
        </button>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8">
        <h3 class="text-2xl font-bold mb-2">Business</h3>
        <div class="mb-6">
          <span class="text-5xl font-bold">$9.99</span>
          <span class="text-slate-400">/month</span>
        </div>
        <ul class="space-y-3 mb-8 text-slate-300">
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> 50 GB Storage</li>
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> 5 Websites</li>
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> Free SSL</li>
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> Priority Support</li>
        </ul>
        <button onclick="addToCart('Hosting Business', 9.99)" class="w-full px-6 py-3 bg-green-600 hover:bg-green-700 rounded-lg font-semibold transition-colors">
          Get Started
        </button>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8">
        <h3 class="text-2xl font-bold mb-2">Premium</h3>
        <div class="mb-6">
          <span class="text-5xl font-bold">$24.99</span>
          <span class="text-slate-400">/month</span>
        </div>
        <ul class="space-y-3 mb-8 text-slate-300">
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> 200 GB Storage</li>
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> Unlimited Websites</li>
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> Free Domain</li>
          <li class="flex items-center gap-3"><i class="fas fa-check text-green-400"></i> Dedicated Support</li>
        </ul>
        <button onclick="addToCart('Hosting Premium', 24.99)" class="w-full px-6 py-3 border border-slate-700 hover:border-green-500 hover:bg-green-500/10 rounded-lg font-semibold transition-colors">
          Get Started
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Domain Pricing -->
<section class="py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Domain Registration</h2>
      <p class="text-lg text-slate-400">Secure your perfect domain name</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-green-400">.com</span>
          <span class="text-xl font-semibold">$12.99</span>
        </div>
        <button onclick="addToCart('.com Domain', 12.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-green-500 rounded-lg transition-colors">
          Register
        </button>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-green-400">.net</span>
          <span class="text-xl font-semibold">$14.99</span>
        </div>
        <button onclick="addToCart('.net Domain', 14.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-green-500 rounded-lg transition-colors">
          Register
        </button>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-green-400">.io</span>
          <span class="text-xl font-semibold">$34.99</span>
        </div>
        <button onclick="addToCart('.io Domain', 34.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-green-500 rounded-lg transition-colors">
          Register
        </button>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="flex items-center justify-between mb-4">
          <span class="text-2xl font-bold text-green-400">.xyz</span>
          <span class="text-xl font-semibold">$9.99</span>
        </div>
        <button onclick="addToCart('.xyz Domain', 9.99)" class="w-full px-4 py-2 border border-slate-700 hover:border-green-500 rounded-lg transition-colors">
          Register
        </button>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-slate-900/30">
  <div class="max-w-3xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Frequently Asked Questions</h2>
    </div>
    <div class="space-y-4" x-data="{ open: null }">
      <div class="bg-slate-900 border border-slate-800 rounded-lg">
        <button @click="open = open === 1 ? null : 1" class="w-full px-6 py-4 flex items-center justify-between text-left">
          <span class="font-semibold">Can I upgrade my plan later?</span>
          <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open === 1 }"></i>
        </button>
        <div x-show="open === 1" x-transition class="px-6 pb-4 text-slate-400">
          Yes, you can upgrade or downgrade your plan at any time. Changes take effect immediately and you'll be prorated for any differences.
        </div>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-lg">
        <button @click="open = open === 2 ? null : 2" class="w-full px-6 py-4 flex items-center justify-between text-left">
          <span class="font-semibold">Do you offer refunds?</span>
          <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open === 2 }"></i>
        </button>
        <div x-show="open === 2" x-transition class="px-6 pb-4 text-slate-400">
          We offer a 30-day money-back guarantee on all hosting and SMS plans. Domain registrations are non-refundable per ICANN policy.
        </div>
      </div>
      <div class="bg-slate-900 border border-slate-800 rounded-lg">
        <button @click="open = open === 3 ? null : 3" class="w-full px-6 py-4 flex items-center justify-between text-left">
          <span class="font-semibold">What payment methods do you accept?</span>
          <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open === 3 }"></i>
        </button>
        <div x-show="open === 3" x-transition class="px-6 pb-4 text-slate-400">
          We accept all major credit cards, PayPal, and bank transfers for annual plans.
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
