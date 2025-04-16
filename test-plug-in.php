<?php

/**
 * Plugin Name:       test plug-in
 * Description:       
 * Requires at least: 6.3.0
 * Requires PHP:      7.4
 * Version:           0.0.1
 * Author:            chris
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       test_plug_in
 * Website:           
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$plugin_prefix = 'TESTPLUGIN';

// Extract the version number
$plugin_data = get_file_data(__FILE__, ['Version' => 'Version']);

// Plugin Constants
define($plugin_prefix . '_DIR', plugin_basename(__DIR__));
define($plugin_prefix . '_BASE', plugin_basename(__FILE__));
define($plugin_prefix . '_PATH', plugin_dir_path(__FILE__));
define($plugin_prefix . '_VER', $plugin_data['Version']);
define($plugin_prefix . '_CACHE_KEY', 'test_plug_in-cache-key-for-plugin');
define($plugin_prefix . '_REMOTE_URL', 'https://lonestardataranch.com/wp-content/plugins/hoster/inc/secure-download.php?file=json&download=275&token=83b1ea8f24dfa778e91eee675e20a1ae7155db140b9d60058f1f47a5e91d7860');

require constant($plugin_prefix . '_PATH') . 'inc/update.php';

new TESTPLUGIN_DPUpdateChecker(
	constant($plugin_prefix . '_BASE'),
	constant($plugin_prefix . '_VER'),
	constant($plugin_prefix . '_CACHE_KEY'),
	constant($plugin_prefix . '_REMOTE_URL'),
);
