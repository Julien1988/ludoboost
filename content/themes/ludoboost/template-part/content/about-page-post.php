

<div class="main__head">
<h1 class="main__head__h1"><?php the_title(); ?></h1>
<span class="main__head__span"><?php the_field('titre-a-propos') ?></span>
</div>

<div class="main__content">
<img src="images/article-image.jpg" alt="" class="main__content__image images">
<span class="main__content__span"><?php the_field('text_de_la_propos') ?></span>
</div>

<div class="main__footer">
<a href="<?php echo get_home_url(); ?>" class="btn button-go-back-home">Retour à l'accueil</a>
</div>


</main>