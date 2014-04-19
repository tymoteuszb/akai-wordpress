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
          <img src="<?php bloginfo('template_directory'); ?>/images/pp.svg" alt="Politechnika Poznańska">
        </a>
        <a href="http://amu.edu.pl/" class="partner">
          <img src="<?php bloginfo('template_directory'); ?>/images/uam.svg" alt="Uniwersytet Adama Mickiewicza">
        </a>
      </section>
    </div>
  </footer>

  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.22/skrollr.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/skrollr.stylesheets/0.0.4/skrollr.stylesheets.min.js"></script>

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  
  <?php wp_footer(); ?>
</body>
</html>
