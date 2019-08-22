$(function () {
    var shrinkHeader = 100;
    $(window).scroll(function () {
        var scroll = getCurrentScroll();
        if (scroll >= shrinkHeader) {
            

            $('.header-full').addClass('shrink-header-full');
         
            $('.carousel-inner>.item>img, .carousel-inner>.item>a>img').addClass('shrink-slider-img');
            $('.logo img').addClass('shrink-header-logo');
            $('.phone').addClass('shrink-header-phone');
            $('.phone a').addClass('shrink-header-phone-a');

            $('.navbar-inverse').addClass('shrink-header-navbar');
            $('.navbar').addClass('shrink-header-navbar-fix');
            
            
        }
        else {
           
            $('.header-full').removeClass('shrink-header-full');
            $('.carousel-inner>.item>img, .carousel-inner>.item>a>img').removeClass('shrink-slider-img');
            $('.logo img').removeClass('shrink-header-logo');
            $('.phone').removeClass('shrink-header-phone');
            $('.phone a').removeClass('shrink-header-phone-a');
            $('.navbar-inverse').removeClass('shrink-header-navbar');
            $('.navbar').removeClass('shrink-header-navbar-fix');
           
        }
    });
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
});