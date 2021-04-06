$(document).ready(function () {
    $("input[name='phone']").mask("+375 (99) 999-99-99");

    const forms = document.forms;
    const regexp = /(?:\+375|80)\s?\(?\d\d\)?\s?\d\d(?:\d[\-\s]\d\d[\-\s]\d\d|[\-\s]\d\d[\-\s]\d\d\d|\d{5})/;
    const errorBlock = document.createElement('div');
    errorBlock.className = 'error';
    errorBlock.innerHTML = 'Неверный формат номера';

    for (let i = 0; i < forms.length; i++) {
        let form = forms[i];
        form.onsubmit = function (event) {
            let phone = this.phone;
            if (regexp.test(phone.value)) {
                errorBlock.remove();
                sendAjaxForm(form.id);
            } else {
                phone.before(errorBlock)
            }
            event.preventDefault()
        }
    }

    let formModal = $('#form-container > form').clone()[0];
    $('#form-container').remove();
    $('.modal-form').click(function () {
        swal({
            title: 'Заказать звонок',
            content: formModal,
            buttons: ["Отмена", "Отправить!"],
        })

        $("input[name='phone']").mask("+375 (99) 999-99-99");
        let target = $('.swal-button--confirm')[0];
        target.addEventListener("click", handleClick);

        function handleClick(event) {
            sendAjaxForm('my-Form');
            target.removeEventListener("click", handleClick);
        };
    }
    );

    function sendAjaxForm(id) {
        $.ajax({
            url: '../php/telegram.php', //url страницы (telegram.php)
            type: "POST", //метод отправки
            dataType: "json", //формат данных
            data: $(`#${id}`).serialize(),  // Сеарилизуем объект

            success: function (response) { //Данные отправлены успешно
                console.log(response);
                swal("Спасибо, я Вам перезвоню!");
            },

            error: function (response) { // Данные не отправлены
                swal('Ошибка. Данные не отправлены.');
                $().html('Ошибка. Данные не отправлены.');
            }
        });
    }
});