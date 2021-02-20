'use strict'

$( document ).ready(function() {

  let btnToTop = $('#scroll'),
      header = $('#header-js'),
      feedbackBlock = $('#feedback-js'),
      btnMobMenu = $('.mobile-btn'),
      btnQuestion = $('.help-cont__question-item');

  let iconForwrard = '<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="481.01" y2="30.99"><stop offset="0" stop-color="#82BB58"/><stop offset="1" stop-color="#53A580"/></linearGradient><g><g><g><path d="m505.73 183.801-212-150c-4.6-3.296-10.606-3.721-15.586-1.128-5.01 2.563-8.145 7.705-8.145 13.33v75.396c-150.204 7.822-269.999 132.495-269.999 284.604v60c0 7.485 5.508 13.813 12.92 14.854 7.233 1.055 14.424-3.428 16.494-10.723l2.314-8.101c30.762-107.636 127.471-184.218 238.272-190.605v74.575c0 5.625 3.135 10.767 8.145 13.33 4.98 2.593 10.986 2.139 15.586-1.128l212-150c3.926-2.813 6.27-7.354 6.27-12.202s-2.345-9.39-6.271-12.202z" fill="url(#SVGID_1_)"/></g></g></g></svg>';

  const colorGradien = {
    face: '<svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">'+
              '<linearGradient id="grad-face" x2="1" y2="1">'+
                '<stop offset="0%" stop-color="#F5F5F5" />'+
                '<stop offset="50%" stop-color="#224488" />'+
                '<stop offset="100%" stop-color="#112266" />'+
              '</linearGradient>'+
            '</svg>',
    inst: '<svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">'+
              '<linearGradient id="grad-inst" x2="1" y2="1">'+
                '<stop offset="0%" stop-color="#5756CB" />'+
                '<stop offset="60%" stop-color="#FE3DA0" />'+
                '<stop offset="100%" stop-color="#FDEC57" />'+
              '</linearGradient>'+
            '</svg>',
    mail: '<svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">'+
              '<linearGradient id="grad-mail" x2="1" y2="1">'+
              '<stop offset="0%" stop-color="#F5F5F5" />'+
              '<stop offset="50%" stop-color="#D30300" />'+
                '<stop offset="100%" stop-color="#D20201" />'+
              '</linearGradient>'+
            '</svg>',
    }

    // detect mobile
    var mobileWidth;
    // checkMobileWidth()

    const CheckMobile = new Promise(function(){
            let widthWindow = document.body.clientWidth;
            let heightWindow = window.innerHeight;
            let orientationLandscape;
            widthWindow > heightWindow ? orientationLandscape = true : orientationLandscape = false;
            if (widthWindow <= 1023) {
                return mobileWidth = true;
            } else if ((widthWindow == 1024) && !orientationLandscape) {
                return mobileWidth = true;
            } else if (heightWindow >= 501 && orientationLandscape) {
                return mobileWidth = false;
            } else if (heightWindow < 500 && orientationLandscape) {
                return mobileWidth = true;
            } else {
                return mobileWidth = false;
            }
        })
    // end detect
// mobile menu
  btnMobMenu.on('click', function(e) {
    e.preventDefault();
    if(header.hasClass('mob-active')){
      header.removeClass('mob-active')
      $('.mob-menu').remove()
      $('body').css('overflow','')
    }else{
      header.addClass('mob-active')
      $('body').append('<div class="mob-menu"></div>').css('overflow','hidden');
      $('.mob-menu').append($('.header-nav').clone());
      $('html, body').animate({scrollTop:0}, 300);

      $('.mob-menu .primary-menu a').on('click', function(e) {
        e.preventDefault();
        header.removeClass('mob-active')
        $('.mob-menu').remove()
        $('body').css('overflow','')
        let anchorBlock = $('div[data-anchor='+$(this).attr('data-anchor')+']');
        $('html, body').animate({
          scrollTop: anchorBlock.offset().top - fixedHeader
        }, 1000);
      });
    }
  });
  
// end mobile

// if Mozila
  if(/firefox/.test(navigator.userAgent.toLowerCase())){
    header.css('background','radial-gradient(108.54% 107.43% at 0 0,rgba(255,255,255,.8) 0,rgba(255,255,255,1) 100%)')
  }
// add gradient
    $.each(colorGradien,function(key,val){
      $('body').append(val)
    })
// end gradient

// anchor
  let btnAnchor = $('.primary-menu li a'),
      fixedHeader = $('#header-js').innerHeight();

  $('.primary-menu li a,.footer-nav li a').on('click', function(e){
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
          if($(window).scrollTop() + +$(window).height() >= $(document).height()){
            feedbackBlock.addClass('active');
          }else{
            feedbackBlock.removeClass('active');
          }
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
  btnQuestion.on('click', function(e) {
    e.preventDefault();
    $(btnQuestion).removeClass('active')
    $(this).addClass('active')
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

let sliderReview = new Swiper('.reviews-container', {
  direction: 'vertical',
  spaceBetween: 30,
  mousewheelControl: true,
  slidesPerView: 1,
  effect: 'coverflow',
  loop: true,
  navigation: {
    nextEl: '.reviews-next',
    prevEl: '.reviews-prev',
  },
  coverflowEffect: {
    rotate: 0,
    slideShadows: false,
  }
});

sliderReview.on('slideChange', function () {
  var index = this.activeIndex;

  // $('.halfbox').css({background: 'var('+colors[index % colors.length]+')'});

  $('.reviews-item').removeClass('active').eq(this.activeIndex).addClass('active')
  });


CheckMobile.then(new Promise(function() {
  if (mobileWidth) {
    $('.flip-card-front').click(function(){
      $('.back-card').remove()
      $(this).parent().find('.flip-card-back').append('<span class="back-card">'+ iconForwrard +'</span>');
      $('.back-card').click(function(){
        $(this).parent().parent().find('.flip-card-front').click()
        $(this).remove()
      })
    })
    const swiper2 = new Swiper(".cont-price", {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      initialSlide: 1,
      // effect: 'flip',
      // grabCursor: true,
      centeredSlides: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      breakpoints: {
        480: {
          centeredSlides: false,
          loop: false,
          autoplay: false,
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });
    let gallerySlider = new Swiper(".gallery-slider", {
      effect: "flip",
      loop: true,
      grabCursor: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    });

    let btnSlide = $(".product-cat__btn"),
      sliderParam = {
        slidesPerView: 1.3,
        spaceBetween: 40,
      };
      
      const swiper1 = new Swiper('#slider-music',sliderParam)
    btnSlide.click(function (e) {
      if($(this).parent().innerWidth()/2 < $(this).parent().innerWidth()-$(this).position().left){
        $('.product-cat').stop().animate({
          scrollLeft: '+='
          +(($(this).position().left - $(this).parent().innerWidth())/2)
        },800)
      }else{
        $('.product-cat').stop().animate({
          scrollLeft: '+='
          +($(this).position().left - $(this).parent().position().left)
        },800)
      }
      btnSlide.removeClass("active");
      $(this).addClass("active");
      $(".product-slider__wrapper.active").slideUp(150);
      $("#slider-" + $(this).attr("data-cat"))
        .addClass("active")
        .slideDown(150);
      const swiper2 = new Swiper(
        "#slider-" + $(this).attr("data-cat"),
        sliderParam
      );
    });
  }else{
    let btnSlide = $(".product-cat__btn");
    btnSlide.click(function (e) {
      btnSlide.removeClass("active");
      $(this).addClass("active");
      $(".product-slider__wrapper.active").slideUp(150);
      $("#slider-" + $(this).attr("data-cat"))
        .addClass("active")
        .slideDown(150);
    });
  }
}))
// end slider
});