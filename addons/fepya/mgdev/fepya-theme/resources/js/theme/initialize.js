$(document).ready(function () {

    // Go!

    // Mix It Up Activation
    var portfolio_item = $('.portfolio-contant');
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
    _lightbox();
    _masonry();
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

/** 06. LightBox
 **************************************************************** **/
function _lightbox() {

    if(typeof(jQuery.magnificPopup) == "undefined") {
        return false;
    }

    jQuery.extend(true, jQuery.magnificPopup.defaults, {
        tClose: 		'Close',
        tLoading: 		'Loading...',

        gallery: {
            tPrev: 		'Previous',
            tNext: 		'Next',
            tCounter: 	'%curr% / %total%'
        },

        image: 	{
            tError: 	'Image not loaded!'
        },

        ajax: 	{
            tError: 	'Content not loaded!'
        }
    });

    jQuery(".lightbox").each(function() {

        var _t 			= jQuery(this),
            options 	= _t.attr('data-plugin-options'),
            config		= {},
            defaults 	= {
                type: 				'image',
                fixedContentPos: 	false,
                fixedBgPos: 		false,
                mainClass: 			'mfp-no-margins mfp-with-zoom',
                image: {
                    verticalFit: 	true
                },

                zoom: {
                    enabled: 		false,
                    duration: 		300
                },

                gallery: {
                    enabled: false,
                    navigateByImgClick: true,
                    preload: 			[0,1],
                    arrowMarkup: 		'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                    tPrev: 				'Previou',
                    tNext: 				'Next',
                    tCounter: 			'<span class="mfp-counter">%curr% / %total%</span>'
                },
            };

        if(_t.data("plugin-options")) {
            config = jQuery.extend({}, defaults, options, _t.data("plugin-options"));
        }

        jQuery(this).magnificPopup(config);

    });
}


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



/** WAIT FOR IMAGES [used by masonry]
 https://github.com/alexanderdickson/waitForImages
 **************************************************************** **/
;(function ($) {
    // Namespace all events.
    var eventNamespace = 'waitForImages';

    // CSS properties which contain references to images.
    $.waitForImages = {
        hasImageProperties: ['backgroundImage', 'listStyleImage', 'borderImage', 'borderCornerImage', 'cursor']
    };

    // Custom selector to find `img` elements that have a valid `src` attribute and have not already loaded.
    $.expr[':'].uncached = function (obj) {
        // Ensure we are dealing with an `img` element with a valid `src` attribute.
        if (!$(obj).is('img[src!=""]')) {
            return false;
        }

        // Firefox's `complete` property will always be `true` even if the image has not been downloaded.
        // Doing it this way works in Firefox.
        var img = new Image();
        img.src = obj.src;
        return !img.complete;
    };

    $.fn.waitForImages = function (finishedCallback, eachCallback, waitForAll) {

        var allImgsLength = 0;
        var allImgsLoaded = 0;

        // Handle options object.
        if ($.isPlainObject(arguments[0])) {
            waitForAll = arguments[0].waitForAll;
            eachCallback = arguments[0].each;
            // This must be last as arguments[0]
            // is aliased with finishedCallback.
            finishedCallback = arguments[0].finished;
        }

        // Handle missing callbacks.
        finishedCallback = finishedCallback || $.noop;
        eachCallback = eachCallback || $.noop;

        // Convert waitForAll to Boolean
        waitForAll = !! waitForAll;

        // Ensure callbacks are functions.
        if (!$.isFunction(finishedCallback) || !$.isFunction(eachCallback)) {
            throw new TypeError('An invalid callback was supplied.');
        }

        return this.each(function () {
            // Build a list of all imgs, dependent on what images will be considered.
            var obj = $(this);
            var allImgs = [];
            // CSS properties which may contain an image.
            var hasImgProperties = $.waitForImages.hasImageProperties || [];
            // To match `url()` references.
            // Spec: http://www.w3.org/TR/CSS2/syndata.html#value-def-uri
            var matchUrl = /url\(\s*(['"]?)(.*?)\1\s*\)/g;

            if (waitForAll) {

                // Get all elements (including the original), as any one of them could have a background image.
                obj.find('*').addBack().each(function () {
                    var element = $(this);

                    // If an `img` element, add it. But keep iterating in case it has a background image too.
                    if (element.is('img:uncached')) {
                        allImgs.push({
                            src: element.attr('src'),
                            element: element[0]
                        });
                    }

                    $.each(hasImgProperties, function (i, property) {
                        var propertyValue = element.css(property);
                        var match;

                        // If it doesn't contain this property, skip.
                        if (!propertyValue) {
                            return true;
                        }

                        // Get all url() of this element.
                        while (match = matchUrl.exec(propertyValue)) {
                            allImgs.push({
                                src: match[2],
                                element: element[0]
                            });
                        }
                    });
                });
            } else {
                // For images only, the task is simpler.
                obj.find('img:uncached')
                    .each(function () {
                        allImgs.push({
                            src: this.src,
                            element: this
                        });
                    });
            }

            allImgsLength = allImgs.length;
            allImgsLoaded = 0;

            // If no images found, don't bother.
            if (allImgsLength === 0) {
                finishedCallback.call(obj[0]);
            }

            $.each(allImgs, function (i, img) {

                var image = new Image();

                // Handle the image loading and error with the same callback.
                $(image).on('load.' + eventNamespace + ' error.' + eventNamespace, function (event) {
                    allImgsLoaded++;

                    // If an error occurred with loading the image, set the third argument accordingly.
                    eachCallback.call(img.element, allImgsLoaded, allImgsLength, event.type == 'load');

                    if (allImgsLoaded == allImgsLength) {
                        finishedCallback.call(obj[0]);
                        return false;
                    }

                });

                image.src = img.src;
            });
        });
    };


}(jQuery));