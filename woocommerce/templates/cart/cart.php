<?php

get_header(); ?>
<!-- Cart Section -->
<section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 min-h-screen">
  <div class="max-w-7xl mx-auto">
    <h1 class="text-4xl md:text-5xl font-bold mb-12">Shopping Cart</h1>

    <div class="grid lg:grid-cols-3 gap-8" x-data="cartManager()">
      <!-- Cart Items -->
      <div class="lg:col-span-2 space-y-4">
        <template x-if="cart.length === 0">
          <div class="bg-slate-900 border border-slate-800 rounded-xl p-12 text-center">
            <i class="fas fa-shopping-cart text-6xl text-slate-700 mb-4"></i>
            <h2 class="text-2xl font-bold mb-2">Your cart is empty</h2>
            <p class="text-slate-400 mb-6">Add some services to get started</p>
            <a href="services.html" class="inline-block px-8 py-3 bg-green-600 hover:bg-green-700 rounded-lg font-semibold transition-colors">
              Browse Services
            </a>
          </div>
        </template>

        <template x-for="(item, index) in cart" :key="index">
          <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
            <div class="flex items-center justify-between gap-4">
              <div class="flex-1">
                <h3 class="text-xl font-bold mb-2" x-text="item.name"></h3>
                <p class="text-slate-400 text-sm" x-text="item.type || 'Service'"></p>
              </div>
              <div class="flex items-center gap-6">
                <div class="flex items-center gap-3">
                  <button @click="updateQuantity(index, -1)" class="w-8 h-8 bg-slate-800 hover:bg-slate-700 rounded-lg flex items-center justify-center transition-colors">
                    <i class="fas fa-minus text-sm"></i>
                  </button>
                  <span class="w-12 text-center font-semibold" x-text="item.quantity"></span>
                  <button @click="updateQuantity(index, 1)" class="w-8 h-8 bg-slate-800 hover:bg-slate-700 rounded-lg flex items-center justify-center transition-colors">
                    <i class="fas fa-plus text-sm"></i>
                  </button>
                </div>
                <div class="text-right min-w-24">
                  <div class="text-xl font-bold text-green-400" x-text="'$' + (item.price * item.quantity).toFixed(2)"></div>
                </div>
                <button @click="removeItem(index)" class="w-10 h-10 bg-red-500/10 hover:bg-red-500/20 text-red-400 rounded-lg flex items-center justify-center transition-colors">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </div>
          </div>
        </template>
      </div>

      <!-- Order Summary -->
      <div class="lg:col-span-1">
        <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 sticky top-24">
          <h2 class="text-2xl font-bold mb-6">Order Summary</h2>

          <div class="space-y-4 mb-6">
            <div class="flex items-center justify-between text-slate-400">
              <span>Subtotal</span>
              <span x-text="'$' + subtotal.toFixed(2)"></span>
            </div>
            <div class="flex items-center justify-between text-slate-400">
              <span>Tax (10%)</span>
              <span x-text="'$' + tax.toFixed(2)"></span>
            </div>
            <div class="border-t border-slate-800 pt-4">
              <div class="flex items-center justify-between text-xl font-bold">
                <span>Total</span>
                <span class="text-green-400" x-text="'$' + total.toFixed(2)"></span>
              </div>
            </div>
          </div>

          <a href="checkout.html" class="block w-full px-6 py-4 bg-linear-to-r from-green-600 to-green-600 hover:from-green-700 hover:to-green-700 rounded-lg font-semibold text-center transition-all mb-4">
            Proceed to Checkout
          </a>

          <a href="services.html" class="block w-full px-6 py-3 border border-slate-700 hover:border-green-500 rounded-lg font-semibold text-center transition-colors">
            Continue Shopping
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
