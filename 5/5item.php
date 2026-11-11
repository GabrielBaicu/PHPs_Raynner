<?php

$numero_ped = $_POST["numero_ped"];
$codigo_produto = $_POST["codigo_produto"];
$quantidade = $_POST["quantidade"];
$valor_unitario = $_POST["valor_unitario"];

$total = $quantidade * $valor_unitario;

$linha = date('d/m/Y H:i:s') . " | " . $numero_ped . " | " . $codigo_produto . " | " . $quantidade . " | " . $valor_unitario . " | " . $total . PHP_EOL;

    file_put_contents("5item_pedidos.txt", $linha, FILE_APPEND);

    header("Location: 5item.html");

    exit;

?>