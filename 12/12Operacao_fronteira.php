<?php
// declaração de variavel
$nomeP = $_POST['nomeP'];
$idp = $_POST['idp'];
$escolha = $_POST['escolha'];
$dtn = $_POST['dtn'];
$dtv = $_POST['dtv'];

$ide = $_POST['ide'];
$nomeE = $_POST['nomeE'];
$dtvE = $_POST['dtvE'];
$mot = $_POST['mot'];

// criação do txt
$linhas = $nomeP . " | " . $idp . " | " . $escolha . " | " . $dtn . " | " . $dtv . " | " . $ide . " | " . $nomeE . " | " . $dtvE . " | " . $mot . PHP_EOL;

file_put_contents("12Operacao.txt", $linhas, FILE_APPEND);

header("Location: 12Operacao_fronteira.html");

?>