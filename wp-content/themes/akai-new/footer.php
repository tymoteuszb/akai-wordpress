<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

    </div>
  </div>

  <footer class="site-footer">
    <div class="container">
      <section class="copyright">
        &copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>">AKAI</a> <?= "2010 - " . date("Y") ?>
      </section>

      <section class="partners">
        <a href="http://put.poznan.pl/" class="partner">
          Poznań University of Technology
        </a>
      </section>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
