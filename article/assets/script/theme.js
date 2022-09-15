$(document).ready(function() {
    $('.main-slide-banner').slick({
        speed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

$(function () {
    var $win = $(window);

    $win.scroll(function () {
        if ($win.scrollTop() > 50)
            $('.header-bottom').addClass('fix');
        else 
             $('.header-bottom').removeClass('fix');
    });
});