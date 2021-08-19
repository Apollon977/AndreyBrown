"use strict"
$(document).ready(function(){
    new WOW().init();
    $("#inputTel").mask("+7(999) 999-9999");
    $("html,body").animate({ scrollTop: $(".dropdown")[0].offsetTop }, 0);
});
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
    
    const listfirst = document.querySelector("#listfirst");
    const listtwo = document.querySelector("#listtwo");
    const listthree = document.querySelector("#listthree");
    const result = document.querySelector("#result");
    let LeaveАRequest = document.querySelector("#application");

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

$("#btn1").click(function(){
    location.href = "#aboutme";
});

$("#btn2").click(function(){
    location.href = "#Cases";
});

$("#btn3").click(function(){
    location.href = "www.somedomain.com";
});

$(".name").click(function(){
    location.href = "#name";
});


// $('form').submit(function(event){
//     event.preventDefault();

//     $.ajax({
//         type: "POST",
//         url: "php/mail.php",
//         data: $(this).serialize()
//     }).done(function(){
//         $(this).find("input").val("");
//         alert("Succesfull");
//         $('form').trigger("reset");
//     });
//     return false;
// });