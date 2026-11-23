<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$país = $_POST["país"];
$estado = $_POST["estado"];
$endereco = $_POST["endereco"];
$CPF = $_POST["CPF"];

$linhas = date('d/m/Y H:i:s') . " | " . $nome . " | " . $email . " | " . $país . " | " . $estado . " | " . $endereco . " | " . $CPF . PHP_EOL;

    file_put_contents("8teste.txt", $linhas, FILE_APPEND);

    header("Location: 8index.html");

    exit;

?>