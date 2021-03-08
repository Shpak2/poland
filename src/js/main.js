'use strict'

$( document ).ready(function() {

  setTimeout(()=>{$('.mask-preloader').fadeOut()},500)

  let btnToTop = $('#scroll'),
      header = $('#header-js'),
      feedbackBlock = $('#feedback'),
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
  // let btnAnchor = $('.primary-menu li a');
  let fixedHeader = $('#header-js').innerHeight();

  // $('.primary-menu li a,.footer-nav li a').on('click', function(e){
  //   e.preventDefault();
  //   let anchorBlock = $('div[data-anchor='+$(this).attr('data-anchor')+']');
  //   $('html, body').animate({
  //     scrollTop: anchorBlock.offset().top - fixedHeader
  //   }, 1000);
  // })

  $('a[href^="#"]').bind("click", function(e){
    var anchor = $(this);
    $('html, body').stop().animate({
    scrollTop: $(anchor.attr('href')).offset().top - fixedHeader
    }, 1000);
    e.preventDefault();
    });

  // $('li a[href^="#"]').click(function(){
  //   console.log('hjh')
  //   var el = $(this).attr('href');
  //   $('body').animate({
  //     scrollTop: $(el).offset().top}, 2000);
  //     return false;
  // });
// end anchor

//scroll to bottom & function scroll to top
  $(window).scroll(function() {
    if($(window).scrollTop()  > 300) {
      header.addClass('sticky');
      btnToTop.fadeIn(100);
      if($('#shares').length!== 0){
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
      }}
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
    setTimeout(() => $('.mainCall-wrapper').addClass('animated'), 1000);
// end animation

// slider & product container

let sliderReview = new Swiper('.reviews-container', {
  direction: 'horizontal',
  spaceBetween: 30,
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
  },
  // autoplay: {
  //   delay: 5000,
  // },
  breakpoints: {
    480: {
      direction: 'vertical',
      slidesPerView: 1,
      spaceBetween: 30,
    },
  },
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
        breakpoints: {
          480: {
            slidesPerView: 2.5,
          },
        },
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

// popup
    function checkUpload(block){
      if(block.find('.wapf-field-label span').text() == 'Okładka'){
        return 'upload-check';
      }
    }

const searchSelect = new Promise(function(){
  $('.input-select').each(function(){
    
    var template =  '<div class="custom-select '+checkUpload($(this))+'" data-id='+$(this).attr("for")+'>';
        template += '<span class="custom-select-trigger">' + $(this).find('.wapf-field-label span').html() + '</span>';
        template += '<div class="custom-options">';
        $(this).find("option").each(function() {
          if(!$(this).attr("value") == ''){
            template += '<span class="custom-option" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
          }
        });
        template += '</div></div>';
        $(this).wrap('<div class="custom-select-wrapper"></div>');
        $(this).hide();
        $(this).after(template);
  });

      $('.custom-select-trigger').on('click', function(e){
          let dataDiv = $(this).parent().attr('data-id');
          let parentContainer = $(this).parent();
          if(!$(parentContainer).hasClass('opened')){
            $(parentContainer).addClass('opened')
            $(parentContainer).find('.custom-options')
            $(document).mouseup(function (e){ 
	            	let div = $(parentContainer);
	            	if (!div.is(e.target)
	            	    && div.has(e.target).length === 0) {
                    $(parentContainer).removeClass('opened')
	            	}
	            });
          }else{
            $(parentContainer).removeClass('opened')
          }
          
          $(parentContainer).find('.custom-option').on('click',function(){
            let dataSelect = $(this).attr('data-value');
            $(parentContainer).removeClass('opened')
            $(this).closest('.custom-select').find('.custom-select-trigger').html($(this).text())
              $('.input-select').attr('for',dataDiv).find('option').each(function(){
                  if($(this).attr('value')===dataSelect){
                    $('option[value='+dataSelect+']').prop('selected', true);
                    $('option[value='+dataSelect+']').change()
                  }
                })
          })
             
        })

       
});

$('.input-upload').each(function(){
  $(this).find('.dzone .dz-message').html('Dodaj zdjęcie')
})
$('.upload-check .custom-option').on('click', function(){
  if($(this).text() == 'Własna' || $(this).text() == 'Własna '){
    $('.input-upload .wapf-field-input').show();
  }else{$('.input-upload .wapf-field-input').hide()}
})

sizeSelect($('#pa_size'))

function checkSizeSelect(objDiv){
  if($(objDiv).attr('value') == 'classic'){
    return '<span class="size-info">300 mm x 210 mm</span><i class="size-price">79 zł</i>'
  }else if($(objDiv).attr('value') == 'maxi'){
    return '<span class="size-info">420 mm x 300 mm</span><i class="size-price">89 zł</i>'
  }else if($(objDiv).attr('value') == 'mini'){
    return '<span class="size-info">210 mm x 150 mm</span><i class="size-price">69 zł</i>'
  }
}

function sizeSelect(divSelect){
  let blockAppend = $('.js-sizes');
  // $('.js-sizes').html('')
  blockAppend.html('<div class="custom-select change-size"><span class="custom-select-trigger">Rozmiar</span>\
                    <div class="custom-options"></div></div>')
  $(divSelect).find('option').each(function(){
    if($(this).attr("value") !== ''){
      $('.change-size .custom-options').append('<span class="custom-option" data-value="' + $(this).attr("value") + '"><span class="size-name">' + $(this).text()+ '</span>' + checkSizeSelect($(this)) + '</span>')
    }
    // console.log(this)
  })
  $('.custom-select.change-size .custom-select-trigger').on('click', function(){
    let parentContainer = $(this).parent();
          if(!$(parentContainer).hasClass('opened')){
            $(parentContainer).addClass('opened')
            $(parentContainer).find('.custom-options')
            $(document).mouseup(function (e){
	            	let div = $(parentContainer);
	            	if (!div.is(e.target)
	            	    && div.has(e.target).length === 0) {
                    $(parentContainer).removeClass('opened')
	            	}
	            });
          }else{
            $(parentContainer).removeClass('opened')
          }
  })

  $('.custom-select.change-size .custom-option').on('click',function(){
    let parentB = $(this).closest('.custom-select.change-size');
    let dataSelect = $(this).attr('data-value');
    parentB.removeClass('opened')
    parentB.find('.custom-select-trigger').html($(this).find('.size-name').text())
    $('option[value='+dataSelect+']').prop('selected', true);
    $('option[value='+dataSelect+']').change()
  })
}

  $('.popupWrapper .input-radio .wapf-checkable').on('click',function(e){
    $(this).parent('.wapf-radios').find('.wapf-checkable').removeClass('wapf-checked')
    $(this).addClass('wapf-checked')
  })

  $('.popupWrapper .wapf-field-description').each(function(){
    $(this).parent().addClass('has-description')
    $(this).parent().find('.wapf-field-label').append('<div class="info-btn"><i>?</i><span>'+ $(this).text() +'</span></div>')
  })

    // searchSelect.then(function(e){
    //   $('.custom-select').on('click', function(e){
    //       console.log($(this).attr('data-id'))
    //     })
    // })
});