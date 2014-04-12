<?php akai_the_horizontal_photo(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
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
      <section class="entry-datelocation">
        <h4>Czas</h4>
        <?php echo ucfirst(date_i18n('l, j F Y, H:i', get_field('event_date'))); ?>
      </section>
    <?php endif ?>

    <?php if ($location = get_field('location')): ?>
      <section class="entry-datelocation">
        <h4>Miejsce</h4>
        <div class="acf-map">
          <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
      </section>
    <?php endif ?>

    <?php akai_add_to_calendar( @date_create( get_field('date') . get_field('time') )); ?>

    <?php if (get_field('registration')): ?>
      <section class="entry-registration">
        <h4>Rejestracja</h4>
        <?php the_field('registration'); ?>
      </section>
    <?php endif ?>
  
    <section class="entry-share">
      <h4>Udostępnij</h4>
      sharing (fb/tweet)
    </section>
  </aside>

</article><!-- #post-<?php the_ID(); ?> -->
