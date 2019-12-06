<?php
get_header();

get_template_part( 'template-part/content/post-home' );

if ( have_posts() ) :
    while ( have_posts() ):
        the_post();
        the_title();
        
    endwhile;
endif;
wp_reset_postdata();

get_footer();