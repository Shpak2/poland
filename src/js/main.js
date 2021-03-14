'use strict'

jQuery( document ).ready(function($) {

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

    // popup.js
    let openPopup = $('.js-product-all');
    // let closePopup = $('.popupWrapper .modal__title_button');
    // let popUp = $('.popupWrapper');
    function checkClick (){
      $('#modal-product-all .modal-product__item').mouseenter(function(){
        $('#modal-product-all .modal-product__item').removeClass('active')
        $(this).addClass('active')
        $('#modal-product-all .modal__body_left .imageWrapper').html('<img src="'+$(this).find('.modal-product__img img').attr('src')+'">')
        $('#modal-product-all .modal__body_left .imageWrapper img').fadeIn()
        $('#modal-product-all .modal__body_left .song__text_title').html($(this).find('.modal-product__title').text())
        $('#modal-product-all .modal__body_left .song__text_description').fadeIn()
        $('#modal-product-all .modal__body_left .song__text_title').fadeIn()
        
      })
      $('#modal-product-all .modal-product__action').click(function(){
        let attrModal = $(this).attr('data-modal');
        $('.quick-view-button').each(function(){
          $('#modal-product-all').fadeOut()
          if (attrModal == $(this).attr('data-product-id')){
            $(this).click()
          }
        })
      })
    }
    $(openPopup).each(function(){
      $(this).click(function(e){
        e.preventDefault();
        $('.mask-preloader').fadeIn();
        $('body').css('overflow','hidden')
        $('#modal-product-all').css('display','flex')
        $('#modal-product-all .chooseSong').fadeIn()
        $('#modal-product-all .modal__body_right').html('');
        $('.product-slider__wrapper').each(function(){
          if($(this).attr('data-cat') !== 'accessories'){
            $(this).find('.product-slider__item').each(function(){
              $('#modal-product-all .modal__body_right').append('<div class="modal-product__item"><div class="modal-product__img">\
              <img src="'+$(this).find('.flip-card-front img').attr('src')+'" alt="'+$(this).find('.es_product-title').text()+'"></div>\
              <div class="modal-product__body"><div class="modal-product__info"><div class="modal-product__title">'+$(this).find('.es_product-title').text()+'</div>\
              <div class="modal-product__descript">'+$(this).find('.card-info__text').text()+'</div></div>\
              <div class="modal-product__action" data-modal="'+$(this).find('.quick-view-button').attr('data-product-id')+'"></div>\
              </div></div>');
            })
          }
        })
        checkClick();
        $('#modal-product-all .modal__title_button').click(function(){
          $('#modal-product-all .chooseSong').fadeOut()
          $('#modal-product-all').css('display','none')
          $('body').css('overflow','')
        })
        setTimeout(()=>{$('.mask-preloader').fadeOut()},500)
        
      })
    })
    // $(closePopup).on('click', ()=>{
    //     $(popUp).hide();
    //     $('body').css('overflow', '');
    // })

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
      $('body').addClass('stickyBody');
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
      $('body').removeClass('stickyBody');
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
//     function checkUpload(block){
//       if(block.find('.wapf-field-label span').text() == 'Okładka'){
//         return 'upload-check';
//       }else if (block.hasClass('js-pack-change')){
//         return 'js-pack-change'
//       }else{
//         return '';
//       }
//     }
    

// const searchSelect = new Promise(function(){
//   $('.input-select').each(function(){
    
//     var template =  '<div class="custom-select '+checkUpload($(this))+'" data-id='+$(this).attr("for")+'>';
//         template += '<span class="custom-select-trigger">' + $(this).find('.wapf-field-label span').html() + '</span>';
//         template += '<div class="custom-options">';
//         $(this).find("option").each(function() {
//           if(!$(this).attr("value") == ''){
//             template += '<span class="custom-option" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
//           }
//         });
//         template += '</div></div>';
//         $(this).wrap('<div class="custom-select-wrapper"></div>');
//         $(this).hide();
//         $(this).after(template);
//   });

//       $('.custom-select-trigger').on('click', function(e){
//           let dataDiv = $(this).parent().attr('data-id');
//           let parentContainer = $(this).parent();
//           if(!$(parentContainer).hasClass('opened')){
//             $(parentContainer).addClass('opened')
//             $(parentContainer).find('.custom-options')
//             $(document).mouseup(function (e){ 
// 	            	let div = $(parentContainer);
// 	            	if (!div.is(e.target)
// 	            	    && div.has(e.target).length === 0) {
//                     $(parentContainer).removeClass('opened')
// 	            	}
// 	            });
//           }else{
//             $(parentContainer).removeClass('opened')
//           }
          
//           $(parentContainer).find('.custom-option').on('click',function(){
//             let dataSelect = $(this).attr('data-value');
//             $(parentContainer).removeClass('opened')
//             $(this).closest('.custom-select').find('.custom-select-trigger').html($(this).text())
//               $('.input-select').attr('for',dataDiv).find('option').each(function(){
//                   if($(this).attr('value')===dataSelect){
//                     $('option[value='+dataSelect+']').prop('selected', true);
//                     $('option[value='+dataSelect+']').change()
//                   }
//                 })
//           })
             
//         })

       
// });

// $('.input-upload').each(function(){
//   $(this).find('.dzone .dz-message').html('Dodaj zdjęcie')
// })
// $('.upload-check .custom-option').on('click', function(){
//   if($(this).text() == 'Własna' || $(this).text() == 'Własna '){
//     $('.input-upload .wapf-field-input').show();
//   }else{$('.input-upload .wapf-field-input').hide()}
// })

// sizeSelect($('#pa_size'))

// function checkSizeSelect(objDiv){
//   if($(objDiv).attr('value') == 'classic'){
//     return '<span class="size-info">300 mm x 210 mm</span><i class="size-price">79 zł</i>'
//   }else if($(objDiv).attr('value') == 'maxi'){
//     return '<span class="size-info">420 mm x 300 mm</span><i class="size-price">89 zł</i>'
//   }else if($(objDiv).attr('value') == 'mini'){
//     return '<span class="size-info">210 mm x 150 mm</span><i class="size-price">69 zł</i>'
//   }
// }

// function sizeSelect(divSelect){
//   let blockAppend = $('.js-sizes');
//   // $('.js-sizes').html('')
//   blockAppend.html('<div class="custom-select change-size"><span class="custom-select-trigger">Rozmiar</span>\
//                     <div class="custom-options"></div></div>')
//   $(divSelect).find('option').each(function(){
//     if($(this).attr("value") !== ''){
//       $('.change-size .custom-options').append('<span class="custom-option" data-value="' + $(this).attr("value") + '"><span class="size-name">' + $(this).text()+ '</span>' + checkSizeSelect($(this)) + '</span>')
//     }
//     // console.log(this)
//   })
//   $('.custom-select.change-size .custom-select-trigger').on('click', function(){
//     let parentContainer = $(this).parent();
//           if(!$(parentContainer).hasClass('opened')){
//             $(parentContainer).addClass('opened')
//             $(parentContainer).find('.custom-options')
//             $(document).mouseup(function (e){
// 	            	let div = $(parentContainer);
// 	            	if (!div.is(e.target)
// 	            	    && div.has(e.target).length === 0) {
//                     $(parentContainer).removeClass('opened')
// 	            	}
// 	            });
//           }else{
//             $(parentContainer).removeClass('opened')
//           }
//   })

//   $('.custom-select.change-size .custom-option').on('click',function(){
//     let parentB = $(this).closest('.custom-select.change-size');
//     let dataSelect = $(this).attr('data-value');
//     parentB.removeClass('opened')
//     parentB.find('.custom-select-trigger').html($(this).find('.size-name').text())
//     $('option[value='+dataSelect+']').prop('selected', true);
//     $('option[value='+dataSelect+']').change()
//     getFinalCheck()
//   })
// }

//   $('.popupWrapper .input-radio .wapf-checkable').on('click',function(e){
//     $(this).parent('.wapf-radios').find('.wapf-checkable').removeClass('wapf-checked')
//     $(this).addClass('wapf-checked')
//     getFinalCheck()
//   })

//   $('.popupWrapper .wapf-field-description').each(function(){
//     $(this).parent().addClass('has-description')
//     $(this).parent().find('.wapf-field-label').append('<div class="info-btn"><i>?</i><span>'+ $(this).text() +'</span></div>')
//   })

//   $('.js-pack-change .custom-option').on('click', function(){
//     if($(this).text() == 'Sztaluga' || $(this).text() == 'Sztaluga '){
//       $('.pack-wood').removeClass('active')
//       $('.pack-easel').addClass('active')
//     }else if($(this).text() == 'Drewniana' || $(this).text() == 'Drewniana '){
//       $('.pack-easel').removeClass('active')
//       $('.pack-wood').addClass('active')
//     }
//   })

//   $('.js-custom-btn .popup-btn__prev').prepend('<svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.194777 4.45668C0.194977 4.45687 0.195143 4.4571 0.195376 4.45729L3.66523 7.81213C3.92518 8.06345 4.34563 8.06252 4.60438 7.80994C4.8631 7.55739 4.8621 7.1489 4.60216 6.89755L2.27249 4.64516L16.3359 4.64516C16.7027 4.64516 17 4.35632 17 4C17 3.64368 16.7027 3.35484 16.3359 3.35484L2.27253 3.35484L4.60213 1.10245C4.86207 0.851095 4.86307 0.442611 4.60435 0.190062C4.3456 -0.0625507 3.92511 -0.0634214 3.6652 0.187869L0.195341 3.54271C0.195143 3.5429 0.194977 3.54313 0.194744 3.54332C-0.0653359 3.79551 -0.0645062 4.20532 0.194777 4.45668Z" fill="#0D1018"/></svg>')
//   $('.js-custom-btn .popup-btn__next').append('<svg width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.3052 3.54332C17.305 3.54313 17.3049 3.5429 17.3046 3.54271L13.8348 0.187869C13.5748 -0.0634537 13.1544 -0.0625185 12.8956 0.190062C12.6369 0.442611 12.6379 0.851095 12.8978 1.10245L15.2275 3.35484L1.16406 3.35484C0.797301 3.35484 0.5 3.64368 0.5 4C0.5 4.35632 0.797301 4.64516 1.16406 4.64516L15.2275 4.64516L12.8979 6.89755C12.6379 7.1489 12.6369 7.55739 12.8957 7.80994C13.1544 8.06255 13.5749 8.06342 13.8348 7.81213L17.3047 4.45729C17.3049 4.4571 17.305 4.45687 17.3053 4.45668C17.5653 4.20448 17.5645 3.79468 17.3052 3.54332Z" fill="#F4F5F4"/></svg>')
    
// function getFinalCheck(){
//   let sizePrice = +($('.woocommerce-variation-price bdi').text().split(',')[0]);
// 						var prezentPrice = [];
// 						$('.has-pricing').each(function(){
// 							if($(this).hasClass('wapf-checked')){
// 								prezentPrice.push($('.has-pricing .wapf-input-label input').attr('data-wapf-price'))
// 							}else{
// 								prezentPrice.push(0);
// 							}
// 						})
// 						$('.js-custom-price .price-custom__final').html((sizePrice+(+prezentPrice[0])+(+prezentPrice[1]))+ ',00&nbsp;<span class="price-custom__symbol">zł</span>')
// }
//         $('.popupWrapper').append('<div class="final-wrap"><div class="modal__title"><p class="modal__title_text">Gratulacje! Właśnie utworzyłeś/łaś Swoje Szkiełko</p></div><div class="final-body"><div class="custom-final"></div>\
//         <div class="final-btn"><span class="js-gratis">Utwórz kolejne i otrzymaj dostawę gratis</span><div class="final-btn-wrap"><span class="js-prev-final"><svg width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg">\
//         <path d="M0.694777 4.45668C0.694977 4.45687 0.695143 4.4571 0.695376 4.45729L4.16523 7.81213C4.42518 8.06345 4.84563 8.06252 5.10438 7.80994C5.3631 7.55739 5.3621 7.1489 5.10216 6.89755L2.77249 4.64516L16.8359 4.64516C17.2027 4.64516 17.5 4.35632 17.5 4C17.5 3.64368 17.2027 3.35484 16.8359 3.35484L2.77253 3.35484L5.10213 1.10245C5.36207 0.851095 5.36307 0.442611 5.10435 0.190062C4.8456 -0.0625507 4.42511 -0.0634214 4.1652 0.187869L0.695341 3.54271C0.695143 3.5429 0.694977 3.54313 0.694744 3.54332C0.434664 3.79551 0.435494 4.20532 0.694777 4.45668Z" fill="#0D1018"/></svg><i>Zmień</i></span><span class="js-final-add"><i>Sfinalizuj zakup</i>\
//         <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.4918 15.3318L13.4625 4.4891C13.4345 4.193 13.1721 3.96619 12.8578 3.96619H10.7353V3.06065C10.7353 1.37301 9.28382 0 7.49976 0C5.71578 0 4.2645 1.37301 4.2645 3.06065V3.96619H2.14045C1.82621 3.96619 1.56385 4.193 1.53576 4.4891L0.502428 15.3744C0.487209 15.5351 0.544036 15.6942 0.659066 15.8132C0.774096 15.9322 0.936725 16 1.10712 16H13.8913C13.8917 16 13.8924 16 13.8929 16C14.2283 16 14.5 15.7429 14.5 15.4257C14.4999 15.3938 14.4972 15.3623 14.4918 15.3318ZM5.47876 3.06065C5.47876 2.00634 6.3854 1.14858 7.49984 1.14858C8.61436 1.14858 9.52108 2.00634 9.52108 3.06065V3.96619H5.47876V3.06065ZM1.77124 14.8515L2.69553 5.11477H4.2645V6.14175C4.2645 6.45891 4.53625 6.71604 4.87163 6.71604C5.20701 6.71604 5.47876 6.45891 5.47876 6.14175V5.11477H9.52108V6.14175C9.52108 6.45891 9.79283 6.71604 10.1282 6.71604C10.4636 6.71604 10.7353 6.45891 10.7353 6.14175V5.11477H12.3029L13.2271 14.8515H1.77124Z" fill="#F4F5F4"/></svg></span></div></div></div></div>')
// 					$('.popup-btn__next').on('click',function(e){
//             $('.mask-preloader').fadeIn()
// 						$('.custom-final').html('<ul class="list-final"></ul>')
// 						$('.wapf-field-container').each(function(){
// 							if($(this).hasClass('input-text')){
// 								if(!$(this).find('.wapf-field-input input').val() == ''){
// 									$('.list-final').append('<li class="final-item"><span class="final-title">'+$(this).find('.wapf-field-label label').text()+'</span><span class="final-value">'+$(this).find('.wapf-field-input input').val()+'</span></li>')
// 								}
// 							}else if($(this).hasClass('input-select')){
// 								$('.list-final').append('<li class="final-item"><span class="final-title">'+$(this).find('.wapf-field-label label').text()+'</span><span class="final-value">'+$(this).parent().find('.custom-select-trigger').text()+'</span></li>')
// 							}else if($(this).hasClass('input-radio')){
// 								$('.list-final').append('<li class="final-item"><span class="final-title">'+$(this).find('.wapf-field-label label').text()+'</span><span class="final-value">'+$(this).find('.wapf-checkable.wapf-checked .wapf-label-text').text()+'</span></li>')
// 							}else if($(this).hasClass('input-subtitle')){
// 								if($(this).find('.wapf-field-label label span').text() == 'Uzupełnij:'){
// 									$('.list-final').append('<li class="final-item"><span class="final-title">Rozmiar</span><span class="final-value">'+$('.js-sizes .custom-select-trigger').text()+'</span></li>')
// 								}
// 							}else if($(this).hasClass('input-upload')){
// 								if(!$(this).find('.dz-filename').length == 0){
// 									$('.list-final').append('<li class="final-item"><span class="final-title">'+$(this).find('.wapf-field-label label').text()+'</span><span class="final-value">'+$(this).find('.dz-filename').text()+'</span></li>')
// 								}
// 							}else if($(this).hasClass('input-textarea')){
//                 if(!$(this).find('.wapf-field-input textarea').val() == ''){
// 								$('.list-final').append('<li class="final-item"><span class="final-title">'+$(this).find('.wapf-field-label label').text()+'</span><span class="final-value">'+$(this).find('.wapf-field-input textarea').val()+'</span></li>')
// 							}}
// 							// $('.list-final').append('<li class="final-item"><span class="final-title">'+$(this).find('.wapf-field-label label').text()+'</span><span class="final-value"></span></li>')
// 						})

//             $('.final-wrap').fadeIn()
//             setTimeout(()=>{$('.mask-preloader').fadeOut()},300)
//             $('.js-prev-final').on('click',function(){
//               $('.final-wrap').fadeOut()
//             })
//             $('.js-final-add').on('click',function(){
//               $('.mask-preloader').fadeIn()
//               $('.popupWrapper button[type="submit"]').click()
//               // $('.final-wrap').fadeOut()
//             })
// 					})
					
});