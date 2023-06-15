<?php

class Car {

//Création des attributs ou propriétés
    private $brand ;
    private $model ;

// SETTER et GETTER : méthodes d'objet, elles agient uniquement sur l'objet courant(désigné par $this)
// Mutateur ou setter pour affecter une valeur à la propriété
    public function setBrand () {
        $this -> brand = $brand;
    }
    public function setModel(){
        $this -> model = $model;
    }

// Ascesseur ou getter permet de lire le contenu de la propriété d'objet privé
    public function getBrand () {
        return $this -> brand;
    }
    public function getModel (){
        return $this -> model;
    }




}
?>