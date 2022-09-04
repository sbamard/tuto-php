<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : POO"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php


class animal
{
    public $nom;
    public $age;
    public $type;

    public function __construct($nom, $age, $type)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }
}

$animal1 = new animal("Minouchette", 16, "chat");
$animal2 = new animal("Momo", 15, "chat");
$animal3 = new animal("Nono", 4, "chien");
$animal4 = new animal("Nina", 5, "chien");

$animaux = [$animal1, $animal2, $animal3, $animal4];

function afficherAnimaux()
{
    global $animaux;
    echo "----------------------- <br />";
    foreach ($animaux as $animal) {
        echo "Nom : " . $animal->nom . "<br />";
        echo "Age : " . $animal->age . "<br />";
        echo "Type : " . $animal->type . "<br />";
        echo "----------------------- <br />";
    }
}

function afficherAnimauxType($type)
{
    global $animaux;
    echo "----------------------- <br />";
    foreach ($animaux as $animal) {
        if ($animal->type === $type) {
            echo "Nom : " . $animal->nom . "<br />";
            echo "Age : " . $animal->age . "<br />";
            echo "Type : " . $animal->type . "<br />";
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