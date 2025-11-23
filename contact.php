<?php
/* Template Name: Contact Page */
get_header();
?>


<!-- Hero Section -->
<section class="pt-32 pb-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto text-center">
    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight text-balance">
      Get in <span class="text-sky-400">Touch</span>
    </h1>
    <p class="text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed">
      Have questions? We're here to help. Reach out to our team and we'll get back to you as soon as possible.
    </p>
  </div>
</section>

<!-- Contact Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-2 gap-12">
      <!-- Contact Form -->
      <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 lg:p-12">
        <h2 class="text-3xl font-bold mb-6">Send us a Message</h2>
        <form class="space-y-6" x-data="{ submitted: false }" @submit.prevent="submitted = true">
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
            <input type="tel" class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
          </div>
          <div>
            <label class="block text-sm font-semibold mb-2">Subject</label>
            <select class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
              <option>General Inquiry</option>
              <option>SMS Services</option>
              <option>Hosting Services</option>
              <option>Domain Services</option>
              <option>Technical Support</option>
              <option>Billing</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-semibold mb-2">Message</label>
            <textarea required rows="5" class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors resize-none"></textarea>
          </div>
          <button type="submit" class="w-full px-8 py-4 bg-linear-to-r from-sky-600 to-sky-600 hover:from-sky-700 hover:to-sky-700 rounded-lg font-semibold transition-all">
            Send Message
          </button>
          <div x-show="submitted" x-transition class="p-4 bg-sky-500/10 border border-sky-500/20 rounded-lg text-sky-400 text-center">
            Thank you! We'll get back to you soon.
          </div>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="space-y-8">
        <div>
          <h2 class="text-3xl font-bold mb-6">Contact Information</h2>
          <p class="text-slate-400 leading-relaxed mb-8">
            Our team is available 24/7 to answer your questions and provide support.
          </p>
        </div>

        <div class="space-y-6">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-sky-500/10 rounded-lg flex items-center justify-center shrink-0">
              <i class="fas fa-envelope text-sky-400 text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold mb-1">Email</h3>
              <a href="mailto:support@RomoNet.com" class="text-slate-400 hover:text-sky-400 transition-colors">support@RomoNet.com</a>
              <br>
              <a href="mailto:sales@RomoNet.com" class="text-slate-400 hover:text-sky-400 transition-colors">sales@RomoNet.com</a>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-sky-500/10 rounded-lg flex items-center justify-center shrink-0">
              <i class="fas fa-phone text-sky-400 text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold mb-1">Phone</h3>
              <a href="tel:+1234567890" class="text-slate-400 hover:text-sky-400 transition-colors">+1 (234) 567-890</a>
              <p class="text-sm text-slate-500">Mon-Fri 9am-6pm EST</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-sky-500/10 rounded-lg flex items-center justify-center shrink-0">
              <i class="fas fa-map-marker-alt text-sky-400 text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold mb-1">Address</h3>
              <p class="text-slate-400">123 Cloud Street<br>Tech City, TC 12345<br>United States</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-sky-500/10 rounded-lg flex items-center justify-center shrink-0">
              <i class="fas fa-comments text-sky-400 text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold mb-1">Live Chat</h3>
              <p class="text-slate-400 mb-2">Chat with our support team</p>
              <button class="px-6 py-2 bg-sky-600 hover:bg-sky-700 rounded-lg text-sm font-semibold transition-colors">
                Start Chat
              </button>
            </div>
          </div>
        </div>

        <div class="pt-8">
          <h3 class="font-semibold mb-4">Follow Us</h3>
          <div class="flex gap-4">
            <a href="#" class="w-12 h-12 bg-slate-900 border border-slate-800 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg flex items-center justify-center transition-colors">
              <i class="fab fa-twitter text-xl"></i>
            </a>
            <a href="#" class="w-12 h-12 bg-slate-900 border border-slate-800 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg flex items-center justify-center transition-colors">
              <i class="fab fa-facebook text-xl"></i>
            </a>
            <a href="#" class="w-12 h-12 bg-slate-900 border border-slate-800 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg flex items-center justify-center transition-colors">
              <i class="fab fa-linkedin text-xl"></i>
            </a>
            <a href="#" class="w-12 h-12 bg-slate-900 border border-slate-800 hover:border-sky-500 hover:bg-sky-500/10 rounded-lg flex items-center justify-center transition-colors">
              <i class="fab fa-github text-xl"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Map Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-slate-900/50">
  <div class="max-w-7xl mx-auto">
    <div class="bg-slate-800 rounded-2xl overflow-hidden h-96 flex items-center justify-center">
      <div class="text-center">
        <i class="fas fa-map-marked-alt text-6xl text-slate-600 mb-4"></i>
        <p class="text-slate-400">Map Location</p>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
