<section>
    <ul class="posts">
        <li>
            <article>
                <header>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <time class="published" datetime="2015-10-20"><?php the_time( 'j F, Y' ); ?></time>
                </header>
                <a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail(array(64,64)); ?></a>
            </article>
        </li>
    </ul>
</section>