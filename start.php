<?php
/**
 * Google API PHP Client Start.php
 *
 * @package google-api-php-client
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2011
 * @link http://www.thinkglobalschool.com/
 * 
 * This plugin simply makes the google-api-php-client 
 * libraries available to other elgg plugins
 * 
 * See: http://code.google.com/p/google-api-php-client/
 * 
 * ie:
 * 
 * Instead of having to include a copy of the library, just activate this
 * plugin and then call:
 * 
 * elgg_load_library('gapc:Client');       // Main client * MUST BE LOADED *
 * elgg_load_library('gapc:Books'); // Books service
 */
elgg_register_event_handler('init', 'system', 'google_api_client_init', 1);

function google_api_client_init() {
	$api_root = elgg_get_plugins_path() . 'google-api-php-client/vendors/google-api-php-client-1.0.5-beta/src';

	set_include_path(get_include_path() . PATH_SEPARATOR . $api_root);

	// Main include
	elgg_register_library('gapc:Client', $api_root . '/Google/Client.php');

	$services = opendir($api_root . '/Google/Service');

	// Register services from services
	while (FALSE !== ($file = readdir($services))) {
		if ($file != "." && $file != "..") {
			$basename = substr($file, 0, strrpos($file, '.'));
			elgg_register_library('gapc:' . $basename, $api_root . "/Google/Service/{$basename}.php");
		}
	}
}
