"use strict";$(document).ready(function(){let t=$("#scroll"),e=$("#header-js"),s=$(".primary-menu li a"),i=$("#header-js").innerHeight();s.on("click",function(t){t.preventDefault();let e=$("div[data-anchor="+$(this).attr("data-anchor")+"]");$("html, body").animate({scrollTop:e.offset().top-i},1e3)}),$(window).scroll(function(){300<$(window).scrollTop()?(e.addClass("sticky"),t.fadeIn(100),$(window).scrollTop()>$("#shares").offset().top-$(window).innerHeight()&&($("#shares").addClass("active"),$(window).scrollTop()>$("#spot").offset().top-$(window).innerHeight()&&$("#spot").addClass("active"))):(e.removeClass("sticky"),t.fadeOut(100))}),t.on("click",function(t){t.preventDefault(),$("html, body").animate({scrollTop:0},700)}),$(".img-svg").each(function(){var e=$(this),s=e.attr("class"),t=e.attr("src");$.get(t,function(t){t=$(t).find("svg");!(t=(t=void 0!==s?t.attr("class",s+" replaced-svg"):t).removeAttr("xmlns:a")).attr("viewBox")&&t.attr("height")&&t.attr("width")&&t.attr("viewBox","0 0 "+t.attr("height")+" "+t.attr("width")),e.replaceWith(t)},"xml")}),function(){let e=$("#img-add"),s=$(e).find("img");for(let t=0;t<3;t++)e.append(s.clone())}(),setTimeout(()=>$(".banner-wrapper").addClass("animated"),1e3);let o=$(".product-cat__btn"),a={slidesPerView:4,spaceBetween:30};o.click(function(t){o.removeClass("active"),$(this).addClass("active"),$(".product-slider__wrapper.active").slideUp(150),$("#slider-"+$(this).attr("data-cat")).addClass("active").slideDown(150);new Swiper("#slider-"+$(this).attr("data-cat"),a)});new Swiper("#slider-music",a)}),$(document).ready(function(){var t=$(".product-create"),e=$(".popupWrapper .modal__title_button"),s=$(".popupWrapper");$(t).on("click",()=>{$(s).css("display","flex"),$("body").css("overflow","hidden")}),$(e).on("click",()=>{$(s).hide(),$("body").css("overflow","initial")}),$(".custom-select").each(function(){var t=$(this).attr("class"),e=($(this).attr("id"),$(this).attr("name"),'<div class="'+t+'">');e+='<span class="custom-select-trigger">'+$(this).attr("placeholder")+"</span>",e+='<div class="custom-options">',$(this).find("option").each(function(){e+='<span class="custom-option '+$(this).attr("class")+'" data-value="'+$(this).attr("value")+'">'+$(this).html()+"</span>"}),e+="</div></div>",$(this).wrap('<div class="custom-select-wrapper"></div>'),$(this).hide(),$(this).after(e)}),$(".custom-option:first-of-type").hover(function(){$(this).parents(".custom-options").addClass("option-hover")},function(){$(this).parents(".custom-options").removeClass("option-hover")}),$(".custom-select-trigger").on("click",function(){$("html").one("click",function(){$(".custom-select").removeClass("opened")}),$(this).parents(".custom-select").toggleClass("opened"),event.stopPropagation()}),$(".custom-option").on("click",function(){$(this).parents(".custom-select-wrapper").find("select").val($(this).data("value")),$(this).parents(".custom-options").find(".custom-option").removeClass("selection"),$(this).addClass("selection"),$(this).parents(".custom-select").removeClass("opened"),$(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text())}),$("label").off("click").on("click",function(t){$(this).closest(".checkboxWrapp__choice").find("label").removeClass("active"),$(this).addClass("active"),$(this).closest(".checkboxWrapp__choice").find("input").prop("checked",!1),$(this).find("input").prop("checked",!0),setTimeout(function(){t.stopPropagation(),t.preventDefault()},50)})});