<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Misetes
 */
?>

	</div><!-- #content -->
</div><!-- #page -->
<footer class="footer">
  <div class="footer-logo">
    <img src="<?php echo get_bloginfo('template_directory');?>/images/misetes_small.png" alt="">
  </div>
  <div class="social-links">
    <a href="https://www.facebook.com/misetes">
      <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/facebook.png" alt="">
    </a>
    <a href="https://www.youtube.com/channel/UCAZVmQuT-WOu0YuVbSRVqMw">
      <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/youtube.png" alt="">
    </a>

    <a href="https://twitter.com/misetes">
      <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/twitter.png" alt="">
    </a>

    <a href="<?php bloginfo('atom_url'); ?>">
      <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/rss.png" alt="">
    </a>
  </div>
  <div class="footer-links">
    <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

    <div>
      <ul>
        <li><?php echo the_permalink_rss(); ?></li>
      </ul>
    </div>
  </div>

  <hr>

  <p>Disclaimer area lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, nostrum repudiandae saepe.</p>

  <p id="credits"><?php printf( __( 'Theme %1$s by %2$s.', 'misetes' ), 'Misetes', '<a href="http://dukex.github.io" rel="designer">Duke</a>' ); ?>
  </p>
</footer>
<?php wp_footer(); ?>

</body>
</html>
