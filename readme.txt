=== No Browser Nag ===
Contributors: coffee2code
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6ARCFJ9TX3522
Tags: admin, browser, nag, notices, wordpress, upgrade, coffee2code
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Requires at least: 3.4
Tested up to: 3.8.1
Stable tag: 1.1

Removes the browser nag that appears in the admin dashboard when using a less-than-current web browser.


== Description ==

Tired of visiting your WordPress admin dashboard and having WordPress nag you about your web browser being out of date?  Maybe you already know about it and want to hold off on an update and would rather not see the update nag so prominently on your dashboard. Or maybe you don't want your site to bother your users about how up-to-date their browser may be. Activate this plugin and be bothered no more!

In most cases, your browser will already actively alert you to new releases if it doesn't already update your browser for you in the background.

Benefits over simply clicking "dismiss" on the browser nag notice yourself when it appears:

* This plugin prevents WordPress from making the network request to check if the browser is out of date. If you click "dismiss", all you're doing is hiding the nag; WordPress will still make the network request to check if the browser is out of date.
* This plugin prevents the nag from appearing for all users to the admin area of the site. Clicking "dismiss" only removes the nag for the person dismissing it.
* This plugin saves having to see the nag in the first place
* This plugin saves having to click "Dismiss" to dismiss the nag

Of course I don't condone using an out-of-date browser. Such a browser puts your computer and data at potential risk. You are often better served with the latest version of your browser: improved security, improved performance, improved stability, and additional features. However, there are situations where you cannot upgrade in a timely fashion, or you are intentionally holding off on upgrading (e.g. as you wait for a bugfix release, or for browser plugins to update their compatibility).

Links: [Plugin Homepage](http://coffee2code.com/wp-plugins/no-browser-nag) | [Plugin Directory Page](http://wordpress.org/plugins/no-browser-nag/) | [Author Homepage](http://coffee2code.com)


== Installation ==

1. Unzip `no-browser-nag.zip` inside the `/wp-content/plugins/` directory (or install via the built-in WordPress plugin installer)
1. Activate the plugin through the 'Plugins' admin menu in WordPress


== Frequently Asked Questions ==

= What is this browser nag you mention? =

In versions 3.2 and later of WordPress, when visiting the admin dashboard WordPress will alert you if are currently using an out-of-date version of your particular web browser.

= Why would I want to remove the update nag about new releases of my browser? =

Maybe you're made aware by your own means as to new browser releases and choose to upgrade on your own schedule. Or maybe you don't feel WordPress should be nagging you about your browser. Either way, you can save precious dashboard screen real estate otherwise taken up by a browser update nag.

= How will I know if my browser has been updated if the nag doesn't appear? =

Heretofore you haven't relied on WordPress to alert you to browser updates. In most cases, the browsers themselves will alert you to updates. And maybe you're tuned into tech news enough to learn of browser release updates. If you need/prefer for WordPress to alert you to browser updates then of course don't use this plugin.

= Does this plugin just simply hide the nag using CSS or JavaScript? =

No, it does not make use of CSS nor JavaScript to disable the nag. It more efficiently prevents the check from being performed in the first place, which saves a network request to the Browse Happy service to check if your browser is out of date or not.

= Can't I just click the "Dismiss" link at the bottom of the nag and be done with it without using a plugin? =

Clicking the "Dismiss" link at the bottom of the browser nag admin dashboard widget only hides the nag for the person clicking it; you cannot otherwise proactively prevent other users from seeing the browser nag. Also, even if the nag is dismissed, WordPress still routinely performs the check, which incurs a network request.


== Changelog ==

= 1.1 =
* Remove __return_null(); it has since been added to core
* Add check to prevent execution of code if file is directly accessed
* Re-license as GPLv2 or later (from X11)
* Add 'License' and 'License URI' header tags to readme.txt and plugin file
* Remove ending PHP close tag
* Documentation improvements
* Minor code reformatting (spacing)
* Note compatibility through WP 3.8+
* Drop compatibility with versions of WP older than 3.4
* Update copyright date (2014)
* Change donate link
* Add assets directory to plugin repository checkout
* Add screenshot
* Add banner

= 1.0.1 =
* Note compatibility through WP 3.3+
* Add phpDoc for __return_null()
* Add link to plugin directory page to readme.txt
* Add Upgrade Notice section to readme.txt
* Update copyright date (2012)

= 1.0 =
* Initial release


== Upgrade Notice ==

= 1.1 =
Trivial update: miscellaneous small updates; noted compatibility through WP 3.8+; dropped compatibility with version of WP older than 3.4; explicitly stated license

= 1.0.1 =
Trivial update: noted compatibility through WP 3.3+
