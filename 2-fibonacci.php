<?php 
/**
 * 2) Fibonacci
 */

function fibonacci_sequencia($n)
{   
    if ($n == 1) {
        $fibonacci = [0]; 
    } else {
        $fibonacci = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
        }
        sort($fibonacci);
    }
    return $fibonacci;
}

$n = 4;
$resultado = fibonacci_sequencia($n);
echo "Caso de teste 01:\n";
echo "\n";
$resultadoFormatado = implode(",", $resultado);
echo "$resultadoFormatado\n";
echo "\n";

$n = 5;
$resultado = fibonacci_sequencia($n);
echo "Caso de teste 02:\n";
echo "\n";
$resultadoFormatado = implode(",", $resultado);
echo "$resultadoFormatado\n";
echo "\n";

$n = 8;
$resultado = fibonacci_sequencia($n);
echo "Caso de teste 03:\n";
echo "\n";
$resultadoFormatado = implode(",", $resultado);
echo "$resultadoFormatado\n";
echo "\n";

$n = 1;
$resultado = fibonacci_sequencia($n);
echo "Caso de teste 04:\n";
echo "\n";
$resultadoFormatado = implode(",", $resultado);
echo "$resultadoFormatado\n";
echo "\n";

$n = 3;
$resultado = fibonacci_sequencia($n);
echo "Caso de teste 05:\n";
echo "\n";
$resultadoFormatado = implode(",", $resultado);
echo "$resultadoFormatado\n";
echo "\n";

$n = 10;
$resultado = fibonacci_sequencia($n);
echo "Caso de teste 06:\n";
echo "\n";
$resultadoFormatado = implode(",", $resultado);
echo "$resultadoFormatado\n";
echo "\n";

?>