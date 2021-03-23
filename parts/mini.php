<section>
    <div class="mini-posts">

        <?php
        $args = array(
            'post_type' => 'post',
            'meta_query' => array(
                array(
                    'key' => 'crb_mini_posts',
                    'value' => 'yes',
                ),
            ),
        );
        var_dump($args);
        $minipost_ids = get_posts($args);
        var_dump($minipost_ids);

    $the_query = new WP_Query($args/*array('post_type' => 'post', 'post__in' => $minipost_ids)*/);
        // The Loop
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
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

        <?php
            }
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();

        ?>

    </div>
</section>