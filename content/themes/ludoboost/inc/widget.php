<?php

add_action( 'widgets_init', 'sidebar_footer_init' );

function sidebar_footer_init() {

    register_sidebar( array(
        'name'                      => 'Ma nouvelle zone de widget',
        'id'                        => 'new-widget-area',
        'before_widget'             => '<div class="nwa-widget">',
        'after_widget'              => '</div>',
        'before_title'              => '<h2 class="nwa-title">',
        'after_title'               => '</h2>',
    ) );
}

/* add_action( 'widgets_init', 'sidebar_footer_widget_init');

class sidebar_footer_widget_init extends WP_Widget {
    
    function widget($arg, $instance) {
        //affichage du widget
    }

    function uppdate($new_instance, $old_instancve) {
        //Mise à jour du widget
    }

    function form($instance) {
        //formulaire des réglages
    }
} */

add_action( 'widgets_init', 'social_widgets_init' );
function social_widgets_init() {
 
    register_sidebar( array(
   
    'name'          => 'Mon widget social',
    'id'            => 'new-social-widget-area',
    // 'before_widget' => '<a class="header__header-up__social-links__link">',
    // 'after_widget'  => '</a>',
    'before_title'  => '<a class="header__header-up__social-links__link">',
    'after_title'   => '</a>',
    ));
}