<!-- Criação do txt -->
<?php

$cod = $_POST["cod"];
$desc = $_POST["desc"];
$valor = $_POST["valor"];
$qtd = $_POST["qtd"];

$linhas = date('d/m/Y') . " | " . $cod . " | " . $desc . " | " . $valor . " | " . $qtd . " | " . PHP_EOL;

file_put_contents("9Notas.txt", $linhas, FILE_APPEND);

?>
<!-- criação da tabela -->
<?php

$linhas = file("9Notas.txt", FILE_IGNORE_NEW_LINES);
$soma = 0;
?>

<table border="1">
  <tr>
    <th>Data</th>
    <th>Código</th>
    <th>Descrição</th>
    <th>Valor</th>
    <th>Quantidade</th>
    <th>Total</th>
  </tr>
  
  <?php foreach ($linhas as $linha) {
    
    $partes = explode(" | ", $linha);
    $partes[5] = $partes[3] * $partes[4];
    $soma = $soma + $partes[5];
    ?>

<tr>
  <td><?= $partes[0] ?></td>
  <td><?= $partes[1] ?></td>
  <td><?= $partes[2] ?></td>
  <td><?= $partes[3] ?></td>
  <td><?= $partes[4] ?></td>
  <td><?= $partes[5] ?></td>
</tr>
<?php } ?>
<tr>
  <td colspan="4"></td>
  <td>SomaTotal:</td>
  <td><?= $soma ?></td>
</tr>

</table>