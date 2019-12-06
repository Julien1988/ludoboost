<?php
get_header();

?>  
<main class="main contact-page">
    <!--Section: Contact v.2-->

    <!-- https://mdbootstrap.com/docs/jquery/forms/contact/ -->
<section class="contact-page__section">
<?php

if ( have_posts() ) :
    while ( have_posts() ):
        the_post();
        the_title();
        //get_template_part( 'template-part/content/contact-page' );
        
        the_content();
        
        
    endwhile;
endif;
wp_reset_postdata();

?>
</section>
</main>
<?php

get_footer();