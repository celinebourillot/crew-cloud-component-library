$('.hero-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.hero-slider__nav'
  });
  $('.hero-slider__nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.hero-slider',
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    draggable: false
  });