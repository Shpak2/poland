$( document ).ready(function() {

    // ОТКРЫТЬ И ЗАКРЫТЬ ПОПАП
    let openPopup = $('.product-create');
    let closePopup = $('.popupWrapper .modal__title_button');
    let popUp = $('.popupWrapper');
    $(openPopup).on('click', ()=>{
        $(popUp).css('display', 'flex');
        $('body').css('overflow', 'hidden');
    })
    $(closePopup).on('click', ()=>{
        $(popUp).hide();
        $('body').css('overflow', '');
    })
    // ОТКРЫТЬ И ЗАКРЫТЬ ПОПАП КОНЕЦ

    //ПЕРЕКЛЮЧЕНИЕ АКТИВНОГО ДИЗАЙНА В ПОПАПЕ

    // let allDesignBtn = $('.designWrapper__item');
    // $(allDesignBtn).on('click', (e)=>{
    //     $(allDesignBtn).removeClass('active');
    //     $(e.target).closest('.designWrapper__item').addClass('active');
    // })

    //ПЕРЕКЛЮЧЕНИЕ АКТИВНОГО ДИЗАЙНА В ПОПАПЕ КОНЕЦ

    //КАСТОМНЫЙ СЕЛЕКТ НАЧАЛО
    // $(".custom-select").each(function() {
    //     var classes = $(this).attr("class"),
    //         id      = $(this).attr("id"),
    //         name    = $(this).attr("name");
    //     var template =  '<div class="' + classes + '">';
    //     template += '<span class="custom-select-trigger">' + $(this).attr("data-customPlaceholder") + '</span>';
    //     template += '<div class="custom-options">';
    //     $(this).find("option").each(function() {
    //         template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
    //     });
    //     template += '</div></div>';

    //     $(this).wrap('<div class="custom-select-wrapper"></div>');
    //     $(this).hide();
    //     $(this).after(template);
    // });
    // $(".custom-option:first-of-type").hover(function() {
    //     $(this).parents(".custom-options").addClass("option-hover");
    // }, function() {
    //     $(this).parents(".custom-options").removeClass("option-hover");
    // });
    // $(".custom-select-trigger").on("click", function() {
    //     $('html').one('click',function() {
    //         $(".custom-select").removeClass("opened");
    //     });
    //     $(this).parents(".custom-select").toggleClass("opened");
    //     event.stopPropagation();
    // });
    // $(".custom-option").on("click", function() {
    //     $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    //     $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    //     $(this).addClass("selection");
    //     $(this).parents(".custom-select").removeClass("opened");
    //     $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
    // });
    //КАСТОМНЫЙ СЕЛЕКТ КОНЕЦ

    //ЛЕЙБЛ ДОБАВЛЕНИЕ КЛАССА active НАЧАЛО
    // $('.popupWrapper label').off('click').on('click', function (e){
    //     $(this).closest('.checkboxWrapp__choice').find('label').removeClass('active');
    //     $(this).addClass('active');
    //     $(this).closest('.checkboxWrapp__choice').find('input').prop( "checked", false );
    //     $(this).find('input').prop( "checked", true );

    //     setTimeout(function (){
    //         e.stopPropagation();
    //         e.preventDefault();
    //     }, 50)
    // })
    //ЛЕЙБЛ ДОБАВЛЕНИЕ КЛАССА active НАЧАЛО

    //ТЕКСТ ПОДРОБНЕЕ НА ВОПРОСИКЕ НАЧАЛО
    // let questEls = $('.checkboxWrapp__text span');
    // $(questEls).hover(
    //     function() {
    //         $(this).closest('.checkboxWrapp__text').find('.checkboxWrapp__text_detail').addClass('hover');
    //     }, function() {
    //         $(this).closest('.checkboxWrapp__text').find('.checkboxWrapp__text_detail').removeClass('hover');
    //     }
    // );
    //ТЕКСТ ПОДРОБНЕЕ НА ВОПРОСИКЕ КОНЕЦ

    //ПОПАП МИНИМАЛЬНАЯ ЛОГИКА ПЕРЕХОДОВ НАЧАЛО
    // let popUpPrev = $('.popUpBtnPrev');
    // let popUpNext = $('.popUpBtnNext');
    // let stepData = $('[data-step]');
    // let popUpWrapper = $('.popupWrapper');


    // $(popUpNext).on('click', ()=>{
    //     let stepNumber = +$(stepData).attr('data-step');
    //     if (stepNumber < 2){
    //         $(stepData).attr('data-step', stepNumber+1)
    //     }else if(stepNumber == 2){
    //         $('body').addClass('openCart')
    //         $(popUpWrapper).hide()
    //     }
    // })
    // $(popUpPrev).on('click', ()=>{
    //     let stepNumber = +$(stepData).attr('data-step');
    //     if (stepNumber != 1){
    //         $(stepData).attr('data-step', stepNumber-1)
    //     }
    // })


    // let cartButtonPrev = $('.cartBtnPrev');
    // let cartButtonNext = $('.cartBtnNext');
    // let cartStepData = $('[data-cartstate]');

    // $(cartButtonNext).on('click', ()=>{
    //     let cartStepNumber = +$(cartStepData).attr('data-cartstate');
    //     if(cartStepNumber == 1){
    //         $('.shoppingCartWrapper__steps_step1').addClass('complite');
    //         $('.shoppingCartWrapper__steps_step2').addClass('active');
    //         $('.shoppingCartWrapper__steps_step1').removeClass('active');
    //         $(cartStepData).attr('data-cartstate', cartStepNumber+1)
    //     }else if(cartStepNumber == 2){
    //         $('.shoppingCartWrapper__steps_step2').addClass('complite');
    //         $('.shoppingCartWrapper__steps_step3').addClass('active');
    //         $('.shoppingCartWrapper__steps_step2').removeClass('active');
    //         $(cartStepData).attr('data-cartstate', cartStepNumber+1)
    //     }else if(cartStepNumber == 3){
    //         $('.shoppingCartWrapper__steps_step3').addClass('complite');
    //         $(cartStepData).attr('data-cartstate', cartStepNumber+1)
    //     }else if(cartStepNumber == 4){
    //         $(cartStepData).attr('data-cartstate', cartStepNumber+1)
    //     }
    // })
    // $(cartButtonPrev).on('click', ()=>{
    //     let cartStepNumber = +$(cartStepData).attr('data-cartstate');
    //     if(cartStepNumber == 3){
    //         $('.shoppingCartWrapper__steps_step3').removeClass('complite');
    //         $('.shoppingCartWrapper__steps_step3').removeClass('active');
    //         $('.shoppingCartWrapper__steps_step2').addClass('active');
    //         $(cartStepData).attr('data-cartstate', cartStepNumber-1)
    //     }else if(cartStepNumber == 2){
    //         $('.shoppingCartWrapper__steps_step2').removeClass('complite');
    //         $('.shoppingCartWrapper__steps_step2').removeClass('active');
    //         $('.shoppingCartWrapper__steps_step1').addClass('active');
    //         $(cartStepData).attr('data-cartstate', cartStepNumber-1)
    //     }else if(cartStepNumber == 4){
    //         $(cartStepData).attr('data-cartstate', cartStepNumber-1)
    //     }
    // })

    // let cartBtns = $('.cartButtons .cartButtons__btn');
    // let placeCartTitle = $('.shoppingCartWrapper__titleMobile p')
    // $(cartBtns).on('click', function (){
    //     setTimeout(function (){
    //         let currentText = $('.shoppingCartWrapper__steps_step.active > p').text();
    //         $(placeCartTitle).text(currentText)
    //     },500)
    // })

    //ПОПАП МИНИМАЛЬНАЯ ЛОГИКА ПЕРЕХОДОВ КОНЕЦ

})