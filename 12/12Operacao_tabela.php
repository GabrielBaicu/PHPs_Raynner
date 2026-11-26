<?php
// Le o arquivo e guarda cada linha dentro de um array
$linhas = file("12Operacao.txt", FILE_IGNORE_NEW_LINES);
?>

<table border="1">
  <tr>
    <th>Nome</th>
    <th>Id</th>
    <th>Nacionalidade</th>
    <th>Data de Nascimento</th>
    <th>Data de Validade</th>
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
      <td><?= $partes[4] ?></td>
    </tr>
  <?php } ?>
</table>

<table border="1"></table>

  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Data de Validade</th>
    <th>Motivo da entrada</th>
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