<!-- Footer -->
<footer class="bg-slate-900 border-t border-slate-800 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid md:grid-cols-4 gap-8 mb-8">
      <div>
        <h3 class="text-xl font-bold text-sky-400 mb-4"><?php bloginfo('name'); ?></h3>
        <p class="text-slate-400 leading-relaxed"><?php esc_html_e('Your trusted partner for SMS, hosting, and domain solutions.', 'romonet'); ?></p>
      </div>
      <div>
        <h4 class="font-semibold mb-4"><?php esc_html_e('Services', 'romonet'); ?></h4>
        <ul class="space-y-2 text-slate-400">
          <li><a href="service-sms.html" class="hover:text-sky-400 transition-colors"><?php esc_html_e('SMS Panel', 'romonet'); ?></a></li>
          <li><a href="service-hosting.html" class="hover:text-sky-400 transition-colors"><?php esc_html_e('Hosting', 'romonet'); ?></a></li>
          <li><a href="service-domains.html" class="hover:text-sky-400 transition-colors"><?php esc_html_e('Domains', 'romonet'); ?></a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold mb-4"><?php esc_html_e('Company', 'romonet'); ?></h4>
        <ul class="space-y-2 text-slate-400">
          <li><a href="about.html" class="hover:text-sky-400 transition-colors"><?php esc_html_e('About Us', 'romonet'); ?></a></li>
          <li><a href="blog.html" class="hover:text-sky-400 transition-colors"><?php esc_html_e('Blog', 'romonet'); ?></a></li>
          <li><a href="contact.html" class="hover:text-sky-400 transition-colors"><?php esc_html_e('Contact', 'romonet'); ?></a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold mb-4"><?php esc_html_e('Connect', 'romonet'); ?></h4>
        <div class="flex gap-4">
          <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-sky-600 rounded-lg flex items-center justify-center transition-colors">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-sky-600 rounded-lg flex items-center justify-center transition-colors">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-sky-600 rounded-lg flex items-center justify-center transition-colors">
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="border-t border-slate-800 pt-8 text-center text-slate-400">
      <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'romonet'); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
