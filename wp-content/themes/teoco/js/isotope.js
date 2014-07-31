(function($){
 
  var $container = $('#portfolio'),
 
      // create a clone that will be used for measuring container width
      $containerProxy = $container.clone().empty().css({ visibility: 'hidden' });   
 
  $container.after( $containerProxy );  
 
    // get the first item to use for measuring columnWidth
  var $item = $container.find('.portfolio-item').eq(0);
  $container.imagesLoaded(function(){
  $(window).smartresize( function() {
 
    // calculate columnWidth
    var colWidth = Math.floor( $containerProxy.width() / 2 ); // Change this number to your desired amount of columns
 
    // set width of container based on columnWidth
    $container.css({
        width: colWidth * 2 // Change this number to your desired amount of columns
    })
    .isotope({
 
      // disable automatic resizing when window is resized
      resizable: false,
 
      // set columnWidth option for masonry
      masonry: {
        columnWidth: colWidth
      }
    });
 
    // trigger smartresize for first time
  }).smartresize();
   });
 
// filter items when filter link is clicked
$('#filters a').click(function(){
$('#filters a.active').removeClass('active');
var selector = $(this).attr('data-filter');
$container.isotope({ filter: selector, animationEngine : "css" });
$(this).addClass('active');
return false;
 
});
 
} ) ( jQuery );