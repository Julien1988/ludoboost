<div class="main__content__thumbnails">
    <a href="<?php the_permalink(); ?>">
            <h2 class="main__content__thumbnails__title"><?php the_title(); ?></h2>
</a>
    <a href="<?php the_permalink(); ?>">
            <p class="main__content__thumbnails__text"><?php the_excerpt(); ?></p>
</a>
    <!-- <img src="" alt="" class="main__content__thumbnails__img images"> -->
    <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'main__content__thumbnails__img images' ] ); ?>
</a>
<div class="read-more-link-content">

    <a href="<?php the_permalink(); ?>" class="main__content__thumbnails__read-more read-more-link">En savoir plus <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</div>
</div>
    
<?php wp_reset_query() ?>