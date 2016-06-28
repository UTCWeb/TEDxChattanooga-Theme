<?php
$template_directory = get_template_directory_uri();
?>
<div class="black-bg spacing-top">
  <div class="container">
    <footer>
      <div class="row">
        <div class="col-md-4 col-sm-12 legal">
          This TEDx event is independently organized.<br>
          Copyright © <?= get_theme_mod('event_name', 'TEDx') ?> <?= date("Y"); ?>. All Rights Reserved. <br /><a
            href="/legal-and-privacy/">Legal &amp; Privacy</a> | <?php wp_loginout(); ?><?php wp_register(' | ', ''); ?>
        </div>
        <div class="col-md-3 col-sm-12">
          <?= get_theme_mod('twitter_follow_button'); ?>
        </div>
        <div class="col-md-5 col-sm-12">
	        <div class="fb-like" data-href="<?= get_site_url(); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
          <!--<div class="built-by gutter-right gutter-bottom">Footer Info</div>
          <a class="utc-link gutter-right ir" taget="_blank" href="#">Link</a>
          <a class="univrel-link ir" taget="_blank" href="#">Hyperlink</a>
          <a class="jc-link gutter-right ir" taget="_blank" href="#">Link</a>
          <a class="twg-link ir" target="_blank" href="#">Link</a>-->
        </div>
      </div>

    </footer>
  </div>
</div>
<?php if (is_single() || is_category() || is_tag() || is_search()) {   //  displaying a single blog post or a blog archive ?>
    <script type="text/javascript">
        jQuery("li.current_page_parent").addClass('current-menu-item');
    </script>
<?php } ?>
<?php wp_footer(); ?>

<!-- 3rd Party Embeds -->
<script>!function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
    if (!d.getElementById(id)) {
      js = d.createElement(s);
      js.id = id;
      js.src = p + '://platform.twitter.com/widgets.js';
      fjs.parentNode.insertBefore(js, fjs);
    }
  }(document, 'script', 'twitter-wjs');</script>
</body>
</html>
