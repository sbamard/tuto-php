<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Private & Getters"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

class livres
{
    private $nom; 
    private $edition;
    private $auteur;
    private $dateParution;

    public function getEdition()
    {
        return $this->edition;
    }

    public function getDateParution()
    {
        return $this->dateParution;
    }

    public function __construct($nom, $edition, $auteur, $dateParution)
    {
        $this->nom = $nom;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->dateParution = $dateParution;
    }
    public function __toString()
    {
        $txt = "Nom : " . $this->nom . "<br />";
        $txt .= "Edition : " . $this->edition . "<br />";
        $txt .= "Date : " . $this->dateParution . "<br />";
        $txt .= "Auteur : " . $this->auteur . "<br />";
        return $txt;
    }
}



$livre1 = new livres("Asterix", "Pilote", "Goscinny", 1959);
$livre2 = new livres("Tintin", "Le petit 20ème", "Hergé", 1930);
$livre3 = new livres("One Piece", "Jump", "Oda", 1998);

$librairie = [$livre1, $livre2, $livre3];

function afficherLivres($livres)
{
    echo "----------- <br />";
    foreach ($livres as $livre) {
        echo $livre;
        echo "----------- <br />";
    }
}

function choixCombo($livres, $edition, $date)
{
    echo "----------- <br />";
    foreach ($livres as $livre) {
        if (($livre->getEdition() === $edition || $edition === "Tous") && ($livre->getDateParution() === (int)$date || $edition === "Tous"))  //on met (int) pour transformer la date en entier parce que sinon on essai de comparer une chaine de caractère a un entier.
        echo $livre;
        echo "----------- <br />";
    }
}

?>


<div>
    <form action="" method="POST">
        <div class="form-group">
            <label>Edition : </label>
            <select name="edition">
                <option value="Tous">Tous</option>
                <option value="Pilote">Pilote</option>
                <option value="Le petit 20ème">Le petit 20ème</option>
                <option value="Jump">Jump</option>
            </select>
        </div>
        <div class="form-group">
            <label>Date de parution : </label>
            <select name="dateParution">
                <option value="Toute">Toute</option>
                <option value="1959">1959</option>
                <option value="1930">1930</option>
                <option value="1998">1998</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Valider">
    </form>
</div>


<?php
if (
    isset($_POST['edition']) && !empty($_POST['edition']) &&
    isset($_POST['dateParution']) && !empty($_POST['dateParution'])
) {
    choixCombo($librairie, $_POST['edition'], $_POST['dateParution']);
} else {
    afficherLivres($librairie);
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