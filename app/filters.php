<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

// add class to list items in nav menu
function so_37823371_menu_item_class(){
    $classes[] = 'hover:font-extrabold md:pl-5';
    return $classes;
}
add_filter ( 'nav_menu_css_class', __NAMESPACE__. '\\so_37823371_menu_item_class', 10, 4 );
