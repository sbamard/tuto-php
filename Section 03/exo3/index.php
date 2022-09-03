<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $animal1 = [
        "nom" => "Mina",
        "age" => 2,
        "type" => "chien"
    ];
    $animal2 = [
        "nom" => "Tya",
        "age" => 7,
        "type" => "chat"
    ];
    $animal3 = [
        "nom" => "Milo",
        "age" => 4,
        "type" => "chat"
    ];
    $animal4 = [
        "nom" => "Hocket",
        "age" => 6,
        "type" => "chien"
    ];

    $animaux = [$animal1,$animal2,$animal3,$animal4];

    function afficherAnimalerie(){
        global $animaux;

        echo "------------------------------- <br />";
        foreach($animaux as $animal){
            foreach($animal as $key => $valeur){
                echo $key . " : " . $valeur . "<br />";
            }
            echo "------------------------------- <br />";
        }
    }
    function afficherTableauAnimauxType($type){
        global $animaux;

        echo "------------------------------- <br />";
        foreach($animaux as $animal){
            if($animal['type'] === $type){
                foreach($animal as $key => $valeur){
                    echo $key . " : " . $valeur . "<br />";
                }
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
