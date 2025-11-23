<?php get_header(); ?>

<!-- Author Hero -->
<section class="bg-linear-to-br from-gray-900 via-gray-900 to-sky-900/20 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row items-center gap-8">
      <img src="/placeholder.svg?height=200&width=200" alt="John Smith" class="w-48 h-48 rounded-full border-4 border-sky-500/30">

      <div class="flex-1 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">John Smith</h1>
        <p class="text-xl text-gray-400 mb-6">Senior Cloud Architect & Technical Writer</p>
        <p class="text-gray-300 leading-relaxed max-w-3xl mb-6">
          With over 10 years of experience in cloud infrastructure and hosting solutions, John specializes in helping businesses scale their digital presence. He's passionate about making complex technical concepts accessible to everyone.
        </p>

        <div class="flex flex-wrap gap-4 justify-center md:justify-start">
          <a href="#" class="text-gray-400 hover:text-sky-400 transition">
            <i class="fab fa-twitter text-2xl"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-sky-400 transition">
            <i class="fab fa-linkedin text-2xl"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-sky-400 transition">
            <i class="fab fa-github text-2xl"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-sky-400 transition">
            <i class="fas fa-globe text-2xl"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
      <div class="bg-gray-800/50 p-6 rounded-xl text-center">
        <div class="text-3xl font-bold text-sky-400 mb-2">127</div>
        <div class="text-gray-400">Articles</div>
      </div>
      <div class="bg-gray-800/50 p-6 rounded-xl text-center">
        <div class="text-3xl font-bold text-sky-400 mb-2">45K</div>
        <div class="text-gray-400">Readers</div>
      </div>
      <div class="bg-gray-800/50 p-6 rounded-xl text-center">
        <div class="text-3xl font-bold text-sky-400 mb-2">892</div>
        <div class="text-gray-400">Comments</div>
      </div>
      <div class="bg-gray-800/50 p-6 rounded-xl text-center">
        <div class="text-3xl font-bold text-sky-400 mb-2">10+</div>
        <div class="text-gray-400">Years Exp</div>
      </div>
    </div>
  </div>
</section>

<!-- Expertise Areas -->
<section class="py-16 bg-gray-900">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold mb-8">Areas of Expertise</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-gray-800/50 p-6 rounded-xl">
        <i class="fas fa-cloud text-4xl text-sky-400 mb-4"></i>
        <h3 class="text-xl font-semibold mb-3">Cloud Architecture</h3>
        <p class="text-gray-400">Designing scalable and resilient cloud infrastructure solutions for businesses of all sizes.</p>
      </div>
      <div class="bg-gray-800/50 p-6 rounded-xl">
        <i class="fas fa-server text-4xl text-sky-400 mb-4"></i>
        <h3 class="text-xl font-semibold mb-3">Hosting Solutions</h3>
        <p class="text-gray-400">Expert knowledge in web hosting, VPS, dedicated servers, and cloud hosting platforms.</p>
      </div>
      <div class="bg-gray-800/50 p-6 rounded-xl">
        <i class="fas fa-shield-alt text-4xl text-sky-400 mb-4"></i>
        <h3 class="text-xl font-semibold mb-3">Security & Performance</h3>
        <p class="text-gray-400">Implementing best practices for security, optimization, and high-performance delivery.</p>
      </div>
    </div>
  </div>
</section>

<!-- Recent Articles -->
<section class="py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-12">
      <h2 class="text-3xl font-bold">Recent Articles by John</h2>
      <a href="blog.html" class="text-sky-400 hover:text-sky-300 transition">View All <i class="fas fa-arrow-right ml-2"></i></a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Article 1 -->
      <article class="bg-gray-900 rounded-xl overflow-hidden border border-gray-800 hover:border-sky-500/50 transition group">
        <img src="/placeholder.svg?height=300&width=400" alt="Article" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
        <div class="p-6">
          <div class="flex items-center gap-4 text-sm text-gray-400 mb-3">
            <span><i class="far fa-calendar mr-2"></i>Jan 15, 2025</span>
            <span><i class="far fa-clock mr-2"></i>8 min read</span>
          </div>
          <h3 class="text-xl font-semibold mb-3 group-hover:text-sky-400 transition">
            <a href="blog-post.html">How to Choose the Right Hosting Plan</a>
          </h3>
          <p class="text-gray-400 mb-4">A comprehensive guide to selecting the perfect hosting solution for your business needs and budget.</p>
          <a href="blog-post.html" class="text-sky-400 hover:text-sky-300 transition inline-flex items-center">
            Read More <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </article>

      <!-- Article 2 -->
      <article class="bg-gray-900 rounded-xl overflow-hidden border border-gray-800 hover:border-sky-500/50 transition group">
        <img src="/placeholder.svg?height=300&width=400" alt="Article" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
        <div class="p-6">
          <div class="flex items-center gap-4 text-sm text-gray-400 mb-3">
            <span><i class="far fa-calendar mr-2"></i>Jan 10, 2025</span>
            <span><i class="far fa-clock mr-2"></i>6 min read</span>
          </div>
          <h3 class="text-xl font-semibold mb-3 group-hover:text-sky-400 transition">
            <a href="blog-post.html">SMS Marketing Best Practices</a>
          </h3>
          <p class="text-gray-400 mb-4">Learn how to create effective SMS campaigns that engage customers and drive conversions.</p>
          <a href="blog-post.html" class="text-sky-400 hover:text-sky-300 transition inline-flex items-center">
            Read More <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </article>

      <!-- Article 3 -->
      <article class="bg-gray-900 rounded-xl overflow-hidden border border-gray-800 hover:border-sky-500/50 transition group">
        <img src="/placeholder.svg?height=300&width=400" alt="Article" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
        <div class="p-6">
          <div class="flex items-center gap-4 text-sm text-gray-400 mb-3">
            <span><i class="far fa-calendar mr-2"></i>Jan 5, 2025</span>
            <span><i class="far fa-clock mr-2"></i>5 min read</span>
          </div>
          <h3 class="text-xl font-semibold mb-3 group-hover:text-sky-400 transition">
            <a href="blog-post.html">Domain Name Selection Guide</a>
          </h3>
          <p class="text-gray-400 mb-4">Essential tips for choosing a domain name that boosts your brand and SEO performance.</p>
          <a href="blog-post.html" class="text-sky-400 hover:text-sky-300 transition inline-flex items-center">
            Read More <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </article>

      <!-- Article 4 -->
      <article class="bg-gray-900 rounded-xl overflow-hidden border border-gray-800 hover:border-sky-500/50 transition group">
        <img src="/placeholder.svg?height=300&width=400" alt="Article" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
        <div class="p-6">
          <div class="flex items-center gap-4 text-sm text-gray-400 mb-3">
            <span><i class="far fa-calendar mr-2"></i>Dec 28, 2024</span>
            <span><i class="far fa-clock mr-2"></i>10 min read</span>
          </div>
          <h3 class="text-xl font-semibold mb-3 group-hover:text-sky-400 transition">
            <a href="blog-post.html">Website Security Essentials</a>
          </h3>
          <p class="text-gray-400 mb-4">Protect your website with these critical security measures every site owner should implement.</p>
          <a href="blog-post.html" class="text-sky-400 hover:text-sky-300 transition inline-flex items-center">
            Read More <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </article>

      <!-- Article 5 -->
      <article class="bg-gray-900 rounded-xl overflow-hidden border border-gray-800 hover:border-sky-500/50 transition group">
        <img src="/placeholder.svg?height=300&width=400" alt="Article" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
        <div class="p-6">
          <div class="flex items-center gap-4 text-sm text-gray-400 mb-3">
            <span><i class="far fa-calendar mr-2"></i>Dec 20, 2024</span>
            <span><i class="far fa-clock mr-2"></i>12 min read</span>
          </div>
          <h3 class="text-xl font-semibold mb-3 group-hover:text-sky-400 transition">
            <a href="blog-post.html">Cloud Migration Strategies</a>
          </h3>
          <p class="text-gray-400 mb-4">A step-by-step approach to successfully migrating your infrastructure to the cloud.</p>
          <a href="blog-post.html" class="text-sky-400 hover:text-sky-300 transition inline-flex items-center">
            Read More <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </article>

      <!-- Article 6 -->
      <article class="bg-gray-900 rounded-xl overflow-hidden border border-gray-800 hover:border-sky-500/50 transition group">
        <img src="/placeholder.svg?height=300&width=400" alt="Article" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
        <div class="p-6">
          <div class="flex items-center gap-4 text-sm text-gray-400 mb-3">
            <span><i class="far fa-calendar mr-2"></i>Dec 15, 2024</span>
            <span><i class="far fa-clock mr-2"></i>7 min read</span>
          </div>
          <h3 class="text-xl font-semibold mb-3 group-hover:text-sky-400 transition">
            <a href="blog-post.html">Performance Optimization Tips</a>
          </h3>
          <p class="text-gray-400 mb-4">Boost your website speed and user experience with these proven optimization techniques.</p>
          <a href="blog-post.html" class="text-sky-400 hover:text-sky-300 transition inline-flex items-center">
            Read More <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<?php get_footer(); ?>
