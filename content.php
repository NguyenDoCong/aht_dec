<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php dec_thumbnail('thumbnail'); ?>
    </div>
    <header class="entry-header">
        <?php dec_entry_header(); ?>
        <?php dec_entry_meta() ?>

    </header>
    <div class="entry-content">
        <?php dec_entry_content(); ?>
        <?php (is_single() ? dec_entry_tag() : ''); ?>
    </div>
</article>