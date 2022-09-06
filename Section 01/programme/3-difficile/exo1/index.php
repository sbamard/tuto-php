<?php ob_start(); //NE PAS MODIFIER 
$titre = "Armes médieval"; //Mettre le nom du titre de la page que vous voulez=
?>

<!-- mettre ici le code -->

<?php

class arme{
    public $nom;
    public $description;
    public $image;

    public function __construct($nom, $description, $image)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->image = $image;
    }
    public function __toString()
    {
        $txt = '<img src="sources/'.$this->image . '" />';
        return $txt;
    }
    public function getImage(){return $this->image;}
}

$arme1 = new arme("Épée", "Une arme a une main", "epee/epee1.png");

echo $arme1;

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>