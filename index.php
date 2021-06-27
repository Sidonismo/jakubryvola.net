<?php

/**
 * Main template file
 *
 * @package Baobab
 * 
 * <!-- Header -->
 */
get_header();
?>
<h1>index</h1>
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