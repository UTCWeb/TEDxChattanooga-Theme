<div id="content" class="post-content">

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="page-header">
      <h2><?php the_title(); ?></h2>
      <ul class="inline post-meta">
        <li>
          <small><i class="fa fa-clock-o"></i> &nbsp; <?php the_time('F j, Y'); ?> &nbsp; <?php the_category(' '); ?></small>
        </li>
      </ul>
    </div>

    <div class="user-generated-content">
      <?php the_content(); ?>
    </div><!-- .user-generated-content -->

    <?php //comments_template(); ?>

    <?php WP_Render::partial('partials/_pagination.php'); ?>


  <?php endwhile; endif; ?>

</div><!-- .post-content -->