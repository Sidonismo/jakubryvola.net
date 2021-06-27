<?php

/**
 * Header Navigation Template
 * 
 * @package Baobab
 */
$menu_class = \Baobab_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('baobab-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);
// echo '<pre>';
// print_r($header_menus);
// wp_die();
$url = site_url();
$parse = parse_url($url);
?>
<div class="grid-container">
  <div class="leva"></div>
  <div class="logo"><a href="<?php echo home_url(); ?>"> <img src="http://localhost:3300/wp-content/uploads/2021/02/Untitled-3.png" class="hvezda"></a></div>
  <div class="prava"></div>
  <div class="jmeno"><a href="<?php echo home_url(); ?>">JAKUB&nbsp;RYVOLA</a></div>
  <nav class="navigace">
    <?php
    if (!empty($header_menus) && is_array($header_menus)) {
    ?>
      <ul class="nav position-absolute">
        <?php
        foreach ($header_menus as $menu_item) {
          if (!$menu_item->menu_item_parent) {

            $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
            $has_children = !empty($child_menu_items) && is_array($child_menu_items);
            $has_sub_menu_class = !empty($has_children) ? 'has-submenu' : '';
        ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_item->url); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo esc_html($menu_item->title); ?>
              </a>
            </li>
          <?php
          }
          ?>
      <?php
        }
      }
      ?>
      </ul>
  </nav>
  <!-- <?php
        wp_nav_menu(
          [
            'theme_location' => 'baobab-header-menu',
            'container_class' => 'my-extra-menu-class',
          ]
        );
        ?> -->