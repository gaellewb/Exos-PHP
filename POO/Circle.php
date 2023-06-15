<?php

class Circle {

//Création de l'attribut ou propriété
    private $radius ;

// SETTER et GETTER : méthodes d'objet, elles agient uniquement sur l'objet courant(désigné par $this)
// Mutateur ou setter pour affecter une valeur à la propriété
    public function setRadius($radius){
        $this -> radius = $radius;
    }

// Ascesseur ou getter permet de lire le contenu de la propriété d'objet privé
    public function getRadius(){
        return $this -> radius ;
    } 

// D'autres méthodes d'objet :
    public function radius() {
        $this -> radius ;
    }

// Méthode pour calculer l'air : rayon au carré multiplié par la fonction pi
    public function aireCercle() {
        return $aireCercle = pi() * ($this->radius * $this->radius) ;
    }

// Méthode pour calculer le périmètre : (rayon * 2) * pi
    public function perimetreCercle() {
        return $perimetreCercle = pi() * ($this->radius * 2) ;
    }
}
?>

