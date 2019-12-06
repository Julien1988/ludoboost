<!-- About page -->

<?php
get_header();
?>
<main class="main">
<?php

if ( have_posts() ) :
    while ( have_posts() ):
        the_post();
        the_title();
        get_template_part( 'template-part/content/about-page-post' );
        
    endwhile;
endif;
wp_reset_postdata();
?>
</main>

<?php
get_footer();