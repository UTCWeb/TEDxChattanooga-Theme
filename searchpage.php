<?php
/*
Template Name: Search Page
*/

global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);


get_header();

?>
  <div class="container contents spacing-top">
    <section>
		<?php get_search_form(); ?>
    </section>
    <section>
		<?php
			global $wp_query;
			$total_results = $wp_query->found_posts;
		?>
    </section>
  </div><!-- .container contents -->
<?php get_footer(); ?>