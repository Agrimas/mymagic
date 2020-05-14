<?php
$daysActive = date_diff(date_create(), date_create($dateGetToken))->d;

//Перезапись env файла
function rewriteToken($token, $newToken, $dateGetToken, $newDateGetToken)
{
    $path = '.env';
    file_put_contents($path, str_replace(
        "INSTAGRAM_TOKEN = \"$token\"\r\nINSTAGRAM_DATE = \"$dateGetToken\"",
        "INSTAGRAM_TOKEN = \"$newToken\"\r\nINSTAGRAM_DATE = \"$newDateGetToken\"",
        file_get_contents($path)));
}

//Получить количество дней активности
function getDaysAction($date)
{
    return date_diff(date_create(), date_create($date))->d;
}

//Проверка на дни
if (getDaysAction($dateGetToken) > 3) {
    $result = queryForInstagramApi(LINK_REFRESH_TOKEN);

    $newToken = $result->access_token;
    $newDateGetToken = date('Y-m-d');

    rewriteToken($token, $newToken, $dateGetToken, $newDateGetToken);

    $token = $newToken;
}
