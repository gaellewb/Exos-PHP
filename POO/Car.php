<?php

class Car 
// Par convention, j'ouvre l'accolade à la ligne
{
//Création des attributs ou propriétés
    private $brand ;
    private $model ;
    // Ne fonctionne pas :
    // private static $nombreVéhicules = 0 ;

// SETTER et GETTER : méthodes d'objet, elles agient uniquement sur l'objet courant(désigné par $this)
// Mutateur ou setter pour affecter une valeur à la propriété

// le mot public n'est pas obligatoire, s'il n'y a rien, c'est automatiquement public
    public function setBrand ($brand) {
        $this -> brand = $brand;
    }
    public function setModel($model){
        $this -> model = $model;
    }
    // public function setNombreVéhicules($nombreVéhicules){
    //     self::$nombreVéhicules++;
    // }


// Ascesseur ou getter permet de lire le contenu de la propriété d'objet privé
    public function getBrand () {
        return $this -> brand;
    }
    public function getModel (){
        return $this -> model;
    }
    // public static function getNombreVéhicules():int {
    //     return self::$nombreVéhicules;
    // }
} 


?>