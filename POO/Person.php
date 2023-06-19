<?php
class Person 
{
    private $name ;
    private $age ;

public function __construct(string $name, int $age)
{
    $this->name = strToUpper($name);
    $this->age = $age;
}

// Je peux rajouter des setters pour le jour où je veux mettre à jour l'âge et pas le nom.
public function setAge($age)
{
    $this->age =$age ;
}

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