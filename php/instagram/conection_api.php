<?php
$token = $_SERVER['INSTAGRAM_TOKEN'];
define("LINK_GET_MEDIA",'https://graph.instagram.com/me/media?fields=caption,media_type,media_url,permalink&access_token=' . $token,true);
define("LINK_REFRESH_TOKEN",'https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=' . $token,true);
//Выполнение запроса
function queryForInstagramApi($link)
{
    $c_podkl = curl_init(); // инициализируем соединение
    curl_setopt($c_podkl, CURLOPT_URL, $link); // к этому URL будем подключаться
    curl_setopt($c_podkl, CURLOPT_RETURNTRANSFER, 1); // возвращать, а не распечатываь результат
    curl_setopt($c_podkl, CURLOPT_TIMEOUT, 20); // таймаут
    $json_result = curl_exec($c_podkl); // подключаемся, получаем данные
    curl_close($c_podkl); // закрываем соединение
    return json_decode($json_result); // декодируем из json и возвращаем результат
}








