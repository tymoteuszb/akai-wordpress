<?php akai_the_horizontal_photo(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>

    <?php if (get_field('registration_url')): ?>
      <a href="<?php esc_attr_e(get_field('registration_url')); ?>" class="btn btn-blue">
        <i class="fa fa-check-square-o"></i>
        Rejestracja
      </a>
    <?php endif ?>

    <?php if (get_field('facebook_url')): ?>
      <a href="<?php esc_attr_e(get_field('facebook_url')); ?>" class="btn btn-blue">
        <i class="fa fa-facebook-square"></i>
        Wydarzenie na Facebooku
      </a>
    <?php endif ?>

    <?php /*if (get_field('event_date')): ?>
      <a href="<?php esc_attr_e(akai_add_to_calendar_url()); ?>" class="btn btn-blue">
        <i class="fa fa-google-plus-square"></i>
        Dodaj do kalendarza
      </a>
    <?php endif */?>

    <?php //echo do_shortcode('[ssba]'); ?>
    <?php do_action('addthis_widget',get_permalink($post->ID), get_the_title($post->ID), 'fb_tw_p1_sc'); ?>
  </header>

  <section class="entry-main column content">
    <section class="entry-content">
      <?php the_content(); ?>
    </section>

    <?php if (get_field('presentation')): ?>
      <section class="entry-presentation">
        <?php the_field('presentation'); ?>
      </section>
    <?php endif ?>
  </section>

  <aside class="column sidebar">
    <?php if (!get_field('horizontal_photo')): ?>
      <section class="entry-thumbnail">
        <?php the_post_thumbnail(); ?>
      </section>
    <?php endif ?>

    <?php if (get_field('event_date')): ?>
      <section class="entry-date">
        <h4>Czas</h4>
        <?php echo ucfirst(date_i18n('l, j F Y, H:i', get_field('event_date'))); ?>
      </section>
    <?php endif ?>

    <?php if ($location = get_field('location')): ?>
      <section class="entry-location">
        <h4>Miejsce</h4>
        <?php echo $location['address']; ?>
        <div class="acf-map">
          <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
      </section>
    <?php endif ?>
  </aside>

</article><!-- #post-<?php the_ID(); ?> -->
