<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No hay contenido para mostrar.</p>
    <?php endif; ?>

    <?php if (is_active_sidebar('main_sidebar')) : ?>
        <?php dynamic_sidebar('main_sidebar'); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>