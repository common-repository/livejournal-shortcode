=== LiveJournal Shortcode ===
Contributors: dmonnier
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SGK5F3QQASDXS
Tags: shortcode, livejournal
Requires at least: 2.5
Tested up to: 3.9
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Quickly create text links to LiveJournals in the same format as LJ with this shortcode.

== Description ==

Links to LiveJournals have a very distinctive look: the icon followed by the journal name.  This shortcode follows the same format as LiveJournal's own markup and provides the same results, which you can easily customize with your own CSS styles.

== Installation ==

1. Upload `shortcode-lj` to your `/wp-content/plugins` directory.
2. Activate the plugin through the "Plugins" menu in your WordPress admin.

To use the shortcode, anywhere you want a LJ link:

`[lj user="frank"]`

or

`[lj user="frank" title="Frank the Goat"]`

or

`[lj user="lj-maintenance" title="LiveJournal Maintenance" icon="community"]`

The `user` parameter is required.  It is the actual name of the journal and can be found from the URL when you visit that journal's page.  For example, Frank the Goat's journal is at http://frank.livejournal.com and his username is "frank".  If you do not specify the `user` parameter, the shortcode will result in a red error message to let you know to fix it.

The `title` parameter is optional and controls the formatting of the visible link text on your page.  By default, the `user` parameter will be used for the link text unless the `title` parameter is specified. For example, if you want the text to read "Frank the Goat's Totally Awesome LiveJournal" instead of just "Frank", put that in the `title` parameter.

The `icon` parameter is optional and indicates what kind of LiveJournal this journal is.  Valid options are `user`, `community`, and `news`.  Defaults to `user`.

== Frequently Asked Questions ==

= Can I use this shortcode in excerpts, comments, and/or widgets? =

YES!  Simply add the following four lines to your functions.php:

`add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode', 11);
add_filter( 'the_excerpt', 'do_shortcode', 11);
add_filter( 'comment_text', 'do_shortcode', 11);`

= How do I customize the link or icon used? =

The included stylesheet `style.css` and default LiveJournal icons are easily edited and/or replaced.

== Screenshots ==

1. An example result.

== Changelog ==

= 1.1 =
* Added ability to choose icon type (user, community, news).
* Removed solid white background behind links.

= 1.0 =
* Plug-in created.

== Upgrade Notice ==
= 1.1 =
* You can choose the icon type displayed (user, community, news).

= 1.0 =
* Plug-in created.