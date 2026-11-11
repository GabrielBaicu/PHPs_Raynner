<?php

$Nome = $_POST['Nome'];
$CNPJ = $_POST['CNPJ'];
$Telefone = $_POST['Telefone'];
$Endereco = $_POST['Endereco'];
$Cidade = $_POST['Cidade'];
$Estado = $_POST['Estado'];
$CPF = $_POST['CPF'];

$linha = date('d/m/Y H:i:s') . " | " . $Nome . " | " . $CPF . " | " . $CNPJ . "|" . $Telefone . " | " . $Endereco . " | " . $Cidade . " | " . $Estado . " | " . PHP_EOL;

file_put_contents("6saves_clientes.txt", $linha, FILE_APPEND);

header("Location: 6cadastro_nota.html");

exit;
?>