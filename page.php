<?php

/**
 * Page.php Template
 * 
 * @package baobab
 */
get_header();
// echo '<pre>';
// $bla = (get_current_site() !== 'info-2');
// print_r($bla);
// wp_die();
?>
<div class="sidebar nav">
  <?php get_sidebar(); ?>
</div>
<div class="galerie">
  <?php
  if (get_current_site() === 'info-2' || get_current_site() === 'about' || get_current_site() === 'contact' || get_current_site() === 'kontakt') { ?>
    <div class="slideshow info">
      <?php the_content(); //get_post(get_current_blog_id()); //echo do_shortcode('[metaslider id="37"]'); 
      ?>
    </div>
  <?php
  } else {
  ?>
    <div class="slideshow">
      <?php
      the_content();
      ?>
    </div>
  <?php
  }
  ?>
</div>
<div class="jazyk">
  <ul class="vyber-jazyk"><?php pll_the_languages(array('show_flags' => 1)); ?>
  </ul>
</div>
<?php
get_footer();
?>