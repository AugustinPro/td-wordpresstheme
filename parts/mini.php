<section>
    <div class="mini-posts">

        <?php
        $the_query = new WP_Query(array('post_type' => 'post', 'post__in' => array(4, 5, 12, 14, 20)));
        // The Loop
        if ($the_query->have_posts()) {
            echo '<ul>';
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<li>' . get_the_title() . '</li>';
            }
            echo '</ul>';
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();

        ?>


        <!-- Mini Post -->
        <article class="mini-post">
            <header>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <time class="published" datetime="2015-10-20"><?php the_time('j F, Y'); ?></time>
                <a href="#" class="author"><?php echo get_avatar(get_the_author_meta('ID'), 40); ?></a>
            </header>
            <a href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail(array(350.4, 175.7)); ?></a>
        </article>

    </div>
</section>