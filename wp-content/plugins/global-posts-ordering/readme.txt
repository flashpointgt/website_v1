=== Global Posts Ordering ===

Contributors: BASICS09, nonverbla
Plugin Name: Global Posts Ordering
Plugin URI: http://www.basics09.de/
Tags: post types, global, multiple, post, posts, page, custom post type, admin, drag-and-drop, simple, AJAX, manage, menu_order, order, ordering, re-order
Author URI: http://www.basics09.de/
Author: BASICS09, nonverbla
Donate link: http://www.nonverbla.de/
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 0.9.4
Version: 0.9.4

Adjust the global order of posts from one or various post types via simple drag and drop.

== Description ==

Yet another plugin for ordering posts? YES! 

This plugin makes it possible to adjust the global order of posts from different post types. Basically, it tries to get together the best functionalities of the superb plugins <a href="http://wordpress.org/extend/plugins/postmash/">postMash</a> and <a href="http://wordpress.org/extend/plugins/simple-page-ordering/">Simple Page Ordering</a>. *Global Posts Ordering* uses the stand-alone admin options page of postMash for globally setting the order of posts and the very cool AJAX approach of 'Simple Page Ordering'. Best you test it yourself and see if it fits your needs.

= Tested on =

* (OSX) Safari :)
* (OSX) Firefox :)
* (OSX) Chrome :)
* (OSX) Opera :)
* (WIN) Firefox :)
* (WIN) Chrome :)
* (WIN) IE 9 :)
* (WIN) IE 8 :)
* (WIN) IE 7 :/

= Rating and Bugs =

As you can see, this plugin is not version 1.0 yet, so please post comments about any bugs you find, before giving it a bad rating.


== Installation ==

* Install easily with the WordPress plugin control panel or manually download the plugin and upload the extracted folder to the `/wp-content/plugins/` directory

* Activate the plugin through the 'Plugins' menu in WordPress

* Open the file functions.php in your theme and put the following in there: 
`
if ( class_exists("global_posts_ordering") ) {
   $global_posts_ordering = new global_posts_ordering(array("my_post_type_1", "my_post_type_2", "my_post_type_3"));
}
`
You can include the built-in post types 'post' and 'page' as well as custom post types.

* Save the functions.php file.

* If you registered only one post type, there should be a new submenu-item under your post type saying "re-order". If you registered multiple post types, you should now have a new top-level menu item saying "Posts Order". Each lead you to the drag-and-drop re-ordering interface.

* Don't forget to set the "orderby" option, if you fetch your posts in your template, for example like this:
`
$args = array(
   "post_type"=>array("my_post_type_1", "my_post_type_2", "my_post_type_3"),
   "orderby"=>"menu_order",
   "order"=>"ASC",
   "numberposts"=>-1
);
$posts = get_posts($args);
`
Of course, there are many different ways to fetch posts in your template. It's only important to set the "orderby" to "menu_order" and "order" to "ASC". Other ways to get the posts ordered by menu_order are described on the <a href="http://wordpress.org/extend/plugins/postmash/installation/">postMash Installation Page</a>

* If anything doesn't work, please comment.

== Screenshots ==

1. Just drag the posts up and down to change their order

== Changelog ==

= 0.9.4 =
* If only one post type is registered with the plugin, put it's admin link in the submenu of this post type, labeled "Re-Order"
= 0.9.3 =
* Wait until admin_init to remove invalid post types (Error produced in 0.9.2)
= 0.9.2 =
* Prevent the plugin from producing errors if no post types are given
* CSS Tweaks
= 0.9.1 =
* resolved an error with localization
= 0.9 =
* Global Posts Ordering


