(function ($) {
    'use strict';
    /*
    const links = document.querySelectorAll(".page-header ul a");
        for (const link of links) { link.addEventListener("click", clickHandler);  }
            function clickHandler(e) {
            e.preventDefault();
        const href = this.getAttribute("href");
        const offsetTop = document.querySelector(href).offsetTop;
        scroll({
            top: offsetTop,
            behavior: "smooth"
        });
    }
    */
   $(document).ready(function() {
	$('nav').onePageNav();
    });

    jQuery(window).on('scroll', function() {
        if ($(this).scrollTop() > 200) {
            $('header nav').addClass("sticky");
        } else {
            $('header nav').removeClass("sticky");
        }
    });

    $(".owl-slider").owlCarousel({
        autoplay:true,
        autoplayTimeout:6000,
        autoplayHoverPause:false,
        mouseDrag:false,
        loop: true,
        margin: 0,
        nav:false,
        dots: true,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1,
            },
        },
    });

    $(".owl-segmentos").owlCarousel({
        autoplay:true,
        autoplayTimeout:6000,
        autoplayHoverPause:true,
        mouseDrag:false,
        center:true,
        loop: true,
        margin: 100,
        nav:true,
        dots: false,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 4,
            },
        },
    });

    $(".owl-videos").owlCarousel({
        items:3,
        merge:true,
        loop:true,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        dots:false,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            767:{
                items:3
            }
        }
    })

    $('.counter').counterUp({
        delay:20,
        time:2000
    });
    $('.budget .accordion:not(:first-of-type)').hide();
    $('.tab-toggle:first-of-type').addClass("disable");
    $('.tab-toggle').click(function (){
        const tab = $(this).attr('data-target');
        if(!$(this).hasClass('disable')){
            $('.tab-toggle').removeClass("disable");
        }
        $(this).addClass('disable');
        $('.accordion').fadeOut();
        $(`#${tab}`).delay(500).fadeIn();
    })
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();
    $('.accordion a').on('click', function(j) {
        var dropDown = $(this).closest('li').find('p');
        $(this).closest('.accordion').find('p').not(dropDown).slideUp(300);
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }
        dropDown.stop(false, true).slideToggle(300);
        j.preventDefault();
    });

    var window_width = $(window).width();   
        if(window_width > 767){
        new WOW().init();
    }

    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
      },
      spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
          }
      };
      
      $('.mask-tel').mask(SPMaskBehavior, spOptions);

    var offset = 300,
    offset_opacity = 1200,
    scroll_top_duration = 700,
    $back_to_top = $('.cd-top');
        $(window).scroll(function() {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });
    $back_to_top.on('click', function(event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0,
            }, scroll_top_duration
        );
    });
    
    console.log("%c WP Theme by https://scorsoni.com.br", "background-color: #24292E; color: #fff; padding: 15px;")

})(jQuery);
