<?php
/*
* Template Name: Strona z bocznym paskiem 
*/
 get_header(); 
?>

<main class="content_container page section with-sidebar">
    <div class="page-content">
        <?php get_template_part('template-parts/page','loop'); ?>
    </div>
    <?php get_sidebar(); ?>
</main>


<?php get_footer(); ?>
