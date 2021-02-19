/*------------------------------------------------------------------------------------
JS INDEX

01 - FIX HEADER TO TOP
02 - MOBILE MENU
03 - RECENT PROJECT CAROUSEL
04 - PARTNER SLIDER
05 - TESTIMONIAL SLIDER
06 - SKILLBAR LOADER
07 - PROJECT COUNTER
08 - SCROLL TO TOP SCRIPT
-------------------------------------------------------------------------------------*/


(function ($) {
	"use strict";

    // 01 - FIX HEADER TO TOP
    function header_fixed(){
        if (jQuery(window).scrollTop() >= 300) {
           jQuery('.main-navigation').addClass('fixed-header animated fadeInDown');
        }
        else {
           jQuery('.main-navigation').removeClass('fixed-header animated fadeInDown');
        }
    }



    // 02 - MOBILE MENU
    function mobile_menu(){
        jQuery(".mobile-menu> li >a").on('click', function(){
            if (jQuery(window).width() <= 991) {
                jQuery('.mobile-menu> li').removeClass('on');
                jQuery('.mobile-menu> li> ul').slideUp('normal');
                if (jQuery(this).next().next('ul').is(':hidden') === true) { 
                    jQuery(this).parent('li').addClass('on');
                    jQuery(this).next().next('ul').slideDown('normal');
                }
            }
        });
    }


    // 03 - RECENT PROJECT CAROUSEL
    function recent_project_carousel(){
        var owl = jQuery('#recent-projects');
        owl.owlCarousel({
            margin: 0,
            nav: true,
            loop: true,
            dots: false,
            smartSpeed :1200,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    }


    // 04 - PARTNER SLIDER
    function partners(){
        var owl = jQuery('#partners');
        owl.owlCarousel({
            margin: 15,
            nav: true,
            loop: true,
            dots: false,
            autoplay: true,
            smartSpeed :1200,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    }


    // 05 - TESTIMONIAL SLIDER
    function client_testimonials(){
        var owl = jQuery('#testimonials');
        owl.owlCarousel({
            items: 1,
            margin: 15,
            nav: false,
            loop: true,
            dots: true,
            smartSpeed :1200,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    }


    // 06 - SKILLBAR LOADER
    function skill_progress_bar(){
        jQuery('.skillbar').on('each', function(){
            jQuery(this).find('.skillbar-bar').animate({
                width:jQuery(this).attr('data-percent')
            },6000);
        });
    }


    // 07 - PROJECT COUNTER
    function project_counter(){
        jQuery('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    }

    // 08 - SCROLL TO TOP SCRIPT
    function go_to_top(){
        // Animate the scroll to top
        jQuery('.go-to-top').on('click', function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, 300);
        });

        // Show or hide the sticky footer button
        jQuery(window).on('scroll', function() {
            if (jQuery(this).scrollTop() > 400) {
                jQuery('.go-to-top').fadeIn(500);
            } else {
                jQuery('.go-to-top').fadeOut(500);
            }
       });
    } 



    // CALL TO RELATED FUNCTIONS WHEN DOCUMENT IS READY
    jQuery(document).ready(function(){
        // Call to mobile_menu function
        mobile_menu();

        // Call to recent_project_carousel function
        recent_project_carousel();

        // Call to partners function
        partners();
        
        // Call to client_testimonials function
        client_testimonials();
        
        // Call to skill_progress_bar function
        skill_progress_bar();

        // Call to project_counter function
        project_counter();
        
        // Call to scroll_to_top function
        go_to_top();

        // Call to header_fixed function
        header_fixed();        
    });


    // CALL TO RELATED FUNCTIONS ON WINDOW SCROLL
    jQuery(window).on('scroll', function(){
        header_fixed();
    });
}(jQuery));	