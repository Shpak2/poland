$( document ).ready(function() {

    // ОТКРЫТЬ И ЗАКРЫТЬ ПОПАП
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
    // ОТКРЫТЬ И ЗАКРЫТЬ ПОПАП КОНЕЦ

    //ПЕРЕКЛЮЧЕНИЕ АКТИВНОГО ДИЗАЙНА В ПОПАПЕ

    let allDesignBtn = $('.designWrapper__item');
    $(allDesignBtn).on('click', (e)=>{
        $(allDesignBtn).removeClass('active');
        $(e.target).closest('.designWrapper__item').addClass('active');
    })

    //ПЕРЕКЛЮЧЕНИЕ АКТИВНОГО ДИЗАЙНА В ПОПАПЕ КОНЕЦ

})