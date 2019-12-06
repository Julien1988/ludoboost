<?php
get_header();


if ( have_posts() ) :
    while ( have_posts() ):
        the_post();
        the_title();
        get_template_part( 'template-part/content/post-home' );
        
    endwhile;
endif;
wp_reset_postdata();

get_footer();