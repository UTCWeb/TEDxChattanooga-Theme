<?php
/*
 * The template for displaying Search Results pages
*/




get_header();

global $query_string;
$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
  $query_split = explode("=", $string);
  $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

//$the_query = new WP_Query($search_query); //commented out for Relevanssi Search
?>
  <style>strong.search-excerpt, .hilite { background: yellow; }</style>
  <div class="container contents spacing-top">
    <section>
		<?php get_search_form(); ?>
    </section>
    <hr />
    <section>
		<h1>Search Results for &quot;<?php echo get_search_query(); ?>&quot;</h1>
		<?php if ( function_exists('spell_suggest') ) { spell_suggest(); } ?>
		<?php if ( function_exists('related_searches') ) { related_searches(); } ?>
		
		<?php if ( have_posts() ) :  // $the_query-> removed for Relevanssi Search?>
			<?php while ( have_posts() ) : the_post(); 
					$title 	= get_the_title();
					$keys= explode(" ",$s);
					$title 	= preg_replace('/('.implode('|', $keys) .')/iu',
						'<strong class="search-excerpt">\0</strong>',
						$title);
			?>
				<article>
					<h2><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h2>
					<p><?php the_excerpt(); ?></p>
					<p> <a href="<?php the_permalink(); ?>">View</a> </p>
				</article>
			<?php endwhile; ?>
		<?php else :  // no results?>
			<article>
				<h1>No Results Found.</h1>
			</article>
		<?php endif; ?>

		
		<?php wp_reset_postdata(); ?>
    </section>
  </div><!-- .container contents -->
<?php get_footer(); ?>