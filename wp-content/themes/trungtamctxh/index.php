<?php get_header(); ?>
<div class="container">
        
        <section id="main-content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <?php echo do_shortcode(' [image-carousel] '); ?>

            <?php echo do_shortcode(' [sc_top_news] '); ?>
 			<?php echo do_shortcode(' [sc_news_by_cat cat_id="32" take_num="10"] '); ?>
 
        </section>
        <section id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
 			<?php get_sidebar(); ?>
        </section>
 
</div>
<?php get_footer(); ?>