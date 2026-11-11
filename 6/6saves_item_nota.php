<?php

$name = $_POST['name'];
$cod = $_POST['cod'];
$val = $_POST['val'];
$quan = $_POST['quan'];
$pag = $_POST['pag'];
$descri = $_POST['descri'];
$total = $_POST['total'];

$total = ($quan * $val);

$linha = date('d/m/Y H:i:s') . " | Nome: " . $name . " | Codigo: " . $cod . " | Valor: " . $val . " | Quantidade: " . $quan . " | Pagamento: " . $pag . " | Descrição: " . $descri . " | Valor total: " . $total . " | " . PHP_EOL;

file_put_contents("6saves_item_nota.txt", $linha, FILE_APPEND);

header("Location: 6cadastro_clientes.html");

exit;
?>