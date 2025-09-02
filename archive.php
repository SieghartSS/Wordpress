<?php get_header(); ?>

<main>
    <h1><?php the_archive_title(); ?></h1>
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
        <p>Belum ada konten di arsip ini.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
