/* Article FructCode.com */
$( document ).ready(function() {








    $("#btn_tel_1").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form_1', 'php/telegram.php');
            return false;
        }
    );

    $("#btn_tel_2").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form_2', 'php/telegram.php');
            return false;
        }
    );

});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (telegram.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект

        success: function(response) { //Данные отправлены успешно

            result = $.parseJSON(response);

            var name ='';
            if(result.name != null){
                name = ", " + result.name
            }

            swal("Спасибо" + name, "Я Вам перезвоню!");

        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}