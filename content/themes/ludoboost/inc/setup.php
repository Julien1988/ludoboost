<?php


add_action( 'after_setup_theme', 'ludoboost_theme_setup' );

function ludoboost_theme_setup()
{
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 190,
            'width'       => 190,
            'flex-width'  => false,
            'flex-height' => false,
        )
    );
    set_post_thumbnail_size( 500, 500, false );
}

