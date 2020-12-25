/* Article FructCode.com */
$(document).ready(function () {

    $(".phone_input").mask("+375 (99) 999-99-99");

    $("#ajax_form_1, #ajax_form_2, #ajax_form_3").submit(function (e) {

        let btnId = $(this).attr('id');
        let numberForm = btnId.charAt(btnId.length - 1);
        sendAjaxForm('ajax_form_' + numberForm, 'php/telegram.php');
        e.preventDefault();
        return false;

    });

});


function sendAjaxForm(ajax_form, url) {   
    $.ajax({
        url: url, //url страницы (telegram.php)
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект


        success: function (response) { //Данные отправлены успешно          
            result = $.parseJSON(response);
            console.log(result);

            let name = '';
            if (result.name) {
                name = ', ' + result.name;
            }

            swal(`Спасибо${name}`, "Я Вам перезвоню!");

        },

        error: function (response) { // Данные не отправлены
            swal('Ошибка. Данные не отправлены.');
            $().html('Ошибка. Данные не отправлены.');
        }
    });
}





