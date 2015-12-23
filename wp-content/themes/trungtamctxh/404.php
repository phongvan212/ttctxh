<?php get_header(); ?>
 
<div id="container">
 
        <section id="main-content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		 <?php
		        _e('<h2>404 NOT FOUND</h2>', 'cswd');
		        _e('<p>The article you were looking for was not found, but maybe try looking again!</p>', 'cswd');
		 
		        get_search_form();
		 
		        _e('<h3>Content categories</h3>', 'cswd');
		        echo '<div class="404-catlist">';
		        wp_list_categories( array( 'title_li' => '' ) );
		        echo '</div>';
		 
		        _e('<h3>Tag Cloud</h3>', 'cswd');
		        wp_tag_cloud();
		?>
        </section>
        <section id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <?php get_sidebar(); ?>
        </section>
 
</div>
 
<?php get_footer(); ?>