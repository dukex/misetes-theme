<?php
/**
 * @package Misetes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemtype="http://schema.org/Article">
  <header class="entry-header">
    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
    <div class="category"><?php the_category(' '); ?></div>
    <h1 class="entry-title">
      <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h1>
  </header>
  <div class="entry-meta">
    <p>Por <?php the_author_posts_link(); ?> em <?php the_time('j \d\e F \d\e Y') ?></p>
  </div>
</article>
