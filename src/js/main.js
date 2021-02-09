'use strict'

$( document ).ready(function() {
  let header = $('#header-js');

  $(window).scroll(function() {
    if($(window).scrollTop()  > 300) {
      header.addClass('sticky')
    }else{
      header.removeClass('sticky')
    }
});
});