<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Attribut statique"; //Mettre le nom du titre de la page que vous voulez
require 'gestionMaison.php';
?>

<!-- mettre ici le code -->

<?php

$maison1 = new Maison(2018, 3, 98);
$maison2 = new Maison(1998, 2, 120);
$maison3 = new Maison(2022, 7, 300);

$maisons = [$maison1, $maison2, $maison3]
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Nombre de chambre</th>
            <th scope="col">Surface</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($maisons as $maison) : ?>
            <tr>
                <td><?= $maison->getId(); ?></td>
                <td><?= $maison->getDate(); ?></td>
                <td><?= $maison->getNbChambres(); ?></td>
                <td><?= $maison->getSurface(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>