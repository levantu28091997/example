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

// Slide Homepage
// $('.js-slide').slick({
//   dots: true,
//   infinite: true,
//   slidesToShow: 1,
//   arrows: true,
//   prevArrow: '<button class="slide-prev"></button>',
//   nextArrow: '<button class="slide-next"></button>',
//   slidesToScroll: 1,
//   autoplay: false,
//   speed: 300
// });

// Slide button click
// $('.js-prev-slide').on('click', function(e){
//   $(".slide-prev").click();
//   e.preventDefault();
// })
// $('.js-next-slide').on('click', function(e){  
//   $(".slide-next").click();
//   e.preventDefault();
// })


// Change icon social header
// function changIconSocailHeader(jsClass, jsId, jsImg){
//   $(jsClass).on({
//     mouseenter: function(e){
//       $(jsId).attr("src","images/icon/icon-" + jsImg + "-w.png");
//       e.preventDefault();
//     },
//     mouseleave: function(e){
//       $(jsId).attr("src","images/icon/icon-" + jsImg + ".png");
//       e.preventDefault();
//     }
//   });
// }
// changIconSocailHeader('.i-facebook','#js-social-fb','facebook');
// changIconSocailHeader('.i-gplus','#js-social-gplus','gplus');
// changIconSocailHeader('.i-twitter','#js-social-twitter','twitter');
// changIconSocailHeader('.i-pinterest','#js-social-pinterest','pinterest');
// changIconSocailHeader('.i-behance','#js-social-behance','behance');
// changIconSocailHeader('.i-dribbble','#js-social-dribbble','dribbble');
// changIconSocailHeader('.i-email','#js-icon-email','email');
// changIconSocailHeader('.i-phone','#js-icon-phone','phone');
// changIconSocailHeader('.scroll-to-top','#js-scroll-to-top','scroll-up');
// changIconSocailHeader('.dots-next','#js-dot-next','dot-next');
// changIconSocailHeader('.dots-previous','#js-dot-prev','dot-prev');

// Chang icon before hover button slide
    // prev
// $(".js-prev-slide").on({
//   mouseenter: function(e){
//     $("#js-prev-slide").attr("src","images/icon/icon-prev-hv.png");
//     e.preventDefault();
//   },
//   mouseleave: function(e){
//     $("#js-prev-slide").attr("src","images/icon/icon-prev.png");
//     e.preventDefault();
//   }
// });
    // next
// $(".js-next-slide").on({
//   mouseenter: function(e){
//     $("#js-next-slide").attr("src","images/icon/icon-next-hv.png");
//     e.preventDefault();
//   },
//   mouseleave: function(e){
//     $("#js-next-slide").attr("src","images/icon/icon-next.png");
//     e.preventDefault();
//   }
// });

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
// $("<a class='dots-previous'><img src='images/icon/icon-dot-prev.png' id='js-dot-prev' alt='Next'></a>").prependTo(".js-lw-carousel .owl-dots");
// $("<a class='dots-next'><img src='images/icon/icon-dot-next.png' id='js-dot-next' alt='Prev'></a>").appendTo(".js-lw-carousel .owl-dots");

// // Latest works button click
// $('.dots-previous').on('click', function(e){
//   $(".lh-prev-carousel").click();
//   e.preventDefault();
// })
// $('.dots-next').on('click', function(e){  
//   $(".lh-next-carousel").click();
//   e.preventDefault();
// })

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