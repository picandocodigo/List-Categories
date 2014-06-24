=== List categories ===
Contributors: fernandobt
Donate Link: http://picandocodigo.net/programacion/wordpress/list-category-posts-wordpress-plugin-english/#support
Tags: list, categories, cms
Requires at least: 3.3
Tested up to: 3.9.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Simple plugin to display categories in any post or page with a shortcode. It's basically a shortcode API interface to the [wp_list_categories](http://codex.wordpress.org/Template_Tags/wp_list_categories) WordPress function.

Usage:

`[categories orderby=count]`

Will display links to all the categories and order them by number of
posts in each category.

==Installation==

* Upload the plugin's directory into your wp-content/plugins/ directory.
* Login to your WordPress Admin menu, go to Plugins, and activate it.

==Other notes==

By default, the usage shows:

  * No link to all categories
  * Sorts the list of Categories by the Category name in ascending order
  * Displayed in an unordered list style
  * Does not show the post count
  * Displays only Categories with posts
  * Sets the title attribute to the Category Description
  * Is not restricted to the child_of any Category
  * No feed or feed image used
  * Does not exclude any Category and includes all Categories
  * Displays the active Category with the CSS Class-Suffix ' current-cat'
  * Shows the Categories in hierarchical indented fashion
  * Display Category as the heading over the list
  * No SQL LIMIT is imposed ('number' => 0 is not shown above)
  * Displays (echos) the categories
  * No limit to depth
  * All categories.
  * The list is rendered using a new walker object of the the Walker_Category class

See [wp_list_categories](http://codex.wordpress.org/Template_Tags/wp_list_categories) for usage.

==FAQ==
No questions so far

==Changelog==

0.1
 * First version based on [this GitHub issue](https://github.com/picandocodigo/List-Category-Posts/issues/106)
