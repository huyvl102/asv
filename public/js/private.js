jQuery(function ($) {
        $('.language > a').click(function (e) {
            e.preventDefault();
            $('.language ul').toggleClass('show')
        })
        // Select all links with hashes
        $('a[href*="#"]')
        // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });
        // menu mobile
        jQuery(document).ready(function ($) {
            var $lateral_menu_trigger = $('#cd-menu-trigger'),
                $content_wrapper = $('.cd-main-content'),
                $navigation = $('header');

            //open-close lateral menu clicking on the menu icon
            $lateral_menu_trigger.on('click', function (event) {
                event.preventDefault();

                $lateral_menu_trigger.toggleClass('is-clicked');
                $navigation.toggleClass('lateral-menu-is-open');
                $content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                    // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
                    $('body').toggleClass('overflow-hidden');
                });
                $('#cd-lateral-nav').toggleClass('lateral-menu-is-open');

                //check if transitions are not supported - i.e. in IE9
                if ($('html').hasClass('no-csstransitions')) {
                    $('body').toggleClass('overflow-hidden');
                }
            });

            //close lateral menu clicking outside the menu itself
            $content_wrapper.on('click', function (event) {
                if (!$(event.target).is('#cd-menu-trigger, #cd-menu-trigger span')) {
                    $lateral_menu_trigger.removeClass('is-clicked');
                    $navigation.removeClass('lateral-menu-is-open');
                    $content_wrapper.removeClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                        $('body').removeClass('overflow-hidden');
                    });
                    $('#cd-lateral-nav').removeClass('lateral-menu-is-open');
                    //check if transitions are not supported
                    if ($('html').hasClass('no-csstransitions')) {
                        $('body').removeClass('overflow-hidden');
                    }

                }
            });

            //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
            $('.item-has-children').children('.arrow').on('click', function (event) {
                event.preventDefault();
                $(this).parent('.item-has-children').toggleClass('li-active');
                $(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(200).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(200);
            });
        });

    $('.about-slider').owlCarousel({
        loop:true,
        autoplay: true,
        items:1,
        dots: true,
        nav: false,
        responsive:{
            0:  { items:1 },
            480:{ items:1 },
            678:{ items:1 },
            960:{ items:1 }
        }
    });



    $(document).ready(function () {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 4;
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: false,
            pagination: false,
            autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200
        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function () {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items : slidesPerPage,
                dots: false,
                autoplay: false,
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage,
                margin: 12,
                nav: false,
                responsiveRefreshRate: 100,
                responsive: {
                    0: {
                        items: 2
                    },
                    420: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 3
                    },
                    1300: {
                        items: 4
                    },
                    1590: {
                        items: 4
                    }
                }
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;

            //if you disable loop you have to comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    });



});
