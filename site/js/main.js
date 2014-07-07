$( document ).ready(function() {
  //alert('ready');




//$(window).load(function () {
            //BG

            /**
             * cbpBGSlideshow.js v1.0.0
             * http://www.codrops.com
             *
             * Licensed under the MIT license.
             * http://www.opensource.org/licenses/mit-license.php
             *
             * Copyright 2013, Codrops
             * http://www.codrops.com
             */
             var cbpBGSlideshow = (function () {

              var $slideshow = $('#cbp-bislideshow'),
              $items = $slideshow.children('li'),
              itemsCount = $items.length,
              $controls = $('#cbp-bicontrols'),
              navigation = {
                $navPrev: $controls.find('span.cbp-biprev'),
                $navNext: $controls.find('span.cbp-binext'),
                $navPlayPause: $controls.find('span.cbp-bipause')
              },
                    // current item´s index
                    current = 0,
                    // timeout
                    slideshowtime,
                    // true if the slideshow is active
                    isSlideshowActive = true,
                    // it takes 3.5 seconds to change the background image
                    interval = 3500;

                    function init(config) {

                    // preload the images
                    $slideshow.imagesLoaded(function () {

                      if (Modernizr.backgroundsize) {
                        $items.each(function () {
                          var $item = $(this);
                          $item.css('background-image', 'url(' + $item.find('img').attr('src') + ')');
                        });
                      } else {
                        $slideshow.find('img').show();
                            // for older browsers add fallback here (image size and centering)
                          }
                        // show first item
                        $items.eq(current).css('opacity', 1);
                        // initialize/bind the events
                        initEvents();
                        // start the slideshow
                        stopSlideshow();

                      });

                  }

                  function initEvents() {

                    navigation.$navPlayPause.on('click', function () {

                      var $control = $(this);
                      if ($control.hasClass('cbp-biplay')) {
                        $control.removeClass('cbp-biplay').addClass('cbp-bipause');
                        stopSlideshow();
                      } else {
                        $control.removeClass('cbp-bipause').addClass('cbp-biplay');
                        stopSlideshow();
                      }

                    });

                    navigation.$navPrev.on('click', function () {
                      navigate('prev');
                      if (isSlideshowActive) {
                        stopSlideshow();
                      }
                    });
                    navigation.$navNext.on('click', function () {
                      navigate('next');
                      if (isSlideshowActive) {
                        stopSlideshow();
                      }
                    });
                    
                    //Click flexslider arrow to move bg image
                    $('.flex-prev').on('click', function () {
                      $('.thumb').hide();
                      navigate('prev');
                      //$( ".slides li" ).scrollTop(0);
                    });

                    $('.flex-next').on('click', function () {
                      $('.thumb').hide();
                      navigate('next');
                      //$( ".slides li" ).scrollTop(0);
                        //.animate({ scrollTop: 0 }, 600);
                      });

                  }

                  function navigate(direction) {

                    // current item
                    var $oldItem = $items.eq(current);

                    if (direction === 'next') {
                      current = current < itemsCount - 1 ? ++current : 0;
                    } else if (direction === 'prev') {
                      current = current > 0 ? --current : itemsCount - 1;
                    }

                    // new item
                    var $newItem = $items.eq(current);
                    // show / hide items
                    $oldItem.css('opacity', 0);
                    $newItem.css('opacity', 1);

                  }

                  function startSlideshow() {

                    isSlideshowActive = true;
                    clearTimeout(slideshowtime);
                    slideshowtime = setTimeout(function () {
                      navigate('next');
                      stopSlideshow();
                    }, interval);

                  }

                  function stopSlideshow() {
                    isSlideshowActive = false;
                    clearTimeout(slideshowtime);
                  }

                  return {
                    init: init
                  };
                })();

          //Scrollbar
          // $('.vertical-scrollbar-demo').slimscroll({
          //   height: '630px',
          //   size: '3px',
          //   color: '#000',
          //   distance: '2px',
          //   opacity: 1,
          //   allowPageScroll: true,
          //   railVisible: false,
          //   wheelStep: 10,
          //   railColor: '#222'
          //     //width: '300px'
          //   });

          // $(".vertical-scrollbar-demo").niceScroll({
          //     touchbehavior:true,
          //     cursorcolor:"#00F",
          //     cursoropacitymax:0.7,
          //     cursorwidth:11,
          //     cursorborder:"10px solid #2848BE",
          //     cursorborderradius:"8px",
          //     background:"#ccc",
          //     autohidemode:"scroll"
          //   });

      //Page scroll
      // $('.vertical-scrollbar-demo img').css({
      //       'opacity': 0
      //     });

      // var obj = $('.vertical-scrollbar-demo');
      //   $(obj).scroll(function () { 
      //     // if ($(this).scrollTop() < 270) {
      //     //   $("header").removeClass("header-ani");
      //     //   //$('.portfolio').removeClass("header-ani");
      //     // }
      //     // else
      //     //   $("header").addClass("header-ani");
      //       //$('.portfolio').addClass("header-ani");
            
      //     //Fade images
      //     // $('[id^="post"]').each(function () {
      //     //   if (($(this).offset().top - $(window).scrollTop()) < 10) {
      //     //     $(this).stop().fadeTo(1000, 0);
      //     //   } else {
      //     //     $(this).stop().fadeTo(1000, 1);
      //     //   }
      //     // });

      //     var scrollVar = $(obj).scrollTop();
      //     //Down arrow
      //     $('.intro-container').css({
      //       'opacity': 1-scrollVar/500
      //     });
      //     //Article
      //     $('.vertical-scrollbar-demo img').css({
      //       'opacity':( 1+scrollVar-100 )/200
      //     });
      //   });



            $('.fa-chevron-circle-down').click(function(){
              console.log('name');
              $('.vertical-scrollbar-demo').animate({
                scrollTop : 500
              },800);
              return false;
            });



            //fitVids
            $(".video-wrapper").fitVids();

            //Flexslider
            $('.flexslider').flexslider({
              animation: "slide",
              animationLoop: false,
              smoothHeight: false,
              slideshow: false,
              controlNav: false,
              directionNav: true,
              //video: true,
              // prev: '#prev', 
              // next: '#next', 
              touch: false,  
              start: function () {

                },
              before: function(slider){
              //$( ".slides li" ).scrollTop(0);
              if (slider.slides.eq(slider.currentSlide).find('iframe').length !== 0)
                $f(slider.slides.eq(slider.currentSlide).find('iframe').attr('id') ).api('pause');

              },
              after: function(){
                $('.thumb').show();
              },
              end: function(){
              }
            });

            cbpBGSlideshow.init();


        //Swipe controls
        $(".flexslider").touchwipe({
         wipeLeft: function(e) {
          $('.flexslider').flexslider("next");
          //$('.flex-next').trigger('click');
          navigate('next');
          e.preventDefault();
        },
        wipeRight: function(e) {
          $('.flexslider').flexslider("prev");
          //$('.flex-prev').trigger('click');
          navigate('prev');
          e.preventDefault();
        },
     //wipeUp: function() { alert("up"); },
     //wipeDown: function() { alert("down"); },
     min_move_x: 20,
     min_move_y: 20,
     preventDefaultEvents: false
   });



        // $(window).resize(function(){
        //   if ($(window).width() <= 768){  
        //   $('.slimScrollDiv').removeClass('slimScrollDiv');
        //   } 
        // });


            //end
          });


          // //Footer prev
          // $('#prev').on('click', function (r) {
          //   $('.flexslider').flexslider("prev");
          //   //$('.flex-prev').trigger('click');
          //   //navigate('prev');
          //   //return false;
          //   r.preventDefault();
          // });

          // //Footer next
          // $('#next').on('click', function (r) {
          //   $('.flexslider').flexslider("next");
          //   //console.log('next');
          //   //$('.flex-next').trigger('click');
          //   //navigate('next');
          //   //return false;
          //   r.preventDefault();
          // });

