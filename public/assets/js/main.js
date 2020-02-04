(function ($) {
    "use strict";

    // Script for Mobile Menu Activation
    $(document).ready(function () {
        $('#m-menu').on('click', function () {
            $('.offCanvasMenu, .off-canvas-overlay').addClass('active');
        })

        $('.close-MobileMenu, .off-canvas-overlay').on('click', function () {
            $('.offCanvasMenu, .off-canvas-overlay').removeClass('active');
        })
    })



   // Script for Mobile Menu Activation
   $(document).ready(function () {
    $('#open-sidebar').on('click', function () {
        $('.sideBar, .off-canvas-overlay').addClass('active');
    })

    $('.cls-sidebar , .off-canvas-overlay').on('click', function () {
        $('.sideBar, .off-canvas-overlay').removeClass('active');
    })
})
















    // Script for Slick Slider Activation
    $('.product-active').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow:'<button type="button" class="slick-prev"><i class="fal fa-long-arrow-right"></i></button>',
        nextArrow:'<button type="button" class="slick-next"><i class="fal fa-long-arrow-left"></i></button>',
        
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });



    // Script for Nice Select Activation 
    $(document).ready(function () {
        $('select').niceSelect();
    })

    // Script for Magnific Popup Activation 
    $(document).ready(function () {
        $('.iframe-link').magnificPopup({ type: 'iframe' });
    });





    // Script For Scroll to top Button
    $(document).ready(function () {
        var back = $('.back-to-top');
        back.on('click', function () {
            $('html, body').animate({
                scrollTop: 0,
            }, 900);
        })
        $(window).on('scroll', function () {
            var self = $(this),
                height = self.height(),
                top = self.scrollTop();
            if (top > height) {
                back.addClass('visible');
            } else {
                back.removeClass('visible');
            }
        })

    })


})(jQuery);	 