<?php
add_action( 'wp_enqueue_scripts', 'ludoboost_enqueue_scripts' );

function ludoboost_enqueue_scripts()
{
    wp_enqueue_style(
        'ludoboost-style',
        get_theme_file_uri( 'public/css/style.css' )
    );
    wp_enqueue_script(
        'ludoboost-script',
        get_theme_file_uri( 'public/js/app.js' ),
        [],
        false,
        true
    );

}