
    <ul class="blog-wpisy">
        
        <?php while(have_posts() ): the_post(); ?>
            
                <li class="portaledukacyjny card "> 
                    
                    <a href="<?php the_permalink(); ?>">
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
                    </a>
                         <?php the_category(); ?>
                        
                        <div class="card-content">
                            <a href="<?php the_permalink(); ?>">
                                <h3> <?php the_title(); ?> </h3>
                            </a>
                            <p class="meta"> 
                                <span class="author">Autor: </span>
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                    <?php echo get_the_author_meta('display_name'); ?>
                                </a>
                            </p>
                                
                            <p class="data-published">
                                <?php the_time(get_option('date_format')); ?>   
                            </p>
                        </div>
                        
                </li>
                
            <?php endwhile; ?>
        </ul>