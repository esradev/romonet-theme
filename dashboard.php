<?php
/* Template Name: Dashboard */

get_header();
?>

<!-- Dashboard Section -->
<section class="pt-24 pb-20 px-4 sm:px-6 lg:px-8 min-h-screen">
  <div class="max-w-7xl mx-auto">
    <!-- Header -->
    <div class="mb-12">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Dashboard</h1>
      <p class="text-xl text-slate-400">Welcome back, John Doe</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="flex items-center justify-between mb-4">
          <div class="w-12 h-12 bg-green-500/10 rounded-lg flex items-center justify-center">
            <i class="fas fa-sms text-green-400 text-xl"></i>
          </div>
          <span class="text-sm text-green-400">+12%</span>
        </div>
        <div class="text-3xl font-bold mb-1">12,543</div>
        <div class="text-slate-400 text-sm">SMS Sent</div>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="flex items-center justify-between mb-4">
          <div class="w-12 h-12 bg-green-500/10 rounded-lg flex items-center justify-center">
            <i class="fas fa-server text-green-400 text-xl"></i>
          </div>
          <span class="text-sm text-green-400">+5%</span>
        </div>
        <div class="text-3xl font-bold mb-1">3</div>
        <div class="text-slate-400 text-sm">Active Hosting</div>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="flex items-center justify-between mb-4">
          <div class="w-12 h-12 bg-green-500/10 rounded-lg flex items-center justify-center">
            <i class="fas fa-globe text-green-400 text-xl"></i>
          </div>
          <span class="text-sm text-slate-400">--</span>
        </div>
        <div class="text-3xl font-bold mb-1">7</div>
        <div class="text-slate-400 text-sm">Domains</div>
      </div>

      <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
        <div class="flex items-center justify-between mb-4">
          <div class="w-12 h-12 bg-purple-500/10 rounded-lg flex items-center justify-center">
            <i class="fas fa-dollar-sign text-purple-400 text-xl"></i>
          </div>
          <span class="text-sm text-green-400">+8%</span>
        </div>
        <div class="text-3xl font-bold mb-1">$2,847</div>
        <div class="text-slate-400 text-sm">Total Spent</div>
      </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Services List -->
      <div class="lg:col-span-2 space-y-6">
        <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
          <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold">Active Services</h2>
            <a href="services.html" class="text-green-400 hover:text-green-300 text-sm font-semibold transition-colors">
              View All
            </a>
          </div>
          <div class="space-y-4">
            <!-- SMS Service -->
            <div class="bg-slate-950 border border-slate-800 rounded-lg p-4">
              <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-green-500/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-sms text-green-400"></i>
                  </div>
                  <div>
                    <h3 class="font-semibold">SMS Professional Plan</h3>
                    <p class="text-sm text-slate-400">25,000 SMS/month</p>
                  </div>
                </div>
                <span class="px-3 py-1 bg-green-500/10 text-green-400 text-xs font-semibold rounded-full">Active</span>
              </div>
              <div class="flex items-center justify-between text-sm">
                <span class="text-slate-400">Renews: Jan 15, 2025</span>
                <span class="font-semibold">$79/mo</span>
              </div>
            </div>

            <!-- Hosting Service -->
            <div class="bg-slate-950 border border-slate-800 rounded-lg p-4">
              <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-green-500/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-server text-green-400"></i>
                  </div>
                  <div>
                    <h3 class="font-semibold">Business Hosting</h3>
                    <p class="text-sm text-slate-400">50 GB Storage</p>
                  </div>
                </div>
                <span class="px-3 py-1 bg-green-500/10 text-green-400 text-xs font-semibold rounded-full">Active</span>
              </div>
              <div class="flex items-center justify-between text-sm">
                <span class="text-slate-400">Renews: Feb 1, 2025</span>
                <span class="font-semibold">$9.99/mo</span>
              </div>
            </div>

            <!-- Domain Service -->
            <div class="bg-slate-950 border border-slate-800 rounded-lg p-4">
              <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 bg-green-500/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-globe text-green-400"></i>
                  </div>
                  <div>
                    <h3 class="font-semibold">example.com</h3>
                    <p class="text-sm text-slate-400">Domain Registration</p>
                  </div>
                </div>
                <span class="px-3 py-1 bg-green-500/10 text-green-400 text-xs font-semibold rounded-full">Active</span>
              </div>
              <div class="flex items-center justify-between text-sm">
                <span class="text-slate-400">Renews: Mar 10, 2025</span>
                <span class="font-semibold">$12.99/yr</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
          <h2 class="text-2xl font-bold mb-6">Recent Activity</h2>
          <div class="space-y-4">
            <div class="flex items-start gap-4">
              <div class="w-2 h-2 bg-green-400 rounded-full mt-2"></div>
              <div class="flex-1">
                <p class="font-semibold">SMS Campaign Sent</p>
                <p class="text-sm text-slate-400">Sent 1,250 messages successfully</p>
                <p class="text-xs text-slate-500 mt-1">2 hours ago</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-2 h-2 bg-green-400 rounded-full mt-2"></div>
              <div class="flex-1">
                <p class="font-semibold">Hosting Backup Completed</p>
                <p class="text-sm text-slate-400">Daily backup successful</p>
                <p class="text-xs text-slate-500 mt-1">5 hours ago</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-2 h-2 bg-green-400 rounded-full mt-2"></div>
              <div class="flex-1">
                <p class="font-semibold">Domain Renewed</p>
                <p class="text-sm text-slate-400">example.com renewed for 1 year</p>
                <p class="text-xs text-slate-500 mt-1">1 day ago</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-2 h-2 bg-purple-400 rounded-full mt-2"></div>
              <div class="flex-1">
                <p class="font-semibold">Payment Processed</p>
                <p class="text-sm text-slate-400">$79.00 charged for SMS plan</p>
                <p class="text-xs text-slate-500 mt-1">2 days ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="space-y-6">
        <!-- Quick Actions -->
        <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
          <h2 class="text-xl font-bold mb-4">Quick Actions</h2>
          <div class="space-y-3">
            <button class="w-full px-4 py-3 bg-green-600 hover:bg-green-700 rounded-lg font-semibold transition-colors text-left flex items-center gap-3">
              <i class="fas fa-plus"></i>
              <span>Add New Service</span>
            </button>
            <button class="w-full px-4 py-3 bg-slate-800 hover:bg-slate-700 rounded-lg font-semibold transition-colors text-left flex items-center gap-3">
              <i class="fas fa-file-invoice"></i>
              <span>View Invoices</span>
            </button>
            <button class="w-full px-4 py-3 bg-slate-800 hover:bg-slate-700 rounded-lg font-semibold transition-colors text-left flex items-center gap-3">
              <i class="fas fa-headset"></i>
              <span>Contact Support</span>
            </button>
          </div>
        </div>

        <!-- Account Info -->
        <div class="bg-slate-900 border border-slate-800 rounded-xl p-6">
          <h2 class="text-xl font-bold mb-4">Account</h2>
          <div class="space-y-4">
            <div>
              <p class="text-sm text-slate-400 mb-1">Email</p>
              <p class="font-semibold">john.doe@example.com</p>
            </div>
            <div>
              <p class="text-sm text-slate-400 mb-1">Member Since</p>
              <p class="font-semibold">January 2024</p>
            </div>
            <div>
              <p class="text-sm text-slate-400 mb-1">Account Status</p>
              <span class="inline-block px-3 py-1 bg-green-500/10 text-green-400 text-xs font-semibold rounded-full">Active</span>
            </div>
            <button class="w-full px-4 py-2 border border-slate-700 hover:border-green-500 rounded-lg font-semibold transition-colors">
              Edit Profile
            </button>
          </div>
        </div>

        <!-- Support -->
        <div class="bg-linear-to-br from-green-900/20 to-green-900/20 border border-green-500/20 rounded-xl p-6">
          <h2 class="text-xl font-bold mb-2">Need Help?</h2>
          <p class="text-slate-400 text-sm mb-4">Our support team is available 24/7</p>
          <a href="contact.html" class="block w-full px-4 py-2 bg-green-600 hover:bg-green-700 rounded-lg font-semibold text-center transition-colors">
            Contact Support
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
