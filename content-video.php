<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php dec_entry_header(); ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php (is_single() ? dec_entry_tag() : ''); ?>
    </div>
</article>