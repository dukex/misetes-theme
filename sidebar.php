<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Misetes
 */
?>
	<div class="js-menu-screen menu-screen"></div>
	<div id="secondary" class="widget-area js-menu" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'misetes' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'misetes' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; ?>
	</div>
<script>
  $(document).ready(function(){

    $('.js-menu-trigger').on('click touchstart', function(e){
      $('.js-menu').toggleClass('is-visible');
      $('.js-menu-screen').toggleClass('is-visible');
      e.preventDefault();
    });

    $('.js-menu-screen').on('click touchstart', function(e){
      $('.js-menu').toggleClass('is-visible');
      $('.js-menu-screen').toggleClass('is-visible');
      e.preventDefault();
    });
  });
</script>
