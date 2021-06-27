<?php

/**
 * Front Page Template
 * 
 * @package baobab
 */
get_header();
?>
<div class="sidebar nav">
  <?php get_sidebar(); ?>
</div>
<div class="galerie">
  <div class="slideshow">
    <?php the_content(); //get_post(get_current_blog_id()); //echo do_shortcode('[metaslider id="37"]'); 
    ?>
  </div>
</div>
<div class="jazyk front">
  <ul class="vyber-jazyk"><?php pll_the_languages(array('show_flags' => 1)); ?>
  </ul>
</div>
<?php
get_footer();
?>