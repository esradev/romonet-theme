<?php
/* Template Name: Blog */
get_header();
?>

<!-- Hero Section -->
<section class="pt-32 pb-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto text-center">
    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight text-balance">
      Latest News & <span class="text-sky-400">Insights</span>
    </h1>
    <p class="text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed">
      Stay updated with the latest trends in SMS, hosting, and domain management.
    </p>
  </div>
</section>

<!-- Featured Post -->
<section class="py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-sky-500/50 transition-colors">
      <div class="grid lg:grid-cols-2 gap-0">
        <div class="relative h-64 lg:h-auto">
          <img src="/placeholder.svg?height=400&width=600" alt="Featured Post" class="w-full h-full object-cover">
          <div class="absolute top-4 left-4">
            <span class="px-3 py-1 bg-sky-500 text-white text-sm font-semibold rounded-full">Featured</span>
          </div>
        </div>
        <div class="p-8 lg:p-12 flex flex-col justify-center">
          <div class="flex items-center gap-4 text-sm text-slate-400 mb-4">
            <span>January 15, 2024</span>
            <span>•</span>
            <span>5 min read</span>
          </div>
          <h2 class="text-3xl md:text-4xl font-bold mb-4 text-balance">The Future of Cloud Communication Services</h2>
          <p class="text-slate-400 mb-6 leading-relaxed">
            Discover how cloud-based communication is transforming businesses worldwide. Learn about the latest trends in SMS API integration, hosting solutions, and digital infrastructure.
          </p>
          <a href="#" class="inline-flex items-center gap-2 text-sky-400 hover:text-sky-300 font-semibold transition-colors">
            Read More <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Blog Posts Grid -->
<section class="py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Blog Post 1 -->
      <article class="bg-slate-900 border border-slate-800 rounded-xl overflow-hidden hover:border-sky-500/50 transition-colors">
        <img src="/placeholder.svg?height=250&width=400" alt="SMS Guide" class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="flex items-center gap-2 mb-3">
            <span class="px-3 py-1 bg-sky-500/10 text-sky-400 text-xs font-semibold rounded-full">SMS</span>
            <span class="text-sm text-slate-400">Jan 12, 2024</span>
          </div>
          <h3 class="text-xl font-bold mb-3 text-balance">Complete Guide to SMS API Integration</h3>
          <p class="text-slate-400 mb-4 leading-relaxed">Learn how to integrate SMS capabilities into your application with our comprehensive guide.</p>
          <a href="#" class="inline-flex items-center gap-2 text-sky-400 hover:text-sky-300 font-semibold transition-colors">
            Read More <i class="fas fa-arrow-right text-sm"></i>
          </a>
        </div>
      </article>

      <!-- Blog Post 2 -->
      <article class="bg-slate-900 border border-slate-800 rounded-xl overflow-hidden hover:border-sky-500/50 transition-colors">
        <img src="/placeholder.svg?height=250&width=400" alt="Hosting Tips" class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="flex items-center gap-2 mb-3">
            <span class="px-3 py-1 bg-sky-500/10 text-sky-400 text-xs font-semibold rounded-full">Hosting</span>
            <span class="text-sm text-slate-400">Jan 10, 2024</span>
          </div>
          <h3 class="text-xl font-bold mb-3 text-balance">10 Tips for Optimizing Your Website Performance</h3>
          <p class="text-slate-400 mb-4 leading-relaxed">Boost your website speed and user experience with these proven optimization techniques.</p>
          <a href="#" class="inline-flex items-center gap-2 text-sky-400 hover:text-sky-300 font-semibold transition-colors">
            Read More <i class="fas fa-arrow-right text-sm"></i>
          </a>
        </div>
      </article>

      <!-- Blog Post 3 -->
      <article class="bg-slate-900 border border-slate-800 rounded-xl overflow-hidden hover:border-sky-500/50 transition-colors">
        <img src="/placeholder.svg?height=250&width=400" alt="Domain Tips" class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="flex items-center gap-2 mb-3">
            <span class="px-3 py-1 bg-sky-500/10 text-sky-400 text-xs font-semibold rounded-full">Domains</span>
            <span class="text-sm text-slate-400">Jan 8, 2024</span>
          </div>
          <h3 class="text-xl font-bold mb-3 text-balance">Choosing the Perfect Domain Name for Your Business</h3>
          <p class="text-slate-400 mb-4 leading-relaxed">Expert tips on selecting a memorable and effective domain name that represents your brand.</p>
          <a href="#" class="inline-flex items-center gap-2 text-sky-400 hover:text-sky-300 font-semibold transition-colors">
            Read More <i class="fas fa-arrow-right text-sm"></i>
          </a>
        </div>
      </article>

      <!-- Blog Post 4 -->
      <article class="bg-slate-900 border border-slate-800 rounded-xl overflow-hidden hover:border-sky-500/50 transition-colors">
        <img src="/placeholder.svg?height=250&width=400" alt="Security" class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="flex items-center gap-2 mb-3">
            <span class="px-3 py-1 bg-red-500/10 text-red-400 text-xs font-semibold rounded-full">Security</span>
            <span class="text-sm text-slate-400">Jan 5, 2024</span>
          </div>
          <h3 class="text-xl font-bold mb-3 text-balance">Essential Security Practices for Your Website</h3>
          <p class="text-slate-400 mb-4 leading-relaxed">Protect your online presence with these critical security measures and best practices.</p>
          <a href="#" class="inline-flex items-center gap-2 text-sky-400 hover:text-sky-300 font-semibold transition-colors">
            Read More <i class="fas fa-arrow-right text-sm"></i>
          </a>
        </div>
      </article>

      <!-- Blog Post 5 -->
      <article class="bg-slate-900 border border-slate-800 rounded-xl overflow-hidden hover:border-sky-500/50 transition-colors">
        <img src="/placeholder.svg?height=250&width=400" alt="Business" class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="flex items-center gap-2 mb-3">
            <span class="px-3 py-1 bg-purple-500/10 text-purple-400 text-xs font-semibold rounded-full">Business</span>
            <span class="text-sm text-slate-400">Jan 3, 2024</span>
          </div>
          <h3 class="text-xl font-bold mb-3 text-balance">How SMS Marketing Can Grow Your Business</h3>
          <p class="text-slate-400 mb-4 leading-relaxed">Discover the power of SMS marketing and how it can drive engagement and sales.</p>
          <a href="#" class="inline-flex items-center gap-2 text-sky-400 hover:text-sky-300 font-semibold transition-colors">
            Read More <i class="fas fa-arrow-right text-sm"></i>
          </a>
        </div>
      </article>

      <!-- Blog Post 6 -->
      <article class="bg-slate-900 border border-slate-800 rounded-xl overflow-hidden hover:border-sky-500/50 transition-colors">
        <img src="/placeholder.svg?height=250&width=400" alt="Cloud" class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="flex items-center gap-2 mb-3">
            <span class="px-3 py-1 bg-sky-500/10 text-sky-400 text-xs font-semibold rounded-full">Cloud</span>
            <span class="text-sm text-slate-400">Dec 28, 2023</span>
          </div>
          <h3 class="text-xl font-bold mb-3 text-balance">Migrating to Cloud Hosting: A Step-by-Step Guide</h3>
          <p class="text-slate-400 mb-4 leading-relaxed">Everything you need to know about moving your infrastructure to the cloud successfully.</p>
          <a href="#" class="inline-flex items-center gap-2 text-sky-400 hover:text-sky-300 font-semibold transition-colors">
            Read More <i class="fas fa-arrow-right text-sm"></i>
          </a>
        </div>
      </article>
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-center gap-2 mt-12">
      <button class="px-4 py-2 border border-slate-700 rounded-lg hover:border-sky-500 transition-colors">
        <i class="fas fa-chevron-left"></i>
      </button>
      <button class="px-4 py-2 bg-sky-600 rounded-lg">1</button>
      <button class="px-4 py-2 border border-slate-700 rounded-lg hover:border-sky-500 transition-colors">2</button>
      <button class="px-4 py-2 border border-slate-700 rounded-lg hover:border-sky-500 transition-colors">3</button>
      <button class="px-4 py-2 border border-slate-700 rounded-lg hover:border-sky-500 transition-colors">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<!-- Newsletter Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-linear-to-br from-sky-900/20 to-sky-900/20">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-6 text-balance">Subscribe to Our Newsletter</h2>
    <p class="text-xl text-slate-400 mb-8 leading-relaxed">
      Get the latest updates, tips, and insights delivered to your inbox.
    </p>
    <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
      <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-4 bg-slate-900 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
      <button type="submit" class="px-8 py-4 bg-linear-to-r from-sky-600 to-sky-600 hover:from-sky-700 hover:to-sky-700 rounded-lg font-semibold transition-all">
        Subscribe
      </button>
    </form>
  </div>
</section>

<?php get_footer();
