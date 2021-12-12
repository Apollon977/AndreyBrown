"use strict"
$(document).ready(function(){
(function ($){
    $(function(){
        $('.icon').on('click', function(){
            $(this).closest('menu').toggleClass('menu-open');
        });
    });
});

$(function (){
    $('.menu-open').click(function () {
        $('.menu').toggleClass('show-menu'),
        $('body').toggleClass('body-overflow')
    });
});


    $('.logo_dropdown_pc').click(function(){
        location.href = "index.php"
    });     
    
    $('.address_Top').click(function(){
        window.open("https://www.google.ru/maps/place/%D0%A3%D0%BB%D0%B8%D1%86%D0%B0+1905+%D0%B3%D0%BE%D0%B4%D0%B0/@55.764764,37.5609057,17.96z/data=!4m5!3m4!1s0x46b54a2c831b4c43:0x33462f0b7e84c5fb!8m2!3d55.764932!4d37.5613871")
    });
});