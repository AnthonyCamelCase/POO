<?php
// getter and setter
// public private 
// l'objet dans etre responsable de s'est proprietes et methode 
// pour cela nous devons nous assurer les valeurs rentrer lors de sa construction avec des setter 
// ,egalement l'utilisation de mon clef public et private pour bien encapusaler l'objet et des getter pour acceder au 
//



class Voiture
{

    private $_marque;
    private $_couleur;
    private $_vitesse_max;

    public function __construct($marque, $couleur, $vitesse){
        $this->_marque = $marque;
        $this->_couleur = $couleur;
        $this->_vitesse_max = $vitesse;
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