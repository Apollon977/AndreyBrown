"use strict"
$(document).ready(function(){
    new WOW().init();
    $("#inputTel").mask("+7(999) 999-9999");

/*let a = prompt("Какаой тип сайта Вы хотите?");
let b =prompt("Какой дизайн предпочитаете?");
let c = prompt("Будет ли адаптивность на мобильные устройства?");
console.log(a, b, c);*/

$(window).scroll(() => {
   let scrollDistance = $(window).scrollTop();
   
   $(".section").each((i, el) => {
       if($(ol).offset().top - $("nav").outerHeight() <= scrollDistance){
           $("menu a").each((i, el) => {
            if($(el).hasClass("active")){
                $(el).removeClass("active");
            }
           });

           $('nav li:eq('+ i +')').find('a').addClass('active');

       }
   });
});

$('a[href^="#"]').click(function(){
    let valHref = $(this).attr("href");
    $('html, body').animate({scrollTop: $(valHref).offset().top - 100 + "px"});
})




function calc() {
    
    const listfirst = document.getElementById("listfirst");
    const listtwo = document.getElementById("listtwo");
    const listthree = document.getElementById("listthree");
    const result = document.getElementById("result");
    let LeaveАRequest = document.getElementById("application");

    let price = 0;
    price += parseInt(listfirst.options[listfirst.selectedIndex].value);
    price += parseInt(listtwo.options[listtwo.selectedIndex].value);
    price += parseInt(listthree.options[listthree.selectedIndex].value);
    result.innerHTML = price;
    if(result < 0){
        return false;
    } else{
        result.innerHTML = `${price} ₽`
    }
    
}

$('.open-popup').click(function(e){
    e.preventDefault();
    $('.popup-bg').fadeIn(500);
    $('html').addClass('no-scroll');
});
$('.close-popup').click(function(e){
    e.preventDefault();
    $('.popup-bg').fadeOut(500);
    $('html').removeClass('no-scroll');
});

});