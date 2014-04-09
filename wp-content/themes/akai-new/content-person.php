<article id="post-<?php the_ID(); ?>" <?php post_class('person'); ?>>
  <figure>
    <?php the_post_thumbnail(); ?>
    <figcaption>
      <h4 class="entry-title"><?php the_title(); ?></h4>
      <div class="entry-position"><?php the_field('position'); ?></div>
      <div class="entry-email"><?php the_field('email'); ?></div>
      <div class="entry-phone"><?php the_field('phone'); ?></div>
    </figcaption>
  </figure>
</article>
