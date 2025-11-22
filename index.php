<?php

get_header(); ?>

<!-- Hero Section -->
<section class="relative overflow-hidden">
  <div class="absolute inset-0 bg-linear-to-br from-green-600/10 via-transparent to-green-600/10"></div>
  <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgb(34 197 94 / 0.05) 1px, transparent 0); background-size: 40px 40px;"></div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="inline-flex items-center gap-2 bg-green-500/10 border border-green-500/20 rounded-full px-4 py-2 mb-6">
          <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
          <span class="text-sm text-green-300">Trusted by 50,000+ businesses worldwide</span>
        </div>

        <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6">
          <span class="text-white">Scale Your Business with</span>
          <span class="gradient-text block mt-2">Premium Cloud Services</span>
        </h1>

        <p class="text-xl text-slate-400 leading-relaxed mb-8">
          Everything you need to manage SMS campaigns, host your applications, and register domains. All in one powerful platform.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 mb-12">
          <a href="pricing.html" class="bg-linear-to-r from-green-600 to-green-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-green-500 hover:to-green-500 text-center">
            Start Free Trial
          </a>
          <a href="#features" class="border border-slate-700 text-white px-8 py-4 rounded-lg font-semibold hover:bg-slate-800 text-center">
            Learn More
          </a>
        </div>

        <div class="flex items-center gap-8 text-sm text-slate-400">
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span>No credit card required</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span>24/7 Support</span>
          </div>
        </div>
      </div>

      <div class="relative">
        <div class="absolute inset-0 bg-linear-to-r from-green-600 to-green-600 rounded-2xl blur-3xl opacity-20"></div>
        <div class="relative bg-slate-900 border border-slate-800 rounded-2xl p-8 shadow-2xl">
          <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
              <div class="w-3 h-3 rounded-full bg-red-500"></div>
              <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
              <div class="w-3 h-3 rounded-full bg-green-500"></div>
            </div>
            <span class="text-xs text-slate-500">dashboard.RomoNet.com</span>
          </div>

          <img src="/placeholder.svg?height=400&width=600" alt="Dashboard Preview" class="rounded-lg w-full">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="bg-slate-900/50 border-y border-slate-800 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="text-center">
        <div class="text-4xl lg:text-5xl font-bold gradient-text stat-number mb-2">99.9%</div>
        <div class="text-slate-400">Uptime Guarantee</div>
      </div>
      <div class="text-center">
        <div class="text-4xl lg:text-5xl font-bold gradient-text stat-number mb-2">50K+</div>
        <div class="text-slate-400">Active Users</div>
      </div>
      <div class="text-center">
        <div class="text-4xl lg:text-5xl font-bold gradient-text stat-number mb-2">5M+</div>
        <div class="text-slate-400">Messages Sent</div>
      </div>
      <div class="text-center">
        <div class="text-4xl lg:text-5xl font-bold gradient-text stat-number mb-2">150+</div>
        <div class="text-slate-400">Countries Served</div>
      </div>
    </div>
  </div>
</section>

<!-- Services Overview -->
<section class="py-20 lg:py-32">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
        Complete Cloud Solutions
      </h2>
      <p class="text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
        Powerful tools and services designed to help your business grow and succeed in the digital world.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <!-- SMS Panel -->
      <a href="service-sms.html" class="feature-card group bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:border-green-500/50">
        <div class="w-14 h-14 bg-linear-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
          <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">SMS Panel Manager</h3>
        <p class="text-slate-400 mb-6 leading-relaxed">
          Send bulk SMS, manage campaigns, and reach your customers instantly with our powerful SMS platform.
        </p>
        <div class="flex items-center text-green-400 font-medium group-hover:gap-3 gap-2 transition-all">
          <span>Learn more</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </a>

      <!-- Hosting -->
      <a href="service-hosting.html" class="feature-card group bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:border-green-500/50">
        <div class="w-14 h-14 bg-linear-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
          <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Web Hosting</h3>
        <p class="text-slate-400 mb-6 leading-relaxed">
          Fast, secure, and reliable hosting solutions for your websites and applications with 99.9% uptime.
        </p>
        <div class="flex items-center text-green-400 font-medium group-hover:gap-3 gap-2 transition-all">
          <span>Learn more</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </a>

      <!-- Domains -->
      <a href="service-domains.html" class="feature-card group bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:border-purple-500/50">
        <div class="w-14 h-14 bg-linear-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
          <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Domain Registration</h3>
        <p class="text-slate-400 mb-6 leading-relaxed">
          Register your perfect domain name from hundreds of extensions with easy management tools.
        </p>
        <div class="flex items-center text-purple-400 font-medium group-hover:gap-3 gap-2 transition-all">
          <span>Learn more</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- Features Section -->
<section id="features" class="bg-slate-900/50 py-20 lg:py-32">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
        Why Choose RomoNet?
      </h2>
      <p class="text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
        We provide enterprise-grade features at competitive prices with exceptional support.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="w-12 h-12 bg-green-500/10 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Lightning Fast</h3>
        <p class="text-slate-400 leading-relaxed">
          Experience blazing fast speeds with our optimized infrastructure and global CDN network.
        </p>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="w-12 h-12 bg-green-500/10 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Secure & Reliable</h3>
        <p class="text-slate-400 leading-relaxed">
          Enterprise-grade security with SSL certificates, DDoS protection, and automated backups.
        </p>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="w-12 h-12 bg-purple-500/10 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">24/7 Support</h3>
        <p class="text-slate-400 leading-relaxed">
          Our expert support team is always available to help you with any questions or issues.
        </p>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="w-12 h-12 bg-green-500/10 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Scalable Solutions</h3>
        <p class="text-slate-400 leading-relaxed">
          Scale your resources up or down instantly based on your business needs and traffic.
        </p>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="w-12 h-12 bg-orange-500/10 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Advanced Analytics</h3>
        <p class="text-slate-400 leading-relaxed">
          Track performance with detailed analytics and insights to optimize your campaigns.
        </p>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="w-12 h-12 bg-pink-500/10 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Affordable Pricing</h3>
        <p class="text-slate-400 leading-relaxed">
          Transparent pricing with no hidden fees. Pay only for what you use with flexible plans.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="py-20 lg:py-32">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
        Get Started in Minutes
      </h2>
      <p class="text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
        Simple, straightforward process to launch your services and start growing your business.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
      <div class="relative text-center">
        <div class="w-16 h-16 bg-linear-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-2xl font-bold text-white mx-auto mb-6">
          1
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Create Account</h3>
        <p class="text-slate-400 leading-relaxed">
          Sign up in seconds with your email. No credit card required for the free trial.
        </p>
      </div>

      <div class="relative text-center">
        <div class="w-16 h-16 bg-linear-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-2xl font-bold text-white mx-auto mb-6">
          2
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Choose Your Plan</h3>
        <p class="text-slate-400 leading-relaxed">
          Select the perfect plan for your needs. Upgrade or downgrade anytime with ease.
        </p>
      </div>

      <div class="relative text-center">
        <div class="w-16 h-16 bg-linear-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-2xl font-bold text-white mx-auto mb-6">
          3
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Start Growing</h3>
        <p class="text-slate-400 leading-relaxed">
          Launch your services immediately and watch your business thrive with our tools.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bg-slate-900/50 py-20 lg:py-32">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
        Loved by Thousands
      </h2>
      <p class="text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
        See what our customers have to say about their experience with RomoNet.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8">
        <div class="flex gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
        </div>
        <p class="text-slate-300 mb-6 leading-relaxed">
          "RomoNet's SMS platform has transformed how we communicate with customers. The delivery rate is exceptional and the interface is so easy to use."
        </p>
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 bg-linear-to-br from-green-500 to-green-500 rounded-full flex items-center justify-center text-white font-bold">
            SJ
          </div>
          <div>
            <div class="text-white font-semibold">Sarah Johnson</div>
            <div class="text-sm text-slate-400">Marketing Director</div>
          </div>
        </div>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8">
        <div class="flex gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
        </div>
        <p class="text-slate-300 mb-6 leading-relaxed">
          "The hosting service is incredibly fast and reliable. We migrated all our client sites here and haven't looked back. Support team is top-notch!"
        </p>
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 bg-linear-to-br from-green-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold">
            MC
          </div>
          <div>
            <div class="text-white font-semibold">Michael Chen</div>
            <div class="text-sm text-slate-400">Web Developer</div>
          </div>
        </div>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-8">
        <div class="flex gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
        </div>
        <p class="text-slate-300 mb-6 leading-relaxed">
          "Best value for money! The domain registration process is seamless, and managing multiple domains from one dashboard is a game changer."
        </p>
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 bg-linear-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold">
            EP
          </div>
          <div>
            <div class="text-white font-semibold">Emily Parker</div>
            <div class="text-sm text-slate-400">Business Owner</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 lg:py-32">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-linear-to-r from-green-800/80 to-green-950/80 rounded-3xl p-12 lg:p-16 text-center relative overflow-hidden">
      <div class="absolute inset-0 bg-linear-to-br from-green-600/50 to-green-600/50"></div>
      <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255, 255, 255, 0.1) 1px, transparent 0); background-size: 40px 40px;"></div>

      <div class="relative z-10">
        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
          Ready to Get Started?
        </h2>
        <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto leading-relaxed">
          Join thousands of businesses already using RomoNet to scale their operations.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="pricing.html" class="bg-white text-green-600 px-8 py-4 rounded-lg font-bold hover:bg-green-50 inline-block">
            Start Free Trial
          </a>
          <a href="contact.html" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white/10 inline-block">
            Contact Sales
          </a>
        </div>
        <p class="text-green-100 text-sm mt-6">
          No credit card required • 14-day free trial • Cancel anytime
        </p>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>
