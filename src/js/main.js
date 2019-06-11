//MAIN NAV SUBMENUS

$("li.navbar__menu__dropdown").click(function(){

    $(this).children( ".navbar__menu__submenu" ).toggle();

});


$(document).mouseup(function(e){
  var container = $(".navbar__menu__submenu");

  // If the target of the click isn't the container
  if(!container.is(e.target) && container.has(e.target).length === 0){
      container.hide();
  }
});

//MOBILE MENU

$(".navbar-burger").click(function(){
  $(".nav-mobile").animate({right: '0'}, "slow");
  $("body").addClass("body-lock");
});

$(".close-btn").click(function(){
  $(".nav-mobile").animate({right: '-100vw'}, "slow");
  $("body").removeClass("body-lock");
});

//MODAL TRAINING

$(".btn--disabled").click(function(){
  $(".modal--training").fadeIn(1000);
  $("body").addClass("body-lock");
});

$(".btn--close").click(function(){
  $(".modal--training").fadeOut(1000);
  $("body").removeClass("body-lock");
});


//SLIDERS

$('.hero-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.hero-slider__nav',
  rows: 0,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        arrows: true,
        prevArrow:'<div class="arrow arrow--prev"><span class="icon icon-icon_f107-left"></div>',
        nextArrow:'<div class="arrow arrow--next"><span class="icon icon-icon_f107-right"></div>'
      }
    }
  ]
});
$('.hero-slider__nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.hero-slider',
  dots: false,
  centerMode: false,
  focusOnSelect: true,
  draggable: false,
  swipe: false,
  rows: 0,
  touchMove: false
});

  $('.product-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots:true,
    prevArrow:'<div class="arrow arrow--prev"><span class="icon icon-icon_f107-left"></div>',
    nextArrow:'<div class="arrow arrow--next"><span class="icon icon-icon_f107-right"></div>',
    rows: 0,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.one-slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots:true,
    prevArrow:'<div class="arrow arrow--prev"><span class="icon icon-icon_f107-left"></div>',
    nextArrow:'<div class="arrow arrow--next"><span class="icon icon-icon_f107-right"></div>',
    rows: 0,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          arrows: false
        }
      },
    ]
  });

  $('.three-slides').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    dots:true,
    prevArrow:'<div class="arrow arrow--prev"><span class="icon icon-icon_f107-left"></div>',
    nextArrow:'<div class="arrow arrow--next"><span class="icon icon-icon_f107-right"></div>',
    rows: 0,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }
    ]
  });

  $('.five-slides').slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    arrows: true,
    dots:true,
    prevArrow:'<div class="arrow arrow--prev"><span class="icon icon-icon_f107-left"></div>',
    nextArrow:'<div class="arrow arrow--next"><span class="icon icon-icon_f107-right"></div>',
    rows: 0,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false
        }
      }
    ]
  });

  $('.vertical-slide').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    arrows: false,
    dots:true,
    vertical:true,
    rows: 0
  });

  $('.offer-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: false,
    dots:true,
    rows: 0,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.tip-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots:true
  });

  //TABS

  $('ul.tabs').each(function(){

    var $active, $content, $links = $(this).find('a');
  
    $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
    $active.addClass('active');
  
    $content = $($active[0].hash);

    $links.not($active).each(function () {
      $(this.hash).hide();
    });
  
    $(this).on('click', 'a', function(e){

      $active.removeClass('active');
      $content.hide();
  
      $active = $(this);
      $content = $(this.hash);

      $active.addClass('active');
      $content.show();
  
      e.preventDefault();
    });
  });

  //accordion

$(function () {
  $('.js-accordion').accordion();
});