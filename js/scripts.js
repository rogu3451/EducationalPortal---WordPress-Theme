
(function($){

    function setAnimations(){
        $('.najnowsze_kursy .hover').addClass('animated opacity0');
        $('.najnowsze_projekty .hover').addClass('animated opacity0');
        $('.najnowsze_wpisy .hover').addClass('animated opacity0');
        $('.fw-row .fw-col-xs-12 .fw-col-sm-6').addClass('animated opacity0');
    } 
    
    function runAnimations(){
        $('.najnowsze_kursy .hover').each(function(){
            $(this).viewportChecker({
                classToAdd: 'opacity1 zoomIn',
                classToRemove: 'opacity0',
                offset: 200
            })
        });
        
        $('.najnowsze_projekty .hover').each(function(){
            $(this).viewportChecker({
                classToAdd: 'opacity1 zoomIn',
                classToRemove: 'opacity0',
                offset: 200
            })
        }); 
        
        $('.najnowsze_wpisy .hover').each(function(){
            $(this).viewportChecker({
                classToAdd: 'opacity1 zoomIn',
                classToRemove: 'opacity0',
                offset: 200
            })
        });    

        $('.fw-row .fw-col-xs-12 .fw-col-sm-6').each(function(){
            $(this).viewportChecker({
                classToAdd: 'opacity1 fadeIn',
                classToRemove: 'opacity0',
                offset: 200
            })
        });
    }
    
    
	    $(document).ready(function($){    
        
            setAnimations();
            runAnimations();
    
            
        // Main slider
        $('.slider-container .slides').carouFredSel({


            scroll: {
                duration: 500, 
                timeoutDuration: 5000, 
                fx: 'fade'
            },

            pagination: {
                container: $('.slider-container .pagination ul'),
                anchorBuilder: function(number){
                    return '<li><a href="#" class="active"></a></li>';
                }
            }

            });

        
       

        
        
         particlesJS('slider', {
        particles: {
            number: {
                value: 160,
                density: {
                    enable: true,
                    valuer_area: 1000
                }
            },
            color: {
                value: "#ff5b00"
            },
            
            move: {
                enable: true,
                speed: 2
            },
            line_linked:{
            opacity: 0.2,
            enable: true,
            color: "#ffffff",
            width: 2
            },
            size:{
                value: 1
            }
            
        }
             
        
             
        });
   

        });
        
    
      
	
}(jQuery));




