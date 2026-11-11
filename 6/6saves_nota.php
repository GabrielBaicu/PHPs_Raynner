<?php

$nome = $_POST['nome'];
$CNPJ = $_POST['CNPJ'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$pagamento = $_POST['pagamento'];
$ICMS = $_POST['ICMS'];
$IPI = $_POST['IPI'];

$linha = date('d/m/Y H:i:s') . " | " . $Nome . " | " . $CNPJ . " | " . $telefone . " | " . $endereco . " | " . $cidade . " | " . $estado . " | " . $pagamento . " | " . $ICMS . " | " . $IPI . " | " . PHP_EOL;

file_put_contents("6saves_nota.txt", $linha, FILE_APPEND);

header('Location: 6cadastro_itens_nota.html');

?>