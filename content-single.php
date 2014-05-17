<?php
/**
 * @package Misetes
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_post_thumbnail('full'); ?>
		<div class="category"><?php the_category(' '); ?></div>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
    	<p>Por <?php the_author_posts_link(); ?> em <?php the_time('j \d\e F \d\e Y') ?></p>
		</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'misetes' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="entry-footer">
		<div class="author-info">
			<div class="author-image">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
			</div>
			<div class="bio">
				<h3><?php the_author_meta( 'display_name' ); ?></h3>
				<p><?php the_author_meta( 'description' ); ?></p>
			 </div>
		</div>
		<?php edit_post_link( __( 'Edit', 'misetes' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>
</article>
