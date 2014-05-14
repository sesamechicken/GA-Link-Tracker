=== GA Link Tracker ===
Contributors: project107
Donate link: http://www.project107.net
Tags: links, link tracker, analytics, google analytics, events
Requires at least: 3.3
Tested up to: 3.9.1
Stable tag: stable
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A tiny WordPress plugin to track events of link clicks in the main content area of the site.

== Description ==

A tiny WordPress plugin to track events of link clicks in the main content area of the site. Install it and forget about it. 

Links will show up under Events in the Analytics site, and will have a category of 'Links', a label of 'PageID: CURRENT_PAGE_URI', and the value of the href of the link being tracked.

Example of code added to properly formed URLs in main post content:
`onclick="javascript:_gaq.push(['_trackEvent', 'Links', 'PageID: /my_blog/2013/04/my_cool_post/ ', 'http://www.myurl.com/my_blog/my_link.html']);"`

The above example assumes the href of the link is: `http://www.myurl.com/my_blog/my_link.html`

== Installation ==

1. Upload `GA-Link-Tracker.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. All done!

== Frequently asked questions ==

= How do I configure this? =
Short answer: You don't. There are no configurable options to this script, as it simply appends event tracker behavior to your links.

= What other data does it collect? = 
None.

= What else does it do? =
Nothing.



== Changelog ==

v2.1 - Minor bugfix

v2.0 - Updated to use Google's newer analyitcs.js file

v1.0 - Initial release.

