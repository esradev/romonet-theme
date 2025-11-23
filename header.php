<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hosting Services - RomoNet</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class("bg-slate-950 text-slate-100"); ?>>
  <!-- Navigation -->
  <nav class="fixed w-full bg-slate-900/95 backdrop-blur-sm border-b border-slate-800 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center gap-8">
          <!-- LOGO -->
          <a href="<?php echo home_url(); ?>">
            <h1 class="text-2xl font-bold text-sky-400">RomoNet</h1>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="RomoNet Logo" class="h-8 w-full" height="60px"> -->
          </a>

          <!-- NAV LINKS -->
          <div class="hidden md:flex items-center gap-6">
            <a href="index.html" class="text-slate-300 hover:text-sky-400 transition-colors">Home</a>
            <a href="services.html" class="text-sky-400">Services</a>
            <a href="pricing.html" class="text-slate-300 hover:text-sky-400 transition-colors">Pricing</a>
            <a href="blog.html" class="text-slate-300 hover:text-sky-400 transition-colors">Blog</a>
            <a href="about.html" class="text-slate-300 hover:text-sky-400 transition-colors">About</a>
            <a href="contact.html" class="text-slate-300 hover:text-sky-400 transition-colors">Contact</a>
          </div>
        </div>
        <div class="hidden md:flex items-center gap-4">
          <a href="cart.html" class="text-slate-300 hover:text-sky-400 transition-colors relative">
            <i class="fas fa-shopping-cart text-xl"></i>
            <span class="absolute -top-2 -right-2 bg-sky-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
          </a>
          <a href="dashboard.html" class="px-4 py-2 bg-sky-600 hover:bg-sky-700 rounded-lg transition-colors">Dashboard</a>
        </div>
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-slate-300">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </div>
    <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-slate-900 border-t border-slate-800">
      <div class="px-4 py-4 space-y-3">
        <a href="index.html" class="block text-slate-300 hover:text-sky-400">Home</a>
        <a href="services.html" class="block text-sky-400">Services</a>
        <a href="pricing.html" class="block text-slate-300 hover:text-sky-400">Pricing</a>
        <a href="blog.html" class="block text-slate-300 hover:text-sky-400">Blog</a>
        <a href="about.html" class="block text-slate-300 hover:text-sky-400">About</a>
        <a href="contact.html" class="block text-slate-300 hover:text-sky-400">Contact</a>
        <a href="cart.html" class="block text-slate-300 hover:text-sky-400">Cart</a>
        <a href="dashboard.html" class="block text-slate-300 hover:text-sky-400">Dashboard</a>
      </div>
    </div>
  </nav>
