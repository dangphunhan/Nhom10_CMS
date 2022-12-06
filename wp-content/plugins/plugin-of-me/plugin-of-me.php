<?php
/*
Plugin Name: plugin of me
Plugin URI: http://www.mywebsite.com/plugin-of-me
Description: Hướng dẫn tạo lập plugin
Version: 1.0.0
Author: me.
Author URI: http://www.mywebsite.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

add_action('wp_head', 'plugin_of_me_header');

function plugin_of_me_header() {
    echo '<h1 style="text-align: center; color: red;">Chào mừng bạn đến với header</h1>';
}

add_filter('comment_text','filter_profanity', 10, 2);
function filter_profanity( $content){
    $profanities = array ('duma','coincard','cl');
    $content = str_ireplace($profanities, '{***}', $content);
    return $content;
}



function my_function( $post_id )
        {
            $postdate = '';

            $my_args = array(
               'ID' => $post_id,
               'post_date' => $postdate
            );

            if ( ! wp_is_post_revision( $post_id ) ){

                    // unhook this function so it doesn't loop infinitely
                    remove_action('save_post', 'my_function');

                    // update the post, which calls save_post again
                    wp_update_post( $my_args );

                    // re-hook this function
                    add_action('save_post', 'my_function');
            }
        }
        add_action('save_post', 'my_function');


