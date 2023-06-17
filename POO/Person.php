<?php
class Person 
{
    private $name ;
    private $age ;
    // private static $effectif=0 ;

public function __construct(string $name, int $age)
{
    $this->name = strToUpper($name);
    $this->age = $age;
    // self::$effectif++;
}

// public static function getEffectif(): int
// {
//     return self::$effectif ;
// }

public function afficherNom()
{
    echo "Prénom : ".$this->name ;
}
public function afficherAge()
{
    echo "Age : ".$this->age. " ans" ;
}
}
?>