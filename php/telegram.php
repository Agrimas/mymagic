<?php

/* https://api.telegram.org/XXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */


$token = "XXXXXXXXXXXXXXXXXXXXXXX";

$chat_id = "XXXXXXXXXXXXXXXXXXXXXXX";

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

