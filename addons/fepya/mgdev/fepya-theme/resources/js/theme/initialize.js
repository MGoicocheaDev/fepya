$(document).ready(function () {

    // Go!

    // Mix It Up Activation
    var portfolio_item = $('.portfolio-contant-active');
    if (portfolio_item.length) {
        var mixer = mixitup(portfolio_item);
    };


    $(".portfolio-single-slider").slick({
        infinite: true,
        arrows:false,
        autoplay: true,
        autoplaySpeed: 2000

    });

    $(".clients-logo").slick({
        infinite: true,
        arrows:false,
        autoplay: true,
        autoplaySpeed: 2000
    });

    $(".testimonial-slider").slick({
        slidesToShow:1,
        infinite: true,
        arrows:false,
        autoplay: true,
        autoplaySpeed: 2000
    });

});


// Init Magnific Popup
$('.portfolio-popup').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery:{
        enabled:true
    },
    mainClass: 'mfp-with-zoom',
    navigateByImgClick: true,
    arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
    tPrev: 'Previous (Left arrow key)',
    tNext: 'Next (Right arrow key)',
    tCounter: '<span class="mfp-counter">%curr% of %total%</span>',
    zoom: {
        enabled: true,
        duration: 300,
        easing: 'ease-in-out',
        opener: function(openerElement) {
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
    }
});
