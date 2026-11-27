<?php
// Lê o arquivo e guarda cada linha dentro de um array 
$linhas = file("12Operacao.txt", FILE_IGNORE_NEW_LINES);

date_default_timezone_set('America/Sao_Paulo');
$dataAtual = date('d/m/Y');
$hojeObj = new DateTime('today'); 

$erros = [];

function dataVencida($dataTexto, $hojeObj) {
    $dataTexto = trim($dataTexto);
    $dataObj = DateTime::createFromFormat('Y-m-d', $dataTexto);
    
    if ($dataObj) {
        $dataObj->setTime(0, 0, 0);
        return $dataObj < $hojeObj; 
    }
    return false;
}
?>

<div style="text-align: left; margin-bottom: 15px;">
    <h1>Data Atual: <?= $dataAtual ?></h1>
</div>

<table border="1">
  <tr>
    <th style="background-color:#0095ff">Nome</th>
    <th style="background-color:#0095ff">Id</th>
    <th style="background-color:#0095ff">Nacionalidade</th>
    <th style="background-color:#0095ff">Data de Nascimento</th>
    <th style="background-color:#0095ff">Data de Validade</th>
    <th>----</th>
    <th style="background-color:#ff6666">Id</th>
    <th style="background-color:#ff6666">Nome</th>
    <th style="background-color:#ff6666">Data de Validade</th>
    <th style="background-color:#ff6666">Motivo da entrada</th>
  </tr>

  <?php foreach ($linhas as $numeroLinha => $linha): 
    // Separa a linha em partes usando " | "
    $partes = array_map('trim', explode(" | ", $linha));
    $linhaExibicao = $numeroLinha + 1;

    // 1. Valida o Nome 
    if ($partes[0] == $partes[7]) {
      $corNome = '#0000ff';
    } else {
      $corNome = '#ff0000';
      $erros[] = "Linha {$linhaExibicao}: Nome divergente ('{$partes[0]}' diferente de '{$partes[7]}').";
    }

    // 2. Valida o ID 
    if ($partes[1] == $partes[6]) {
      $corId = '#0000ff';
    } else {
      $corId = '#ff0000';
      $erros[] = "Linha {$linhaExibicao}: ID divergente ('{$partes[1]}' diferente de '{$partes[6]}').";
    }

    // 3. Valida Data de Validade passaporte
    if (dataVencida($partes[4], $hojeObj)) {
      $corValidade1 = '#ff0000';
      $erros[] = "Linha {$linhaExibicao} ({$partes[0]}): Data de Validade do passaporte vencida ({$partes[4]}).";
    } else {
      $corValidade1 = '#0000ff';
    }

    // 4. Valida Data de Validade Passe de entrada 
    if (dataVencida($partes[8], $hojeObj)) {
      $corValidade2 = '#ff0000';
      $erros[] = "Linha {$linhaExibicao} ({$partes[0]}): Data de Validade do passe de entrada vencida ({$partes[8]}).";
    } else {
      $corValidade2 = '#0000ff';
    }
  ?>

    <tr>
      <td style="color: <?= $corNome ?>"><?= $partes[0] ?></td>
      <td style="color: <?= $corId ?>"><?= $partes[1] ?></td>
      <td style="color:#000000"><?= $partes[2] ?></td>
      <td style="color:#000000"><?= $partes[3] ?></td>
      <td style="color: <?= $corValidade1 ?>"><?= $partes[4] ?></td>
      <td><?= $partes[5] ?></td>
      <td style="color: <?= $corId ?>"><?= $partes[6] ?></td>
      <td style="color: <?= $corNome ?>"><?= $partes[7] ?></td>
      <td style="color: <?= $corValidade2 ?>"><?= $partes[8] ?></td>
      <td style="color:#000000"><?= $partes[9] ?></td>
    </tr>
  <?php endforeach; ?>
</table>
