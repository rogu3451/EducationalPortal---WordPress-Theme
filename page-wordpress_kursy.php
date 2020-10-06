<?php get_header(); ?>

<main class="content_container page section wordpress">
    <h1 class="text-center text-primary"> <?php while(have_posts() ): the_post(); ?> <?php the_content(); ?> <?php endwhile; ?> </h1> 
    <?php
        portaledukacyjny_wordpress_lista();
    ?>
</main>


<?php get_footer(); ?>
