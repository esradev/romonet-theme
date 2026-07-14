<?php
/* Template Name: Blog */
get_header();
?>

<!-- Hero Section -->
<section class="pt-32 pb-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto text-center">
    <?php if (is_archive()) : ?>
      <?php the_archive_title('<h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight text-balance">', '</h1>'); ?>
      <?php if (get_the_archive_description()) : ?>
        <p class="text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed">
          <?php echo wp_kses_post(get_the_archive_description()); ?>
        </p>
      <?php endif; ?>
    <?php else : ?>
      <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight text-balance">
        <?php esc_html_e('Latest News &', 'romonet'); ?> <span class="text-sky-400"><?php esc_html_e('Insights', 'romonet'); ?></span>
      </h1>
      <p class="text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed">
        <?php esc_html_e('Stay updated with the latest trends in SMS, hosting, and domain management.', 'romonet'); ?>
      </p>
    <?php endif; ?>
  </div>
</section>

<!-- Blog Posts Grid -->
<section class="py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <?php if (have_posts()) : ?>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php while (have_posts()) : the_post(); ?>
          <article class="bg-slate-900 border border-slate-800 rounded-xl overflow-hidden hover:border-sky-500/50 transition-colors">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-48 object-cover')); ?>
            <?php else : ?>
              <img src="/placeholder.svg?height=250&width=400" alt="<?php the_title_attribute(); ?>" class="w-full h-48 object-cover">
            <?php endif; ?>
            <div class="p-6">
              <div class="flex items-center gap-2 mb-3">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) :
                ?>
                  <span class="px-3 py-1 bg-sky-500/10 text-sky-400 text-xs font-semibold rounded-full"><?php echo esc_html($categories[0]->name); ?></span>
                <?php endif; ?>
                <span class="text-sm text-slate-400"><?php echo esc_html(get_the_date()); ?></span>
              </div>
              <h3 class="text-xl font-bold mb-3 text-balance">
                <a href="<?php the_permalink(); ?>" class="hover:text-sky-400 transition-colors"><?php the_title(); ?></a>
              </h3>
              <p class="text-slate-400 mb-4 leading-relaxed"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20, '...')); ?></p>
              <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-sky-400 hover:text-sky-300 font-semibold transition-colors">
                <?php esc_html_e('Read More', 'romonet'); ?> <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <?php
      global $wp_query;
      $pagination_links = paginate_links(
        array(
          'total'   => $wp_query->max_num_pages,
          'mid_size'=> 2,
          'prev_text' => '<i class="fas fa-chevron-left"></i>',
          'next_text' => '<i class="fas fa-chevron-right"></i>',
          'type'    => 'array',
        )
      );
      if (!empty($pagination_links)) :
      ?>
        <div class="flex items-center justify-center gap-2 mt-12">
          <?php foreach ($pagination_links as $link) :
            $is_current = strpos($link, 'current') !== false;
          ?>
            <span class="<?php echo $is_current ? 'px-4 py-2 bg-sky-600 rounded-lg' : 'px-4 py-2 border border-slate-700 rounded-lg hover:border-sky-500 transition-colors'; ?>">
              <?php echo $link; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            </span>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    <?php else : ?>
      <p class="text-center text-slate-400"><?php esc_html_e('No posts found.', 'romonet'); ?></p>
    <?php endif; ?>
  </div>
</section>

<!-- Newsletter Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-linear-to-br from-sky-900/20 to-sky-900/20">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-6 text-balance"><?php esc_html_e('Subscribe to Our Newsletter', 'romonet'); ?></h2>
    <p class="text-xl text-slate-400 mb-8 leading-relaxed">
      <?php esc_html_e('Get the latest updates, tips, and insights delivered to your inbox.', 'romonet'); ?>
    </p>
    <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
      <input type="email" placeholder="<?php esc_attr_e('Enter your email', 'romonet'); ?>" class="flex-1 px-6 py-4 bg-slate-900 border border-slate-800 rounded-lg focus:outline-none focus:border-sky-500 transition-colors">
      <button type="submit" class="px-8 py-4 bg-linear-to-r from-sky-600 to-sky-600 hover:from-sky-700 hover:to-sky-700 rounded-lg font-semibold transition-all">
        <?php esc_html_e('Subscribe', 'romonet'); ?>
      </button>
    </form>
  </div>
</section>

<?php get_footer();
