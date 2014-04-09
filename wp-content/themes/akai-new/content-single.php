<?php
/**
 * @package akai
 * @since akai 1.0
 */
?>

<?php
$date = date_create( get_field('date') . ' ' . get_field('time') );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>

  <section class="entry-main">
    <section class="entry-content">
      <?php the_content(); ?>
    </section>

    <section class="entry-presentation">
      <?php the_field('presentation'); ?>
    </section>
  </section>

  <aside>
    <section class="entry-thumbnail">
      <?php the_post_thumbnail(); ?>
    </section>

    <section class="entry-datelocation">
      <h4>Czas i miejsce</h4>
      <?php the_time('d/m/y H:i'); ?>

      <?php akai_add_to_calendar( @date_create( get_field('date') . get_field('time') )); ?>
    </section>

    <section class="entry-speaker">
      <h4>Prelegent</h4>
      <ul>
        <li>Tomasz Jackowski</li>
      </ul>
    </section>

    <section class="entry-registration">
      <h4>Rejestracja</h4>
      <?php the_field('registration'); ?>
    </section>
  
    <section class="entry-share">
      <h4>Udostępnij</h4>
      sharing (fb/tweet)
    </section>
  </aside>

</article><!-- #post-<?php the_ID(); ?> -->
