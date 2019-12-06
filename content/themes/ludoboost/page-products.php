<?php
get_header();

?>

<!-- page-products -->



<main class="main">

        <div class="main__content">
            
            <!-- Titre rubrique produit -->
  
            <h1 class="main__content__h1 section-thumbnails-top-title"><?php the_field('titre_rubrique_produit') ?></h1>
  
            <section class="section-thumbnails">
              <!-- Boucles des pages poduit -->
              <?php
  
                $the_query = new WP_Query ( 'category_name=produit' );
  
                if($the_query->have_posts()) {
                  while ($the_query->have_posts()) {
                    $the_query->the_post();
  
                    get_template_part(
                      'template-part/content/product-list'
                      
                  );
                  }
                }
  
              wp_reset_query() ?>
            </section>
            
            <!-- <section class="section-deals">

            <article class="section-deals__articles">
            <h2 class="section-deals__articles__title"><?php //the_field('titre_du_produit_1') ?></h2>
            <p class="section-deals__articles__text"><?php //the_field('texte_du_produit_1') ?></p>

            <a href="<?php //the_field('page_contacte_lien') ?>" class="section-deals__link">Commander</a>

            </article>

             <article class="section-deals__articles">
            <h2 class="section-deals__articles__title"><?php //the_field('titre_du_produit_2') ?></h2>
            <p class="section-deals__articles__text"><?php //the_field('texte_du_produit_2') ?></p>

            <a href="<?php //the_field('page_contacte_lien') ?>" class="section-deals__link">Commander</a>

            </article>

             <article class="section-deals__articles">
            <h2 class="section-deals__articles__title"><?php // the_field('titre_du_produit_3') ?></h2>
            <p class="section-deals__articles__text"><?php // the_field('texte_du_produit_3') ?></p>

            <a href="<?php //the_field('page_contacte_lien') ?>" class="section-deals__link">Commander</a>

            </article>

           

            
            </section> -->
          </div>
  
</main>

<?php

get_footer();

?>