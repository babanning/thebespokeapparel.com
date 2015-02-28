window.$ = jQuery;

    var Slider = function(options) {
        options = options || {};

        var config = $.extend({
            thumbClasses: null,
            parent:null,
            child:null,
            thumbContainer:null,
            prevBtn:null,
            nextBtn:null,
            onSwitch: function() {}
        }, options);

        var THUMB_CLASSES = config.thumbClasses,
            EL_PARENT = config.parent,
            EL_CHILD = config.child,
            EL_THUMB_CONTAINER = config.thumbContainer,
            EL_PREV_BTN = config.prevBtn,
            EL_NEXT_BTN = config.nextBtn;


    var bindClicks = function() {
        EL_THUMB_CONTAINER.delegate('a', 'click', function(e) {
            e.preventDefault();
                setActive( $(this).attr('data-slide-id') );
        });

        EL_PREV_BTN.click(function(e) {
            e.preventDefault();
            getPreviousId();
            var self = $(this);
            self.prop('disabled', true);
            setTimeout(function() {
                self.prop('disabled', false);    
            }, 200);
        });

        EL_NEXT_BTN.click(function(e) {
            e.preventDefault();
            getNextId();
            var self = $(this);
            self.prop('disabled', true);
            setTimeout(function() {
                self.prop('disabled', false);    
            }, 200);
        });
    };

    var getPreviousId = function() {
        var current = EL_PARENT.find('.active');
        var prevEl = (current.prev(EL_CHILD).length) ? current.prev(EL_CHILD) : EL_PARENT.find(EL_CHILD).last();

        setActive( prevEl.attr('data-slide-id'), 'from-left' );
    }

    var getNextId = function() {
        var current = EL_PARENT.find('.active');
        var nextEl = (current.next(EL_CHILD).length) ? current.next(EL_CHILD) : EL_PARENT.find(EL_CHILD).first();

        setActive( nextEl.attr('data-slide-id'), 'from-right');
    }

    var setActive = function(id, force) {
            var aS = activeSlide( id );
            if (!aS.hasClass('active')) {

                $('.was-active').removeClass('to-left to-right was-active');

                //reset thumbs and set the active one
                EL_THUMB_CONTAINER.find('a').each(function() {
                    $(this).removeClass('active')
                    if ($(this).attr('data-slide-id') == id) {
                        $(this).addClass('active');
                    }
                });

                var oldActive = EL_PARENT.find('.active'); //identify old
                var newActiveDirection = (aS.attr('data-slide-id') > oldActive.attr('data-slide-id')) ? 
                    'from-right' : 'from-left';

                //NEXT/PREV arrows can force an animation direction so the flow stays cool
                if (force) { newActiveDirection = force; }

                aS.addClass(newActiveDirection).addClass('active');
                var oldActiveDirection = (newActiveDirection == 'from-left') ? 'to-right' : 'to-left';
                oldActive.removeClass('from-right from-left active').addClass(oldActiveDirection).addClass('was-active');

                //fire callback (defaults to empty function)
                config.onSwitch(aS, oldActive); //new, old
            }
    }

    var activeSlide = function(id) {
        var match = EL_PARENT.find(EL_CHILD).filter(function() {
            return $(this).attr('data-slide-id') == id;
        });
        return (match.length) ? $(match) : [];
    }

    var init = function() {
        
        EL_PARENT.addClass('ds-slider-frame');
        //draw circles and assign datas
        EL_PARENT.find(EL_CHILD).each(function(i) {
            $(this).attr('data-slide-id', i)
                   .addClass('ds-slider-slide');
            $('<a href="#"/>').addClass('ds-slider-thumb').addClass(THUMB_CLASSES).attr('data-slide-id', i).appendTo( EL_THUMB_CONTAINER );
        });

        bindClicks();

        //add initial classes
        EL_CHILD.first().addClass('active');
        EL_THUMB_CONTAINER.find('a').first().addClass('active');
    };
    init();
}

//PRODUCTS
new Slider({
    thumbClasses:"cell-circle",
    parent:$('.js-product-slide-frame'),
    child:$('.cell-group'),
    thumbContainer:$('.cell-controller'),
    prevBtn:$('.js-btn-prev'),
    nextBtn:$('.js-btn-next')
});

//TESTIMONIALS
new Slider({
    thumbClasses:"cell-circle",
    parent:$('.js-testimonial-slide-frame'),
    child:$('.testimonial-slide'),
    thumbContainer:$('.testimonials-thumbs'),
    prevBtn:$('.js-tst-btn-prev'),
    nextBtn:$('.js-tst-btn-next'),
    onSwitch: function(newActiveEl, oldActiveEl) {
        console.log('slide switched!', newActiveEl, oldActiveEl);
        //ADD IMAGE SWITCHING HERE WHEN READY
    }
});



/* WAYPOINTS */
var headerWaypoint = new Waypoint({
  element: $('.js-waypoint-products-section')[0],
  handler: function(direction) {
    if (direction == "down") {
        $('body').addClass('header-reduced');
    } else {
        $('body').removeClass('header-reduced');
    }
  },
  offset: 80
})

/* Wire up the header to scroll to spots */
$(".site-header").find('a').click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $("#"+ $(this).data('location') ).offset().top
    }, 400);
});
