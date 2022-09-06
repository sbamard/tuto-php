<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Manipuler 2 classes"; //Mettre le nom du titre de la page que vous voulez
require 'player.php';
require 'weapon.php';
?>

<!-- mettre ici le code -->

<?php

$arme1 = new weapon('Hache', 10);
$arme2 = new weapon('Épée', 8);

$player1 = new Player();
$player1->setNom('Simon');
$player1->setIdArme($arme1->getId());
echo $player1;

echo '<br />';

$player2 = new Player();
$player2->setNom('Alice');
$player2->setIdArme($arme2->getId());
echo $player2;

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>