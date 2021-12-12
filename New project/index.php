<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Description" content="Ремонт всех видов бытовой техники в Москве и Подмосковье по низким ценам."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta property="og:title" content="Сервисный центр «RASHMART» - ремонт бытовой техники">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index.php">
    <meta property="og:image" content="./img/Image-8.jpg">
    <meta property="og:description" content="Ремонт всех видов бытовой техники в Москве и Подмосковье по низким ценам.">
    <meta itemprop="name" content="Сервисный Центр «RASHMART» - ремонт бытовой техники">
    <meta itemprop="description" content="Ремонт всех видов бытовой техники в Москве и Подмосковье по низким ценам.">
    <meta itemprop="image" content="./img/Image-8.jpg">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-touch-fullscreen" content="yes">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/choices.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>Сервисны центр «RASHMART» - ремонт бытовой техники</title>
    
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#2a4b9b">
<meta name="msapplication-TileColor" content="#2a4b9b">
<meta name="theme-color" content="#ffffff">


</head>

<body>
    <header>
        <?php
        include('nav.php')
        ?>
    </header>
    <main>
        <section class="main">
            <div class="parallelogram animate__animated animate__fadeInLeft wow">
                <div class="title_container">
                    <div class="sertificed">
                        <div class="sd"></div>
                        <h6> СЕРТИФИЦИРОВАННЫЕ СПЕЦИАЛИСТЫ</h6>
                    </div>
                    <h4>Ремонт бытовой техники</h4>
                </div>
                <div class="front_form animate__animated animate__fadeInLeft wow animate__delay-1s">
                    <div class="front_garantiy">
                        <div class="fg"></div> Гарантия на ремонт от 6 месяцев
                    </div>
                    <form action="php/mail.php" id="form_one" method="POST">
                        <div class="selector_bg">
                            <div class="selector">
                                <select name="changeTechnic" class="firstForm" id="select_1">
                                    <option value="0">Выберите пункт...</option>
                                    <option value="Аэрогриль">Аэрогриль</option>
                                    <option value="Аэрофритюрница">Аэрофритюрница</option>
                                    <option value="Блендер">Блендер</option>
                                    <option value="Блинница">Блинница</option>
                                    <option value="Варочные панели">Варочная панель</option>
                                    <option value="Вентилятор">Вентилятор</option>
                                    <option value="Винный шкаф">Винный шкаф</option>
                                    <option value="Водные нагреватели">Водный нагреватель</option>
                                    <option value="Вытяжка">Вытяжка</option>
                                    <option value="Гладильная система">Гладильная система</option>
                                    <option value="Духовой шкаф">Духовой шкаф</option>
                                    <option value="Ионизатор воздуха">Ионизатор воздуха</option>
                                    <option value="Йогуртница">Йогуртница</option>
                                    <option value="Кондиционер">Кондиционер</option>
                                    <option value="Кофеварка">Кофеварка</option>
                                    <option value="Кофемашина">Кофемашина</option>
                                    <option value="Кофемолка">Кофемолка</option>
                                    <option value="Кулер для воды">Кулер для воды</option>
                                    <option value="Кухонный комбайн">Кухонный комбайн</option>
                                    <option value="Кухонная плита">Кухонная плита</option>
                                    <option value="Микровоновка">Микроволновка</option>
                                    <option value="Миксер">Миксер</option>
                                    <option value="Мини-печь">Мини-печь</option>
                                    <option value="Мороженица">Мороженица</option>
                                    <option value="Морозильник">Морозильник</option>
                                    <option value="Мультиварка">Мультиварка</option>
                                    <option value="Мясорубка">Мясорубка</option>
                                    <option value="Обогреватель">Обогреватель</option>
                                    <option value="Отпариватель">Отпариватель</option>
                                    <option value="Пароварка">Пароварка</option>
                                    <option value="Парогенератор">Парогенератор</option>
                                    <option value="Парогенератор для сауны и бани">Парогенератор для сауны и бани</option>
                                    <option value="Подогреватели посуды">Подогреватели посуды</option>
                                    <option value="Посудомоечные машина">Посудомоечная машина</option>
                                    <option value="Пылесос">Пылесос</option>
                                    <option value="Рисоварка">Рисоварка</option>
                                    <option value="Скороварка">Скороварка</option>
                                    <option value="Соковыжималка">Соковыжималка</option>
                                    <option value="Стиральная машина">Стриальная машина</option>
                                    <option value="Сушилка для овощей и фруктов">Сушилка для овощей и фруктов</option>
                                    <option value="Сэндвичница">Сэндвичница</option>
                                    <option value="Тостер">Тостер</option>
                                    <option value="Утюг">Утюг</option>
                                    <option value="Фен">Фен</option>
                                    <option value="Фритюрница">Фритюрница</option>
                                    <option value="Хлебопечка">Хлебопечка</option>
                                    <option value="Холодильник">Холодильник</option>
                                    <option value="Чайник">Чайник</option>
                                    <option value="Яйцеварка">Яйцеварка</option>
                                </select>
                            </div>
                        </div>
                        <div class="current_all">
                            <div class="currentName">
                                <input type="text" name="userName" class="form-control" id="inputName" required
                                    placeholder="Имя">
                            </div>
                            <div class="currentTel">
                                <input type="tel" name="userTel" class="form-control" id="inputTel" required
                                    placeholder="Телефон">
                            </div>
                        </div>
                        <div class="current_offer">
                            <div class="currentSubmit">
                                <input type="hidden" name="nameOfForm" value="formOne">
                                <input type="submit" name="submitOne" id="inputSubmit" value="Отправить">
                            </div>
                            <div class="discount_offer">
                                <img src="img/offer-1.svg" alt="offer">
                                <p>Скидка 20% при оформлении онлайн заказа</p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            
        </section>
        <section class="section">
            <div class="our_Specializations">
                <div class="specializations animate__animated animate__fadeInUp wow">
                    НАША СПЕЦИАЛИЗАЦИЯ
                </div>
                <div class="columns_Technic">
                    <div class="technic_refrigerator">
                        <div class="refrigerator">
                            <img src="fonts/refrigerator.svg" class="refrigerator_svg" alt="">
                        </div>
                        <p class="refrigerator_p">Холодильное оборудование</p>
                        <p class="from_ref">от 1200 рублей</p>
                        <div class="order_repair">
                            <label class="label_refrigerator" for="btn">Заказать ремонт</label>
                            <input type="button" class="btn" value="►" id="btn1">
                        </div>
                    </div>
                    <div class="technic_washermachine">
                        <div class="washermachine">
                            <img src="fonts/washermachine.svg" class="washermachine_svg" alt="">
                        </div>
                        <p class="washermachine_p">Стиральные машины</p>
                        <p class="from_wash">от 500 рублей</p>
                        <div class="order_repair">
                            <label class="label_washermachine" for="btn">Заказать ремонт</label>
                            <input type="button" class="btn" value="►" id="btn2">
                        </div>
                    </div>
                    <div class="technic_dishwasher">
                        <div class="dishwasher">
                            <img src="fonts/dishwasher.svg" class="dishwasher_svg" alt="">
                        </div>
                        <p class="dishwasher_p">Посудомоечные машины</p>
                        <p class="from_dish">от 1500 рублей</p>
                        <div class="order_repair">
                            <label class="label_dishwasher" for="btn">Заказать ремонт</label>
                            <input type="button" class="btn" value="►" id="btn3">
                        </div>
                    </div>
                    <div class="technic_dryingmaсhine">
                        <div class="dryingmachine">
                            <img src="fonts/dryingmachine.svg" class="dryingmachine_svg" alt="">
                        </div>
                        <p class="dryingmachine_p">Сушильные машины</p>
                        <p class="from_dry">от 2000 рублей</p>
                        <div class="order_repair">
                            <label class="label_dryingmachine" for="btn">Заказать ремонт</label>
                            <input type="button" class="btn" value="►" id="btn4">
                        </div>
                    </div>
                    <div class="technic_microwave">
                        <div class="microwave">
                            <img src="fonts/microwave.svg" class="microwave_svg" alt="">
                        </div>
                        <p class="microwave_p">Микроволновые печи</p>
                        <p class="from_mic">от 300 рублей</p>
                        <div class="order_repair">
                            <label class="label_microwave" for="btn">Заказать ремонт</label>
                            <input type="button" class="btn" value="►" id="btn5">
                        </div>
                    </div>
                    <div class="technic_stove">
                        <div class="stove">
                            <img src="fonts/stove.svg" class="stove_svg" alt="">
                        </div>
                        <p class="stove_p">Электрические плиты</p>
                        <p class="from_stove">от 1800 рублей</p>
                        <div class="order_repair">
                            <label class="label_stove" for="btn">Заказать ремонт</label>
                            <input type="button" class="btn" value="►" id="btn6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallelogram_two">
                <div class="achievements">
                    <div class="partners">
                        <span class="partners_number">261</span>
                        <p>Партнёра в Москве</p>
                    </div>
                    <div class="orders">
                        <span class="orders_precents">98</span>
                        <p>Успешных заказов</p>
                    </div>
                    <div class="masters">
                        <span class="masters_quantity">140</span>
                        <p>Мастера ремонта</p>
                    </div>
                    <div class="growth">
                        <span class="growth_quantity">88</span>
                        <p>Рост компании</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section2">
            <div class="how_to_work">
                <div class="how_we_work">
                    Как мы работаем
                </div>
                <div class="step_by_step animate__animated animate__fadeInUp wow">ПОШАГОВЫЙ ПРОЦЕСС РЕМОНТА</div>
                <div class="work_line">
                    <img src="img/Line-1-1.png" class="line" alt="line">
                    <div class="line_step">
                        <div class="analisys-arrival">
                            <div class="analisys-bg">
                        <div class="analisys">
                            <p class="step_one">01</p>
                            <p class="steps">ШАГ</p>
                            <div class="breakdown_analysis">
                                <p>
                                    Анализ поломки
                                </p>
                                <p>Мы свяжемся с вами в течение 10 минут и выслушаем вашу проблему</p>
                                <label class="breakdown_btn_label1" for="breakdown_btn">Подробнее</label>
                                <input type="button" id="breakdown_btn1" name="breakdown_btn" value="►">
                            </div>
                        </div>
                        </div>
                        <div class="arrival-bg">
                        <div class="arrival">
                            <p class="step_two">02</p>
                            <p class="steps">ШАГ</p>
                            <div class="departure_master">
                                <p>
                                    Выезд мастера
                                </p>
                                <p>Наш специалист приедет к вам и проведет подробную диагностику</p>
                                <label class="breakdown_btn_label2" for="breakdown_btn">Подробнее</label>
                                <input type="button" id="breakdown_btn2" name="breakdown_btn" value="►">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="repair-garantiy">
                        <div class="repair-bg">
                        <div class="repair">
                            <p class="step_three">03</p>
                            <p class="steps">ШАГ</p>
                            <div class="repair_technic">
                                <p>
                                    Ремонт техники
                                </p>
                                <p>Мастер произведет необходимый ремонт прямо в вашем доме</p>
                                <label class="breakdown_btn_label3" for="breakdown_btn">Подробнее</label>
                                <input type="button" id="breakdown_btn3" name="breakdown_btn" value="►">
                            </div>
                        </div>
                    </div>
                    <div class="garantiy-bg">
                        <div class="garantiy">
                            <p class="step_four">04</p>
                            <p class="steps">ШАГ</p>
                            <div class="issuing_guarantee">
                                <p>
                                    Выдача гарантии
                                </p>
                                <p>После завершения ремонта вы получите 6-месячную гарантию</p>

                                <label class="breakdown_btn_label4" for="breakdown_btn">Подробнее</label>
                                <input type="button" id="breakdown_btn4" name="breakdown_btn" value="►">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section3">
            <div class="benefits_bg">
                <div class="our_benefits">
                    <p class="benefits">ПРЕИМУЩЕСТВА</p>
                    <p class="benefits_p">НАШИ ПРЕИМУЩЕСТВА</p>
                    <p class="benefits_text">Мы отправим к вам на дом нашего специалиста,
                        который проведет детальную диагностику вашего оборудования
                        в удобное для вас время. Наш специалист выполнит
                        необходимый ремонт прямо у вас дома, если неисправность
                        оборудования не требует отправки в сервис. Фирменная гарантия
                        на ремонт от 6 месяцев.</p>
                    <div class="benefits_img">
                        <div class="hourglass_bg">
                        <img src="fonts/hourglass.svg" class="hourglass" alt="#">
                        <p>Выполняем все работы в срок</p>
                    </div>
                    <div class="medal_bg">
                        <img src="fonts/medal.svg" class="medal" alt="#">
                        <p>Гарантия на запчасти </p>
                    </div>
                    </div>
                    <div class="satisfied_customers">
                        <span class="satisfied_customers_span">7</span>
                        <p class="satisfied_customers_p">Довольных клиентов по Москве и Московской области</p>
                    </div>
                </div>
                <img src="img/Image-8.jpg" class="image8" alt="image8">
            </div>
            <div class="parallelogram3 animate__animated animate__fadeInRight wow ">
                <div class="free_offer_bg">
                    <div class="offer">
                        <p class="high_offer">
                            БЕСПЛАТНАЯ ДИАГНОСТИКА
                        </p>
                        <p class="under_highoffer">
                            При составлении онлайн-заявки
                        </p>
                    </div>
                    <div class="offer_number_bg">
                        <img src="img/phone.svg" class="offer_number_img" alt="img_number">
                        <p class="hourworks">ПН - ВС 8:00-23:00</p>
                        <div class="offer_number"><a href="tel: +79636239070">+7(963)623-90-70</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section4">
            <div class="parallelogram4 animate__animated animate__fadeInLeft wow animate__delay-1s">
                <div class="leader_in_repairs">
                    <p>Лидеры по ремонту</p>
                </div>
                <div class="repair_support">
                    <p>Ремонт бытовой техники</p>
                    <p>Поддержка 24/7</p>
                    <p class="repair_support_p">Мы отправим к вам на дом нашего специалиста,
                        который проведет детальную диагностику вашего оборудования в удобное
                        для вас время. Наш специалист произведет необходимый ремонт прямо в
                        вашем доме. </p>
                    <input type="button" id="repair_support_btn" name="repair_support_btn"
                        value="Заказать специалиста ►">
                </div>
            </div>
        </section>
        <section class="section5">
            <div class="number_bg">
                <div class="numbers_company animate__animated animate__fadeInUp wow">
                    <p>О цифрах</p>
                    <p>КОМПАНИЯ В ЦИФРАХ</p>
                    <div class="our_numbers">
                        <div class="our_experience">
                            <p class="our_exp_25">25</p>
                            <p>Многолетний опыт ремонта бытовой техники
                                различной сложности.</p>
                            <label class="experience_btn_label" for="experience_btn">Подробнее</label>
                            <input type="button" name="experience_btn" value="►" class="experience_btn">
                        </div>
                        <div class="other_information">
                            <div class="all_satisfied_clients">
                            <div class="satisfied_clients">
                                
                                <span class="scspan1">7</span>
                                <p>Довольных клиентов</p>


                                <span class="scspan2">9</span>
                                <p>Постоянных клиентов</p>

                            </div>
                            
                            
                            <div class="satisfied_clients2">
                                <span class="scspan3">5</span>
                                <p>Выполненных заказов</p>

                                <span class="scspan4">4</span>
                                <p>Партнёров по бизнесу</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section6">
            <div class="reviews-bg">
                <div class="reviews animate__animated animate__fadeInUp wow">
                    <p>Отзывы клиентов</p>
                    <p>ОТЗЫВЫ</p>
                    <div class="ant-carousel">
                    <div class="ant-carousel-hider">
                    <div class="reviews_peoples">
                        <div class="revpeople_one">
                            <p>Я не впервые обращаюсь к мастерам.
                                Всегда вовремя реагируйте на возникшую
                                проблему, и оперативно отправляйтесь на
                                ремонт поломки. Еще раз хочу выразить
                                благодарность за качественный ремонт
                                моей бытовой техники, а именно
                                холодильника, который после ремонта
                                еще прослужит долгие годы!
                            </p>
                            <div class="peopleimg-bg">
                                <div class="human_comm">
                                    <img class="peopleimg-1">
                                    <div class="comm_1">
                                    <p>Айбек Мадрахимов</p>
                                    <p>Россия, Москва</p>
                                </div>
                                </div>
                                </div>
                                <div class="peopleimg-btn">
                                    <input type="button" value="◀" class="slide-left">
                                    <input type="button" value="▶" class="slide-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="section7">
            <div class="experts-bg">
                <div class="experts">
                    <p>Эксперты</p>
                    <p class="animate__animated animate__fadeInUp wow">ЛУЧШИЕ СПЕЦИАЛИСТЫ</p>
                    <p>У нас работают только высококвалифицированные менеджеры.
                        Они всегда внимательно вас выслушают и дадут первоначальные
                        рекомендации по поводу неисправности вашего оборудования,
                        чтобы определить стоимость ремонта.</p>
                </div>
                <form action="php/mail.php" id="form_two" method="POST">
                    <div class="second_form">
                        <p>Заказать специалиста</p>
                        <div>
                            <div class="inputName2_bg">
                                <input type="text" name="userName2" class="inputName2" required placeholder="Ваше имя">
                            </div>
                            <div class="inputTel2_bg">
                                <input type="tel" name="userTel2" class="inputTel2" id="inputTel2" required
                                    placeholder="Телефон">
                            </div>
                            <div class="inputText2_bg">
                                <input type="text" name="message" class="inputText2" required placeholder="Что у Вас случилось?">
                            </div>
                            <div class="inputSubmit2_bg">
                                <input type="hidden" name="nameOfForm2" value="formTwo">
                                <input type="submit" name="submitOne2" class="inputSubmit2" value="Отправить">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="section8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13847.971788523575!2d37.55938779972224!3d55.761549044130895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a2b7f656823%3A0x127e233d8c9c538a!2sArtur%20Travel!5e0!3m2!1sru!2sru!4v1634747784850!5m2!1sru!2sru"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="parallelogram5">
                <div class="parallelogram5_flex">
                    <div class="numberphone_footer">
                        <img src="img/phone_white.svg" class="phone_img">
                        <div class="number_footer">
                        <p>ПОЗВОНИТЕ НАМ</p>
                        <a href="tel:+79636239070">+7(963) 623-90-70</a>
                    </div>
                    </div>
                    <div class="email_footer">
                        <img src="img/mail.svg" class="mail_img">
                        <div class="emailto_footer">
                            <p>НАПИШИТЕ НАМ</p>
                            <a href="mailto:info@rashmart.ru">info@rashmart.ru</a>
                        </div>
                    </div>
                    <div class="location_footer">
                        <img src="img/location_white.svg" class="location_img">
                        <div class="loc_footer">
                            <p>НАЙДИТЕ НАС</p>
                            <a href="https://goo.gl/maps/jVyQ1dT5MWh4kcYSA">Улица 1905 года, Москва, Россия</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <?php 
            include('footer.php');
            ?>
        </footer>
</main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/choices.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/maskedInput.js"></script>
    <script src="js/MyScript.js"></script>
</body>

</html>