
 <!-- page article template -->
<section class="page-article-template">



<div class="main__content__thumbnails">
    <a href="<?php the_permalink(); ?>">
            <h2 class="main__content__thumbnails__title"><?php the_title(); ?></h2>
    </a>
    <a href="<?php the_permalink(); ?>">
            <p class="main__content__thumbnails__text"><?php the_content(); ?></p>
    </a>
   
    <!-- <a href="<?php //the_permalink(); ?>">
            <?php //the_post_thumbnail( 'post-thumbnail', [ 'class' => 'main__content__thumbnails__img images' ] ); ?>
    </a> -->

</div>
    
<?php wp_reset_query() ?>
<section class="section-product-page">

        
        <section class="section-product-page__section-first">
                
                <div class="section-product-page__section-first__container">
                        <div class="section-product-page__section-first__container__content">
                                
                                <h1 class="section-product-page__section-first__container__content__title"><?php the_field('titre_produit_section_1') ?></h1>
                                <p class="section__first__container__content__text"><?php the_field('texte_produit_section_1') ?></p>
                        </div>
                        
                        <div class="section-product-page__section-first__container__cta">
                                <a href="<?php the_field('page_contacte_lien') ?>" class="section-product-page__section-first__cta__link"><i class="fa fa-arrow-right" aria-hidden="true"></i> Commander</a>
                        </div>
                </div>
                
                <div class="section-product-page__section-first__image">
                        <img src="<?php the_field('image_du_produit_section_1') ?>" alt="" class="section-product-page__section-first__image img-fluid">
                </div>
        </section>

        <section class="section-product-page__section-second">
                
                <div class="section-product-page__section-second__container">
                        <div class="section-product-page__section-second__container__content">
                                
                                <h1 class="section-product-page__section-second__container__content__title"><?php the_field('titre_produit_section_2') ?></h1>
                                <p class="section__first__container__content__text"><?php the_field('texte_produit_section_2') ?></p>
                        </div>
                        
                        <div class="section-product-page__section-second__container__cta">
                                <a href="<?php the_field('page_contacte_lien') ?>" class="section-product-page__section-second__cta__link"><i class="fa fa-arrow-right" aria-hidden="true"></i> Commander</a>
                        </div>
                </div>
                
                <div class="section-product-page__section-second__image">
                        <img src="<?php the_field('image_du_produit_section_2') ?>" alt="" class="section-product-page__section-second__image img-fluid">
                </div>
        </section>

        <section class="section-product-page__section-third">
                
                <div class="section-product-page__section-third__container">
                        <div class="section-product-page__section-third__container__content">
                                
                                <h1 class="section-product-page__section-third__container__content__title"><?php the_field('titre_produit_section_3') ?></h1>
                                <p class="section__first__container__content__text"><?php the_field('texte_produit_section_3') ?></p>
                        </div>
                        
                        <div class="section-product-page__section-third__container__cta">
                                <a href="<?php the_field('page_contacte_lien') ?>" class="section-product-page__section-third__cta__link"><i class="fa fa-arrow-right" aria-hidden="true"></i> Commander</a>
                        </div>
                </div>
                
                <div class="section-product-page__section-third__image">
                        <img src="<?php the_field('image_du_produit_section_3') ?>" alt="" class="section-product-page__section-third__image img-fluid">
                </div>
        </section>

        <section class="section-product-page__section-fourth">
                
                <div class="section-product-page__section-fourth__container">
                        <div class="section-product-page__section-fourth__container__content">
                                
                                <h1 class="section-product-page__section-fourth__container__content__title"><?php the_field('titre_produit_section_4') ?></h1>
                                <p class="section__first__container__content__text"><?php the_field('texte_produit_section_4') ?></p>
                        </div>
                        
                        <div class="section-product-page__section-fourth__container__cta">
                                <a href="<?php the_field('page_contacte_lien') ?>" class="section-product-page__section-fourth__cta__link"><i class="fa fa-arrow-right" aria-hidden="true"></i> Commander</a>
                        </div>
                </div>
                
                <div class="section-product-page__section-fourth__image">
                        <img src="<?php the_field('image_du_produit_section_4') ?>" alt="" class="section-product-page__section-fourth__image img-fluid">
                </div>
        </section>

        <section class="section-product-page__gift">
                <div class="section-product-page__gift__image image-first">
                        <img src="<?php the_field('section_liste_image_1') ?>" alt="" class="section-product-page__gift__image__img img-fluid">
                </div>

                <div class="section-product-page__gift__container">
                        <h1 class="section-product-page__gift__container__title"><?php the_field('titre_section_liste_1') ?></h1>
                        <div class="section-product-page__gift__container__list">

                                <ul class="section-product-page__gift__container__list__list">
                                        <li class="section-product-page__gift__container__listlist____item"><?php the_field('section_liste_item_1') ?></li>
                                        <li class="section-product-page__gift__container__list__list__item"><?php the_field('section_liste_item_2') ?></li>
                                        <li class="section-product-page__gift__container__list__list__item"><?php the_field('section_liste_item_3') ?></li>
                                        <li class="section-product-page__gift__container__list__list__item"><?php the_field('section_liste_item_4') ?></li>
                                </ul>
                        </div>
                </div>

                <div class="section-product-page__gift__image image-second">
                        <img src="<?php the_field('section_liste_image_2') ?>" alt="" class="section-product-page__gift__image__img img-fluid">
                </div>
        </section>


</section>
        
<section class="section-deals">

        <div class="section-deals__head">
                <h1 class="section-deals__head__title">Nos offres</h1>
                <p class="section-deals__head__text">Texte</p>
        </div>    

<section class="produit-footer-page-article">

        <article class="section-deals__articles">
                <div class="container-deal-section-text">

                        <h2 class="section-deals__articles__title"><?php the_field('titre_du_produit_1') ?></h2>
                        <p class="section-deals__articles__text"><?php the_field('texte_du_produit_1') ?></p>
                </div>
                
                <div class="section-deals__link">

                        <a href="<?php the_field('page_contacte_lien') ?>" class="section-deals__link__a"><i class="fa fa-arrow-right" aria-hidden="true"></i> Commander</a>
                </div>
                
        </article>
        
        <article class="section-deals__articles">
        <div class="container-deal-section-text">

                <h2 class="section-deals__articles__title"><?php the_field('titre_du_produit_2') ?></h2>
                <p class="section-deals__articles__text"><?php the_field('texte_du_produit_2') ?></p>
        </div>
                
                <div class="section-deals__link">

                        <a href="<?php the_field('page_contacte_lien') ?>" class="section-deals__link__a"><i class="fa fa-arrow-right" aria-hidden="true"></i> Commander</a>
                </div>
                
        </article>
        
        <article class="section-deals__articles">
        <div class="container-deal-section-text">

                <h2 class="section-deals__articles__title"><?php  the_field('titre_du_produit_3') ?></h2>
                <p class="section-deals__articles__text"><?php  the_field('texte_du_produit_3') ?></p>
        </div>
                <div class="section-deals__link">

                        <a href="<?php the_field('page_contacte_lien') ?>" class="section-deals__link__a"><i class="fa fa-arrow-right" aria-hidden="true"></i> Commander</a>
                </div>
                
        </article>
</section>

</section>

<div class="main__footer">
          <a href="<?php echo get_home_url(); ?>" class="btn button-go-back-home">Accueil</a>

           <a href="../products/" class="btn button-go-back-home">Liste des produits</a>
            
</div>

</section>