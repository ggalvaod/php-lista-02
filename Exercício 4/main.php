<?php
$ponto1 = $_POST["ponto1"];
$ponto2 = $_POST["ponto2"];
$ponto3 = $_POST["ponto3"];
    

if ($ponto1 == $ponto2 && $ponto2 == $ponto3){
    echo 'Triângulo equilátero';
} elseif ($ponto1 == $ponto2 || $ponto2 == $ponto3 || $ponto1 == $ponto3) {
    echo 'Triângulo isóceles';
} else {
    echo 'Triângulo escaleno';
}




?>