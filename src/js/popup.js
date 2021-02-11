$( document ).ready(function() {

    let openPopup = $('.openPopup');
    let closePopup = $('.popupWrapper .modal__title_button');
    let popUp = $('.popupWrapper');
    $(openPopup).on('click', ()=>{
        $(popUp).css('display', 'flex');
        $('body').css('overflow', 'hidden');
    })
    $(closePopup).on('click', ()=>{
        $(popUp).hide();
        $('body').css('overflow', 'initial');
    })
})