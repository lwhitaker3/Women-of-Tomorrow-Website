/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        $("#primary_navigation").headroom({
          "offset": 100,
          "tolerance": 5,
          "classes": {
            "initial": "animated",
            "pinned": "slideDown",
            "unpinned": "slideUp"
          }
        });

        $(function() {
        	$('.mentor_card_no_photo').matchHeight();
        });

        // init Masonry
        var $grid = $('.grid').masonry({
          itemSelector: '.grid-item,.grid-item-width2',
          // use element for option
          columnWidth: '.grid-sizer',
          percentPosition: true
        });
        // layout Masonry after each image loads
        $grid.imagesLoaded().progress( function() {
          $grid.masonry('layout');
        });

        if($('.chapter-nav').length) {
          var sticky = new Waypoint.Sticky({
            element: $('.chapter-nav')[0]
          });
        }

        $( ".navbar-toggler" ).click(function() {
          if ($(".navbar-collapse").hasClass("show")){
            $("#nav-icon").removeClass("open");
            $("#primary_navigation").removeClass("background");
            console.log("open");
          } else {
            $("#nav-icon").addClass("open");
            $("#primary_navigation").addClass("background");
            console.log("close");
          }
        });




        // $('.grid').masonry({
        //   // set itemSelector so .grid-sizer is not used in layout
        //   itemSelector: '.grid-item',
        //   // use element for option
        //   columnWidth: '.grid-sizer',
        //   percentPosition: true
        // })

        $('.slider-for').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         fade: true,
         asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
         slidesToShow: 3,
         slidesToScroll: 1,
         asNavFor: '.slider-for',
         centerPadding: '0px',
         arrows: false,
         dots: false,
         centerMode: true,
         focusOnSelect: true
        });


      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {

        $('.sponsors-slider').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          arrows: false,
          dots: false,
          autoplay: true,
          autoplaySpeed: 5000
        });

        var options = {
          useEasing : true,
          useGrouping : true,
          separator : ',',
          decimal : '.',
          prefix : '',
          suffix : ''
        };

        var inview = new Waypoint.Inview({
          element: $('.counter')[0],
          entered: function(direction) {
            var counterNumber1 = $( "#number1count" ).data( "counterNumber" );
            var counter1 = new CountUp("number1count", 0, counterNumber1, 0, 5, options);
            counter1.start();
            var counterNumber2 = $( "#number2count" ).data( "counterNumber" );
            var counter2 = new CountUp("number2count", 0, counterNumber2, 0, 5, options);
            counter2.start();
            var counterNumber3 = $( "#number3count" ).data( "counterNumber" );
            var counter3 = new CountUp("number3count", 0, counterNumber3, 0, 5, options);
            counter3.start();

            inview.disable();
          }


        });


        var feed = new Instafeed({
          get: 'user',
          userId: '1371809476',
          accessToken: '1371809476.1677ed0.9092a9e8d6604f708da1ff0fdfeace10',
          limit: 10,
          template: '<div class="instagram-image"><a href="{{link}}"><img src="{{image}}" /><div class="likes"><i class="fa fa-heart" aria-hidden="true"></i>  {{likes}}</div></a></div>',
        });
        feed.run();

        $(function() {
          $('.slider-nav-item-wrapper').matchHeight();
        });

      },


      finalize: function() {

        $('#videoLink').click(function () {
            var videoLink = $( "#introVideo" ).data( "videoLink" );
            var splitLink = videoLink.split("=");
            console.log(splitLink);
            var src = 'https://www.youtube.com/embed/'+splitLink[1]+'?ecver=2;autoplay=1';
            // $('#introVideo').modal('show'); <-- remove this line
            $('#introVideo iframe').attr('src', src);
        });


        $('#introVideo').on('hide.bs.modal', function () {
          console.log("close");
            $('#introVideo iframe').removeAttr('src');
        });

      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
