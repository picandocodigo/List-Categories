=== List categories ===
Contributors: fernandobt
Donate Link: http://picandocodigo.net/programacion/wordpress/list-category-posts-wordpress-plugin-english/#support
Tags: list, categories, cms
Requires at least: 3.3
Tested up to: 4.9
Stable tag: 0.2
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

==Markup and Styling of Category Lists==

Taken from the [wp_list_categories official documentation](http://codex.wordpress.org/Template_Tags/wp_list_categories#Markup_and_Styling_of_Category_Lists).

By default, wp_list_categories() generates nested unordered lists (ul) within a single list item (li) titled "Categories".

You can remove the outermost item and list by setting the title_li parameter to an empty string. You'll need to wrap the output in an ordered list (ol) or unordered list yourself (see the examples above). If you don't want list output at all, set the style parameter to none.

You can style the output with these CSS selectors :

`
li.categories { ... }  /* outermost list item */
li.cat-item { ... }
li.cat-item-7 { ... }  /* category ID #7, etc */
li.current-cat { ... }
li.current-cat-parent { ... }
ul.children { ... }
`

==Show categories list in columns==

For outputting the list into columns, you can use [CSS’s multicolumns](https://www.w3.org/TR/css-multicol-1/). Since by default the list is printed as an unordered list with the “categories” class, you can add this to your CSS:

`
.categories{
    column-count: 5;
    column-gap: 50px;
}
`

==Changelog==

= 0.2 =

* Fixes plugin content with wrong placement. Thanks windwww from the WP Forums.

= 0.1 =

 * First version based on [this GitHub issue](https://github.com/picandocodigo/List-Category-Posts/issues/106)
