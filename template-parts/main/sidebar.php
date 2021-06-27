<?php

/**
 * The sidebar containing the main widget area.
 *
 * @package Baobab
 */
$menu_class = \Baobab_Theme\Inc\Menus::get_instance();
$sidebar_menu_id = $menu_class->get_menu_id('baobab-sidebar-menu');
$sidebar_menus = wp_get_nav_menu_items($sidebar_menu_id);
// echo '<pre>';
// print_r($sidebar_menus);
// wp_die();
?>
<?php
if (!empty($sidebar_menus) && is_array($sidebar_menus)) {
?>
  <ul class="nav-side">
    <?php
    foreach ($sidebar_menus as $menu_item) {
      if (!$menu_item->menu_item_parent) {

        $child_menu_items = $menu_class->get_child_menu_items($sidebar_menus, $menu_item->ID);
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
            'theme_location' => 'baobab-sidebar-menu',
            'container_class' => 'my-extra-menu-class',
          ]
        );
        ?> -->