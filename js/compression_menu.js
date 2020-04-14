// Функция сжатия меню START

function compressionMenu() {
    $(window).scroll(function () {
        // Скрыть
        if ($(this).scrollTop() > 1) {

            $('.second-row').fadeOut('fast', function () {
                document.getElementById("header").style.height = '50px';
            });
            $('#menu_phone').fadeIn('slow');

        } else {
            // Показать
            document.getElementById("header").style.height = '100px';

            $('#menu_phone').fadeOut('fast');
            $('.second-row').fadeIn('slow');

        }
    });
}

// Функция сжатия меню END



$(document).ready(function () {

    // При изначальной ширине START

    if ($(window).width() > 992) {
        document.getElementById("header").style.height = "100px";
        compressionMenu();
    }

    if ($(window).width() < 992) {
        document.getElementById("second-row").style.display = "none";
    }

    // При изначальной ширине END


    // При ширине после переворота START

    window.addEventListener("resize", function () {

        if ($(window).width() < 992) {
            $(window).off('scroll');
            document.getElementById("header").style.height = "auto";
            document.getElementById("second-row").style.display = "none";
        }

        if ($(window).width() > 992) {
            document.getElementById("header").style.height = "100px";
            document.getElementById("second-row").style.display = "flex";
            compressionMenu();
        }

    }, false);

    // При ширине после переворота END

});
