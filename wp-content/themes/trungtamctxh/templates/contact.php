<?php
/*
 Template Name: Contact
 */
?>
<?php get_header(); ?>
<div class="container">
 
        <section id="main-content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                            <?php if(function_exists('bcn_display'))
                            {
                                bcn_display();
                            }?>
                </div>
 				<div class="contact-form">
        			<?php echo do_shortcode('[contact-form-7 id="110" title="Contact form 1"]'); ?>
				</div>
        </section>
        <section id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
 			<?php get_sidebar(); ?>
        </section>
 
</div>
<?php get_footer(); ?>