=== Plugin Name ===
Contributors: kkarpieszuk
Tags: acf, advanced custom fields, meta box, custom fields
Requires at least: 4.6
Tested up to: 4.9.8
Stable tag: 1.0
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Show WordPress native meta box for custom fields when Advanced Custom Fields plugin is active

== Description ==

Since version 5.6 Advanced Custom Fields plugin hides WordPress native interface to display custom fields on the posts
edit screen.

If you are plugin developer, advanced WordPress user or you feel much better when you have custom fields at
a glance, you probably would like to discard this change.

When you activate this tiny plugin, you will see the native custom fields interface again.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/Native-Custom-Fields-Meta-Box-and-ACF` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress


== Frequently Asked Questions ==

= Where is the configuration screen for this plugin? =

This plugin hasn't configuration options. Just install it and you will see native custom fields UI again.

= Does this plugin remove interface provided by ACF plugin? =

No, you will see native custom fields interface alongside ACF interface

= I activated the plugin but I still don't see the interface =

On the top of post edit screen click on the Screen Options and select checkbox to display Custom Fields

The another reason might be you are using WordPress 5.0 or higher with Gutenberg editor. Gutenberg editor doesn't display 
custom fields interface at all. If you want to see this UI, switch to classic editor 
from <a href="https://wordpress.org/plugins/classic-editor/">this plugin</a>

If you would like to see custom fields UI on the Gutenberg edit screen, I suggest 
<a href="https://wordpress.org/plugins/custom-fields-gutenberg/">this plugin</a>. In this case you don't need my plugin at all. 

== Screenshots ==

1. Native WordPress custom fields interface

== Changelog ==

= 1.0 =
* Initial release
