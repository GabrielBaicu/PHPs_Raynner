<?php

$nome = $_POST['nome'];
$pquan = $_POST['pquan'];
$telefone = $_POST['telefone'];
$cadas = $_POST['cadas'];
$vaci = $_POST['vaci'];
$checkup = $_POST['checkup'];

$linha = date('d/m/Y H:i:s') . " | " . $nome . " | " . $pquan . " | " . $telefone . " | " . $cadas . " | " . $vaci . " | " . $checkup . " | " . PHP_EOL;

file_put_contents("7pedro.txt", $linha, FILE_APPEND);

header("Location: 7pedro.html");

exit;
?>