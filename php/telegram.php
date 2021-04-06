<?php
include dirname(dirname(__FILE__)) . '/php/form.php';

$token = TELEGRAM_TOKEN;

$chat_id = TELEGRAM_CHAT_ID;

$txt = '';

$arr = [];

foreach ($_POST as $key => $value) {
	if ($value) {
		$arr[$key] = addslashes(htmlspecialchars_decode($value));
		$txt .= "<b>" . $key . "</b> " . $value . "%0A";
	}
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text=$txt", "r");

if ($sendToTelegram) {
	echo json_encode($arr);
}
