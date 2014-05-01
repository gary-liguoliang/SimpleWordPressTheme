<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 4/29/14
 * Time: 8:58 PM
 */

add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
    if( empty( $title ) && ( is_home() || is_front_page() ) ) {
        return get_bloginfo('name'). ' | ' . get_bloginfo( 'description' );
    }
    return $title;
}
