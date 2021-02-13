'use strict'

$( document ).ready(function() {

  let btnToTop = $('#scroll'),
      header = $('#header-js');

// anchor
  let btnAnchor = $('.primary-menu li a'),
      fixedHeader = $('#header-js').innerHeight();

  btnAnchor.on('click', function(e){
    e.preventDefault();
    let anchorBlock = $('div[data-anchor='+$(this).attr('data-anchor')+']');
    $('html, body').animate({
      scrollTop: anchorBlock.offset().top - fixedHeader
    }, 1000);
  })
// end anchor

//scroll to bottom & function scroll to top
  $(window).scroll(function() {
    if($(window).scrollTop()  > 300) {
      header.addClass('sticky');
      btnToTop.fadeIn(100);
      if($(window).scrollTop() > $('#shares').offset().top - $(window).innerHeight()){
        $('#shares').addClass('active')
        if($(window).scrollTop() > $('#spot').offset().top - $(window).innerHeight()){
          $('#spot').addClass('active')
        }
      }
    }else{
      header.removeClass('sticky');
      btnToTop.fadeOut(100);
    }
  });

  btnToTop.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, 700);
  });
// end scroll

// img svg convert inline
$('.img-svg').each(function(){
  var $img = $(this);
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');
  $.get(imgURL, function(data) {
    var $svg = $(data).find('svg');
    if(typeof imgClass !== 'undefined') {
      $svg = $svg.attr('class', imgClass+' replaced-svg');
    }
    $svg = $svg.removeAttr('xmlns:a');
    if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
      $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
    }
    $img.replaceWith($svg);
  }, 'xml');
});
// end img svg

// animation
  function addNewImg(){
    let imgAdd = $('#img-add'),
        copyImg = $(imgAdd).find('img');
    for(let i=0;i<3;i++){
      imgAdd.append(copyImg.clone());
    }
  }
  addNewImg();
    setTimeout(() => $('.banner-wrapper').addClass('animated'), 1000);
// end animation

// slider & product container
let btnSlide = $('.product-cat__btn'),
    sliderParam = {
                    slidesPerView: 4,
                    spaceBetween: 30,
                  };

btnSlide.click(function(e){
  btnSlide.removeClass('active');
  $(this).addClass('active');
  $('.product-slider__wrapper.active').slideUp(150);
  $('#slider-'+$(this).attr('data-cat')).addClass('active').slideDown(150);
  const swiper2 = new Swiper('#slider-'+$(this).attr('data-cat'), sliderParam)
})

const swiper1 = new Swiper('#slider-music',sliderParam)
// end slider
});