<?php get_header(); ?>

<!-- 404 Content -->
<section class="min-h-screen flex items-center justify-center py-20">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <!-- Large 404 Number -->
    <div class="mb-8">
      <h1 class="text-9xl md:text-[200px] font-bold bg-linear-to-r from-sky-500 via-sky-400 to-sky-500 bg-clip-text text-transparent leading-none">
        404
      </h1>
    </div>

    <!-- Error Icon -->
    <div class="mb-8">
      <i class="fas fa-cloud-exclamation text-6xl text-gray-600"></i>
    </div>

    <!-- Error Message -->
    <h2 class="text-3xl md:text-4xl font-bold mb-4">Page Not Found</h2>
    <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
      Oops! The page you're looking for seems to have drifted away into the cloud. Let's get you back on track.
    </p>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
      <a href="index.html" class="bg-linear-to-r from-sky-600 to-sky-600 px-8 py-3 rounded-lg hover:from-sky-700 hover:to-sky-700 transition inline-flex items-center justify-center">
        <i class="fas fa-home mr-2"></i>
        Go to Homepage
      </a>
      <a href="contact.html" class="bg-gray-800 px-8 py-3 rounded-lg hover:bg-gray-700 transition inline-flex items-center justify-center">
        <i class="fas fa-envelope mr-2"></i>
        Contact Support
      </a>
    </div>

    <!-- Helpful Links -->
    <div class="bg-gray-900 border border-gray-800 rounded-xl p-8 max-w-2xl mx-auto">
      <h3 class="text-xl font-semibold mb-6">Perhaps you were looking for:</h3>
      <div class="grid md:grid-cols-2 gap-4 text-left">
        <a href="services.html" class="flex items-center gap-3 p-4 bg-gray-800/50 rounded-lg hover:bg-gray-800 transition group">
          <i class="fas fa-server text-sky-400 text-2xl"></i>
          <div>
            <div class="font-semibold group-hover:text-sky-400 transition">Our Services</div>
            <div class="text-sm text-gray-400">Browse all services</div>
          </div>
        </a>
        <a href="pricing.html" class="flex items-center gap-3 p-4 bg-gray-800/50 rounded-lg hover:bg-gray-800 transition group">
          <i class="fas fa-tag text-sky-400 text-2xl"></i>
          <div>
            <div class="font-semibold group-hover:text-sky-400 transition">Pricing Plans</div>
            <div class="text-sm text-gray-400">View pricing options</div>
          </div>
        </a>
        <a href="blog.html" class="flex items-center gap-3 p-4 bg-gray-800/50 rounded-lg hover:bg-gray-800 transition group">
          <i class="fas fa-blog text-sky-400 text-2xl"></i>
          <div>
            <div class="font-semibold group-hover:text-sky-400 transition">Blog</div>
            <div class="text-sm text-gray-400">Read our articles</div>
          </div>
        </a>
        <a href="shop.html" class="flex items-center gap-3 p-4 bg-gray-800/50 rounded-lg hover:bg-gray-800 transition group">
          <i class="fas fa-shopping-cart text-sky-400 text-2xl"></i>
          <div>
            <div class="font-semibold group-hover:text-sky-400 transition">Shop</div>
            <div class="text-sm text-gray-400">Browse products</div>
          </div>
        </a>
      </div>
    </div>

    <!-- Search Bar -->
    <div class="mt-12 max-w-xl mx-auto">
      <form action="search.html" method="get" class="relative">
        <input
          type="text"
          name="q"
          placeholder="Search our site..."
          class="w-full px-6 py-4 bg-gray-900 border border-gray-800 rounded-lg focus:outline-none focus:border-sky-500 pr-12">
        <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-sky-400 transition">
          <i class="fas fa-search text-xl"></i>
        </button>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
