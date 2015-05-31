<?php wp_reset_postdata();  ?>

<article <?php post_class('project'); ?>>
  <header>
    <span class='project_id'>
      <?php $key="project_id"; echo get_post_meta($post->ID, $key, true); ?>.
    </span>
    <h1 class="entry-title">
      <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
    </h1>
    <?php the_date('d F Y', '<span>', '</span>'); ?>
  </header>
</article>
