<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Misetes
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>

			<?php misetes_post_nav(); ?>

			<?php
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile; ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
