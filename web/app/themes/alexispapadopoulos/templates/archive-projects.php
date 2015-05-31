<?php wp_reset_postdata();  ?>

<article <?php post_class('project'); ?>>
  <header>
    <?php
    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
      the_post_thumbnail('medium');
    }
    ?>
    <span class='project_id'>
      <?php $key="project_id"; echo get_post_meta($post->ID, $key, true); ?>.
    </span>
    <h1 class="entry-title">
      <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
    </h1>
    <?php the_date('d F Y', '<span>', '</span>'); ?>
  </header>
</article>
