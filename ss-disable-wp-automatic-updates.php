<?php
/**
 * Plugin Name: SS Disable WP Automatic Updates
 * Description: A Plugin that disables automatic updates for WordPress major core, plugins, and themes.
 * Version: 1.0
 * Author: Saintly Solutions
 * Plugin URI: https://github.com/aaronstpierre/ss-disable-wp-automatic-updates.git 
 * Author URI: https://saintlysolutions.com
 * License: GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: ss-wp-disable-automatic-updates 
 * Domain Path: /languages
 * Requires at least: 5.0
 */

// Disable automatic core updates (both major and minor).
add_filter( 'allow_minor_auto_core_updates', '__return_true' );
add_filter( 'allow_major_auto_core_updates', '__return_false' );

// Disable automatic updates for all plugins.
add_filter( 'auto_update_plugin', '__return_false' );

// Disable automatic updates for all themes.
add_filter( 'auto_update_theme', '__return_false' );
