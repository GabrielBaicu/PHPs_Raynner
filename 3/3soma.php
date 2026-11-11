<?php

$N1A = $_POST['N1A'];
$N2A = $_POST['N2A'];
$OPER = $_POST['OPER'];

$resultado = 0;
echo "N1A = : " . $N1A . "<br>";
echo "N2A = : " . $N2A . "<br>";
echo "OPER = : " . $OPER . "<br>";

switch ($OPER) {
    case 'soma':
        $resultado = $N1A + $N2A;
        echo "Resultado da soma: " . $resultado . "<br>";
        break;
    case 'sub':
        $resultado = $N1A - $N2A;
        echo "Resultado da subtração: " . $resultado . "<br>";
        break;
    case 'mult':
        $resultado = $N1A * $N2A;
        echo "Resultado da multiplicação: " . $resultado . "<br>";
        break;
    case 'div':
        if ($N2A != 0) {
            $resultado = $N1A / $N2A;
            echo "Resultado da divisão: " . $resultado . "<br>";
        } else {
            echo "Erro: Divisão por zero não é permitida.";
            exit;
        }
        break;
    default:
        echo "Operação inválida.";
        exit;
}

?>