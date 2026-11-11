<?php

$numero_pedido = $_POST["numero_pedido"];
$data_pedido = $_POST["data_pedido"];
$tabela_pedido = $_POST["tabela_pedido"];
$nome_cliente = $_POST["nome_cliente"];
$endereco_cliente = $_POST["endereco_cliente"]; 
$cep_cliente = $_POST["cep_cliente"];
$cidade_cliente = $_POST["cidade_cliente"];
$estado_cliente = $_POST["estado_cliente"];
$telefone_cliente = $_POST["telefone_cliente"];
$data_entrega = $_POST["data_entrega"];

$linha = date('d/m/Y H:i:s') . " | " . $nome_cliente . " | " . $endereco_cliente . " | " . $cep_cliente . " | " . $cidade_cliente . " | " . $estado_cliente . " | " . $telefone_cliente . " | " . $data_entrega . PHP_EOL;

file_put_contents("5tabela_pedidos.txt", $linha, FILE_APPEND);

header("Location: 5item.html");

exit;

?>