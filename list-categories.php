<?php
/*
  Plugin Name: List Categories
  Plugin URI: https://github.com/picandocodigo/List-Categories
  Description: Simple plugin to display categories in any post or page
  with a shortcode. It's basically a shortcode API interface to the
  wp_list_categories WordPress function.
  Version: 0.2
  Author: Fernando Briano
  Author URI: http://picandocodigo.net/

  Copyright 2014-2015  Fernando Briano  (email : fernando@picandocodigo.net)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 3 of the License, or
  any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
class ListCategories{
  static function list_categories($atts, $content = null) {
    $atts = shortcode_atts(
      array(
        'show_option_all'    => '',
        'orderby'            => 'name',
        'order'              => 'ASC',
        'style'              => 'list',
        'show_count'         => 0,
        'hide_empty'         => 1,
        'use_desc_for_title' => 1,
        'child_of'           => 0,
        'feed'               => '',
        'feed_type'          => '',
        'feed_image'         => '',
        'exclude'            => '',
        'exclude_tree'       => '',
        'include'            => '',
        'hierarchical'       => 1,
        'title_li'           => __( 'Categories' ),
        'show_option_none'   => __( 'No categories' ),
        'number'             => null,
        'echo'               => 1,
        'depth'              => 0,
        'current_category'   => 0,
        'pad_counts'         => 0,
        'taxonomy'           => 'category',
        'walker'             => null
      ), $atts
    );

    ob_start();
    wp_list_categories($atts);
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
  }
}

add_shortcode( 'categories', array('ListCategories', 'list_categories') );