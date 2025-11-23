<?php

get_header(); ?>

<!-- Checkout Section -->
<section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 min-h-screen" x-data="checkoutManager()">
  <div class="max-w-7xl mx-auto">
    <h1 class="text-4xl md:text-5xl font-bold mb-12">Checkout</h1>

    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Checkout Form -->
      <div class="lg:col-span-2 space-y-8">
        <!-- Billing Information -->
        <div class="bg-slate-900 border border-slate-800 rounded-xl p-8">
          <h2 class="text-2xl font-bold mb-6">Billing Information</h2>
          <form class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-semibold mb-2">First Name</label>
                <input type="text" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
              </div>
              <div>
                <label class="block text-sm font-semibold mb-2">Last Name</label>
                <input type="text" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
              </div>
            </div>
            <div>
              <label class="block text-sm font-semibold mb-2">Email</label>
              <input type="email" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
            </div>
            <div>
              <label class="block text-sm font-semibold mb-2">Phone</label>
              <input type="tel" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
            </div>
            <div>
              <label class="block text-sm font-semibold mb-2">Address</label>
              <input type="text" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
            </div>
            <div class="grid md:grid-cols-3 gap-6">
              <div>
                <label class="block text-sm font-semibold mb-2">City</label>
                <input type="text" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
              </div>
              <div>
                <label class="block text-sm font-semibold mb-2">State</label>
                <input type="text" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
              </div>
              <div>
                <label class="block text-sm font-semibold mb-2">ZIP Code</label>
                <input type="text" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
              </div>
            </div>
          </form>
        </div>

        <!-- Payment Information -->
        <div class="bg-slate-900 border border-slate-800 rounded-xl p-8">
          <h2 class="text-2xl font-bold mb-6">Payment Information</h2>
          <form class="space-y-6">
            <div>
              <label class="block text-sm font-semibold mb-2">Card Number</label>
              <input type="text" placeholder="1234 5678 9012 3456" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
            </div>
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-semibold mb-2">Expiry Date</label>
                <input type="text" placeholder="MM/YY" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
              </div>
              <div>
                <label class="block text-sm font-semibold mb-2">CVV</label>
                <input type="text" placeholder="123" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
              </div>
            </div>
            <div>
              <label class="block text-sm font-semibold mb-2">Cardholder Name</label>
              <input type="text" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
            </div>
          </form>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="lg:col-span-1">
        <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 sticky top-24">
          <h2 class="text-2xl font-bold mb-6">Order Summary</h2>

          <div class="space-y-4 mb-6 max-h-64 overflow-y-auto">
            <template x-for="(item, index) in cart" :key="index">
              <div class="flex items-center justify-between text-sm">
                <div class="flex-1">
                  <div class="font-semibold" x-text="item.name"></div>
                  <div class="text-slate-400" x-text="'Qty: ' + item.quantity"></div>
                </div>
                <div class="font-semibold text-sky-400" x-text="'$' + (item.price * item.quantity).toFixed(2)"></div>
              </div>
            </template>
          </div>

          <div class="border-t border-slate-800 pt-4 space-y-3 mb-6">
            <div class="flex items-center justify-between text-slate-400">
              <span>Subtotal</span>
              <span x-text="'$' + subtotal.toFixed(2)"></span>
            </div>
            <div class="flex items-center justify-between text-slate-400">
              <span>Tax (10%)</span>
              <span x-text="'$' + tax.toFixed(2)"></span>
            </div>
            <div class="border-t border-slate-800 pt-3">
              <div class="flex items-center justify-between text-xl font-bold">
                <span>Total</span>
                <span class="text-sky-400" x-text="'$' + total.toFixed(2)"></span>
              </div>
            </div>
          </div>

          <button @click="placeOrder()" class="w-full px-6 py-4 bg-linear-to-r from-sky-600 to-sky-600 hover:from-sky-700 hover:to-sky-700 rounded-lg font-semibold transition-all mb-4">
            Place Order
          </button>

          <div class="flex items-center justify-center gap-4 text-sm text-slate-400">
            <i class="fas fa-lock"></i>
            <span>Secure checkout</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
