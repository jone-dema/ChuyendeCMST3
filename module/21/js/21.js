$(function() {

    function owl_carousel () {
     
    
     
    
    
    
        $('.client').owlCarousel({
            autoplay:false,
            responsiveClass:true,
            items : 1, //10 items above 1000px browser width
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:1,
                    nav:false,
                }
            }
        });
      
        $('.brand').owlCarousel({
            loop:true,
            autoplay:true,
            responsiveClass:true,
            items : 6, //10 items above 1000px browser width
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                400:{
                    items:3,
                    nav:false
                },
                600:{
                    items:4,
                    nav:false
                },
                1000:{
                    items:6,
                    nav:false,
                    loop:true
                }
            }
        })
       
    }  
        $( window ).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            owl_carousel ();
                
        });
       
       
    });
    
    
    