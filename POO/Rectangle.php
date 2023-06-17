<?php
class Rectangle 
{
// Création des attributs
    private $width ;
    private $height ;


// Setters et Getters : Méthodes d'objet qui agissent uniquement sur l'objet courant.
// Création des setters via le __construct:
    public function setWidth($width){
        $this->width = $width ;
    }
    public function setHeight($height){
        $this->height = $height ;
    }

// Création des getters
    public function getWidth (){
        return $this->width;
    }
    public function getHeight (){
        return $this->height ;
    }


// Création des autres méthodes
public function width() {
    $this -> width ;
}
public function height() {
    $this -> height ;
}

// Par convention les noms des méthodes sont des verbes
// Méthode pour calculer la surface : longueur * largeur
    public function calculerSurface() {
        return $surface = $this->width * $this->height ;
    }
// Méthode pour calculer le périmètre : (longueur + largeur) * 2
    public function calculerPerimetreRectangle() {
        return $perimRectangle = ($this->width + $this->height) * 2 ;
    }





}

?>