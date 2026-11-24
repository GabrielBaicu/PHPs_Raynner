<!-- Criação do txt -->
<?php

$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

$linhas = $nome . " | " . $nota1 . " | " . $nota2 . " | " . PHP_EOL;

file_put_contents("10Notas.txt", $linhas, FILE_APPEND);

header("Location: 10lançamento_notas.html");

?>