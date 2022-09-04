<?php
class maison
{
    private static $increment = 1;
    private $id;
    private $dateCreation;
    private $nbChambres;
    private $surface;

    public function __construct($dateCreation, $nbChambres, $surface)
    {
        $this->id = self::$increment;
        self::$increment++;
        $this->dateCreation = $dateCreation;
        $this->nbChambres = $nbChambres;
        $this->surface = $surface;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getDate()
    {
        return $this->dateCreation;
    }
    public function getNbChambres()
    {
        return $this->nbChambres;
    }
    public function getSurface()
    {
        return $this->surface;
    }
}
