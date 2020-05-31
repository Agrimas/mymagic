<?php
include '../../autoload.php';
include 'conection_api.php';

//Перезапись env файла
function rewriteToken($token, $newToken)
{
    $path = '../../.env';
    file_put_contents($path, str_replace(
        "INSTAGRAM_TOKEN = \"$token\"",
        "INSTAGRAM_TOKEN = \"$newToken\"",
        file_get_contents($path)));
}

$result = queryForInstagramApi(LINK_REFRESH_TOKEN);
$newToken = $result->access_token;

rewriteToken($token, $newToken);
