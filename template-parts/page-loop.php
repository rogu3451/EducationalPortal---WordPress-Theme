<div class="content-section">
    <?php while(have_posts() ): the_post(); ?>
            <h1 class="text-center text-primary"><?php the_title(); ?></h1>
            <?php 
                // sprawdzenie czy obrazek istnieje
            if( has_post_thumbnail() ):
             ?>
                    <div class="img">
				            <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                    </div>
            <?php
                else:
            ?>
                <div class="img">
				            <img src="<?php echo get_home_url().'/wp-content/themes/portal_edukacyjny/img/brak_obrazka.svg' ?>"/>
                </div>
            <?php
                endif;                       
            ?>
               
                
            <div class="text">
                <div class="post_info">          
                        <img src="<?php echo get_home_url().'/wp-content/themes/portal_edukacyjny/img/clock.png' ?>" alt="time" >
                        <div class="date">
                            <?php the_time(get_option('date_format')); ?>
                            <span>&nbsp; | &nbsp; przez: &nbsp; </span>
                        </div>
                        <div class="author">
                             <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <?php echo get_the_author_meta('display_name'); ?>
                             </a>
                        </div>
                </div> 
                <?php the_content(); ?>
            </div>
            
    
            <?php
            if(get_post_type() === 'kurs' || get_post_type() === 'wordpress' ||     get_post_type() === 'projekt'):
    
                     $level = get_field('poziom_zaawansowania'); 
                     $video = get_field('video'); 
                     $file = get_field('file'); 
            ?>
                       
            <div class="level">         
                         <b> <?php echo "Poziom zaawansowania: " .$level; ?></b>
                         <?php if( $level == 'Dla każdego' ): ?>
                             <div class="img_level">
                                <img src="<?php echo get_home_url().'/wp-content/themes/portal_edukacyjny/img/1z4.png' ?>"/>
                             </div>
                         <?php elseif( $level == 'Dla początkujących' ): ?>
                             <div class="img_level">
                                <img src="<?php echo get_home_url().'/wp-content/themes/portal_edukacyjny/img/2z4.png' ?>"/>
                             </div>
                          <?php elseif( $level == 'Dla średniozaawansowanych' ): ?>
                             <div class="img_level">
                                <img src="<?php echo get_home_url().'/wp-content/themes/portal_edukacyjny/img/3z4.png' ?>"/>
                             </div>
                          <?php elseif( $level == 'Dla zaawansowanych' ): ?>
                             <div class="img_level">
                                <img src="<?php echo get_home_url().'/wp-content/themes/portal_edukacyjny/img/4z4.png' ?>"/>
                             </div>
                          <?php endif; ?>
            </div>
            
            <div class="kurs_video"> 
                        <h3>Kurs video</h3>
                        <video controls>
                                <source src="<?php echo $video["url"]; ?>">
                        </video> 
                    <?php if($file !== NULL):?>
                     <p class="content-class">
                         <span> Pobierz pliki do kursu: &nbsp;</span>
                         <a href="<?php echo $file['url'] ?>" download>
                            <img src="http://localhost/inzynierka/wp-content/uploads/2019/12/download-2062197_640.png" alt="download">
                        </a>
                     </p>
                    <?php endif; ?>
           </div>
        
           <?php endif; ?>


    <?php endwhile; ?>
</div>

<div class="comments-section">
    <?php comments_template(); ?>
</div>