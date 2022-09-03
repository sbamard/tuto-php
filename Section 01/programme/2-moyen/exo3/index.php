<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Les tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php


$animal1 = [
    'nom' => 'Minouchette',
    'age' => '15',
    'type' => 'chat'
];

$animal2 = [
    'nom' => 'Morea',
    'age' => '15',
    'type' => 'chat'
];

$animal3 = [
    'nom' => 'Simba',
    'age' => '22',
    'type' => 'chat'
];

$animal4 = [
    'nom' => 'Normandie',
    'age' => '1',
    'type' => 'chien'
];

$animal5 = [
    'nom' => 'Clochette',
    'age' => '8',
    'type' => 'chien'
];

$animal6 = [
    'nom' => 'Nina',
    'age' => '3',
    'type' => 'chien'
];

$animaux = [$animal1, $animal2, $animal3, $animal4, $animal5, $animal6];

function afficherAnimaux()
{
    global $animaux;
    echo "----------------------- <br />";
    foreach ($animaux as $animal) {
        foreach ($animal as $key => $valeur) {
            echo $key . " : " . $valeur . "<br />";
        }
        echo "----------------------- <br />";
    }
}

function afficherAnimauxType($type)
{
    global $animaux;
    echo "----------------------- <br />";
    foreach ($animaux as $animal) {
        if ($animal['type'] === $type) {
            foreach ($animal as $key => $value) {
                echo $key . " : " . $value . "<br />";
            }
            echo "----------------------- <br />";
        }
    }
}



?>

<div>
    <a href="?type=tous" class="btn btn-primary">Tous</a>
    <a href="?type=chien" class="btn btn-primary">Chiens</a>
    <a href="?type=chat" class="btn btn-primary">Chats</a>
</div>

<?php


if (isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] !== "tous") {
    if ($_GET['type'] === 'chien') {
        afficherAnimauxType('chien');
    } elseif ($_GET['type'] === 'chat') {
        afficherAnimauxType('chat');
    }
} else {
    afficherAnimaux();
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