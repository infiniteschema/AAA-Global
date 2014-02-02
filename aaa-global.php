<?php
/**
 * Plugin Name: AAA Global
 * Plugin URI: https://github.com/infiniteschema/AAA-Global
 * Description: Creates a global frontend and admin css and ability to add any global functions
 * Version: 1.0
 * Author: Calen Fretts
 * Author URI: http://infiniteschema.com
 * License: GPLv2
 * GitHub Plugin URI: https://github.com/infiniteschema/AAA-Global
 */
 
/* 
Copyright (C) 2014 Calen Fretts

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

/* general */
function aaa_wp_enqueue_scripts() {
	wp_enqueue_style('aaa-global', plugins_url('style.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'aaa_wp_enqueue_scripts');

function aaa_admin_enqueue_scripts() {
	wp_enqueue_style('aaa-global', plugins_url('admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'aaa_admin_enqueue_scripts');

function aaa_admin_bar_menu($wp_admin_bar) {
	$wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'aaa_admin_bar_menu', 999);

if (!function_exists('is_plugin_active')) {//can be used to run code only if plugin active
	require_once(ABSPATH . '/wp-admin/includes/plugin.php');
}
