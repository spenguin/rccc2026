<?php
/**
 * Users 
 */

add_role(
    'Exhibitor',
    __('Exhibitor'),
    [
        'read'          => TRUE,
        'edit_posts'    => TRUE,
        'upload_files'  => TRUE
    ]
);

add_filter( 'pre_option_default_role', function( $default_role ) 
{
    return 'exhibitor'; 
} );