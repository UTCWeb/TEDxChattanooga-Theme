<?php
/*
The template for displaying 404 pages (Not Found)
*/
get_header();
?>
  <div class="container contents spacing-top">
    <section>
	    <h1 class="page-title"><?php _e( 'Not Found', 'tedx' ); ?></h1>
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'tedx' ); ?></p>

				<?php get_search_form(); ?>
    </section>
  </div><!-- .container contents -->
<?php get_footer(); ?>