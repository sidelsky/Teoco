$(document).ready(function () {

  $.extend($.easing, {
    def: 'easeOutQuad',
    swing: function (x, t, b, c, d) {
          //alert($.easing.default);
          return $.easing[$.easing.def](x, t, b, c, d);
        },
        easeInQuad: function (x, t, b, c, d) {
          return c * (t /= d) * t + b;
        },
        easeOutQuad: function (x, t, b, c, d) {
          return -c * (t /= d) * (t - 2) + b;
        },
        easeInOutQuad: function (x, t, b, c, d) {
          if ((t /= d / 2) < 1) return c / 2 * t * t + b;
          return -c / 2 * ((--t) * (t - 2) - 1) + b;
        },
        easeInCubic: function (x, t, b, c, d) {
          return c * (t /= d) * t * t + b;
        },
        easeOutCubic: function (x, t, b, c, d) {
          return c * ((t = t / d - 1) * t * t + 1) + b;
        },
        easeInOutCubic: function (x, t, b, c, d) {
          if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
          return c / 2 * ((t -= 2) * t * t + 2) + b;
        },
        easeInQuart: function (x, t, b, c, d) {
          return c * (t /= d) * t * t * t + b;
        },
        easeOutQuart: function (x, t, b, c, d) {
          return -c * ((t = t / d - 1) * t * t * t - 1) + b;
        },
        easeInOutQuart: function (x, t, b, c, d) {
          if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
          return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
        },
        easeInQuint: function (x, t, b, c, d) {
          return c * (t /= d) * t * t * t * t + b;
        },
        easeOutQuint: function (x, t, b, c, d) {
          return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
        },
        easeInOutQuint: function (x, t, b, c, d) {
          if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
          return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
        },
        easeInSine: function (x, t, b, c, d) {
          return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
        },
        easeOutSine: function (x, t, b, c, d) {
          return c * Math.sin(t / d * (Math.PI / 2)) + b;
        },
        easeInOutSine: function (x, t, b, c, d) {
          return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
        },
        easeInExpo: function (x, t, b, c, d) {
          return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
        },
        easeOutExpo: function (x, t, b, c, d) {
          return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
        },
        easeInOutExpo: function (x, t, b, c, d) {
          if (t == 0) return b;
          if (t == d) return b + c;
          if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
          return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
        },
        easeInCirc: function (x, t, b, c, d) {
          return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
        },
        easeOutCirc: function (x, t, b, c, d) {
          return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
        },
        easeInOutCirc: function (x, t, b, c, d) {
          if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
          return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
        },
        easeInElastic: function (x, t, b, c, d) {
          var s = 1.70158;
          var p = 0;
          var a = c;
          if (t == 0) return b;
          if ((t /= d) == 1) return b + c;
          if (!p) p = d * .3;
          if (a < Math.abs(c)) {
            a = c;
            var s = p / 4;
          } else var s = p / (2 * Math.PI) * Math.asin(c / a);
          return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
        },
        easeOutElastic: function (x, t, b, c, d) {
          var s = 1.70158;
          var p = 0;
          var a = c;
          if (t == 0) return b;
          if ((t /= d) == 1) return b + c;
          if (!p) p = d * .3;
          if (a < Math.abs(c)) {
            a = c;
            var s = p / 4;
          } else var s = p / (2 * Math.PI) * Math.asin(c / a);
          return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
        },
        easeInOutElastic: function (x, t, b, c, d) {
          var s = 1.70158;
          var p = 0;
          var a = c;
          if (t == 0) return b;
          if ((t /= d / 2) == 2) return b + c;
          if (!p) p = d * (.3 * 1.5);
          if (a < Math.abs(c)) {
            a = c;
            var s = p / 4;
          } else var s = p / (2 * Math.PI) * Math.asin(c / a);
          if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
          return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b;
        },
        easeInBack: function (x, t, b, c, d, s) {
          if (s == undefined) s = 1.70158;
          return c * (t /= d) * t * ((s + 1) * t - s) + b;
        },
        easeOutBack: function (x, t, b, c, d, s) {
          if (s == undefined) s = 1.70158;
          return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
        },
        easeInOutBack: function (x, t, b, c, d, s) {
          if (s == undefined) s = 1.70158;
          if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
          return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b;
        },
        easeInBounce: function (x, t, b, c, d) {
          return c - $.easing.easeOutBounce(x, d - t, 0, c, d) + b;
        },
        easeOutBounce: function (x, t, b, c, d) {
          if ((t /= d) < (1 / 2.75)) {
            return c * (7.5625 * t * t) + b;
          } else if (t < (2 / 2.75)) {
            return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
          } else if (t < (2.5 / 2.75)) {
            return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
          } else {
            return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
          }
        },
        easeInOutBounce: function (x, t, b, c, d) {
          if (t < d / 2) return $.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
          return $.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b;
        }
      });



$('.flexslider').flexslider({
  animation: 'slide',
  slideshow: false,
  directionNav: false,
  startAt: 0,
  easing: "swing",
  animationLoop: true,
  reverse: false,
  smoothHeight: false,
  sync: ".flexslider2"
});

$('.flexslider2').flexslider({
  animation: 'slide',
  slideshow: false,
  startAt: 0,
  easing: "swing",
  animationLoop: true,
  reverse: false,
  smoothHeight: false,
  controlNav: false,
  directionNav: false
});

      //$(".flexslider2").height($(".page-wrapper__wide").height());

      //Side menu
      $('.simple-menu').sidr({
        side: 'right'
      });

      //Side menu swipe
      $(window).touchwipe({
        wipeLeft: function () {
          // Close
          $.sidr('close', 'sidr');
        },
        wipeRight: function () {
          // Open
          $.sidr('open', 'sidr');
        },
        preventDefaultEvents: false
      });

      //Window scroll
      //$(window).scroll(function () {

        // var detached_header = $(".detached"),
        //     header_animate = $(".header-animate");

        // $(window).bind('scroll resize load', function() {
        //   if ($(this).scrollTop() < 120) {
        //     header_animate.removeClass("detached");
        //   } else {
        //     header_animate.addClass("detached").animate({
        //       top: '0px'
        //     },600);
        //   }
        //       console.log($(this).scrollTop());
        //    }); 


$(window).bind('scroll resize load', function() {
  if ($(this).scrollTop() < 1) {
    $(".detached").removeClass("header-ani");
  } else {
    $(".detached").addClass("header-ani");
  }
});

          //var scrollVar = $(window).scrollTop();

/*
          $(window).scroll(function() {
             if($(window).scrollTop() + $(window).height() == $(document).height()) {
                 alert("bottom!");
             }
           })*/;

$(window).scroll(function() {
 if($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
  $('.next').addClass("hidden");
  $('.prev').addClass("bottom");
} else {
  $('.next').removeClass("hidden");
  $('.prev').removeClass("bottom");
}
});


          //Down arrow
          // $('#goto-up').css({
          //  'opacity': 0+scrollVar/300
          // });

          // $('#goto-down').css({
          //  'opacity': 1-scrollVar/300
          // });

        // if($(window).scrollTop() + $(window).height() > $(document).height() - 40) {
        //    //alert('bob');
        //  var scrollVarB = $(window).scrollTop();
        //  $('#goto-down').css({
        //    'opacity': 1-scrollVarB/300
        //  });
        // };




      // $(window).scroll(function() {
     //    if ($(window).scrollTop()>100) {
     //        $('#goto-down').fadeIn();
     //    }
     //    else {
     //        $('#goto-down').stop(true).fadeOut();
     //    }
     //    if ($(window).scrollTop() + 100 > $(document).height() - $(window).height() ){
     //        $('#goto-down').stop(true).fadeOut();
     //    }
     // });



/*Dropdown arrow large and small */
//$("ul.sub-menu").hide();
//$('.main-navigation >ul >li:has(.menu-wrapper)').addClass('hasSub');
//$("ul.sub-menu").parent().append("<i class='fa fa-angle-down'></i>");

/*$('.big-menu >ul >li.hasSub').hover(function () {
        //$(this).children('ul').stop().slideDown(700, 'easeOutBack');
        $('.big-menu li.hasSub >ul').stop().slideDown(700, 'easeOutBack');
      }, function () {
        //$(this).children('ul').stop().slideUp(900, 'easeInOutExpo');
        $('.big-menu li.hasSub >ul').stop().slideUp(900, 'easeInOutExpo');
      });

$('.small-menu >ul >li.hasSub').hover(function () {
        //$(this).children('ul').stop().slideDown(700, 'easeOutBack');
        $('.small-menu li.hasSub >ul').stop().slideDown(700, 'easeOutBack');
      }, function () {
        //$(this).children('ul').stop().slideUp(900, 'easeInOutExpo');
        $('.small-menu li.hasSub >ul').stop().slideUp(900, 'easeInOutExpo');
      });
*/



// var primaryNav = $('#primary'),
//     menu_wrapper = $('#menu-wrapper #primary div nav ul li a');
//     subNav = $('#secondary'),
//     menu_wrapper_hide = $('#menu-wrapper');

// //subNav.hide();


// primaryNav.hover(
//   function() {
//     var rel = $(this).find('a').attr('rel')
//     $('#secondary a[rel="' + rel + '"]').addClass('active');
//   },
//   function() {
//     var rel = $(this).find('a').attr('rel')
//     $('#secondary a[rel="' + rel + '"]').removeClass('active');
//   }
// );


// menu_wrapper.bind('mouseover', openSubMenu);
// function openSubMenu() {
//   subNav.css('display', 'block');  
// };

// subNav.bind('mouseout', closeSubMenu);
// function closeSubMenu() {
//   subNav.css('display', 'none');  
// };

// menu_wrapper.bind('mouseover', openSubMenu);
// $('#menu-wrapper').bind('mouseout', closeSubMenu);

//     function openSubMenu() {
//       subNav.css('display', 'block');  
//     };

//     function closeSubMenu() {
//       subNav.css('display', 'none'); 
//     };



// menu_wrapper.mouseenter(function() {
//   subNav.show();
// });

// subNav.mouseout(function() {
//   $(this).hide();
// });

// menu_wrapper.hover(function() {
//   /* Stuff to do when the mouse enters the element */
//     subNav.show();
// }, function() {
//   /* Stuff to do when the mouse leaves the element */
//   subNav.hide();
// });

/*$('.career-number').hide();
function getCareerVal(index) {
  $('.toggle-inner').each(function(i){
    var hidval = $(this).find('.career-number').html();
    $(this).find('.gform_fields .gform_hidden').val(hidval);
    //console.log(hidval);
  })
  // var career_number = $('.toggle-inner').find('.career-number:nth-child('+index+')').text(),
  //     hidden = $('.gform_fields .gform_hidden');
  //     hidden.val(career_number);
}
getCareerVal();*/



// var sum = 0;    
//   $('div.secondary ul li').each(function() {
//      sum += $(this).height(); 
//   });

  //alert(sum);



//This function will get the REL attributes of each link in both primary and secondary menus
function getRelVal() {
  $('#header a').each(function(){
    var relTitle = $(this).html().replace(/\s+/g, '-').toLowerCase();
    $(this).attr('rel', relTitle );
    //console.log(relTitle);
  });
}
getRelVal();


  // Secondary navigation end
  var header = $('#header'),
  primaryNav = $('#header div.primary'),
  secondaryNav = $('#header div.secondary'),
  secondaryNavHeight = 92,
  animationDuration = 400,
          primaryNavList = $('#header div.primary ul'), // Update position of secondary nav to line up with primary
          secondaryNavList = $('#header div.secondary ul');
          logo = $('#menu-item-499 a');

          //logo.text(' ');

          for(var i=0;i<primaryNavList.children().length;i++) {
            var primaryNavChild = $(primaryNavList.children()[i]),
            secondaryNavChild = $(secondaryNavList.children()[i]);

        if(primaryNavChild.hasClass('search')) { // Reached search, stop
          break;
        }

        primaryNavChild.hover(
          function() {
            var rel = $(this).find('a').attr('rel')
            $('#header .secondary a[rel="' + rel + '"]').addClass('active');
            console.log('#header .secondary a[rel="' + rel + '"]');
          },
          function() {
            var rel = $(this).find('a').attr('rel')
            $('#header .secondary a[rel="' + rel + '"]').removeClass('active');
          }
          );

        secondaryNavChild.find('a').each(function() {
          var path = window.location.pathname;
          if($(this).attr('href') == path) {
            var rel = $(this).attr('rel');
            $('#header .primary a[rel="' + rel + '"]').addClass('active');
          }
        });

        secondaryNavChild.css('left', primaryNavChild.position().left);

        secondaryNavChild.hover(
          function() {
            var rel = $(this).find('a').attr('rel')
            $('#header .primary a[rel="' + rel + '"]').addClass('active');
            $('#header .secondary a[rel="' + rel + '"]').addClass('active');
          },
          function() {
            var rel = $(this).find('a').attr('rel')
            $('#header .primary a[rel="' + rel + '"]').removeClass('active');
            $('#header .secondary a[rel="' + rel + '"]').removeClass('active');
          }
          );
      }

      secondaryNav.height(secondaryNavHeight);
      secondaryNav.css('top', -(secondaryNav.outerHeight()-primaryNav.outerHeight()));

      var headerShadowHeight = 0, // Account for the shadow
      headerCollapsedHeight = primaryNav.outerHeight() + headerShadowHeight;
      //var headerExpandedHeight = primaryNav.outerHeight()+secondaryNav.outerHeight() + headerShadowHeight;
      
      var getHeight = $('#forHeight div').outerHeight()+primaryNav.outerHeight()+secondaryNav.outerHeight();
          //console.log(getHeight);

          var headerExpandedHeight = getHeight;
          $('#forHeight').height(headerExpandedHeight);
      //$('#secondary').height(headerExpandedHeight);

      header.height(headerCollapsedHeight);

      // Add hover state to the primary nav
      if( Modernizr.touch == false) {

        primaryNav.find('li').each(function() {
          $(this).mouseenter(
           function() {

               // If secondary disabled, just return, do not show secondary menu
               if($(this).hasClass('secondary-disabled')) {
                 return;
               }

               //cookieBlockHeight = $('#cookie_msg').is(':visible') ? $('#cookie_msg').outerHeight() : 0;

               //header.height(headerExpandedHeight);

               // secondaryNav.show();
               // secondaryNav.stop().animate({
               //   top:primaryNav.outerHeight()/* + cookieBlockHeight*/
               // }, animationDuration, 'easeOutQuart');

                  //secondaryNav.show();

                  header.animate({
                    height:headerExpandedHeight
                  }, animationDuration, 'easeOutQuart');
                  secondaryNav.show();

                });
        });

        $('#header').mouseleave(
          function() {

            header.animate({
              height:headerCollapsedHeight
            }, animationDuration, 'easeOutQuart');

            // secondaryNav.stop().animate({
            //   top:-(secondaryNav.outerHeight()-primaryNav.outerHeight()) /*+ cookieBlockHeight*/
            // }, animationDuration, 'easeOutQuart');
      });
      }
      else {

        primaryNav.find('li').each(function() {
          $(this).click(
            function() {

              // If secondary disabled, just go to link
              if($(this).hasClass('secondary-disabled')) {
                return true;
              }

              // Continue to link
              if(secondaryNav.is(":visible")) {
                return true;
              }
              // Show secondary nav
              else {

                header.height(headerExpandedHeight);

                secondaryNav.show();
                secondaryNav.stop().animate({
                  top:primaryNav.outerHeight()
                }, animationDuration, 'easeOutQuart');

                $('#content').stop().animate({
                  top:secondaryNav.outerHeight()
                }, animationDuration, 'easeOutQuart');

                return false;
              }
            }
            );
        });

      }



// Secondary navigation end

//Scroll to section
$('.section').first();

$('a.display').on('click', function(e) {
  e.preventDefault();

  var t = $(this).text(),
  that = $(this);

  if (t === 'next' && $('.current').next('.section').length > 0) {
    var $next = $('.current').next('.section');
    var top = $next.offset().top -55;

    $('.current').removeClass('current');

    $('body').animate({
      scrollTop: top     
    }, function () {
     $next.addClass('current');
   });
  } else if (t === 'prev' && $('.current').prev('.section').length > 0) {
    var $prev = $('.current').prev('.section');
    var top = $prev.offset().top -55;

    $('.current').removeClass('current');

    $('body').animate({
      scrollTop: top     
    }, function () {
     $prev.addClass('current');
   });
  } 
});


// //if at the bottom of the page:
//    $(window).bind('scroll resize load', function() {
//      if($(window).scrollTop() + $(window).height() > $(document).height() - 40) {


//        $("#goto-down").css({
//          'opacity': 0+scrollVarB/30
//        });
//        //console.log($(window).scrollTop() + $(window).height());
//        //console.log($(document).height() - 40);
//        // $('#goto-up').animate({
//        //  bottom: "150px"
//        // }, 240);
//      } else {
//        $("#goto-down").removeClass("inactive");
//      }
//    });



      //Smoove
      //$('.block').smoove({offset:'40%'});


      var download = $("#download"),
      dropdown = $(".dropdown"),
      close = $(".fa-times-circle"),
      latest = $('#latest');

      download.click(function(e) {
        dropdown.addClass('open');
        e.preventDefault();
        $(this).addClass('hidden');
      });



      close.click(function(){
        dropdown.removeClass("open");
        setTimeout(function(){
          download.removeClass('hidden');
        },1000);
      });


////////////////////////////////////////////
//Controls the show/hide functionality
////////////////////////////////////////////

$('.content').hide();
//$('.products .inner').hide();

$('.product').click(function() {
  $('.product').removeClass('selected');
  $(this).addClass('selected');

  var index = $(this).index();
  $('.content').slideUp(300);
  $(this).parent().next().children().eq(index).slideDown(200);  
});

$('.controls').click(function(e){
 e.preventDefault();
})

//$('.side-menu li:first-child').html('overview');


////////////////////////////////////////////
//Image toggle
////////////////////////////////////////////

$('.toggle').click(function(e){
  $(this).parent().toggleClass('selected');
  //var index = $(this).index();
  $(this).parent().find('.toggle-inner').toggleClass('selected');
  e.preventDefault();
});

//Close
$('.fa-chevron-circle-up').click(function(){
  $('.product, .products, .toggle-inner').removeClass('selected');
  $('.content').slideUp(300);
}); 

// //Transcript toggle
// $('.toggle').click(function(){
//   //$(this).parent().toggleClass('selected');
//   $(this).find('.toggle-inner').toggleClass('selected');
// });


//Success stories
// $('.image-wrapper').click(function(){
//   $(this).parent().toggleClass('selected');
//   //var index = $(this).index();
//     $(this).parent().find('.inner').toggleClass('selected');
// });


//body.page-template-success-page-php......

if ($('body').hasClass('page-template-careers-page-php')){
  $('section.page-wrapper__wide:nth-of-type(2n)').css({
    'background' : '#e0e0e2'
  });
} else {
  $('section.page-wrapper__wide:nth-of-type(2n+1)').css({
    'background' : '#e0e0e2'
  });
}





////////////////////////////////////////////
//Careers
////////////////////////////////////////////

/*$('#portfolio-list').filterable({
  useHash: true,
  animationSpeed: 1000,
  show: { width: 'show', opacity: 'show' },
  hide: { width: 'hide', opacity: 'hide' },
  useTags: true
});*/

////////////////////////////////////////////
//Careers accordion
////////////////////////////////////////////

//$('.accordian li ul').hide();
//$('#portfolio-list li:first ul').show().addClass('active'); 
//$('#portfolio-list li:first a').addClass('active'); 



//accordion menu
$('.accordian > li > ul').hide();
$('.accordian > li > .accord-toggle').on('click', function (e) {
  e.preventDefault();
  if ($(this).attr('class') !== 'active') {
        //$('.accordian li ul').slideUp();
        $(this).next().slideToggle();
        //$('.accordian li .accord-toggle').addClass('active');
        $(this).toggleClass('active');
      } else {

        //$(this).next().slideToggle(250);
        //$('.accordian li .accord-toggle').removeClass('active');
      }
    });



// $('.accordian li > .toggle').click(function(){

//     // $(this).next().slideToggle(250);
//     // $(this).toggleClass('active');

//     if ($(this).attr('class') != 'active'){
//       $('.accordian li ul').slideUp();
//       $(this).next().slideToggle();
//       $('.accordian li > .toggle').removeClass('active');
//       $(this).addClass('active');

//     }  else {
//       $(this).next().slideToggle(250);
//       $('.accordian li > .toggle').removeClass('active');
//     }

//     return false;
//   });


// $('.accordian > li > a').on('click', function (e) {
//     if ($(this).attr('class') !== 'active') {
//         $('.accordian li ul').slideUp();
//         $(this).next().slideToggle();
//         $('.accordian li > .toggle').removeClass('active');
//         $(this).addClass('active');
//     } else {
//         $(this).next().slideToggle(250);
//         $('.accordian li > .toggle').removeClass('active');
//     }
//     e.preventDefault();
// });


////////////////////////////////////////////
//Poplulate hidden field for jobs on careers
////////////////////////////////////////////

$('.career-number').hide();
function getCareerVal(index) {
  $('.toggle-inner').each(function(i){
    var hidval = $(this).find('.career-number').html();
    $(this).find('.gform_fields .gform_hidden').val(hidval);
    //console.log(hidval);
  })
  // var career_number = $('.toggle-inner').find('.career-number:nth-child('+index+')').text(),
  //     hidden = $('.gform_fields .gform_hidden');
  //     hidden.val(career_number);
}
getCareerVal();

$("input[type=file]").nicefileinput();

// function getCareerVal() {
//   $('.portfolio-item').each(function(i){
//     var hidval = $(this).attr('id')
//     $(this).find('.gform_hidden').val(hidval);
//     console.log(hidval);
//   });
// }
// getCareerVal();



$('.side-menu.links li:first-child a').click(function(e){
  e.preventDefault();
});


////////////////////////////////////////////
//Mix it up
////////////////////////////////////////////

$('#Container').mixItUp({
  layout: {
    display: 'block'
  },
  animation: {
    duration: 400,
    effects: 'fade',
    easing: 'cubic-bezier(0.175, 0.885, 0.32, 1.275)'
  }
});

//End
});



