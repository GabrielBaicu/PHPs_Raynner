<?php
// declaração de variavel
$N1 = $_POST['N1'];
$N2 = $_POST['N2'];
$OPE = $_POST['OPE'];

$resultado = 0;

// if else para realizar a conta
if ($OPE == "soma") {
    $resultado = $N1 + $N2;
} elseif ($OPE == "sub") {
    $resultado = $N1 - $N2;
} elseif ($OPE == "mult") {
    $resultado = $N1 * $N2;
} elseif ($OPE == "div") {
    $resultado = $N1 / $N2;
}

// criação do txt
$linhas = $N1 . " | " . $OPE . " | " . $N2 . " | " . $resultado . PHP_EOL;

file_put_contents("11Soma.txt", $linhas, FILE_APPEND);

header("Location: 11Calculadora_melhor.html");

?>