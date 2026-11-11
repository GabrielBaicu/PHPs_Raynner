<?php

$nome = $_POST['nome'];
$data = $_POST['data'];
$funcao = $_POST['funcao'];
$nivel = $_POST['nivel'];
$setor = $_POST['setor'];
$tel = $_POST['tel'];

$linha = date('d/m/Y H:i:s') . " | " . $checkup . " | " . $vaci . " | " . $cronic . " | " . $doen . " | " . $regu . " | " . $medic . " | " . PHP_EOL;

file_put_contents("7,5gabriel.txt", $linha, FILE_APPEND);

header("Location: 7,5gabriel.html");

exit;
?>