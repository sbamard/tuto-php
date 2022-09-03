<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 7 : Manipuler deux classes"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require "Player.class.php";
require "Arme.class.php";
$arme1 = new Arme("Hache",10);
$arme2 = new Arme("Epée",8);

$joueur1 = new Player();
$joueur1->setNom("Milo");
$joueur1->setIdArme($arme1->getId());
echo $joueur1;
echo "------------------------- <br />";
$joueur2 = new Player();
$joueur2->setNom("Tya");
$joueur2->setIdArme($arme2->getId());
echo $joueur2;
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
