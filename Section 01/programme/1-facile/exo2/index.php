<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et ternaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$nom = "Marie";
$age = 30;
$homme = false;

$nom2 = "Pierre";
$age2 = 32;
$homme2 = true;

echo $nom . " a " . $age . " ans";
echo (!$homme) ? " et c'est une femme" : " et c'est un homme";

echo "<br />";

echo $nom2 . " a " . $age2 . " ans et c'est un ";

if ($homme2 == true) {
    echo "homme";
}



?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>