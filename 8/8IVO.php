
<?php
// 1) Lê o arquivo e guarda cada linha dentro de um array
$linhas = file("8teste.txt", FILE_IGNORE_NEW_LINES);
?>

<table border="1">
  <tr>
    <th>Data e Hora</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>País</th>
    <th>Estado</th>
    <th>Endereço</th>
    <th>CPF</th>
  </tr>

  <?php foreach ($linhas as $linha) {
   
      // 2) Separa a linha em partes usando o ";"
      $partes = explode( " | " , $linha);
    ?>
    <tr>
      <td><?= $partes[0] ?></td>
      <td><?= $partes[1] ?></td>
      <td><?= $partes[2] ?></td>
      <td><?= $partes[3] ?></td>
      <td><?= $partes[4] ?></td>
      <td><?= $partes[5] ?></td>
      <td><?= $partes[6] ?></td>
    </tr>
  <?php } ?>

</table>