<?php

namespace MetaBoxes;

/**
 * Custom MetaBoxes in Posts
 */

\MetaBoxes\initialize();

function initialize()
{
    add_action('admin_init', '\MetaBoxes\admin_init');

    add_action('save_post_exhibitor', '\MetaBoxes\save_twitter_handle');
    add_action('save_post_exhibitor', '\MetaBoxes\save_instagram_handle');
    add_action('save_post_exhibitor', '\MetaBoxes\save_tiktok_handle');
    add_action('save_post_exhibitor', '\MetaBoxes\save_facebook_handle');
    add_action('save_post_exhibitor', '\MetaBoxes\save_linktree_url');
    add_action('save_post_exhibitor', '\MetaBoxes\save_website');   
    add_action('save_post_exhibitor', '\MetaBoxes\save_bluesky_handle'); 
    
    add_action('save_post_panel', '\MetaBoxes\save_start_and_end_time');     
}

function admin_init()
{
    add_meta_box('twitter_handle_meta', 'Twitter handle', '\MetaBoxes\twitter_handle', 'exhibitor', 'side');
    add_meta_box('instagram_handle_meta', 'Instagram handle', '\MetaBoxes\instagram_handle', 'exhibitor', 'side');
    add_meta_box('tiktok_handle_meta', 'Tiktok handle', '\MetaBoxes\tiktok_handle', 'exhibitor', 'side');
    add_meta_box('facebook_handle_meta', 'Facebook handle', '\MetaBoxes\facebook_handle', 'exhibitor', 'side');
    add_meta_box('bluesky_handle_meta', 'Bluesky handle', '\MetaBoxes\bluesky_handle', 'exhibitor', 'side');
    add_meta_box('linktree_url_meta', 'Linktree URL', '\MetaBoxes\linktree_url', 'exhibitor', 'side');
    add_meta_box('website_meta', 'Website', '\MetaBoxes\website', 'exhibitor', 'side');

    add_meta_box('start_and_end_time_meta', 'Start and End Time', '\MetaBoxes\start_and_end_time', 'panel', 'side' );
}

function twitter_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $twitter_handle = (isset($custom['twitter_handle'][0])) ? $custom['twitter_handle'][0] : '';
?>
    <label for="twitter_handle">Twitter Handle:</label>
    <input type="text" name="twitter_handle" value="<?php echo $twitter_handle; ?>" />
<?php
}

function save_twitter_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $twitter_handle = isset( $_POST['twitter_handle'] ) ? $_POST['twitter_handle'] : '';

    update_post_meta($post->ID, 'twitter_handle', $twitter_handle);
}

function instagram_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $instagram_handle = (isset($custom['instagram_handle'][0])) ? $custom['instagram_handle'][0] : '';
?>
    <label for="instagram_handle">Instagram Handle:</label>
    <input type="text" name="instagram_handle" value="<?php echo $instagram_handle; ?>" />
<?php
}

function save_instagram_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $instagram_handle = isset( $_POST['instagram_handle'] ) ? $_POST['instagram_handle'] : '';

    update_post_meta($post->ID, 'instagram_handle', $instagram_handle);
}

function tiktok_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $tiktok_handle = (isset($custom['tiktok_handle'][0])) ? $custom['tiktok_handle'][0] : '';
?>
    <label for="tiktok_handle">Tiktok Handle:</label>
    <input type="text" name="tiktok_handle" value="<?php echo $tiktok_handle; ?>" />
<?php
}

function save_tiktok_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $tiktok_handle = isset( $_POST['tiktok_handle'] ) ? $_POST['tiktok_handle'] : '';

    update_post_meta($post->ID, 'tiktok_handle', $tiktok_handle);
}

function facebook_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $facebook_handle = (isset($custom['facebook_handle'][0])) ? $custom['facebook_handle'][0] : '';
?>
    <label for="facebook_handle">Facebook Handle:</label>
    <input type="text" name="facebook_handle" value="<?php echo $facebook_handle; ?>" />
<?php
}

function save_facebook_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $facebook_handle = isset( $_POST['facebook_handle'] ) ? $_POST['facebook_handle'] : '';

    update_post_meta($post->ID, 'facebook_handle', $facebook_handle);
}

function bluesky_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $bluesky_handle = (isset($custom['bluesky_handle'][0])) ? $custom['bluesky_handle'][0] : '';
?>
    <label for="bluesky_handle">Blueksy Handle:</label>
    <input type="text" name="bluesky_handle" value="<?php echo $bluesky_handle; ?>" />
<?php
}

function save_bluesky_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $bluesky_handle = isset( $_POST['bluesky_handle'] ) ? $_POST['bluesky_handle'] : '';

    update_post_meta($post->ID, 'bluesky_handle', $bluesky_handle);
}

function linktree_url()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $linktree_url = (isset($custom['linktree_url'][0])) ? $custom['linktree_url'][0] : '';
?>
    <label for="linktree_url">Linktree url:</label>
    <input type="text" name="linktree_url" value="<?php echo $linktree_url; ?>" />
<?php
}

function save_linktree_url()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $linktree_url = isset( $_POST['linktree_url'] ) ? $_POST['linktree_url'] : '';

    update_post_meta($post->ID, 'linktree_url', $linktree_url);
}

function website()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $website = (isset($custom['website'][0])) ? $custom['website'][0] : '';
?>
    <label for="website">Website:</label>
    <input type="text" name="website" value="<?php echo $website; ?>" />
<?php
}

function save_website()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $website = isset( $_POST['website'] ) ? $_POST['website'] : '';

    update_post_meta($post->ID, 'website', $website);
}


function start_and_end_time()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $start_time     = isset( $custom['start_time'] ) ? $custom['start_time'][0] : ''; 
    $end_time       = isset( $custom['end_time'] ) ? $custom['end_time'][0] : '';
?>
    <label for="start_time">Start time:</label>
    <input type="time" name="start_time" value="<?php echo $start_time; ?>" /><br />
    <label for="end_time">End time:</label>
    <input type="time" name="end_time" value="<?php echo $end_time; ?>" />    
<?php
}

function save_start_and_end_time()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $start_time = isset( $_POST['start_time'] ) ? $_POST['start_time'] : '';
    $end_time   = isset( $_POST['end_time'] ) ? $_POST['end_time'] : '';    

    update_post_meta($post->ID, 'start_time', $start_time);  
    update_post_meta($post->ID, 'end_time', $end_time);       
}