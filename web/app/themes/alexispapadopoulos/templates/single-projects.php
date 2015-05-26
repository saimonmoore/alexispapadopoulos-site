<?php wp_reset_postdata();  ?>

single projects
<article <?php post_class('project'); ?>>
  <header>
    <h1 class="entry-title">
      <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
    </h1>
  </header>
  <div class="showcase">
    <?php echo do_shortcode('[gallery columns="1" size="medium"]'); ?>
  </div>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
  <footer>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </footer>
</article>
