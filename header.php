<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class("bg-slate-950 text-slate-100"); ?>
  ><?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>
  <!-- Navigation -->
  <nav class="fixed w-full bg-slate-900/95 backdrop-blur-sm border-b border-slate-800 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center gap-8">
          <!-- LOGO -->
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <h1 class="text-2xl font-bold text-sky-400"><?php bloginfo('name'); ?></h1>
          </a>

          <!-- NAV LINKS -->
          <div class="hidden md:flex items-center gap-6">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'flex items-center gap-6',
                'fallback_cb'    => false,
              )
            );
            ?>
          </div>
        </div>
        <div class="hidden md:flex items-center gap-4">
          <?php if (function_exists('WC')) : ?>
            <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="text-slate-300 hover:text-sky-400 transition-colors relative">
              <i class="fas fa-shopping-cart text-xl"></i>
              <span class="absolute -top-2 -right-2 bg-sky-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center"><?php echo absint(WC()->cart ? WC()->cart->get_cart_contents_count() : 0); ?></span>
            </a>
            <?php
            $account_url = wc_get_page_permalink('myaccount');
            if ($account_url) :
            ?>
              <a href="<?php echo esc_url($account_url); ?>" class="px-4 py-2 bg-sky-600 hover:bg-sky-700 rounded-lg transition-colors"><?php esc_html_e('Dashboard', 'romonet'); ?></a>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-slate-300">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </div>
    <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-slate-900 border-t border-slate-800">
      <div class="px-4 py-4 space-y-3">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'space-y-3',
            'fallback_cb'    => false,
          )
        );
        ?>
        <?php if (function_exists('WC')) : ?>
          <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="block text-slate-300 hover:text-sky-400"><?php esc_html_e('Cart', 'romonet'); ?></a>
          <?php
          $account_url = wc_get_page_permalink('myaccount');
          if ($account_url) :
          ?>
            <a href="<?php echo esc_url($account_url); ?>" class="block text-slate-300 hover:text-sky-400"><?php esc_html_e('Dashboard', 'romonet'); ?></a>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </nav>
