<?php
/**
 * @package No_Browser_Nag
 * @author Scott Reilly
 * @version 1.0
 */
/*
Plugin Name: No Browser Nag
Version: 1.0
Plugin URI: http://coffee2code.com/wp-plugins/no-browser-nag/
Author: Scott Reilly
Author URI: http://coffee2code.com
Description: Removes the browser update nag that appears in the admin dashboard when using a less-than-current web browser.

NOTE: I don't condone using an out-of-date browser. Such a browser puts your
computer and data at potential risk. However, there are situations where you
cannot upgrade in a timely fashion, or you are intentionally holding off on
upgrading (e.g. as you wait for a bugfix release, or for browser plugins to
update their compatibility).

Compatible with WordPress 3.2+.

=>> Read the accompanying readme.txt file for instructions and documentation.
=>> Also, visit the plugin's homepage for additional information and updates.
=>> Or visit: http://coffee2code.com/wp-plugins/no-browser-nag/

TODO:
	* Add filter to define capabilities for who can see browser nag (or perhaps who can't see it)
	* Support for a slimline browser nag (maybe like Update Nag as an admin notice, or a footer message)
	  (unless better served as a separate plugin)
	* Differentiate between insecure and out-of-date messages
	* Perhaps a notice mechanism more subtle than WP default

*/

/*
Copyright (c) 2011 by Scott Reilly (aka coffee2code)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy,
modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR
IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

if ( ! function_exists( 'c2c_no_browser_nag' ) ) :
	/**
	 * Disable the WordPress browser nag
	 *
	 * @since 1.0
	 */
	function c2c_no_browser_nag() {
		// This is cribbed from wp_check_browser_version()
		$key = md5( $_SERVER['HTTP_USER_AGENT'] );
		add_filter( 'site_transient_browser_' . $key, '__return_null' );
	}
endif;

if ( ! function_exists( '__return_null' ) ) :
	function __return_null() {
		return null;
	}
endif;

add_action( 'admin_init', 'c2c_no_browser_nag' );

?>