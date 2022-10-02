"use strict"
$(document).ready(function(){
    new WOW().init();
    $("#inputTel").mask("+7(999) 999-9999");
    $("html,body").animate({ scrollTop: $(".dropdown")[0].offsetTop }, 0);
});

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
    
    let listfirst = document.querySelector("#listfirst");
    let listtwo = document.querySelector("#listtwo");
    let listthree = document.querySelector("#listthree");
    let result = document.querySelector("#result");
    let terms = document.querySelector("#terms");

    let price = 0;
    price += parseInt(listfirst.options[listfirst.selectedIndex].value);
    price += parseInt(listtwo.options[listtwo.selectedIndex].value);
    price += parseInt(listthree.options[listthree.selectedIndex].value);
    result.innerHTML = price;
    if(result < 0){
        return false;
    } else{
        result.innerHTML = `${price} ₽`
    };


    if (price < 3000){
        terms.textContent = `0 дней`;
    } else if(price <= 8000){
        terms.textContent = `2-5 дней`;
    } else if (result <= 12000){
        terms.textContent = `5-8 дней`;
    } else if (result <= 15000){
        terms.textContent = `8-10 дней`;
    } else if (result <= 20000){
        terms.textContent = `10-15 дней`;
    } else if (result <= 25000){
        terms.textContent = `15-20 дней`;
    } else{
        terms.textContent = `30 дней`;
    }
    
};

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


   $('form').submit(function(e){
       e.preventDefault();

      $.ajax({
         type: "POST",
          url: "php/mail.php",
          data: $(this).serialize()
             }).done(function(){
          $(this).find("input").val("");
              alert("Успешно отправлено!");
      });
      return false;
 });

//  $('#formTwo').submit(function(e){
//     e.preventDefault();

//    $.ajax({
//       type: "POST",
//        url: "php/mailTwo.php",
//        data: $(this).serialize()
//           }).done(function(){
//        $(this).find("input").val("");
//            alert("Успешно отправлено!");
//    });
//    return false;
// });

