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
    <h2 class="text-3xl md:text-4xl font-bold mb-4"><?php esc_html_e('Page Not Found', 'romonet'); ?></h2>
    <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
      <?php esc_html_e("Oops! The page you're looking for seems to have drifted away into the cloud. Let's get you back on track.", 'romonet'); ?>
    </p>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="bg-linear-to-r from-sky-600 to-sky-600 px-8 py-3 rounded-lg hover:from-sky-700 hover:to-sky-700 transition inline-flex items-center justify-center">
        <i class="fas fa-home mr-2"></i>
        <?php esc_html_e('Go to Homepage', 'romonet'); ?>
      </a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="bg-gray-800 px-8 py-3 rounded-lg hover:bg-gray-700 transition inline-flex items-center justify-center">
        <i class="fas fa-envelope mr-2"></i>
        <?php esc_html_e('Contact Support', 'romonet'); ?>
      </a>
    </div>

    <!-- Helpful Links -->
    <div class="bg-gray-900 border border-gray-800 rounded-xl p-8 max-w-2xl mx-auto">
      <h3 class="text-xl font-semibold mb-6"><?php esc_html_e('Perhaps you were looking for:', 'romonet'); ?></h3>
      <div class="grid md:grid-cols-2 gap-4 text-left">
        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="flex items-center gap-3 p-4 bg-gray-800/50 rounded-lg hover:bg-gray-800 transition group">
          <i class="fas fa-server text-sky-400 text-2xl"></i>
          <div>
            <div class="font-semibold group-hover:text-sky-400 transition"><?php esc_html_e('Our Services', 'romonet'); ?></div>
            <div class="text-sm text-gray-400"><?php esc_html_e('Browse all services', 'romonet'); ?></div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="flex items-center gap-3 p-4 bg-gray-800/50 rounded-lg hover:bg-gray-800 transition group">
          <i class="fas fa-tag text-sky-400 text-2xl"></i>
          <div>
            <div class="font-semibold group-hover:text-sky-400 transition"><?php esc_html_e('Pricing Plans', 'romonet'); ?></div>
            <div class="text-sm text-gray-400"><?php esc_html_e('View pricing options', 'romonet'); ?></div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="flex items-center gap-3 p-4 bg-gray-800/50 rounded-lg hover:bg-gray-800 transition group">
          <i class="fas fa-blog text-sky-400 text-2xl"></i>
          <div>
            <div class="font-semibold group-hover:text-sky-400 transition"><?php esc_html_e('Blog', 'romonet'); ?></div>
            <div class="text-sm text-gray-400"><?php esc_html_e('Read our articles', 'romonet'); ?></div>
          </div>
        </a>
        <a href="<?php echo function_exists('wc_get_page_permalink') ? esc_url(wc_get_page_permalink('shop')) : esc_url(home_url('/shop/')); ?>" class="flex items-center gap-3 p-4 bg-gray-800/50 rounded-lg hover:bg-gray-800 transition group">
          <i class="fas fa-shopping-cart text-sky-400 text-2xl"></i>
          <div>
            <div class="font-semibold group-hover:text-sky-400 transition"><?php esc_html_e('Shop', 'romonet'); ?></div>
            <div class="text-sm text-gray-400"><?php esc_html_e('Browse products', 'romonet'); ?></div>
          </div>
        </a>
      </div>
    </div>

    <!-- Search Bar -->
    <div class="mt-12 max-w-xl mx-auto">
      <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="relative">
        <input
          type="text"
          name="s"
          value="<?php echo esc_attr(get_search_query()); ?>"
          placeholder="<?php esc_attr_e('Search our site...', 'romonet'); ?>"
          class="w-full px-6 py-4 bg-gray-900 border border-gray-800 rounded-lg focus:outline-none focus:border-sky-500 pr-12">
        <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-sky-400 transition">
          <i class="fas fa-search text-xl"></i>
        </button>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
