<?php
/**
 * Plugin Name: No Browser Nag
 * Version:     1.2
 * Plugin URI:  http://coffee2code.com/wp-plugins/no-browser-nag/
 * Author:      Scott Reilly
 * Author URI:  http://coffee2code.com
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Description: Removes the browser update nag that appears in the admin dashboard when using a less-than-current web browser.
 *
 * NOTE: I don't condone using an out-of-date browser. Such a browser puts your
 * computer and data at potential risk. However, there are situations where you
 * cannot upgrade in a timely fashion, or you are intentionally holding off on
 * upgrading (e.g. as you wait for a bugfix release, or for browser plugins to
 * update their compatibility).
 *
 * Compatible with WordPress 3.4+ through 4.1+.
 *
 * =>> Read the accompanying readme.txt file for instructions and documentation.
 * =>> Also, visit the plugin's homepage for additional information and updates.
 * =>> Or visit: https://wordpress.org/plugins/no-browser-nag/
 *
 * @package No_Browser_Nag
 * @author  Scott Reilly
 * @version 1.2
 */

/* TODO:
 * - Add filter to define capabilities for who can see browser nag (or perhaps who can't see it)
 * - Support for a slimline browser nag (maybe like Update Nag as an admin notice, or a footer message)
 *  (unless better served as a separate plugin)
 * - Differentiate between insecure and out-of-date messages
 * - Perhaps a notice mechanism more subtle than WP default
*/

/*
	Copyright (c) 2011-2015 by Scott Reilly (aka coffee2code)

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

defined( 'ABSPATH' ) or die();

if ( ! function_exists( 'c2c_no_browser_nag' ) ) :

	/**
	 * Disable the WordPress browser nag.
	 *
	 * @since 1.0
	 */
	function c2c_no_browser_nag() {
		// This is cribbed from wp_check_browser_version()
		$key = md5( $_SERVER['HTTP_USER_AGENT'] );
		add_filter( 'pre_site_transient_browser_' . $key, '__return_null' );
	}

endif;

add_action( 'admin_init', 'c2c_no_browser_nag' );
