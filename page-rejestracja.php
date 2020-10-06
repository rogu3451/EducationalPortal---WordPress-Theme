<?php get_header(); ?>

<main class="content_container page section rejestracja">
    <h1 class="text-center text-primary mob">REJESTRACJA</h1>
    <div class="page-content">
        <?php while(have_posts() ): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>