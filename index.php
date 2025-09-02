<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php posts_nav_link(' | ', '« Prev', 'Next »'); ?>
        </div>

    <?php else : ?>
        <p>Belum ada artikel.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
