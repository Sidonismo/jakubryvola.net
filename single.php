<?php

/**
 * Single.php Template
 * 
 * @package baobab
 */
get_header();
?>
<h1>Single</h1>
<div class="sidebar nav">
  <?php get_template_part('template-parts/main/sidebar'); ?>
</div>
<div class="galerie">
  <div class="slideshow"><?php echo do_shortcode('[metaslider id="37"]'); ?></div>
</div>
<div class="jazyk"></div>
<?php
get_footer();
?>