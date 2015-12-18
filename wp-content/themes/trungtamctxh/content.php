<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
 			<?php cswd_thumbnail( 'thumbnail' ); ?>
        </div>
        <header class="entry-header">
 			<?php cswd_entry_header(); ?>
 			<?php cswd_entry_meta() ?>
        </header>
        <div class="entry-content">
 			<?php cswd_entry_content(); ?>
        	<?php ( is_single() ? cswd_entry_tag() : '' ); ?>
        </div>
</article>