<?php
//changer le constructeur pour s'assurer egalement d'une bonne encapusaltion  
//more SECURITE

class Voiture
{

    private $_marque;
    private $_couleur;
    private $_vitesse_max;

    public function __construct($marque, $couleur, $vitesse){
        $this->setMarque($marque);
        $this->setCouleur($couleur);
        $this->setVitesse($vitesse);
    }
    //getter
    public function getMarque(){
        return $this->_marque;
    }

    public function getCouleur(){
        return $this->_couleur;
    }

    public function getVitesse(){
        return $this->_vitesse_max;
    }
    //setter
    public function setMarque($Mark)
    {
        $this->_marque = $Mark;
    }

    public function setCouleur($couleur)
    {
        $this->_couleur = $couleur;
    }

    public function setVitesse($vit)
    {
        $this->_vitesse_max = $vit;
    }

    public function demarer()
    {

        echo "vroom la ".$this->_marque." démarre";

    }
};

// $stephanie = new Voiture("bmw","noir",220);
// var_dump ($stephanie->getMarque());
// var_dump ($stephanie->getCouleur());
// var_dump ($stephanie->getVitesse());

// $stephanie->setMarque("fiat");
// $stephanie->setCouleur("rouge");
// $stephanie->setVitesse(145);

// var_dump ($stephanie->getMarque());
// var_dump ($stephanie->getCouleur());
// var_dump ($stephanie->getVitesse());
// $stephanie->demarer();




?>