<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Misetes
 */

get_header(); ?>

	<div id="primary" class="content-area">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! Página não encontrada.', 'misetes' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php _e( 'Não encontramos nenhum conteúdo nesse endereço. Tente fazer uma busca ou algum dos links abaixo', 'misetes' ); ?></p>

					<?php get_search_form(); ?>
					<div></div>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( misetes_categorized_blog() ) : ?>
						<div class="widget widget_categories">
							<h2 class="widgettitle"><?php _e( 'Categorias Populares', 'misetes' ); ?></h2>
							<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
							</ul>
						</div>
					<?php endif; ?>

					<?php the_widget( 'WP_Widget_Archives', 'dropdown=1' ); ?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
				</div>
			</section>
	</div>

<?php get_footer(); ?>
