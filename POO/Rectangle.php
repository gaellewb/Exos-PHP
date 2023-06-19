<?php
class Rectangle 
{
// Création des attributs
    private $width ;
    private $height ;

// Setters et Getters : Méthodes d'objet qui agissent uniquement sur l'objet courant.
// Création d'un construct' :
    public function __construct($width, $height){
        $this->width = $width ;
        $this->height = $height ;
    }

// Création des getters - Finalement pas besoin, j'ai mis get devant les fonctions et ça marche pareil
    // public function getWidth (){
    //     return $this->width;
    // }
    // public function getHeight (){
    //     return $this->height ;
    // }

// Méthode pour calculer la surface : longueur * largeur
    public function getCalculerSurface() {
        return $this->width * $this->height ;
    }
// Méthode pour calculer le périmètre : (longueur + largeur) * 2
    public function getCalculerPerimetreRectangle() {
        return ($this->width + $this->height) * 2 ;
    }
}

?>