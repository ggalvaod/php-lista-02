<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

if ($numero1 > $numero2){
    echo 'A é maior que B';
} elseif ($numero1 < $numero2) {
    echo 'A é menor que B';
} else {
    echo 'Os valores são iguais';
}




?>