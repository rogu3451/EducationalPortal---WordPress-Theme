<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
    <body <?php body_class(); ?>>
        <header class="site-header">
            
                
            <div class="logo">
                <div class="decoration"> &lt </div>
                <div class="logo_inside">
                    <?php
                             if ( function_exists( 'the_custom_logo' ) ) {
                                 the_custom_logo();
                                   }
                    ?>
                </div> 
                <div class="decoration"> &gt </div>
            </div><!--.logo-->
              
            
            <div class="search-form">
                <div class="search-bar">
                        <?php get_search_form(); ?>
                </div><!--.search-bar-->
            </div>       
           
                  
                    
                    
             <div class="navigation-bar">
                 
                   <?php
                      $args = array(
                           'theme_location' => 'menu-glowne',
                           'container' => 'nav',
                           'container_class' => 'menu-glowne',
                      );
                      wp_nav_menu($args);
                   ?>
                 <p style="color: white;" class="wppb-alert"> </p><!-- .wppb-alert-->
            </div>
            
        </header>
  