<section>
    <div class="mini-posts">

        <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <time class="published" datetime="2015-10-20"><?php the_time( 'j F, Y' ); ?></time>
                        <a href="#" class="author"><?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?></a>
                    </header>
                    <a href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail(array(350.4,175.7)); ?></a>
                </article>
                
    </div>
</section>