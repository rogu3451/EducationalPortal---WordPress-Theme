<?php get_header(); ?>

<main class="content_container page section">
    <?php 
        $category = get_queried_object();
    ?>
    
    <h2 class="text-center text-primary">Kategoria: <?php echo $category->name; ?> </h2>
    <div class="text-center">
        <p>Ilość wpisów w kategorii:  <?php echo $category->category_count; ?> </p>
    </div>
   <?php get_template_part('template-parts/blog','loop'); ?>
</main>

<?php get_footer(); ?>