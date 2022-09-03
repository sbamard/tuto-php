<?php

function afficherTableaux($monTableau)
{
    foreach ($monTableau as $value) {
        echo $value . " - ";
    }
}

function calculerMoyenne($monTableau)
{
    $total = 0;
    foreach ($monTableau as $value) {
        $total += $value;
    }
    $moyen = count($monTableau);

    $result = $total / $moyen;

    echo " La moyenne est de : " . $result;
}


function estTableauPair($monTableau)
{

    foreach ($monTableau as $value) {
        if ($value % 2 == 1) {
            return false;
        }
    }
    
}
