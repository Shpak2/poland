<<<<<<< HEAD
"use strict";
$(document).ready(function($){
    var popUp = $('.popupWrapper'),
        preload = $('.mask-preloader'),
        openPopup = $('.add-ajax');

    // openPopup.on('click',function(){
    //     preload.fadeIn();
    //     let productLink = $(this).attr('data-ajax');
    //     let popup = $('.popupWrapper');
    //     $.get(productLink, function (results) {
    //         var data={
    //             "title": $(results).find('#ajax-data .song__text_title'),
    //             "img": $(results).find('#ajax-data .woocommerce-product-gallery__wrapper a').attr('href'),
    //             "customize": $(results).find('#ajax-data .customizeProduct'),
    //             "title2": $(results).find('#primary'),
    //         };
    //         // $('.products-heading').append(data.title)
    //        console.log(results)
    //         // console.log($(data).find('.song__text_title'))
    //         // console.log(results)
    //         // $(popup).find('.chooseSong').html(results)
    //         $(popup).find('.song__text_title').html(data.title)
    //         $(popup).find('.imageWrapper img').attr('src',data.img)
    //         $(popup).find('.modal__body_right').html(data.customize)
    //     }).done(function (){
    //         setTimeout(()=>{preload.fadeOut()},300)
    //
    //         popup.fadeIn();
    //     })
    // });





    // openPopup.on('click',function(){
    //     $('.popupWrapper .modal__body').html('')
    //     preload.fadeIn();
    //     let productID = $(this).attr('data-ajax');
    //     let data = {
    //         id: productID,
    //         action: 'ajax_view_product',
    //         nonce: ajax_view.nonce
    //     }
    //     $.ajax({
    //         url: ajax_view.url,
    //         data: data,
    //         type: 'POST',
    //         dataType: 'json',
    //         beforeSend: function (xhr){
    //             // $('.popupWrapper .modal__body_right').text(productID)
    //         },
    //         success: function (data){
    //             $('.popupWrapper .modal__body').html(data.product);
    //         }
    //     }).done(
    //         setTimeout(()=>{preload.fadeOut()},300)
    //     )
    //
    //     popUp.css('display', 'flex');
    //     $('body').css('overflow', 'hidden');
    // });
=======
"use strict";
$(document).ready(function($){
    var popUp = $('.popupWrapper'),
        preload = $('.mask-preloader'),
        openPopup = $('.add-ajax');

    // openPopup.on('click',function(){
    //     preload.fadeIn();
    //     let productLink = $(this).attr('data-ajax');
    //     let popup = $('.popupWrapper');
    //     $.get(productLink, function (results) {
    //         var data={
    //             "title": $(results).find('#ajax-data .song__text_title'),
    //             "img": $(results).find('#ajax-data .woocommerce-product-gallery__wrapper a').attr('href'),
    //             "customize": $(results).find('#ajax-data .customizeProduct'),
    //             "title2": $(results).find('#primary'),
    //         };
    //         // $('.products-heading').append(data.title)
    //        console.log(results)
    //         // console.log($(data).find('.song__text_title'))
    //         // console.log(results)
    //         // $(popup).find('.chooseSong').html(results)
    //         $(popup).find('.song__text_title').html(data.title)
    //         $(popup).find('.imageWrapper img').attr('src',data.img)
    //         $(popup).find('.modal__body_right').html(data.customize)
    //     }).done(function (){
    //         setTimeout(()=>{preload.fadeOut()},300)
    //
    //         popup.fadeIn();
    //     })
    // });





    // openPopup.on('click',function(){
    //     $('.popupWrapper .modal__body').html('')
    //     preload.fadeIn();
    //     let productID = $(this).attr('data-ajax');
    //     let data = {
    //         id: productID,
    //         action: 'ajax_view_product',
    //         nonce: ajax_view.nonce
    //     }
    //     $.ajax({
    //         url: ajax_view.url,
    //         data: data,
    //         type: 'POST',
    //         dataType: 'json',
    //         beforeSend: function (xhr){
    //             // $('.popupWrapper .modal__body_right').text(productID)
    //         },
    //         success: function (data){
    //             $('.popupWrapper .modal__body').html(data.product);
    //         }
    //     }).done(
    //         setTimeout(()=>{preload.fadeOut()},300)
    //     )
    //
    //     popUp.css('display', 'flex');
    //     $('body').css('overflow', 'hidden');
    // });
>>>>>>> 5751b6d0b82ca59d241d0ed20f5dcb57d75a2451
});