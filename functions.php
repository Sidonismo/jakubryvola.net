<?php

/**
 *
 * Baobab theme functions
 *
 */
// echo '<pre>';
// print_r( filemtime( get_template_directory() . '/style.css' )); 
// wp_die();
if (!defined('BAOBAB_DIR_PATH')) {
	define('BAOBAB_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('BAOBAB_DIR_URI')) {
	define('BAOBAB_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once BAOBAB_DIR_PATH . '/inc/helpers/autoloader.php';
require_once BAOBAB_DIR_PATH . '/inc/helpers/template-tags.php';

function baobab_get_theme_instance()
{
	\BAOBAB_THEME\Inc\BAOBAB_THEME::get_instance();
}

baobab_get_theme_instance();

function get_current_site()
{
	$slug = basename(get_permalink());
	return $slug;
}
