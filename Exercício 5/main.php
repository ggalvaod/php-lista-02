<?php
$palpite = $_POST["palpite"];

$palpitecomputer = mt_rand(1,3);
$pedra = 1;
$papel = 2;
$tesoura = 3;


function verificar($palpite, $palpitecomputer){
    if ($palpite == 'papel' && $palpitecomputer == 2){
        echo 'voce ganhou';
    } elseif ($palpite == 'papel' && $palpitecomputer !=2){
        echo 'voce perdeu';
    } elseif ($palpite == 'pedra' && $palpitecomputer == 1){
        echo 'voce ganhou';
    }  elseif ($palpite == 'pedra' && $palpitecomputer !=1){
        echo 'voce perdeu';
    }  elseif ($palpite == 'tesoura' && $palpitecomputer == 3){
        echo 'voce ganhou';
    }  elseif ($palpite == 'tesoura' && $palpitecomputer !=3){
        echo 'voce perdeu';
    } else {
        echo 'insira pedra, papel ou tesoura';
    }
}

verificar($palpite, $palpitecomputer);

?>