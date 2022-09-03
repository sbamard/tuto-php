<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les objets"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    class Animal{
        public $nom;
        public $age;
        public $type;

        public function __construct($nom, $age, $type){
            $this->nom = $nom;
            $this->age = $age;
            $this->type = $type;
        }
    }

    $animal1 = new Animal("Mina",2,"chien");
    $animal2 = new Animal("Tya",7,"chat");
    $animal3 = new Animal("Milo",4,"chat");
    $animal4 = new Animal("Hocket",6,"chien");

    $animaux = [$animal1,$animal2,$animal3,$animal4];

    function afficherAnimalerie(){
        global $animaux;

        echo "------------------------------- <br />";
        foreach($animaux as $animal){
            echo "Nom : ". $animal->nom ."<br />";
            echo "Age : ". $animal->age ."<br />";
            echo "Type : ". $animal->type ."<br />";
            echo "------------------------------- <br />";
        }
    }
    function afficherTableauAnimauxType($type){
        global $animaux;

        echo "------------------------------- <br />";
        foreach($animaux as $animal){
            if($animal->type === $type){
                echo "Nom : ". $animal->nom ."<br />";
                echo "Age : ". $animal->age ."<br />";
                echo "Type : ". $animal->type ."<br />";
                echo "------------------------------- <br />";
            } 
        }
    }

?>

<div>
    <a href="?type=tous" class="btn btn-primary">tous</a>
    <a href="?type=chiens" class="btn btn-primary">chiens</a>
    <a href="?type=chats" class="btn btn-primary">chats</a>
</div>

<?php 
    if(isset($_GET['type']) && !empty($_GET['type']) && $_GET['type']!=="tous"){
        if($_GET['type'] === "chiens"){
            afficherTableauAnimauxType("chien");
        } else if($_GET['type'] === "chats"){
            afficherTableauAnimauxType("chat");
        }
    } else {
        afficherAnimalerie();
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
