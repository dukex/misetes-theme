<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Misetes
 */

get_header(); ?>
	<section id="primary" class="content-area">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();
						elseif ( is_tag() ) :
							single_tag_title();
						elseif ( is_author() ) :
							printf( __( '%s', 'misetes' ), '<span class="vcard">' . get_the_author() . '</span>' );
						elseif ( is_day() ) :
							printf( __( 'Artigos de %s', 'misetes' ), '<span>' . get_the_date() . '</span>' );
						elseif ( is_month() ) :
							printf( __( 'Artigos de %s', 'misetes' ), '<span>' . get_the_date( _x( 'F \d\e Y', 'monthly archives date format', 'misetes' ) ) . '</span>' );
						elseif ( is_year() ) :
							printf( __( 'Artigos de %s', 'misetes' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'misetes' ) ) . '</span>' );
						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'misetes' );
						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'misetes');
						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'misetes');
						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'misetes' );
						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'misetes' );
						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'misetes' );
						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'misetes' );
						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'misetes' );
						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'misetes' );
						else :
							_e( 'Archives', 'misetes' );
						endif;
					?>
				</h1>
				<?php if (is_author()) : ?>
					<div id="author-meta">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
						<p>
							<?php the_author_meta('description') ?>
							<?php if(the_author_meta('user_url')) : ?>
								<br />
								<a href="<?php the_author_meta('user_url') ?>">Site</a>
							<?php endif; ?>
						</p>
					</div>
				<?php endif; ?>
			</header>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					get_template_part( 'content', get_post_format() );
				?>
			<?php endwhile; ?>

			<?php misetes_paging_nav(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
