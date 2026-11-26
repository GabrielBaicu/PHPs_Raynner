<?php
// Le o arquivo e guarda cada linha dentro de um array
$linhas = file("11Soma.txt", FILE_IGNORE_NEW_LINES);
?>

<table border="1">
  <tr>
    <th>Valor 1</th>
    <th>Operação</th>
    <th>Valor 2</th>
    <th>Resultado</th>
  </tr>

  <?php foreach ($linhas as $linha) {
   
      // Separa a linha em partes usando o ";"
      $partes = explode( " | " , $linha);
    ?>
    <tr>
      <td><?= $partes[0] ?></td>
      <td><?= $partes[1] ?></td>
      <td><?= $partes[2] ?></td>
      <td><?= $partes[3] ?></td>
    </tr>
  <?php } ?>

</table>