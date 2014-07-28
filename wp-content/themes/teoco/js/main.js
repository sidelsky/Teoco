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
        $(window).bind('scroll resize load', function() {
          if ($(this).scrollTop() < 100) {
            $(".header-background").removeClass("header-ani");
            $('.prev').addClass("hidden");
        } else {
          $(".header-background").addClass("header-ani");
            $('.prev').removeClass("hidden");
          }
          var scrollVar = $(window).scrollTop();

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

      }); 


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
$("ul.sub-menu").hide();
$('.main-navigation >ul >li:has(.menu-wrapper)').addClass('hasSub');
$("ul.sub-menu").parent().append("<i class='fa fa-angle-down'></i>");

$('.big-menu >ul >li.hasSub').hover(function () {
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



//Scroll to section
$('.section').first();
 
$('a.display').on('click', function(e) {
    e.preventDefault();

      var t = $(this).text(),
      that = $(this);

    if (t === 'next' && $('.current').next('.section').length > 0) {
        var $next = $('.current').next('.section');
        var top = $next.offset().top -50;
        
        $('.current').removeClass('current');
      
        $('body').animate({
          scrollTop: top     
        }, function () {
               $next.addClass('current');
        });
  } else if (t === 'prev' && $('.current').prev('.section').length > 0) {
        var $prev = $('.current').prev('.section');
        var top = $prev.offset().top -50;
        
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




//Controls the show/hide functionality
$('.content').hide();
//$('.products .inner').hide();

  $('.product').click(function() {
    $('.product').removeClass('selected');
    $(this).addClass('selected');
            
    var index = $(this).index();
    $('.content').slideUp(300);
    $(this).parent().next().children().eq(index).slideDown(200);  
});


//Image toggle--------------------------------------------------------------------------<<<<<<<<< Working on this
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
$('section.page-wrapper__wide:nth-of-type(2n+1)').css({
  'background' : '#e0e0e2'
})


// Froogaloop
// https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/froogaloop.js
// https://github.com/vimeo/player-api/blob/master/javascript/froogaloop.js
// http://a.vimeocdn.com/js/froogaloop2.min.js

// var iframe = document.getElementById('video');

// // $f == Froogaloop
// var player = $f(iframe);

// // bind events
// var playButton = document.getElementById("play-button");
// playButton.addEventListener("click", function() {
//   player.api("play");
//   $('#play-button').fadeOut(650);/*.addClass('hide');*/
// });

// player.api("finish").alert('Done');

// var pauseButton = document.getElementById("pause-button");
// pauseButton.addEventListener("click", function() {
//   player.api("pause");
// });


//-----------

var iframe = $('#video')[0],
    player = $f(iframe),
    status = $('.status');
    cover = $('#play-cover');

// When the player is ready, add listeners for pause, finish, and playProgress
player.addEvent('ready', function() {
    status.text('ready');
    
    player.addEvent('pause', onPause);
    player.addEvent('finish', onFinish);
    player.addEvent('playProgress', onPlayProgress);
});

// Call the API when a button is pressed
$('button').bind('click', function() {
    player.api($(this).text().toLowerCase());
});

//var cover = document.getElementById("play-cover");

  cover.bind("click", function() {
    player.api("play");
    $('#play-cover').fadeOut(650);/*.addClass('hide');*/
});

function onPause(id) {
    status.text('paused');
    $('#play-cover').fadeIn(650);/*.addClass('hide');*/
}

function onFinish(id) {
    status.text('finished');
    $('#play-cover').fadeIn(650);/*.addClass('hide');*/
}

function onPlayProgress(data, id) {
    status.text(data.seconds + 's played');
}




// $('.image-wrapper img').click(function() {
//   $(this).addClass('selected');             
//   },function () {      
//    $(this).removeClass('selected');
// });




//download.removeClass('hidden');

// //Forms - label to placeholder
// $("form :input").each(function(index, elem) {
//     var eId = $(elem).attr("id");
//     var label = null;
//     if (eId && (label = $(elem).parents("form").find("label[for="+eId+"]")).length == 1) {
//         $(elem).attr("placeholder", $(label).html());
//         $(label).remove();
//     }
//  });





// var f = $('iframe'),
// url = f.attr('src').split('?')[0],
// status = $('.status');

// // Listen for messages from the player
// if (window.addEventListener){
//     window.addEventListener('message', onMessageReceived, false);
// }
// else {
//     window.attachEvent('onmessage', onMessageReceived, false);
// }

// // Handle messages received from the player
// function onMessageReceived(e) {
//     var data = JSON.parse(e.data);
    
//     switch (data.event) {
//         case 'ready':
//             onReady();
//             break;
           
//         case 'playProgress':
//             onPlayProgress(data.data);
//             break;
            
//         case 'pause':
//             onPause();
//             break;
           
//         case 'finish':
//             onFinish();
//             break;
//     }
// }

// // Call the API when a button is pressed
// $('button').on('click', function() {
//     post($(this).text().toLowerCase());
// });

// // Helper function for sending a message to the player
// function post(action, value) {
//     var data = { method: action };
    
//     if (value) {
//         data.value = value;
//     }
    
//     f[0].contentWindow.postMessage(JSON.stringify(data), url);
// }

// function onReady() {
    
//     status.text('ready');
//     post('addEventListener', 'pause');
//     post('addEventListener', 'finish');
//     post('addEventListener', 'playProgress');
// }

// function onPause() {
//     status.text('paused');
// }

// function onFinish() {
//     status.text('finished');
// }

// function onPlayProgress(data) {
//     status.text(data.seconds + 's played');
// }



//End
});