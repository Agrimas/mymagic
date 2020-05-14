<?php

$stmt = $pdo->query('SELECT * FROM photos');

while ($row = $stmt->fetch())
{
    var_dump($row );
}
echo 1;
die();