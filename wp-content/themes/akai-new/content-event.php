
<a href="<?php esc_attr_e(get_permalink()); ?>" id="post-<?php the_ID(); ?>" <?php post_class('eventbox'); ?>>
  <figure>
    <?php the_post_thumbnail('post-thumbnail'); ?>

    <figcaption>
      <h4 class="entry-title"><?php the_title(); ?></h4>
      <div class="entry-content"><?php the_excerpt(); ?></div>
    </figcaption>
  </figure>

  <div class="caption">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <time datetime="<?php the_time('c'); ?>"><?php the_time('d/m/y'); ?></time>
  </div>
</a><!-- #post-<?php the_ID(); ?> -->
