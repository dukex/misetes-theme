<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Misetes
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Resultados para busca "%s"', 'misetes' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'search' ); ?>
			<?php endwhile; ?>
			</div>

			<?php misetes_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
