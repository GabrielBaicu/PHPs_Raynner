<!-- criação da tabela -->
<?php

$linhas = file("10Notas.txt", FILE_IGNORE_NEW_LINES);
?>

<table border="1">
  <tr>
    <th>Aluno</th>
    <th>Nota 1</th>
    <th>Nota 2</th>
    <th>Média</th>
    <th>Resultado</th>
  </tr>

  <?php foreach ($linhas as $linha) {

    $partes = explode(" | ", $linha);
    $n1 = (float) $partes[1];
    $n2 = (float) $partes[2];
    $media = ($partes[1] + $partes[2]) / 2;
    ?>

    <?php

if ($media >= 6.75) {
  $partes[3] = "Aprovado";
  $cor = '#0000ff';
} else {
  $partes[3] = "Reprovado";
  $cor = '#ff0000';
}
?>

    <tr>
      <td><?= $partes[0] ?></td>
      <td><?= $partes[1] ?></td>
      <td><?= $partes[2] ?></td>
      <td style="color: <?= $cor ?>"><?= $media ?></td>
      <td style="color: <?= $cor ?>"><?= $partes[3] ?></td>
    </tr>
  <?php } ?>
</table>

