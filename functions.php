<?php



//Link to the queries file
require get_template_directory() . '/inc/queries.php';


// Creates the Menus
function menu_theme() {
    // WordPress Function
    register_nav_menus( array(
        'menu-glowne' => 'Menu główne'
    ));
}


// Hook
add_action('init','menu_theme');




// Add styles and JavaScript files

function theme_scripts()
{
    
    
    // Add Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');
    
    // Add Google-fonts
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');
    
    // Slicknav css
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    // Add Main style CSS
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','google_fonts'), '1.0.0'); 
    
    // Add Animate CSS
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(), '1.0.0');
    
    
    
    //Add jQuery JS
    wp_enqueue_script('jquery');
    
    // Add JavaScript Files 
    wp_enqueue_script('slicknavjs',get_template_directory_uri() . '/js/jquery.slicknav.min.js',array('jquery'),'1.0.10',true);
    wp_enqueue_script('carouselSlider',get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1.js',array('jquery'),'6.2.1',true);
    wp_enqueue_script('particles',get_template_directory_uri() . '/js/particles.js',array('jquery'),'1.0.0',true); wp_enqueue_script('viewport',get_template_directory_uri() . '/js/jquery.viewportchecker.js',array('jquery'),'1.0.0',true);
    wp_enqueue_script('scripts',get_template_directory_uri() . '/js/scripts.js',array('jquery'),'1.0.0',true);
    wp_enqueue_script('responsiveMenu',get_template_directory_uri() . '/js/responsiveMenu.js',array('jquery'),'1.0.0',true);
   
}

add_action('wp_enqueue_scripts','theme_scripts');


//Enable add image to content on the page

function portal_edukacyjny_setup(){
    
    
    // Register new image size
   
    add_image_size('img_kurs',600,300,true);
    add_image_size('front_kurs',100,500,true);
    add_image_size('blog',800,300,true);
    add_image_size('projekt',230,230,true);
    add_image_size('medium',700,400,true);
    //Add image (obrazek wyrozniajacy)
    add_theme_support('post-thumbnails');
    
}

add_action('after_setup_theme', 'portal_edukacyjny_setup'); // Then the theme is acive and ready


// Create widgets zone
function portal_edukacyjny_widgety(){
    register_sidebar(array(
        'name' => 'Panel boczny - prawy',
        'id'   => 'sidebar_right',
        'before_title' => '<h3 class="text-primary">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init','portal_edukacyjny_widgety');


// własne logo


function portal_edukacyjny_custom_logo() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'portal_edukacyjny_custom_logo' );




// Wlasne kolory strony

function customize_theme_color($wp_customize){
    
    $wp_customize->add_setting('portaledukacyjny_theme_color', array(
        'default' => '#FF5B00',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_section('portaledukacyjny_standard_colors', array(
        'title' => __('Kolory','PortalEdukacyjny'),
        'priority' => 30,
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_color' ,array(
        'label' => __('Kolor motywu','PortalEdukacyjny'),
        'section' => 'portaledukacyjny_standard_colors',
        'settings' => 'portaledukacyjny_theme_color',
    ))); 
}

add_action('customize_register', 'customize_theme_color');


function customize_header_color($wp_customize){
    
    $wp_customize->add_setting('portaledukacyjny_header_color', array(
        'default' => '#2F2E2E',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_section('portaledukacyjny_standard_colors', array(
        'title' => __('Kolor elementów strony','PortalEdukacyjny'),
        'priority' => 30,
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_color' ,array(
        'label' => __('Kolor nagłówka','PortalEdukacyjny'),
        'section' => 'portaledukacyjny_standard_colors',
        'settings' => 'portaledukacyjny_header_color',
    ))); 
}

add_action('customize_register', 'customize_header_color');



function customize_footer_background_color($wp_customize){
    
    $wp_customize->add_setting('portaledukacyjny_footer_background_color', array(
        'default' => '#2F2E2E',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_section('portaledukacyjny_standard_colors', array(
        'title' => __('Kolor elementów strony','PortalEdukacyjny'),
        'priority' => 30,
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_color' ,array(
        'label' => __('Kolor stopki','PortalEdukacyjny'),
        'section' => 'portaledukacyjny_standard_colors',
        'settings' => 'portaledukacyjny_footer_background_color',
    ))); 
}

add_action('customize_register', 'customize_footer_background_color');


function customize_footer_font_color($wp_customize){
    
    $wp_customize->add_setting('portaledukacyjny_footer_font_color', array(
        'default' => '#2f2e2e',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_section('portaledukacyjny_standard_colors', array(
        'title' => __('Kolor elementów strony','PortalEdukacyjny'),
        'priority' => 30,
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_font_color' ,array(
        'label' => __('Kolor liter stopki','PortalEdukacyjny'),
        'section' => 'portaledukacyjny_standard_colors',
        'settings' => 'portaledukacyjny_footer_font_color',
    ))); 
}

add_action('customize_register', 'customize_footer_font_color');



// własne tło


function portal_edukacyjny_custom_background() {

	add_theme_support( 'custom-background', apply_filters( 'portal_edukacyjny_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}

add_action( 'after_setup_theme', 'portal_edukacyjny_custom_background' );



function add_color_css() { ?>

    <style type="text/css">
        
        :root {
            --primary: <?php echo get_theme_mod('portaledukacyjny_theme_color'); ?>;
            
            --headerBackground: <?php echo get_theme_mod('portaledukacyjny_header_color'); ?>;
            
            --footerBackground: <?php echo get_theme_mod('portaledukacyjny_footer_background_color'); ?>;
            
            --footerFont: <?php echo get_theme_mod('portaledukacyjny_footer_font_color'); ?>;
          
        }
        
        

    </style>



<?php }
add_action('wp_head','add_color_css');


// ADMIN BAR CSS
function override_admin_bar_css() { 

   if ( is_admin_bar_showing() ) { ?>


      <style type="text/css">
         @media(min-width: 1366px) {   
            .site-header {
            top: 3.2rem;
             }
        }
          
          @media(max-width: 1366px) {   
            .slicknav_menu {
              top: 4.6rem;  
            }
              .mobile{
                  position: fixed !important;
                  top: 0;
              }
        }
      </style>

   <?php }

}

// on backend area
add_action( 'admin_head', 'override_admin_bar_css' );

// on frontend area
add_action( 'wp_head', 'override_admin_bar_css' );



function redirect_to_logowanie(){
    if(!is_user_logged_in()){
        wp_redirect('http://localhost/inzynierka/logowanie/', $status );
    }
    
}

add_action('init','redirect_to_logowanie');







