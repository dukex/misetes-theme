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
    <a href="#">
      <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/facebook.png" alt="">
    </a>
    <a href="#">
      <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/youtube.png" alt="">
    </a>
  </div>
  <div class="footer-links">
    <ul>
      <li><h3>Content</h3></li>
      <li><a href="javascript:void(0)">About</a></li>
      <li><a href="javascript:void(0)">Contact</a></li>
      <li><a href="javascript:void(0)">Products</a></li>
    </ul>
    <ul>
      <li><h3>Follow Us</h3></li>
      <li><a href="javascript:void(0)">Facebook</a></li>
      <li><a href="javascript:void(0)">Twitter</a></li>
      <li><a href="javascript:void(0)">YouTube</a></li>
    </ul>
    <ul>
      <li><h3>Legal</h3></li>
      <li><a href="javascript:void(0)">Terms and Conditions</a></li>
      <li><a href="javascript:void(0)">Privacy Policy</a></li>
    </ul>
  </div>

  <hr>

  <p>Disclaimer area lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, nostrum repudiandae saepe.</p>

    <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
      <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'misetes' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'misetes' ), 'WordPress' ); ?></a>
      <span class="sep"> | </span>
      <?php printf( __( 'Theme: %1$s by %2$s.', 'misetes' ), 'Misetes', '<a href="http://dukex.github.io" rel="designer">Duke</a>' ); ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</footer>
<?php wp_footer(); ?>

</body>
</html>
