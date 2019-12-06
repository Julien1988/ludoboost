<!-- Home-page -->

<main class="main">

    <?php 
      $image = get_field('image_accueil'); 
      if ( !empty($image) ):
    ?>

    <div class="main__head banner" style="background-image: url(<?php echo $image['url']; ?>);">

    <?php endif ?>
      <h1 class="main__head__h1"><?php the_field('titre_bienvenue') ?></h1>

      <span class="main__head__span"><?php the_field('sous-titre') ?></span>
    </div>

    <section class="home-page">

      <?php 
        $videoUrl = get_field('video_url'); 
        if ( !empty($videoUrl) ):
      ?>

      <div class="main__media embed-responsive embed-responsive-16by9">
        <iframe class="main__media__iframe embed-responsive-item" src="<?php echo $videoUrl; ?>" allowfullscreen></iframe> 

      <?php endif ?>

      </div>
      <div class="main__container">
        <span class="main__container__span"><?php the_field('video_sous-titre') ?></span>

      </div>
      

      <div class="main__sponsoring">

        <img class="main__sponsoring__image sponsoring-image" src="<?php the_field('succes-logo-1') ?>" alt="">
        <img class="main__sponsoring__image sponsoring-image" src="<?php the_field('succes-logo-2') ?>" alt="">
        <img class="main__sponsoring__image sponsoring-image" src="<?php the_field('succes-logo-3') ?>" alt="">
        <img class="main__sponsoring__image sponsoring-image" src="<?php the_field('succes-logo-4') ?>" alt="">
        <img class="main__sponsoring__image sponsoring-image" src="<?php the_field('succes-logo-5') ?>" alt="">
        <img class="main__sponsoring__image sponsoring-image" src="<?php the_field('succes-logo-6') ?>" alt="">
        <img class="main__sponsoring__image sponsoring-image" src="<?php the_field('succes-logo-7') ?>" alt="">
        <img class="main__sponsoring__image sponsoring-image" src="<?php the_field('succes-logo-8') ?>" alt="">
        <img class="main__sponsoring__image sponsoring-image" src="<?php the_field('succes-logo-9') ?>" alt="">
        <img class="main__sponsoring__image sponsoring-image" src="<?php the_field('succes-logo-10') ?>" alt="">

        
      </div>

      <section class="section-main-container">

        <?php 
          $image = get_field('image_intro'); 
          if ( !empty($image) ):
        ?>

        <div class="main__content content-top">
          <img src="<?php echo $image['url']; ?>" alt="" class="main__content__image images image-thumbnails">

          <?php endif ?>
          <div class="main__content__container">

            <span class="main__content__container__span"><?php the_field('text_intro') ?></span>
          </div>
        </div>
            
        <div class="main__content list-container">
          <img src="images/article-image-2.jpg" alt="" class="main__content__image images">

          <div class="list-container__container">

            <?php

            $the_query = new WP_Query ( 'category_name=premier-article-home' );

            if($the_query->have_posts()) {
              while ($the_query->have_posts()) {
                $the_query->the_post();
              }
            }

            ?>
            
            <h1 class="main__content__h1"><?php the_title(); ?></h1>
            <div class="main__content__list">
              <li class="main__content__list__item"><?php the_content(); ?></li>
              
              </li>
            </div>

            <?php wp_reset_query() ?>
          </div>
        </div>

            
              
        <div class="main__content content-middle">
          <img src="#" alt="" class="main__content__image images">
          <h2 class="main__content__h2"><?php the_field('titre_seconde_section') ?></h2>
          <p class="main__content__text"><?php the_field('sous-titre_seconde_section') ?></p>
          <ul class="main__content__list">
            <div class="main__content__list__icone icone-mobile-view">
              <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_1') ?>" aria-hidden="true"></i>
            </div>
              <li class="main__content__list__item">
                <div class="main__content__list__icone icone-large-view">
                  <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_1') ?>" aria-hidden="true"></i>
                </div>
                <?php the_field('texte_seconde_section_1') ?></li>
              
              <div class="main__content__list__icone icone-mobile-view">
                <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_2') ?>" aria-hidden="true"></i>
              </div>
              <li class="main__content__list__item">
                <div class="main__content__list__icone icone-large-view">
                  <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_2') ?>" aria-hidden="true"></i>
                </div>
                <?php the_field('texte_seconde_section_2') ?></li>
              
              <div class="main__content__list__icone icone-mobile-view">
                <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_3') ?>" aria-hidden="true"></i>
                
              </div>
              <li class="main__content__list__item">
                  <div class="main__content__list__icone icone-large-view">
                      <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_3') ?>" aria-hidden="true"></i>
                  </div>
                  <?php the_field('texte_seconde_section_3') ?></li>
              
              <div class="main__content__list__icone icone-mobile-view">
                <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_4') ?>" aria-hidden="true"></i>
                
              </div>
              <li class="main__content__list__item">
                  <div class="main__content__list__icone icone-large-view">
                      <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_4') ?>" aria-hidden="true"></i>
                  </div>
                  <?php the_field('texte_seconde_section_4') ?></li>

                <div class="main__content__list__icone icone-mobile-view">
                  <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_5') ?>" aria-hidden="true"></i>
                
                </div>
                <li class="main__content__list__item">
                  <div class="main__content__list__icone icone-large-view">
                      <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_5') ?>" aria-hidden="true"></i>
                  </div>
                  <?php the_field('texte_seconde_section_5') ?></li>
                  
                  <div class="main__content__list__icone icone-mobile-view">
                    <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_6') ?>" aria-hidden="true"></i>
                
                </div>
                <li class="main__content__list__item">
                  <div class="main__content__list__icone icone-large-view">
                      <i class="main__content__list__icone__item <?php the_field('icones_seconde_section_6') ?>" aria-hidden="true"></i>
                  </div>
                  <?php the_field('texte_seconde_section_6') ?></li>
                  
                  
            </ul>
        </div>
            
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
        </div>

        <div class="main__content section-bot">
          
          <!-- Boucle des recommandations -->

          <?php

          $the_query = new WP_Query ( 'category_name=recommandation' );

          if($the_query->have_posts()) {
            while ($the_query->have_posts()) {
              $the_query->the_post();

              get_template_part(
                'template-part/content/recommendation'
                
            );
            }
          }

          wp_reset_query() ?>

         
        </div>

        <div class="main__footer">
          <a href="<?php echo get_home_url(); ?>" class="btn button-go-back-home">Retour à l'accueil</a>
        </div>
      </section>
    </section>

  </main>