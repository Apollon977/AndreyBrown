"use strict"
window.addEventListener('scroll', () =>{
    let scrollDistance = window.scrollY;
    console.log(scrollDistance);
});
$(document).ready(function(){
    new WOW().init();
    $('#inputTel').mask("+7(999) 999-99-99");
    $('#inputTel2').mask("+7(999) 999-99-99");
});

const defaultSelect = () =>{
    const element = document.querySelector('.firstForm');
    const choices = new Choices(element, {
    noResultsText: 'Не найдено',
    });
};

defaultSelect();

//---------Холодильник----------

$('.technic_refrigerator').hover(
    function(){
        $('.refrigerator_svg').attr('src','fonts/refrigerator_white.svg');
    },
    function(){
        $('.refrigerator_svg').attr('src','fonts/refrigerator.svg');
    }
);
$('.technic_refrigerator').hover(
    function(){
        $('.refrigerator_p').css('color', '#fff');
    },
    function(){
        $('.refrigerator_p').css('color', '#001029');
    }
);
$('.technic_refrigerator').hover(
    function(){
        $('.from_ref').css('color', '#fff');
    },
    function(){
        $('.from_ref').css('color', 'rgb(150, 150, 150');
    }
);

$('.technic_refrigerator').hover(
    function(){
        $('.label_refrigerator').css('color', '#fff');
    },
    function(){
        $('.label_refrigerator').css('color', '#001029');
    }
);

$('#btn1').hover(
    function(){
        $('.label_refrigerator').css('color', '#ffc000');
    },
    function(){
        $('.label_refrigerator').css('color', '#fff');
    }
);


//---------Стриальная машина----------

$('.technic_washermachine').hover(
    function(){
        $('.washermachine_svg').attr('src','fonts/washermachine_white.svg');
    },
    function(){
        $('.washermachine_svg').attr('src','fonts/washermachine.svg');
    }
);

$('.technic_washermachine').hover(
    function(){
        $('.washermachine_p').css('color', '#fff');
    },
    function(){
        $('.washermachine_p').css('color', '#001029');
    }
);

$('.technic_washermachine').hover(
    function(){
        $('.from_wash').css('color', '#fff');
    },
    function(){
        $('.from_wash').css('color', 'rgb(150, 150, 150');
    }
);

$('.technic_washermachine').hover(
    function(){
        $('.label_washermachine').css('color', '#fff');
    },
    function(){
        $('.label_washermachine').css('color', '#001029');
    }
);

$('#btn2').hover(
    function(){
        $('.label_washermachine').css('color', '#ffc000');
    },
    function(){
        $('.label_washermachine').css('color', '#fff');
    }
);

//---------Посудомоечная машина----------

$('.technic_dishwasher').hover(
    function(){
        $('.dishwasher_svg').attr('src','fonts/dishwasher_white.svg');
    },
    function(){
        $('.dishwasher_svg').attr('src','fonts/dishwasher.svg');
    }
);

$('.technic_dishwasher').hover(
    function(){
        $('.dishwasher_p').css('color', '#fff');
    },
    function(){
        $('.dishwasher_p').css('color', '#001029');
    }
);

$('.technic_dishwasher').hover(
    function(){
        $('.from_dish').css('color', '#fff');
    },
    function(){
        $('.from_dish').css('color', 'rgb(150, 150, 150');
    }
);

$('.technic_dishwasher').hover(
    function(){
        $('.label_dishwasher').css('color', '#fff');
    },
    function(){
        $('.label_dishwasher').css('color', '#001029');
    }
);

$('#btn3').hover(
    function(){
        $('.label_dishwasher').css('color', '#ffc000');
    },
    function(){
        $('.label_dishwasher').css('color', '#fff');
    }
);

//---------Сушильная машина----------

$('.technic_dryingmaсhine').hover(
    function(){
        $('.dryingmachine_svg').attr('src','fonts/dryingmachine_white.svg');
    },
    function(){
        $('.dryingmachine_svg').attr('src','fonts/dryingmachine.svg');
    }
);

$('.technic_dryingmaсhine').hover(
    function(){
        $('.dryingmachine_p').css('color', '#fff');
    },
    function(){
        $('.dryingmachine_p').css('color', '#001029');
    }
);

$('.technic_dryingmaсhine').hover(
    function(){
        $('.from_dry').css('color', '#fff');
    },
    function(){
        $('.from_dry').css('color', 'rgb(150, 150, 150');
    }
);

$('.technic_dryingmaсhine').hover(
    function(){
        $('.label_dryingmachine').css('color', '#fff');
    },
    function(){
        $('.label_dryingmachine').css('color', '#001029');
    }
);

$('#btn4').hover(
    function(){
        $('.label_dryingmachine').css('color', '#ffc000');
    },
    function(){
        $('.label_dryingmachine').css('color', '#fff');
    }
);

//---------Микроволновка----------

$('.technic_microwave').hover(
    function(){
        $('.microwave_svg').attr('src','fonts/microwave_white.svg');
    },
    function(){
        $('.microwave_svg').attr('src','fonts/microwave.svg');
    }
);

$('.technic_microwave').hover(
    function(){
        $('.microwave_p').css('color', '#fff');
    },
    function(){
        $('.microwave_p').css('color', '#001029');
    }
);

$('.technic_microwave').hover(
    function(){
        $('.from_mic').css('color', '#fff');
    },
    function(){
        $('.from_mic').css('color', 'rgb(150, 150, 150');
    }
);

$('.technic_microwave').hover(
    function(){
        $('.label_microwave').css('color', '#fff');
    },
    function(){
        $('.label_microwave').css('color', '#001029');
    }
);

$('#btn5').hover(
    function(){
        $('.label_microwave').css('color', '#ffc000');
    },
    function(){
        $('.label_microwave').css('color', '#fff');
    }
);

//---------Электроплита----------

$('.technic_stove').hover(
    function(){
        $('.stove_svg').attr('src','fonts/stove_white.svg');
    },
    function(){
        $('.stove_svg').attr('src','fonts/stove.svg');
    }
);

$('.technic_stove').hover(
    function(){
        $('.stove_p').css('color', '#fff');
    },
    function(){
        $('.stove_p').css('color', '#001029');
    }
);

$('.technic_stove').hover(
    function(){
        $('.from_stove').css('color', '#fff');
    },
    function(){
        $('.from_stove').css('color', 'rgb(150, 150, 150');
    }
);

$('.technic_stove').hover(
    function(){
        $('.label_stove').css('color', '#fff');
    },
    function(){
        $('.label_stove').css('color', '#001029');
    }
);

$('#btn6').hover(
    function(){
        $('.label_stove').css('color', '#ffc000');
    },
    function(){
        $('.label_stove').css('color', '#fff');
    }
);

//-----------Анимация счётчика вначале-----------

$(document).ready(function () {
    $(window).scroll(startCounter);
    function startCounter() {
    if ($(window).scrollTop() > 1250) {
        $(window).off("scroll", startCounter);
        $('.partners_number').each(function () {
        $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 2100,
         easing: 'linear',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
        });
    });
    };


    if ($(window).scrollTop() > 1250) {
        $(window).off("scroll", startCounter);
        $('.orders_precents').each(function () {
        $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 1250,
         easing: 'linear',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
        });
    });
    };

    if ($(window).scrollTop() > 1250) {
        $(window).off("scroll", startCounter);
        $('.masters_quantity').each(function () {
        $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 1950,
         easing: 'linear',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
        });
    });
    };

    if ($(window).scrollTop() > 1250) {
        $(window).off("scroll", startCounter);
        $('.growth_quantity').each(function () {
        $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 1500,
         easing: 'linear',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
        });
    });
    }; 
}; 
}); 

//-----------Изменение цвета кнопок-----------

$('#breakdown_btn1').hover(
    function(){
        $('.breakdown_btn_label1').css('color', '#ffc000')
    },
    function(){
        $('.breakdown_btn_label1').css('color', '#fff')
    }
);

$('#breakdown_btn2').hover(
    function(){
        $('.breakdown_btn_label2').css('color', '#ffc000')
    },
    function(){
        $('.breakdown_btn_label2').css('color', '#fff')
    }
);

$('#breakdown_btn3').hover(
    function(){
        $('.breakdown_btn_label3').css('color', '#ffc000')
    },
    function(){
        $('.breakdown_btn_label3').css('color', '#fff')
    }
);

$('#breakdown_btn4').hover(
    function(){
        $('.breakdown_btn_label4').css('color', '#ffc000')
    },
    function(){
        $('.breakdown_btn_label4').css('color', '#fff')
    }
);

$('.experience_btn').hover(
    function(){
        $('.experience_btn_label').css('color', '#ffc000')
    },
    function(){
        $('.experience_btn_label').css('color', '#000')
    }
);

//-----------Анимация счётчика в середине-----------

$(document).ready(function () {
    $(window).scroll(startCounter);
    function startCounter() {
    if ($(window).scrollTop() > 3000) {
        $(window).off("scroll", startCounter);
        $('.satisfied_customers_span').each(function () {
        $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 1100,
         easing: 'linear',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
        });
    });
    };
    };

});

    $(document).ready(function () {
        $(window).scroll(startCounter);
        function startCounter() {
    if ($(window).scrollTop() > 4500) {
        $(window).off("scroll", startCounter);
        $('.our_exp_25').each(function () {
        $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 2100,
         easing: 'linear',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
        });
    });
    };
    

    if ($(window).scrollTop() > 4500) {
        $(window).off("scroll", startCounter);
        $('.scspan1').each(function () {
        $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 2100,
         easing: 'linear',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
        });
    });
    };
    

    if ($(window).scrollTop() > 4500) {
        $(window).off("scroll", startCounter);
        $('.scspan2').each(function () {
        $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 1250,
         easing: 'linear',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
        });
    });
    };

    if ($(window).scrollTop() > 4500) {
        $(window).off("scroll", startCounter);
        $('.scspan3').each(function () {
        $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 1950,
         easing: 'linear',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
        });
    });
    };

    if ($(window).scrollTop() > 4500) {
        $(window).off("scroll", startCounter);
        $('.scspan4').each(function () {
        $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 1500,
         easing: 'linear',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
        });
    });
    };  
        };
});

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

//---------------Работа с формой--------------

$('form').submit(function(e){
    e.preventDefault();

   $.ajax({
      type: "POST",
       url: "php/mail.php",
       data: $(this).serialize()
          }).done(function(){
       $(this).find("input").val("");
           $();
   });
   return false;
});


//----------------Кликабельные функции-------------
$(document).ready(function(){
    $('.logo_dropdown_pc').click(function(){
        location.href = "index.php"
    });     
    
    $('.address_Top').click(function(){
        window.open("https://www.google.ru/maps/place/%D0%A3%D0%BB%D0%B8%D1%86%D0%B0+1905+%D0%B3%D0%BE%D0%B4%D0%B0/@55.764764,37.5609057,17.96z/data=!4m5!3m4!1s0x46b54a2c831b4c43:0x33462f0b7e84c5fb!8m2!3d55.764932!4d37.5613871")
    });
});
