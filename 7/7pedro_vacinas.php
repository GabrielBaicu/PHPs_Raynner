<?php

$cronic = $_POST['cronic'];
$doen = $_POST['doen'];
$regu = $_POST['regu'];
$medic = $_POST['medic'];
$vaci = $_POST['vaci'];
$checkup = $_POST['checkup'];

$linha = date('d/m/Y H:i:s') . " | " . $checkup . " | " . $vaci . " | " . $cronic . " | " . $doen . " | " . $regu . " | " . $medic . " | " . PHP_EOL;

file_put_contents("7pedro_vacinas.txt", $linha, FILE_APPEND);

header("Location: 7pedro_vacinas.html");

exit;
?>