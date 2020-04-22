<?php


//https://api.telegram.org/botxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx/getUpdates


$token = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";

$chat_id = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";

foreach ($_POST as $key => $value) {
    if ($value) {
        $arr[$key] = $value;
        $txt .= "<b>" . $key . "</b> " . $value . "%0A";
    }
}


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {

    echo json_encode($arr);

}

