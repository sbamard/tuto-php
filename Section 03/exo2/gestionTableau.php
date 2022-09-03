<?php
function afficherTableau($tab){
    echo "<div>";
    for($i=0;$i < count($tab);$i++){
        echo ($i===0) ? "" : " - ";
        echo $tab[$i];
    }
    echo "</div>";
}

function calculerMoyenne($tab){
    $resultat = 0;
    foreach($tab as $valeur){
        $resultat += $valeur;
    }
    return $resultat / count($tab);
}

function estTableauPair($tab){
    foreach($tab as $valeur){
        if($valeur % 2 !== 0) return false;
    }
    return true;
}