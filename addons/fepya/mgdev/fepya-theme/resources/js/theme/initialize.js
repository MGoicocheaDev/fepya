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



/** 09. Masonry Filter
 **************************************************************** **/
function _masonry() {

    jQuery(window).load(function() {

        jQuery("span.js_loader").remove();
        jQuery("li.masonry-item").addClass('fadeIn');

        jQuery(".masonry-list").each(function() {

            var _c = jQuery(this);

            _c.waitForImages(function() { // waitForImages Plugin - bottom of this file

                _c.masonry({
                    itemSelector: '.masonry-item'
                });

            });

        });

    });

    jQuery("ul.isotope-filter").each(function() {

        var _el             = jQuery(this),
            destination     = jQuery("ul.sort-destination[data-sort-id=" + jQuery(this).attr("data-sort-id") + "]");

        if(destination.get(0)) {

            jQuery(window).load(function() {

                destination.isotope({
                    itemSelector:   "li",
                    layoutMode:     'sloppyMasonry'
                });

                _el.find("a").click(function(e) {

                    e.preventDefault();

                    var $_t     = jQuery(this),
                        sortId  = $_t.parents(".sort-source").attr("data-sort-id"),
                        filter  = $_t.parent().attr("data-option-value");

                    _el.find("li.active").removeClass("active");
                    $_t.parent().addClass("active");

                    destination.isotope({
                        filter: filter
                    });

                    jQuery(".sort-source-title[data-sort-id=" + sortId + "] strong").html($_t.html());
                    return false;

                });

            });

        }

    });


    jQuery(window).load(function() {

        jQuery("ul.isotope").addClass('fadeIn');

    });
}
