<?php get_header(); ?>
<div class="container">
        
        <section id="main-content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <?php echo do_shortcode(' [image-carousel] '); ?>
<<<<<<< HEAD
            <?php echo do_shortcode(' [sc_top_news] '); ?>
 			<?php echo do_shortcode(' [sc_top_tu_sach] '); ?>
=======

 			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
	        <?php endwhile; ?>

	        <?php cswd_pagination(); ?>

	        <?php else : ?>
	                <?php get_template_part( 'content', 'none' ); ?>
	        <?php endif; ?>
            
>>>>>>> 18ec0ea1acaf0566beb0be33ecb8cb7ec5abd848
        </section>
        <section id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
 			<?php get_sidebar(); ?>
        </section>
 
</div>
<?php get_footer(); ?>