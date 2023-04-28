<?php 
/**
 * 1) Você consegue ordenar?
 */

function ordernarArray($arr) {
    $frequencia = array_count_values($arr);
    uasort($arr, function($a, $b) use ($frequencia) {
        return ($frequencia[$a] == $frequencia[$b]) ? $a - $b : $frequencia[$a] - $frequencia[$b];
    });
    return $arr;
}

$arr = [3, 1, 2, 2, 4];
$arrayOrdenado = ordernarArray($arr);
echo "Caso de teste 01:\n";
echo "\n";
print_r($arrayOrdenado);
echo "\n" ;

$arr = [8, 5, 5, 5, 5, 1, 1, 1, 4, 4];
$arrayOrdenado = ordernarArray($arr);
echo "Caso de teste 02:\n";
echo "\n";
print_r($arrayOrdenado);
echo "\n";

$arr = [1, 2, 3, 7, 1, 8, 2];
$arrayOrdenado = ordernarArray($arr);
echo "Caso de teste 03:\n";
echo "\n";
print_r($arrayOrdenado);
echo "\n";

?>