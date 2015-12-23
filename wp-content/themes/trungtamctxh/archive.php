<?php get_header(); ?>
<div class="container">
 		<div class="archive-title">
	        <h2>
	                <?php
	                        if ( is_tag() ) :
	                                printf( __('Posts Tagged: %1$s','cswd'), single_tag_title( '', false ) );
	                        elseif ( is_category() ) :
	                                printf( __('Posts Categorized: %1$s','cswd'), single_cat_title( '', false ) );
	                        elseif ( is_day() ) :
	                                printf( __('Daily Archives: %1$s','cswd'), get_the_time('l, F j, Y') );
	                        elseif ( is_month() ) :
	                                printf( __('Monthly Archives: %1$s','cswd'), get_the_time('F Y') );
	                        elseif ( is_year() ) :
	                                printf( __('Yearly Archives: %1$s','cswd'), get_the_time('Y') );
	                        endif;
	                ?>
	        </h2>
		</div>
		<?php if ( is_tag() || is_category() ) : ?>
	        <div class="archive-description">
	                <?php echo term_description(); ?>
	        </div>
		<?php endif; ?>
        <section id="main-content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
 			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
	        <?php endwhile; ?>
	        <?php cswd_pagination(); ?>
	        <?php else : ?>
	                <?php get_template_part( 'content', 'none' ); ?>
	        <?php endif; ?>
        </section>
        <section id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
 			<?php get_sidebar(); ?>
        </section>
 
</div>
<?php get_footer(); ?>