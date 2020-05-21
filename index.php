<?php
include "php/Photo.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no ">

    <!-- Fontawesome-free-->
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--fancybox-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <!--vk START-->
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>

    <script type="text/javascript">
        VK.init({apiId: 7354207, onlyWidgets: true});
    </script>
    <!--vk END-->

    <title>MyMagic.by</title>

</head>
<body>
<header class="header navbar navbar-expand-lg fixed-top p-0 px-lg-4 py-lg-1 m-0" id="header">

    <div class="navbar-brand col h-100 p-0">
        <a href="#first-block" class="logo-link">
            <img src="img/logo/logo_my_magic.svg" alt="Логотип" height="100%" class="logo" id="logo">

            <img src="img/logo/logo_title_my_magic.png" alt="Заголовок логотипа" class="logo-title" id="logo-title">
        </a>
        <a class="number d-block d-lg-none pl-3 p-0 navbar-toggler" href="tel:+375447405583">+375 44
            7405583</a>
    </div>


    <button class="navbar-toggler button mx-3 m-lg-0" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="col d-lg-flex flex-column p-0 m-0 collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="first-row navbar-nav col justify-content-end  p-0 m-0">

            <li class="nav-item py-2 pr-1" id="menu_phone">
                <a class="phone d-block" href="tel:+375447405583">
                    <i class="fas fa-phone m-0"></i> +375 44 7405583
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-1 px-xl-2" href="#block-about">Кто я?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-1 px-xl-2" href="#block-about-profession">Чем я занимаюсь?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-1 px-xl-2" href="#block-why-me">Почему я?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-1 px-xl-2" href="#block-photo">Фото</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-1 px-xl-2" href="#block-video">Видео</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-1 px-xl-2" href="#block-how-I-work">Как я работаю?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-1 px-xl-2" href="#block-clients">Мои клиенты</a>
            </li>
        </ul>


        <ul class="navbar-nav second-row col justify-content-end align-items-center p-0" id="second-row">
            <li class="nav-item">
                <a class="phone py-md-0 px-0 px-lg-1 ml-lg-3" href="tel:+375447405583">
                    <i class="fas fa-phone m-0"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="number py-md-0 px-1 px-lg-2 mr-lg-2 mr-xl-3" href="tel:+375447405583">+375 44
                    7405583</a>
            </li>
            <li class="nav-item">
                <div class="border-ver mx-lg-2 mx-xl-3"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase mx-md-1 mx-lg-2 mx-xl-3" href="#block-form" id="order-call">заказать
                    звонок</a>
            </li>

            <ul class="nav justify-content-md-end flex-nowrap p-0 m-0">
                <li class="nav-item">
                    <a class="social rounded-circle mr-0 mr-lg-1"
                       href="https://www.instagram.com/justmymagic/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="social rounded-circle mx-0 mx-lg-1"
                       href="https://vk.com/focusnik_illusionist_minsk/" target="_blank">
                        <i class="fab fa-vk"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="social rounded-circle mx-0 mx-lg-1"
                       href="https://www.facebook.com/justmymagic/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="social rounded-circle mx-0 mx-lg-1"
                       href="https://t.me/justmymagic/" target="_blank">
                        <!--     Заменить ссылку https://t.me/justmymagic/-->
                        <i class="fab fa-telegram-plane"></i> <!--Заменить fa-telegram-plane на fa-youtube-->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="social rounded-circle ml-0 ml-lg-1"
                       href="https://ok.ru/profile/359503298009/" target="_blank">
                        <i class="fab fa-odnoklassniki"></i>
                    </a>
                </li>
            </ul>
        </ul>


    </div>
</header>
<section class="first-block" id="first-block">

    <img src="/img/photo/bg-photo-first-block.jpg" alt="" class="background-first-block d-none d-md-inline w-100">


    <div class="px-md-3 px-xl-5">

        <div class="first-block-title col-lg-8 text-center py-md-2 py-lg-4 py-xl-5">
            <h1>выступление иллюзиониста <br>
                <span>на вашем</span>
                <span id="celebration">празднике</span>
            </h1>
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="137px" height="19px">
                <image x="0px" y="0px" width="137px" height="19px"
                       xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIkAAAATCAQAAAAO0OZnAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkAR4QEBn+KOPJAAAEtklEQVRYw83XfWzV1RkH8M/v3tvbQm9foGgZiGJ5nahjbAKbCsStig5R4wZoNqcLJGYv2ZJlL8lCAsnALA4xiwSjUydqxgTDlozErRqVsSEGApourCywQpGivCi9Bdre3t/ZH/e28pIsWdbe7jl/nJec8zzf833OefI8UTAk0mCxOh2q1dvnOe1gnIdMckyXjDYvOzIU0KIhoeRTVjnht95X7lr3Oe7nPjLGT1X4nRY5V1sibbmTQ4AulL4lw5rwTKgOQhQEYUr4dfhxSIflYU24qn/X5WFrWB0SpceXKAHraeNMMl5NcV5vutU6RGpNkdBik3q3KfeKQ5ImqsSHNpirunimVoOpxikbfLipQbcwwhKNenVptcUexEVXBGmLPabTPtdr1KwFl7nbb5zBYecU/vUNlqhHUpPNOgYX8GC/kmGW+ao/W+Epw63SiA81e8JUdWYYLUa3LsPEetHjWnONcYWF/iqLhR5X4yk/86olHlA+uJCTKwZX/0yzPWGL4w5rUu2H/uWA/eabrd4Mv7cfE9zgoDFanXBObJGpZqm0zscWWOklKx102ruOmKndsVJQUmaWe43WJjeg+ueIbMQIObFdRvu+vZq9KaFHk+2IfN0oz2g0yttocVSFYzZoM9daL1grL6lWl1afl7dvQDFWuVOj2HExn8SSjNvNVOkzXnEFtjk3IOay5mmXdJMn7cIjaq20yl88279nmVs84qg/+o5TnscOO8CXLPcHvwRfsFSTKnPsHiAqKs3R6wP3u1lWRkvhOXySl1yJWb4rbauzdntrQMzWeNatutVZZFNx7Sem2WqvdmkN5rjVi3a5Q5vRGr1hmwPyxprhDm/7VfHUw9Y7qdJmy3QNALLILa5Ta6HT1tor7ksMU5jkerH3HbTJP/3AaT2+5RpZGaliAM4XWyw4P7sLF/UFY5GESEIsFmRk8GXVytDplCqPandI2lgnrHHAXTpN8w/Pe9B92uRdbZSdOj1gOPK+iDrwNWUisXAJmqjYJ85bLaBJSvbfJdYrq85Mr0nZ4zF/V6/BLOzWGoW5ljmjV+SY7Q6Z5n43arZDjYykJEKRkF75C0DEl1BTAJEQSUpIyqNKWo9ukSDI69RlpIxYzkmve8N8C/zCUhkrTHe7kcpEsj5WoQpJAcOkdMuKRIJYvkjKpZRE/aPCOClVpCQqurfDWTeZaLuN9hvvRpcJ0sqsi8JG79gmlpa2wAzvmWCyH9mpRrKovEBDfNHVL55dCC0q+ivnrLwyw6X6NeSKTujVrRsNvmmCci/bLKiQlhKkZIqxLpLQ66ycVL+egqb/hODCWaIfVcExp82z2nuOus7fvCqnW9JtJkfhGzY7h6SlrrFPwnRNtuj9n37qfyufNs9hbzpTQptpi9xsj5QpdtsgRrV7hXQQhGHh22FduDIIi8OjoWoIKp/0ENQzI8Pj4Z4gTAjrw0OhIghCRUIPmOiz1ut0t/HekS3pCylIz3mRqVTykZ0m+ooTnjTbWNDVl9DXiDR70HPmOTAEhAyNBK3me8E93lWutrDYR8kR5R6WVWt8Sarj/xdJaTBCzvfkfFBY6kvoO5xyp8/JetqfShxah1JO4XKTVXq6r0z4NxRhkXMhHEeXAAAAAElFTkSuQmCC"/>
            </svg>
            <p>по всей беларуси и за
                рубежом</p>
        </div>

        <div class="bg-sale-title col-6 col-lg-5 d-flex justify-content-center ml-lg-5 ml-xl-0 d-none d-md-block">
            <div class="sale-title col-10 col-xl-8 justify-content-center py-md-2 py-lg-3 d-none d-md-flex">
                <p class="m-0">Закажите выступление <br> сейчас и получите <br> <span
                            style="font-family: 'Lato Black', sans-serif">скидку 30%</span>
                </p>
            </div>
        </div>

        <a href="#block-sale" class="nav-link">
            <button class="d-none d-md-block sale-button text-uppercase">получить скидку</button>
        </a>



        <div class="slider-first-block d-none d-md-block">

            <div id="slider-first-block" class="carousel slide" data-ride="carousel" data-interval="3000">

                <div class="row flex-nowrap">

                    <div class="carousel-inner col-11 p-2 p-lg-3">
                        <?php $first = true; foreach($photosForSlider as $photo){?>
                        <div class="carousel-item <?if ($first===true){echo 'active';}$first=false;?>">
                            <img src="<?=$photo['media_url']?>"
                                 alt="<?=$photo['alt']?>">
                        </div>
                        <?php }?>
                    </div>

                    <div class="col d-flex align-items-center">
                        <ol class="carousel-indicators p-0 m-0">
                            <?php $first = true; for($x = 0; $x < count($photosForSlider); $x++){?>
                            <li data-target="#slider-first-block" data-slide-to="<?=$x?>" <?if ($first===true){echo 'class="active"';}$first=false;?>></li>
                            <?php }?>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="block-about" id="block-about">
    <div class="row h-100 px-md-5 m-0 align-items-lg-center">
        <div class="col-lg-6 px-3">
            <div class="d-flex text-right justify-content-center d-md-block">
                <h2>Кто я?</h2>
            </div>

            <p class="text-center text-md-left mb-0 mt-md-4" id="illusionist">Иллюзионист <br>
                <span class="text-uppercase m-0">Антон Ермоленко</span>
            </p>
            <div class="block-about-list col my-4 p-1 px-md-3 px-xl-4 py-md-4 py-xl-5">
                <ul class="m-0 p-0 text-right ">
                    <li class="mb-3 pr-4 pr-md-5">Профессионально занимаюсь фокусами более 8 лет</li>
                    <li class="mb-3 pr-4 pr-md-5">Представитель Российской Ассоциации Иллюзионистов (РАИ)</li>
                    <li class="pr-4 pr-md-5">Представитель Международного Сообщества Иллюзионистов (ISM)</li>
                </ul>
            </div>
            <div class="row justify-content-center d-none d-md-flex">
                <div class="col-6 mb-lg-3">
                    <img class="img-fluid" src="img/photo/certificate.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 justify-content-center align-self-end d-none d-md-flex">
            <img src="/img/photo/anton-ermolenko-block-about-me.png" alt=""
                 id="anton-ermolenko-block-about-me">
        </div>
    </div>
</section>
<section class="block-form d-none d-md-block" id="block-form">
    <div class="container py-3">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="220px" height="37px">
                    <image x="0px" y="0px" width="220px" height="37px"
                           xlink:href="data:img/png;base64,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"/>
                </svg>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2 class="black-title">Возникли вопросы?</h2>
            </div>
        </div>
        <div class="form row py-2 px-4">
            <div class="col-6 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col">
                        <p>Позвоните мне</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="phone" href="tel:+375447405583">
                            <i class="fas fa-phone mr-3"></i><span class="number">+375 (44) 740 55 83</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center">
                <div class="row my-3">
                    <div class="col text-center">
                        <h3>Оставьте свой номер телефона</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col col-lg-7">
                        <form action="" method="post" id="ajax_form_1">
                            <input name="phone_number" class="phone_input my-2 px-4 py-3" type="text"
                                   placeholder="Ваш телефон" required>
                            <button class="text-uppercase my-2 px-4 py-3" type="submit">Отправить
                                заявку
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="block-about-profession" id="block-about-profession">

    <div class="container-fluid p-0">

        <div class="row m-0 p-0 h-100 align-items-center">
            <div class="col">

                <div class="row mt-md-5">
                    <div class="col text-center">
                        <h2>Чем я занимаюсь?</h2>
                    </div>
                </div>

                <div id="slider-block-about-profession"
                     class="row justify-content-center mb-4 carousel slide"
                     data-ride="carousel">

                    <div class="col-2 d-none d-md-flex justify-content-end align-items-center">
                        <a href="#slider-block-about-profession" role="button"
                           data-slide="prev">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                 width="100px" height=100px" viewBox="0 0 100.000000 100.000000"
                                 preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)"
                                   fill="#d7463f" stroke="none">
                                    <path id="slider-button" d="M411 989 c-199 -33 -369 -210 -401 -417 -42 -266 148 -520 418 -562
                            266 -42 520 148 562 418 41 262 -147 519 -410 561 -74 12 -94 12 -169 0z m262
                            -38 c133 -52 246 -175 288 -312 28 -91 23 -225 -10 -312 -52 -133 -175 -246
                            -312 -288 -91 -28 -225 -23 -312 10 -133 52 -246 175 -288 312 -28 91 -23 225
                            10 312 50 128 172 244 304 287 85 28 236 23 320 -9z
                            M437 632 l-127 -127 130 -130 130 -130 27 28 28 27 -103 102 -102
                            103 102 102 102 102 -24 26 c-13 14 -26 25 -29 25 -4 0 -64 -57 -134 -128z"
                                    />
                                </g>
                            </svg>
                        </a>
                    </div>


                    <div class="col-md-8">
                        <div class="carousel-inner" data-ride="false" data-touch="false">

                            <div class="carousel-item active" data-ride="false"
                                 data-touch="false">

                                <img src="img/photo/slider_about_profession/photo-1.jpg"
                                     alt="Первый слайд">

                                <p class="active p-0 px-md-3 ">Свадьба (программа 20-25 минут)</p>

                            </div>

                            <div class="carousel-item" data-ride="false"
                                 data-touch="false">

                                <img src="img/photo/slider_about_profession/photo-1.jpg"
                                     alt="Первый слайд">

                                <p class="p-0 px-md-3">Корпоратив (программа 20-25 минут)</p>

                            </div>

                            <div class="carousel-item" data-ride="false"
                                 data-touch="false">

                                <img src="img/photo/slider_about_profession/photo-3.jpg"
                                     alt="Первый слайд">

                                <p class="p-0 px-md-3">День Рождения (программа 20-25 минут)</p>


                            </div>

                            <div class="carousel-item" data-ride="false"
                                 data-touch="false">

                                <img src="img/photo/slider_about_profession/photo-4.jpg"
                                     alt="Первый слайд">

                                <p class="p-0 px-md-3">Детский праздник (программа 20-25 минут)</p>
                            </div>


                            <div class="carousel-item" data-ride="false"
                                 data-touch="false">

                                <img src="img/photo/slider_about_profession/photo-5.jpg"
                                     alt="Первый слайд">


                                <p class="p-0 px-md-3">Встреча гостей, интерактив с гостями, микромагия (программа 20-25
                                    минут)</p>

                            </div>

                            <div class="carousel-item" data-ride="false"
                                 data-touch="false">

                                <img src="img/photo/slider_about_profession/photo-6.jpg"
                                     alt="Первый слайд">

                                <p class="p-0 px-md-3">Тематические праздники
                                    (любая
                                    продолжительность)</p>

                            </div>
                        </div>
                    </div>


                    <div class="col-2 d-none d-md-flex align-items-center">
                        <a class="" href="#slider-block-about-profession" role="button"
                           data-slide="next">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                 width="100px" height=100px" viewBox="0 0 100.000000 100.000000"
                                 preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)"
                                   fill="#d7463f" stroke="none">
                                    <path id="slider-button" d="M411 989 c-199 -33 -369 -210 -401 -417 -42 -266 148 -520 418 -562
                            266 -42 520 148 562 418 41 262 -147 519 -410 561 -74 12 -94 12 -169 0z m262
                            -38 c133 -52 246 -175 288 -312 28 -91 23 -225 -10 -312 -52 -133 -175 -246
                            -312 -288 -91 -28 -225 -23 -312 10 -133 52 -246 175 -288 312 -28 91 -23 225
                            10 312 50 128 172 244 304 287 85 28 236 23 320 -9z
                            M400 725 l-24 -26 102 -102 102 -102 -102 -103 -103 -102 28 -27 27
                            -28 130 130 130 130 -127 127 c-70 71 -130 128 -134 128 -3 0 -16 -11 -29 -25z"
                                    />
                                </g>
                            </svg>
                        </a>
                    </div>

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col col-xl-12">
                                <div class="row justify-content-center">
                                    <h3 style="font-size: 30px">Варианты программы</h3>
                                </div>
                                <ol class="carousel-indicators d-flex flex-wrap flex-lg-nowrap justify-content-md-around m-0"
                                    data-ride="false" data-touch="false">
                                    <li data-target="#slider-block-about-profession" data-slide-to="0"
                                        data-ride="false"
                                        data-touch="false" class="active">
                                        Свадьба (программа 20-25 минут)
                                    </li>
                                    <li data-target="#slider-block-about-profession" data-slide-to="1"
                                        data-ride="false"
                                        data-touch="false">
                                        Корпоратив (программа 20-25 минут)
                                    </li>
                                    <li data-target="#slider-block-about-profession" data-slide-to="2"
                                        data-ride="false"
                                        data-touch="false">
                                        День Рождения (программа 20-25 минут)
                                    </li>
                                    <li data-target="#slider-block-about-profession" data-slide-to="3"
                                        data-ride="false"
                                        data-touch="false">
                                        Детский праздник (программа 20-25 минут)
                                    </li>
                                    <li data-target="#slider-block-about-profession" data-slide-to="4"
                                        data-ride="false"
                                        data-touch="false">
                                        Встреча гостей, интерактив с гостями, микромагия (программа 20-25 минут)
                                    </li>
                                    <li data-target="#slider-block-about-profession" data-slide-to="5"
                                        data-ride="false"
                                        data-touch="false">
                                        Тематические праздники (любая продолжительность)
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

</section>
<section class="block-why-me " id="block-why-me">
    <div class="container-fluid px-lg-3 p-xl-5">

        <div class="row d-none d-md-flex">
            <div class="col-6 d-flex flex-column align-items-center">
                <h2 class="black-title">Почему я?</h2>
                <div class="mb-3">
                    <img src="img/icon/ico-good.svg" alt="">
                </div>
            </div>
            <div class="col-6  d-flex flex-column align-items-center">
                <h2 class="black-title">А не другие</h2>
                <div class="mb-3">
                    <img src="img/icon/ico-bad.svg" alt="">
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mb-md-2">
            <div class="list-why-me col col-lg-10">
                <div class="row p-lg-2">

                    <div class="col-12 col-md-6">
                        <div class="col p-0 d-block d-md-none">
                            <h2 class="text-center">Почему я?</h2>
                        </div>
                        <ul class="positive">
                            <li class="pl-5 my-3">Профессионально занимаюсь фокусами более 8 лет</li>
                            <li class="pl-5 my-3">Оригинальная программа</li>
                            <li class="pl-5 my-3">Шикарный костюм и презентабельный внешний вид</li>
                            <li class="pl-5 my-3">Вы еще долго будите обсуждать выступление, теряясь в догадках как же
                                делаются фокусы
                            </li>
                            <li class="pl-5 my-3">В программе участвуют сами зрители</li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="col p-0 d-block d-md-none">
                            <h2 class="text-center">А не другие</h2>
                        </div>
                        <ul class="negative">
                            <li class="pl-5 my-3">Вам может попасться начинающий или неопытный фокусник</li>
                            <li class="pl-5 my-3">Зрители будут скучать</li>
                            <li class="pl-5 my-3">Костюм фокусника может не соответствовать мероприятию</li>
                            <li class="pl-5 my-3">На видео и фото фокусник смотрится красиво, а
                                реальное выступление неинтересное
                            </li>
                            <li class="pl-5 my-3">Фокусник не профессионально показывает фокусы, секреты которых вы
                                легко поймете
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<section class="block-sale d-none d-md-block" id="block-sale">
    <div class="container-fluid h-100 d-flex">
        <div class="col-5 d-flex flex-column justify-content-center">
            <div class="bg-sale-title d-flex justify-content-center mb-lg-5">
                <div class="sale-title py-md-2 py-lg-3 pl-3 pl-lg-0">
                    <p class="mb-0">Закажите выступление <br> сейчас и получите <br> <span id="sale-title__item"
                        >скидку 30%</span>
                    </p>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col col-lg-7">
                    <form action="" method="post" id="ajax_form_3">
                        <input type="hidden" name="form_sale" value="Скидка"/>
                        <input name="phone_number" class="phone_input my-2 p-2 p-lg-3" type="text"
                               placeholder="Ваш телефон" required>
                        <button class="text-uppercase sale-button p-2 p-lg-3" type="submit">получить
                            скидку
                        </button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col">
            <img src="/img/photo/anton-ermolenko-block-sale.png" alt="" class="img-fluid">
        </div>
    </div>
</section>
<section class="block-photo" id="block-photo">

    <div class="container-fluid p-md-3 p-lg-5">

        <div class="row my-lg-3">
            <div class="col text-center my-3">
                <h2>Я на фото</h2>
            </div>
        </div>

        <div id="carouselBlockPhoto" class="carousel slide " data-ride="false" data-interval="false">
            <div class="carousel-inner p-1">

                <?php for ($slide = 1; $slide <= 3; $slide++){?>
                <div class="carousel-item <?=$slide == 1?'active':''?>">
                    <div class="row m-0">
                        <!--Слайд 1 START-->
                        <?php foreach($photosForGallery as $photo){?>
                        <div class="p-0">
                            <a href="<?=$photo['media_url']?>"
                               class="fancybox" rel="ligthbox">
                                <img src="<?=$photo['permalink'] . 'media/?size=m'?>"
                                     class="block_photo_item img-fluid" alt="Описание">
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <?php }?>
                <!--Слайд 1 END-->

            </div>
            <div class="row justify-content-center">
                <ol class="carousel-indicators magic_indicators d-flex">
                    <li data-target="#carouselBlockPhoto" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselBlockPhoto" data-slide-to="1"></li>
                    <li data-target="#carouselBlockPhoto" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="block-video" id="block-video">

    <div class="container-fluid py-3 py-lg-5">

        <div class="row my-xl-3">
            <div class="col text-center my-3">
                <h2>Я на видео</h2>
            </div>
        </div>

        <div id="slider-block-video" class="carousel slide" data-ride="false" data-interval="false">
            <div id="slider-block-video" class="row justify-content-center my-3 my-xl-4 carousel slide d-flex"
                 data-ride="carousel">


                <div class="col-2 d-none d-md-flex justify-content-center align-items-center">
                    <a class="" href="#slider-block-video" role="button"
                       data-slide="prev">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="100.000000px" height="100.000000px" viewBox="0 0 100.000000 100.000000"
                             preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)"
                               fill="#d7463f" stroke="none">
                                <path id="slider-button" d="M411 989 c-199 -33 -369 -210 -401 -417 -42 -266 148 -520 418 -562
                            266 -42 520 148 562 418 41 262 -147 519 -410 561 -74 12 -94 12 -169 0z m262
                            -38 c133 -52 246 -175 288 -312 28 -91 23 -225 -10 -312 -52 -133 -175 -246
                            -312 -288 -91 -28 -225 -23 -312 10 -133 52 -246 175 -288 312 -28 91 -23 225
                            10 312 50 128 172 244 304 287 85 28 236 23 320 -9z
                            M437 632 l-127 -127 130 -130 130 -130 27 28 28 27 -103 102 -102
                            103 102 102 102 102 -24 26 c-13 14 -26 25 -29 25 -4 0 -64 -57 -134 -128z"
                                />
                            </g>
                        </svg>
                    </a>
                </div>


                <div class="col col-md-8 col-lg-6 p-0 px-md-3">
                    <div class="carousel-inner border-slider p-2" data-ride="false" data-touch="false">


                        <div class="carousel-item active" data-ride="false" data-touch="false">
                            <div class="video">
                                <a class="video__link" href="https://youtu.be/r8JGWIWdGm8"> <!-- Здесь заменить -->
                                    <picture>
                                        <source srcset="https://i.ytimg.com/vi_webp/r8JGWIWdGm8/maxresdefault.webp"
                                        <!-- Здесь заменить -->
                                        type="image/webp">
                                        <img class="video__media"
                                             src="https://i.ytimg.com/vi/r8JGWIWdGm8/maxresdefault.jpg" alt="">
                                        <!-- Здесь заменить -->
                                    </picture>
                                </a>
                                <button class="video__button" type="button" aria-label="Запустить видео">
                                    <svg width="68" height="48" viewBox="0 0 68 48">
                                        <path class="video__button-shape"
                                              d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path>
                                        <path class="video__button-icon" d="M 45,24 27,14 27,34"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="carousel-item" data-ride="false" data-touch="false">
                            <div class="video">
                                <a class="video__link" href="https://youtu.be/pWYbL_j_MEo"> <!-- Здесь заменить -->
                                    <picture>
                                        <source srcset="https://i.ytimg.com/vi_webp/pWYbL_j_MEo/maxresdefault.webp"
                                        <!-- Здесь заменить -->
                                        type="image/webp">
                                        <img class="video__media"
                                             src="https://i.ytimg.com/vi/pWYbL_j_MEo/maxresdefault.jpg" alt="">
                                        <!-- Здесь заменить -->
                                    </picture>
                                </a>
                                <button class="video__button" type="button" aria-label="Запустить видео">
                                    <svg width="68" height="48" viewBox="0 0 68 48">
                                        <path class="video__button-shape"
                                              d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path>
                                        <path class="video__button-icon" d="M 45,24 27,14 27,34"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>


                        <div class="carousel-item" data-ride="false" data-touch="false">
                            <div class="video">
                                <a class="video__link" href="https://youtu.be/zCm6NsqJLWE"> <!-- Здесь заменить -->
                                    <picture>
                                        <source srcset="https://i.ytimg.com/vi_webp/zCm6NsqJLWE/maxresdefault.webp"
                                        <!-- Здесь заменить -->
                                        type="image/webp">
                                        <img class="video__media"
                                             src="https://i.ytimg.com/vi/zCm6NsqJLWE/maxresdefault.jpg" alt="">
                                        <!-- Здесь заменить -->
                                    </picture>
                                </a>
                                <button class="video__button" type="button" aria-label="Запустить видео">
                                    <svg width="68" height="48" viewBox="0 0 68 48">
                                        <path class="video__button-shape"
                                              d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path>
                                        <path class="video__button-icon" d="M 45,24 27,14 27,34"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-2 d-none d-md-flex justify-content-center align-items-center">
                    <a class="" href="#slider-block-video" role="button"
                       data-slide="next">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="100.000000px" height="100.000000px" viewBox="0 0 100.000000 100.000000"
                             preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)"
                               fill="#d7463f" stroke="none">
                                <path id="slider-button" d="M411 989 c-199 -33 -369 -210 -401 -417 -42 -266 148 -520 418 -562
                            266 -42 520 148 562 418 41 262 -147 519 -410 561 -74 12 -94 12 -169 0z m262
                            -38 c133 -52 246 -175 288 -312 28 -91 23 -225 -10 -312 -52 -133 -175 -246
                            -312 -288 -91 -28 -225 -23 -312 10 -133 52 -246 175 -288 312 -28 91 -23 225
                            10 312 50 128 172 244 304 287 85 28 236 23 320 -9z
                            M400 725 l-24 -26 102 -102 102 -102 -102 -103 -103 -102 28 -27 27
                            -28 130 130 130 130 -127 127 c-70 71 -130 128 -134 128 -3 0 -16 -11 -29 -25z"
                                />
                            </g>
                        </svg>
                    </a>
                </div>

            </div>

            <div class="row justify-content-center">
                <ol class="carousel-indicators magic_indicators d-flex">
                    <li data-target="#slider-block-video" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-block-video" data-slide-to="1"></li>
                    <li data-target="#slider-block-video" data-slide-to="2"></li>
                </ol>
            </div>


        </div>
    </div>
</section>
<section class="block-how-I-work d-none d-md-block" id="block-how-I-work">
    <div class="container-fluid py-3 py-lg-5">

        <div class="row m-0 my-xl-3">
            <div class="col text-center p-0 my-3">
                <h2>Как я работаю?
                </h2>
            </div>
        </div>


        <div class="row m-0 justify-content-center">
            <div class="col col-lg-10 p-0 process-diagram">

                <div class="ico-how-i-work-1 text-center">
                    <img src="img/icon/how/ico-how-i-work-1.png" alt="">
                    <p><span>1.</span> Вы оставляете заявку
                        на сайте или звоните мне</p>
                </div>

                <div class="arrow-1 text-center">
                    <img src="img/icon/how/arrow-1.png" alt="">
                </div>

                <div class="ico-how-i-work-2 text-center">
                    <img src="img/icon/how/ico-how-i-work-2.png" alt="">
                    <p><span>2.</span> Я с вами обговариваю все
                        детали выступления</p>
                </div>

                <div class="arrow-2 text-center">
                    <img src="img/icon/how/arrow-2.png" alt="">
                </div>

                <div class="ico-how-i-work-3 text-center">
                    <img src="img/icon/how/ico-how-i-work-3.png" alt="">
                    <p><span>3.</span> С вами или с вашим ведущим
                        вносим выступление в сценарий мероприятия, учитывая все
                        ваши пожелания</p>
                </div>

                <div class="arrow-3 text-center">
                    <img src="img/icon/how/arrow-3.png" alt="">
                </div>

                <div class="ico-how-i-work-4 text-center">
                    <img src="img/icon/how/ico-how-i-work-4.png" alt="">
                    <p><span>4.</span> Я выступаю на вашем
                        мероприятии создавая атмосферу
                        веселья и удивления</p>
                </div>

                <div class="arrow-4 text-center">
                    <img src="img/icon/how/arrow-4.png" alt="">
                </div>

                <div class="ico-how-i-work-5 text-center">
                    <img src="img/icon/how/ico-how-i-work-5.png" alt="">
                    <p><span>5.</span> Вы оставляете отзыв
                        или комментарий обо мне и
                        получаете бонусный подарок</p>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="block-clients" id="block-clients">

    <div class="container-fluid py-3 py-lg-5">

        <div class="row my-xl-3">
            <div class="col text-center my-3">
                <h2>Мои довольные клиенты</h2>
            </div>
        </div>
        <div class="row justify-content-center px-md-5 px-xl-0">

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-mts.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-velcom.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-life.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-svyaznoy.jpg" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-belarusbank.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-vtb.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-wargaming.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-shangri-la.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-epam.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-maxbet.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-arbuz.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-dinamo-minsk.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-palace.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-zepter.png" alt="" class="img-fluid">
            </div>

            <div class="clients col-4 col-lg-3 col-xl-2 mx-xl-2 my-3">
                <img src="img/logo/logo-coca-cola.png" alt="" class="img-fluid">
            </div>

        </div>
</section>

<!--<section class="block-review" id="block-review">-->
<!---->
<!--    <div class="container py-3 py-md-5">-->
<!---->
<!--        <div class="row m-0">-->
<!--            <div class="col d-flex justify-content-center">-->
<!--                <svg-->
<!--                        xmlns="http://www.w3.org/2000/svg"-->
<!--                        xmlns:xlink="http://www.w3.org/1999/xlink"-->
<!--                        width="220px" height="37px">-->
<!--                    <image x="0px" y="0px" width="220px" height="37px"-->
<!--                           xlink:href="data:img/png;base64,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"/>-->
<!--                </svg>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col d-flex justify-content-center">-->
<!--                <h2 class="black-title text-center">Отзывы клиентов</h2>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form row my-2 my-md-5 p-md-3">-->
<!--            <div id="vk_comments"></div>-->
<!--            <script type="text/javascript">-->
<!--                VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});-->
<!--            </script>-->
<!--        </div>-->
<!---->
<!--</section>-->
<section class="block-footer" id="block-footer">
    <div class="container-fluid p-0 m-0 py-3 py-md-5">
        <div class="row m-0">

            <div class="col-md-6 col-lg-4">

                <div class="row justify-content-lg-center">

                    <div class="col-xl-10 text-center">

                        <h3>Оставьте свою заявку <img src="img/icon/magic.svg" alt="" width="30px" height="30px"></h3>


                        <form action="" method="post" id="ajax_form_2">
                            <input name="name" class="my-2 px-4 py-3" placeholder="Ваше имя" required>
                            <input name="phone_number" class="phone_input my-2 px-4 py-3 " type="text"
                                   placeholder="Ваш телефон" required>
                            <button class="text-uppercase mt-4 mb-2 px-4 py-3" type="submit">
                                Отправить заявку
                            </button>
                        </form>
                    </div>

                </div>

            </div>


            <div class="col-md-6 col-lg-4 d-flex flex-column justify-content-center mt-5 mt-md-0">


                <a class="phone text-center" href="tel:+375447405583">
                    <i class="fas fa-phone mr-3"></i><span class="number">+375 (44) 740 55 83</span>
                </a>


                <ul class="nav justify-content-center p-0 mt-3">
                    <li class="nav-item mx-1">
                        <a class="social rounded-circle"
                           href="https://www.instagram.com/justmymagic/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="social rounded-circle"
                           href="https://vk.com/focusnik_illusionist_minsk/" target="_blank">
                            <i class="fab fa-vk"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="social rounded-circle"
                           href="https://www.facebook.com/justmymagic/" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>

                    <li class="nav-item mx-1">
                        <a class="social rounded-circle"
                           href="https://t.me/justmymagic/" target="_blank">
                            <!--     Заменить ссылку https://t.me/justmymagic/-->
                            <i class="fab fa-telegram-plane"></i>
                            <!--Заменить fa-telegram-plane на fa-youtube-->
                        </a>
                    </li>

                    <li class="nav-item mx-1">
                        <a class="social rounded-circle"
                           href="https://ok.ru/profile/359503298009/" target="_blank">
                            <i class="fab fa-odnoklassniki"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>


        <div class="row mt-5 m-0">
            <div class="col col-md-4 px-1 py-0 px-md-4">
                <p>Дизайн сайта: <img src="/img/logo/logo_zorka.png" alt="" class="img-fluid"></p>
            </div>
            <div class="col col-md-4 text-md-center">
                <a href="#first-block" class="logo-link">
                    <svg width="30px" height="30px" version="1.1" id="ico-to-top" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)">
                    <path id="ico-to-top" fill="#564FD3" d="M9.2,405.8C42.6,206.8,220,37.2,427.1,5.7c266.1-41.4,519.7,149.1,561.1,419.2
                        C1029.6,691,839,944.6,568.9,986C306.8,1026.4,50.2,837.8,8.8,574.8C-3,500.7-3,480.7,9.2,405.8z M46.6,667.8
                        C98.3,800.9,221.1,914.2,358,956.5c90.9,28.2,224.9,23.5,312-9.3c133.1-51.7,246.4-174.5,288.7-311.4c28.2-90.9,23.5-224.9-9.3-312
                        C897.7,190.7,774.9,77.4,638,35.1C547.1,6.9,413,11.6,326,44.4C197.9,94.2,81.6,215.9,38.3,347.8C10.1,432.8,14.8,583.8,46.6,667.8
                            z"/>
                    <path id="ico-to-top" fill="#564FD3" d="M273.2,395.3l26.1-23.9L401,473.6l101.8,102.2L606,474.1l102.2-102.8l26.9,28.1l27.9,27.1L632.9,556.1
                        L502.6,685.8L375.9,558.6C305,488.4,248.1,428.3,248.1,424.3C248.2,421.3,259.2,408.3,273.2,395.3z"/>
                </g>
            </svg>
                </a>
            </div>
        </div>
    </div>
</section>


<!--Увеличение фото START-->
<script>
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
<!--Увеличение фото END-->

<!--Bootstrap js START-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<!--Bootstrap js END-->

<script src="js/jquery.maskedinput.min.js"></script>


<!--My javascript START-->
<script src="js/compression_menu.js"></script>
<script src="js/video.js"></script>
<script src="js/ajax.js"></script>
<script src="js/navigation_scrolling.js"></script>
<!--My javascript END-->
</body>
</html>