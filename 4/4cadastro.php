<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$deficiencia = $_POST['deficiencia'];
$escolaridade = $_POST['escolaridade'];

$linha = date('d/m/Y H:i:s') . " | " . $nome . " | " . $email . " | " . $telefone . " | " . $nascimento . " | " . $cpf . " | " . $endereco . " | " . $cidade . " | " . $estado . " | " . $deficiencia . " | " . $escolaridade . PHP_EOL;

file_put_contents("4cadastros.txt", $linha, FILE_APPEND);

header("Location: 4cadatro.html");

exit;
?>