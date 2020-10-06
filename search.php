<?php get_header(); ?>

<main class="content_container page section wyszukiwarka">
<?php
/*

    Template Name: Wyszukiwarka
    
*/
$number=0;
$iteration=0;
while(have_posts()): the_post();
     if(get_post_type() != 'page'): 
        $number++;
     endif;
endwhile;
?>



    
    <h1 style="font-size: 3.6rem;" class="text-center text-primary">
        <?php
            if(get_post_type() != NULL) 
            {
                if($number==1)
                echo "Znaleziono: ".$number." wpis";
                    elseif($number > 1)
                echo "Znaleziono: ".$number." wpisy";  
                    else
                echo "Znaleziono: ".$number." wpisów";
            }
            else
                echo "Nie znaleziono żadnych wpisów";         
        ?>
    </h1> 
     
     <ul class="lista-search">
            
                <?php

                    while(have_posts()): the_post();
                    if(get_post_type() != 'page'): 
                    $iteration++;

                ?>
                <a class="single" href="<?php the_permalink(); ?>">
                    <div class="iteration">
                        <b><?php echo $iteration.'.'; ?></b>
                    </div>
                    <div class="img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                    </div>

                    <div class="content">
                            <div class="date">
                                    <?php the_time(get_option('date_format')); ?>   
                                    |
                                    <?php echo get_the_author_meta('display_name'); ?>
                            </div>
                            <div class="title">
                                <p>Tytuł: <b><?php the_title(); ?></b> </p> 
                            </div>
                            <?php if(get_post_type() != 'post'): ?>
                                <div class="level">  
                                    <p>Poziom:<b> <?php the_field('poziom_zaawansowania') ?> </b></p>
                                </div>
                            <?php endif; ?>
                            <div class="type">
                                <p>Typ wpisu:<b> <?php 

                                    if(get_post_type() == 'kurs') echo "KURS";
                                    if(get_post_type() == 'projekt') echo "PROJEKT";
                                    if(get_post_type() == 'wordpress') echo "WORDPRESS";
                                    if(get_post_type() == 'post') echo "POST NA BLOGU";
                                    ?> </b></p>
                            </div>
                    </div>

                
                </a> 
                    <?php endif; ?>
                <?php endwhile; wp_reset_postdata(); ?>
           
        </ul>

    
 
        
 
</main>

<?php get_footer(); ?>   


