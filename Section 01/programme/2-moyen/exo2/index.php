<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
require 'mesTableaux.php';
?>

<!-- mettre ici le code -->

<div class="row text-center">
    <div class="col">
        <h2>Tableau1</h2>
        <?php
        $tab1 = [2, 6, 10, 20, 9, 14];

        afficherTableaux($tab1);
        calculerMoyenne($tab1);

        if (estTableauPair($tab1) == false) {
            echo " Le tableau ne contient pas que des paires.";
        } else {
            echo " Le tableau ne contient que des valeurs paires";
        }
        ?>
    </div>

    <div class="col">
        <h2>Tableau2</h2>
        <?php
        $tab2 = [4, 8, 2, 26, 18, 14];
        afficherTableaux($tab2);
        calculerMoyenne($tab2);
        if (estTableauPair($tab2)) {
            echo " Le tableau ne contient pas que des paires.";
        } else {
            echo " Le tableau ne contient que des valeurs paires";
        }
        ?>
    </div>
</div>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>