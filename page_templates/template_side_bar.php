<?php
/*
Template Name: Two columns w/ sidebar
*/

get_header();
?>
  <div id="content" class="container contents">
    <div class="row">
      <div class="col-md-9">
        <section>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </section>
      </div>
      <div class="col-md-3 well">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div><!-- .container contents -->
<?php get_footer(); ?>