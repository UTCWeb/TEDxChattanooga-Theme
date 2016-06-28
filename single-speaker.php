<?php get_header(); ?>
  <div class="container spacing-top">
    <div class="row">
      <div class="col-md-9">
        <div id="content" class="post-content">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php
            $speaker  = get_post();
            $video_id = get_post_meta($speaker->ID, '_speaker_video_id', true);
            $twitter  = get_post_meta($speaker->ID, '_speaker_twitter_link', true);
            $name     = $speaker->post_title;
            $excerpt  = $speaker->post_excerpt;
            ?>
            <div class="page-header">
              <h2><?php the_title(); ?>
                <small><?= $excerpt ?></small>
              </h2>
            </div>
            <?php if (!empty($video_id)): ?>
              <div class="feature-image">
                <div class="video-container">
                  <iframe width="100%" height="100%" src="//www.youtube.com/embed/<?= $video_id ?>" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            <?php endif; ?>

            <div class="user-generated-content">
              <div class="pull-right speaker-thumbnail">
	              <?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
	              <h5 class="speaker-caption"><?php the_title(); ?>
	              <span class="pull-right">
		            <?php if (!empty($twitter)): ?>
		              <a href="<?= $twitter ?>"><i class="fa fa-twitter"><!--twitter icon--></i></a>
		            <?php endif; ?>
	              </span></h5>
	              <span class="social social-facebook">
                    <div class="fb-like" data-href="<?= get_permalink($speaker->ID); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                  </span>
                  <span class="social social-twitter">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="<?= get_theme_mod('twitter_account') ?>">Tweet</a>
                  </span>
              </div>
              <?php the_content(); ?>
              
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="col-md-3">
        <?php get_sidebar('speaker'); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>