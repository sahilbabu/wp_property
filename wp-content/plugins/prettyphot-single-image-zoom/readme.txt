=== PrettyPhoto Zoom ===
Contributors: abmcr (andrea bersi)
Donate link: http://www.andreabersi.com/
Tags: prettyPhoto, zoom, image zoom, images,
Requires at least: 3.0.3
Tested up to: 3.5
Stable tag: trunk

Add a checkbox into media window for insert a javascript zoom to large image with prettyPhoto javascript.

== Description ==

Add a checkbox into media window for insert a javascript zoom to large image with jQuery prettyPhoto.
The basic idea id build from Viva Zoom Plugin , but i want no use Highslide but jquery.
See the screenshots for a demo

= Translators: =

* Slovak(sk_SK) - [Branco Radenovich](http://webhostinggeeks.com/blog/)

== Installation ==

To install PrettyPhoto Zoom:

1. Upload the "PrettyPhoto Zoom" directory and all its contents to your `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= What about this plugin? =

This plugin is a simple plugin wich allow the user to click on the
image and zoom it with the PrettyPhoto Javascript (http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/)

= If i want to change the theme? =
The plugin come with a theme dark; into the prettyPhoto_3.1.4/js folder the launch.js file set the theme as

[…]
animation_speed: 'normal', /* fast/slow/normal */
social_tools: false,
theme: 'dark_square',
[...]

if you want to change a line of the setup change directly; for example, if you want a Facebook theme write this line

theme: 'facebook'

The themes are in prettyPhoto_3.1.4/images/prettyPhoto: you can use a theme you want.

= More info
See the screenshot

== Screenshots ==

1. A screenshot of plugin admin window
2. The plugin in action


== Changelog ==
= 2.1 =
* Slovack language by Branco Radenovich
= 2.0 =
* New code for the new Image Media
* Upgraded Pretthy Photo to 3.1.4
= 1.0 =
* First public release.

== Upgrade Notice ==
Deactivate the old version, delete it and reinstall. If you want to manualy upgrade, simple copy into
plugin direcory the new folder prettyPhoto_3.1.4 and replace the ab_pretthyphoto.php file.