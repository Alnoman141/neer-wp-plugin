<?php 

/**
 * @package neer-plugin
*/

if(!defined('WP_UNINSTALL_PLUGIN')){
    die;
}

// remove all the plugin data from the database
// $posts = get_posts(array(
//     'post_type' => 'book',
//     'numberposts' => -1
// ));

// foreach($posts as $post){
//     wp_delete_post($post->ID, true);
// }


// remove all the plugin data from the database
global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN(SELECT id FROM wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)");