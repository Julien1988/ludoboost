<article class="main__content__article">
            <h1 class="main__content__article__title"><?php the_title(); ?></h1>
            <p class="main__content__article__text"><?php the_content(); ?></p>
            <span class="main__content__article__source"><?php the_excerpt(); ?></span>
</article>

    <?php wp_reset_query() ?>