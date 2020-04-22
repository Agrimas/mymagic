/* Article FructCode.com */
$(document).ready(function () {

    $(".phone_input").mask("+375 (99) 999-99-99");





    function required(){
        var first = document.forms["myForm"].elements["firstname"].value;
        var last = document.forms["myForm"].elements["lastname"].value;
        var email = document.forms["myForm"].elements["email"].value;
        var message = document.forms["myForm"].elements["message"].value;

        if(first == null || first == "" || last == null || last == ""){
            alert("First and last name fields are required.");
            return false;
        }
        else if(email == null || email == ""){
            alert('An email address is required.');
            return false;
        }
        else if(message == null || message == ""){
            alert('Message feild cannot be left blank.');
            return false;
        }else{return true;}
    }





    $("#ajax_form_1, #ajax_form_2, #ajax_form_3").submit(function (e) {

        var btnId = $(this).attr('id');
        var numberForm = btnId.charAt(btnId.length - 1);

        sendAjaxForm('result_form', 'ajax_form_' + numberForm, 'php/telegram.php');

        e.preventDefault();

        return false;

    });


});


function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url: url, //url страницы (telegram.php)
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект


        success: function (response) { //Данные отправлены успешно

            result = $.parseJSON(response);

            var name = '';
            if (result.name != null) {
                name = ", " + result.name
            }

            swal("Спасибо" + name, "Я Вам перезвоню!");

        },
        error: function (response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}





