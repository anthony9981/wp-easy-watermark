<?php
/*
Plugin Name:	WP Easy Watermark
Description:	An update and keep maintain version from Easy Watermark
Version:		1.0.0
Author:		BracketSpace
Author URI:	https://vietnamtutor.com/
License:		GPLv2 or later
License URI:	http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-easy-watermark
*/

// Define flag, that we have plugin loaded
define('WP_EASY_WATERMARK', true);

define('WPEWDS', DIRECTORY_SEPARATOR);
define('WPEWBASE', dirname(__FILE__));
define('WPEWLIB', WPEWBASE . WPEWDS . 'lib');
define('WPEWCLASSES', WPEWBASE . WPEWDS . 'classes');
define('WPEWVIEWS', WPEWBASE . WPEWDS . 'views');

// Require all needed files
require_once WPEWCLASSES . WPEWDS . 'class-wp-ew-pluggable.php';
require_once WPEWCLASSES . WPEWDS . 'class-wp-ew-plugin-core.php';
require_once WPEWCLASSES . WPEWDS . 'class-wp-ew-plugin.php';
require_once WPEWCLASSES . WPEWDS . 'class-wp-ew-settings.php';
require_once WPEWLIB . WPEWDS . 'WPEasyWatermark.php';
require_once WPEWBASE . WPEWDS . 'freemius.php';

// Initiate plugin
WP_EW_Plugin::init();
