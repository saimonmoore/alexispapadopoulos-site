<article <?php post_class('project'); ?>>
  <header>
    <h1 class="entry-title">[PROJECT]<?php the_title(); ?></h1>
  </header>
  <div class="showcase">
    <?php echo do_shortcode('[gallery columns="2" size="medium"]'); ?>
  </div>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
  <footer>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </footer>
</article>
