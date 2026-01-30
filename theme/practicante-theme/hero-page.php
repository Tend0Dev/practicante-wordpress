<?php
/* Template Name: Página Hero */
get_header();
?>

<section class="hero">
    <h1><?php the_title(); ?></h1>
</section>

<main>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php if (is_active_sidebar('main_sidebar')) : ?>
    <?php dynamic_sidebar('main_sidebar'); ?>
<?php endif; ?>

<?php get_footer(); ?>
