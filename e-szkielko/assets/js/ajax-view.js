"use strict";
$(document).ready(function(){
    let popUp = $('.popupWrapper'),
        preload = $('.mask-preloader'),
        openPopup = $('.add-ajax');

    openPopup.on('click',function(){
        $('.popupWrapper .modal__body').html('')
        preload.fadeIn();
        let productID = $(this).attr('data-ajax');
        let data = {
            id: productID,
            action: 'ajax_view_product',
            nonce: ajax_view.nonce
        }
        $.ajax({
            url: ajax_view.url,
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function (xhr){
                // $('.popupWrapper .modal__body_right').text(productID)
            },
            success: function (data){
                $('.popupWrapper .modal__body').html(data.product);
            }
        }).done(
            setTimeout(()=>{preload.fadeOut()},300)
        )

        popUp.css('display', 'flex');
        $('body').css('overflow', 'hidden');
    });
});