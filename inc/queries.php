<?php

function portaledukacyjny_kursy_lista(){ ?>
    <ul class="lista-kursy">
        <?php
            $args = array(
                'post_type' => 'kurs',
            );
            
            // Use WP_Query and append the results into $kursy
            $kursy = new WP_Query($args);
    
            while($kursy->have_posts()): $kursy->the_post();
        
        
        ?>
        <a class="single" href="<?php the_permalink(); ?>">
        <li>
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
            <h3> <?php the_title(); ?> </h3>
            <p><b> <?php the_field('poziom_zaawansowania');?> </b></p>
           
             
        </li>
        </a> 
        
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
 

<?php }



function portaledukacyjny_projekty_lista(){ ?>
    <ul class="lista-projekty">
        <?php
            $args = array(
                'post_type' => 'projekt',
            );
            
            // Use WP_Query and append the results into $kursy
            $kursy = new WP_Query($args);
    
            while($kursy->have_posts()): $kursy->the_post();
        
        
        ?>
        <a class="single" href="<?php the_permalink(); ?>">
        <li>
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
            
            
              
                    <h3> <?php the_title(); ?> </h3>
                    <p><b> <?php the_field('poziom_zaawansowania');?> </b></p>
           
             
        </li>
        </a> 
        
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>

<?php }




function portaledukacyjny_wordpress_lista(){ ?>
 
        <ul class="lista-wordpress">
            <?php
                $args = array(
                    'post_type' => 'wordpress',
                );

                // Use WP_Query and append the results into $kursy
                $kursy = new WP_Query($args);

                while($kursy->have_posts()): $kursy->the_post();


            ?>
            <a class="single" href="<?php the_permalink(); ?>">
            <li>
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



                        <h3> <?php the_title(); ?> </h3>
                        <p><b> <?php the_field('poziom_zaawansowania');?> </b></p>


            </li>
            </a> 

            <?php endwhile; wp_reset_postdata(); ?>
        </ul>

<?php }