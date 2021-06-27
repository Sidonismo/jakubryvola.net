<?php

/**
 * The sidebar containing the main widget area.
 *
 * @package Baobab
 */

?>

<aside id="secondar" role="complementary">
  <?php
  // echo '<pre>';
  // print_r(pll_current_language());
  // wp_die();

  if ((pll_current_language() === 'en') && (is_front_page())) {
    echo '<p class="napis-uvod">Fine and original furniture</p>';
  } elseif (is_front_page()) {
    echo '<p class="napis-uvod">Návrhy a realizace autorského nábytku.</p>';
  }
  get_template_part('template-parts/main/sidebar'); ?>
</aside><!-- #secondary -->