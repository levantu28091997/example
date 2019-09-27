jQuery(document).ready(function(){
"use strict";

$ = jQuery;

var wH;
// SETTING
function heightSlide(){
    wH = $(window).height();
    $('.fix_h').css({'height':wH+'px'});
}
heightSlide();

// Tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

// Show Form search header
$('.js-search').on('click', function(e){
    $(".h-search-bg").addClass('js-bg-search-active');
    $(".search-box").addClass('js-box-active');
    e.preventDefault();
})
$('.js-search-close').on('click', function(e){
    $(".h-search-bg").removeClass('js-bg-search-active');
    $(".search-box").removeClass('js-box-active');
    e.preventDefault();
})
$('.h-search-bg').on('click', function(e){
  $(".h-search-bg").removeClass('js-bg-search-active');
  $(".search-box").removeClass('js-box-active');
  e.preventDefault();
})


// Set location megamenu
function setLocationMegamenu(wcontainer, selector){
  if($( window ).width() > 1200){
    var widthb = $( window ).width();
    var widthc = $(wcontainer).width() + 30;
    $(selector).css({
      'left': function(){
        var left_val = (widthb - widthc)/2;
        console.log(widthb);
        console.log(widthc);
        return left_val;
      }
    })
  }
  $(window).resize(function(){
    if ($(window).width() >= 1200 ) {
      var widthb = $( window ).width();
      var widthc = $(wcontainer).width() + 30;
      $(selector).css({
        'left': function(){
          var left_val = (widthb - widthc)/2;
          console.log(widthb);
          console.log(widthc);
          return left_val;
        }
      })
    }
  })

}
setLocationMegamenu('.js-widthc', '.js-megamenu');

// Show menu mobie
$('.js-menu-mobie').on('click', function(e){
  $('.js-menu-overlay').addClass('active');
  $('.menu-header').addClass('active');
  $('.js-close-menumobie').addClass('active');
})
$('.js-menu-overlay').on('click', function(e){
  $('.menu-header').removeClass('active');
  $('.js-menu-overlay').removeClass('active');
  $('.js-close-menumobie').removeClass('active');
})
$('.js-close-menumobie').on('click', function(e){
  $('.menu-header').removeClass('active');
  $('.js-menu-overlay').removeClass('active');
  $('.js-close-menumobie').removeClass('active');
})

// Drop menu mobie
$('.i-dropmenu-mobie').on('click', function(e){
  $('.megamenu').toggleClass('active');
})

// BACK TOP TOP
$(document).ready(function(){ 
	$(window).scroll(function(){ 
		if ($(this).scrollTop() > 200) { //thực hiện lệnh điều kiện Khi lăn chuột xuống dưới hơn 200px
			$('#scroll-to-top').fadeIn();
		} else { 
			$('#scroll-to-top').fadeOut();
		} 
	}); 
	$('#scroll-to-top').click(function(){ 
		$("html, body").animate({ scrollTop: 0 }, 700); //Animation
		return false; 
	}); 
});

$('.js-lw-carousel').owlCarousel({
  items: 1,
  lazyLoad: false,
  loop: true,
  autoplay: false,
  dots: true,
  nav: true,
  navText: ["<span class='lh-prev-carousel'></span>","<span class='lh-next-carousel'></span>"],
  dotsEach: true,
  autoplayTimeout: 1000
})

// Slide
$('.js-slide').owlCarousel({
    items: 1,
    lazyLoad: true,
    loop: true,
    autoplay: false,
    dots: true,
    nav: true,
    navText: ["<span class='lh-prev-slide'></span>","<span class='lh-next-slide'></span>"],
    dotsEach: true,
    autoplayTimeout: 1000
})
// Slide button click
$('.js-prev-slide').on('click', function(e){
  $(".lh-prev-slide").click();
  e.preventDefault();
});
$('.js-next-slide').on('click', function(e){  
  $(".lh-next-slide").click();
  e.preventDefault();
});

// Wow


});