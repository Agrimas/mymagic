<?php

/* https://api.telegram.org/bot???????????/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */


if(isset($_POST['name'])){
    $name = $_POST['name'];
}
$phone = $_POST['phone_number'];


$token = "";

$chat_id = "";

$arr = array(
    'name' => $name,
    'phone_number' => $phone,

);

foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {

    echo json_encode($arr);

}

