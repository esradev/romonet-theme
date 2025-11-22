<?php

function boilerplate_load_assets()
{
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('menus');
}

add_action('after_setup_theme', 'boilerplate_add_support');

// add WooCommerce support
function boilerplate_woocommerce_support()
{
  add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'boilerplate_woocommerce_support');

// add_filter('single_template', 'single_product_template');
add_filter('template_include', 'cart_template');
add_filter('template_include', 'checkout_template');
// add_filter('template_include', 'shop_template');
add_filter('template_include', 'my_account_template');

add_action('woocommerce_thankyou', 'thank_you_template');

add_action('wp_ajax_remove_cart_item', 'remove_cart_item');
add_action('wp_ajax_nopriv_remove_cart_item', 'remove_cart_item');

function single_product_template($template)
{
  if (is_singular('product')) {
    $template = get_template_directory() . '/woocommerce/single-product.php';
  }
  return $template;
}

function cart_template($template)
{
  if (function_exists('is_cart') && class_exists('WC_Cart')) {
    if (is_cart() && WC()->cart->is_empty()) {
      return get_template_directory() . '/woocommerce/templates/cart/empty-cart.php';
    } elseif (is_cart()) {
      return get_template_directory() . '/woocommerce/templates/cart/cart.php';
    }
    return $template;
  }
}

function checkout_template($template)
{
  if (function_exists('is_checkout') && class_exists('WC_Checkout')) {
    if (is_checkout()) {
      return get_template_directory() . '/woocommerce/templates/checkout/checkout.php';
    }
  }
  return $template;
}

// function shop_template($template)
// {
//   if (function_exists('is_shop')) {
//     if (is_shop()) {
//       $custom_template = get_template_directory() . '/woocommerce/templates/archive-product.php';
//       if (!empty($custom_template)) {
//         return $custom_template;
//       }
//     }
//   }
//   return $template;
// }

function my_account_template($template)
{
  if (function_exists('is_account_page') && class_exists('WC_Shortcode_My_Account')) {
    if (is_account_page()) {
      $custom_template = get_template_directory() . '/woocommerce/templates/my-account/my-account.php';
      if (!empty($custom_template)) {
        return $custom_template;
      }
    }
  }
  return $template;
}

function thank_you_template($order_id)
{
  if (function_exists('wc_get_order')) {
    $order = wc_get_order($order_id);

    if ($order) {
      return get_template_directory() . '/woocommerce/templates/thank-you/thank-you.php';
    }
  }
}

function remove_cart_item()
{
  if (class_exists('WC_Cart')) {
    if (isset($_POST['cart_item_key'])) {
      $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
      WC()->cart->remove_cart_item($cart_item_key);

      echo json_encode(array('success' => true));
    }
  }
  wp_die();
}
