<?php
class weapon
{
    private static $increment = 1;
    private static $armes = [];
    private $id;
    private $nom;
    private $damage;

    public function __construct($nom, $damage)
    {
        $this->id = self::$increment;
        self::$increment++;
        $this->nom = $nom;
        $this->damage = $damage;
        self::$armes[] = $this;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getDamage()
    {
        return $this->damage;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setDmg($damage)
    {
        $this->damage = $damage;
    }

    public function __toString()
    {
        $txt = "ID : " . $this->id . "<br />";
        $txt .= "Nom : " . $this->nom . "<br />";
        $txt .= "Dégat : " . $this->damage . "<br />";
        return $txt;
    }

    public static function recupArme($id)
    {
        foreach (self::$armes as $arme) {
            if ($id === $arme->id) {
                return $arme;
            }
        }
    }
}
