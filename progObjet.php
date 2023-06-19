<?php 
    $title = 'Programmation Orientée Objet';
    require_once 'POO/Circle.php';
    require_once 'POO/Car.php';
    require_once 'POO/Rectangle.php';
    require_once 'POO/Person.php';
    require 'functions.php' ;
    require 'header.php'; 
?>

<h1 class='text-center bg-info p-4'>Exercices PHP POO </h1>

<!-- Question 1 : -->
<div class='mt-5 mb-4 bg-light'>
    <h3 class='lead'>Exercice 1 :</h3>
    <p>Créez une classe "Circle" avec une propriété privée "radius" et les méthodes suivantes :</p>
    <ul>
        <li>
            Une méthode pour définir le rayon du cercle.
        </li>
        <li>
            Une méthode pour calculer l'aire du cercle.
        </li>
        <li>
            Une méthode pour calculer le périmètre du cercle.
        </li>
    </ul>
</div>

<form action="progObjet.php" method="GET">
    <div class='text-center mb-3'>
        <label for="radius" name="radiusUtile" class="mb-2"><h4>Cercle - Rentrez un rayon :</h4></label>
    <br>
    <input type="text" name="radiusUtile" >
    </div>
    <div class='text-center mb-3'>
        <input type="submit" class="btn btn-primary" value="CALCUL">
    </div> 
</form>
    
<?php
// Instanciation : création d'un objet $cercle_1
if (isset($_GET ['radiusUtile'])) {
    $radiusUtile = (int)$_GET['radiusUtile'];      
    $cercle_1 = new Circle(); 
    $cercle_1 -> setRadius ($radiusUtile = (int)$_GET['radiusUtile']);
    $cercle_1 -> calculerAire();
    $cercle_1 -> calculerPerimetreCercle();
    // dump($cercle_1);
};
?>

<?php
        if (isset($_GET ['radiusUtile'])) {
?>
<div class='text-center mb-3 alert alert-success'>
    <h5>Rayon = <?= $radiusUtile ?></h5>
</div>
<div class="row">
    <div class="col-6">
        <div class='text-center mb-3 alert alert-success'>
            <h5><?= "Air du cercle = ".$cercle_1 -> calculerAire($radiusUtile) ?></h5>
        </div>
    </div>
    <div class="col-6">
        <div class='text-center mb-3 alert alert-success'>
            <h5><?= "Périmètre du cercle = ".$cercle_1 -> calculerPerimetreCercle($radiusUtile) ?></h5>
        </div>
    </div>
</div>
<?php } ?>


<!-- Question 2 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Exercice 2 :</h3>
    <p>Créez une classe "Car" avec les propriétés privées "brand" et "model", ainsi que les méthodes suivantes :</p>
    <ul>
        <li>
            Une méthode pour définir la marque et le modèle de la voiture.
        </li>
        <li>
            Une méthode pour afficher la marque et le modèle de la voiture.
        </li>
    </ul>
</p>
</div>


<form action="progObjet.php" method="POST">
    <div class="text-center mb-3">
        <label for="choixVoiture" name="choice"><h4>Choisissez votre véhicule
            <!-- , parmis les  -->
            <?php 
            // Car::getNombreVéhicules() 
            ?> 
            <!-- proposés  -->
            :
        </h4></label>
    </div>
    <div class="text-center mb-3">
        <input type="submit" name="choice1" class="btn btn-warning m-2" value="Véhicule n°1">
        <input type="submit" name="choice2" class="btn btn-warning m-2" value="Véhicule n°2">
        <input type="submit" name="choice3" class="btn btn-warning m-2" value="Véhicule n°3">
        <input type="submit" name="choice4" class="btn btn-warning m-2" value="Véhicule n°4">
        <input type="submit" name="choice5" class="btn btn-warning m-2" value="Véhicule n°5">
        <input type="submit" name="choice6" class="btn btn-warning m-2" value="Véhicule n°6">
    </div>
</form>

<?php
$car_1 = new Car();
$car_1 -> setBrand('Renault');
$car_1 -> setModel('Clio');

$car_2 = new Car();
$car_2 -> setBrand('Renault');
$car_2 -> setModel('Twingo');

$car_3 = new Car();
$car_3 -> setBrand('Peugeot');
$car_3 -> setModel('3008');

$car_4 = new Car();
$car_4 -> setBrand('Volkswagen');
$car_4 -> setModel('Polo');

$car_5 = new Car();
$car_5 -> setBrand('Volkswagen');
$car_5 -> setModel('Tiguan');

$car_6 = new Car();
$car_6 -> setBrand('Citroën');
$car_6 -> setModel('C3');
?>

<?php
if(isset($_POST ['choice1'])) {
?>
    <div class="card text-center m-5" style="width: 18rem;">
        <div class="card-header">
            <h5 class="card-title">Véhicule n°1</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $car_1 -> getBrand() ?></h5>
            <p class="card-text"><?= $car_1 -> getModel() ?></p>
        </div>
    </div>
<?php } ?>

<?php
if(isset($_POST ['choice2'])) {
?>
    <div class="card text-center m-5" style="width: 18rem;">
        <div class="card-header">
            <h5 class="card-title">Véhicule n°2</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $car_2 -> getBrand() ?></h5>
            <p class="card-text"><?= $car_2 -> getModel() ?></p>
        </div>
    </div>
<?php } ?>

<?php
if(isset($_POST ['choice3'])) {
?>
    <div class="card text-center m-5" style="width: 18rem;">
        <div class="card-header">
            <h5 class="card-title">Véhicule n°3</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $car_3 -> getBrand() ?></h5>
            <p class="card-text"><?= $car_3 -> getModel() ?></p>
        </div>
    </div>
<?php } ?>

<?php
if(isset($_POST ['choice4'])) {
?>
    <div class="card text-center m-5" style="width: 18rem;">
        <div class="card-header">
            <h5 class="card-title">Véhicule n°4</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $car_4 -> getBrand() ?></h5>
            <p class="card-text"><?= $car_4 -> getModel() ?></p>
        </div>
    </div>
<?php } ?>

<?php
if(isset($_POST ['choice5'])) {
?>
    <div class="card text-center m-5" style="width: 18rem;">
        <div class="card-header">
            <h5 class="card-title">Véhicule n°5</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $car_5 -> getBrand() ?></h5>
            <p class="card-text"><?= $car_5 -> getModel() ?></p>
        </div>
    </div>
<?php } ?>

<?php
if(isset($_POST ['choice6'])) {
?>
    <div class="card text-center m-5" style="width: 18rem;">
        <div class="card-header">
            <h5 class="card-title">Véhicule n°6</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $car_6 -> getBrand() ?></h5>
            <p class="card-text"><?= $car_6 -> getModel() ?></p>
        </div>
    </div>
<?php } ?>




<!-- Question 3 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Exercice 3 :</h3>
    <p>Créez une classe "Rectangle" avec les propriétés privées "width" et "height", ainsi que les méthodes suivantes : </p>
    <ul>
        <li>
            Une méthode pour définir la largeur et la hauteur du rectangle.
        </li>
        <li>
            Une méthode pour calculer la surface du rectangle.
        </li>
        <li>
            Une méthode pour calculer le périmètre du rectangle.
        </li>
    </ul>
</div>

<form action="progObjet.php" method="POST">
    <div class='text-center mb-3'>
        <label for="height" class="mb-2"><h5>Longueur :</h5></label>
        <input type="int" name="height">
    </div>
    <div class='text-center mb-3'>
        <label for="width" class="mb-2"><h5>Largeur :</h5></label>
        <input type="int" name="width">
    </div>
    <div class='text-center mb-3'>
        <input type="submit" class="btn btn-primary" value="CALCUL">
    </div> 
</form>

<?php
if(isset($_POST ['width']) && isset($_POST ['height'])) {
$width = $_POST['width']; 
$height = $_POST['height']; 

$rectangle_1 = new Rectangle($width, $height);
// dump($rectangle_1);
?>

<div class='text-center mb-3 alert alert-success'>
    <h5>Longueur = <?= $height ?> & Largeur = <?= $width ?></h5>
</div>
<div class="row">
    <div class="col-6">
        <div class='text-center mb-3 alert alert-success'>
            <h5><?= "Surface = ".$rectangle_1 -> getCalculerSurface() ?></h5>
        </div>
    </div>
    <div class="col-6">
        <div class='text-center mb-3 alert alert-success'>
            <h5><?= "Périmètre = ".$rectangle_1 -> getCalculerPerimetreRectangle() ?></h5>
        </div>
    </div>
</div>
<?php
// Fermeture du isset :
    }
?>

<!-- Question 4 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Exercice 4 :</h3>
    <p>Créez un fichier nommé Person.php contenant la classe Person avec les propriétés privées "name" et "age", ainsi que les méthodes suivantes : </p>
    <ul>
        <li>
            Une méthode pour définir le nom de la personne.
        </li>
        <li>
            Une méthode pour définir l'âge de la personne.
        </li>
        <li>
            Une méthode pour obtenir le nom de la personne.
        </li>
        <li>
            Une méthode pour obtenir l'âge de la personne.
        </li>
    </ul>
    <p>Créez un fichier nommé index.php pour tester la classe Person : Incluez le fichier Person.php dans index.php. Instanciez un objet de la classe Person. Utilisez les méthodes de l'objet pour définir le nom et l'âge de la personne. Affichez le nom et l'âge de la personne à l'aide des méthodes de l'objet. </p>
</div>

<?php
$person_1 = new Person('Bruce', 68);
$person_2 = new Person('Sylvester', 76);
$person_3 = new Person('Arnold', 75);
$person_4 = new Person('Jason', 55);
// Exemple: je change l'âge de person_1
$person_1 -> setAge(69);
?>

<form action="progObjet.php" method="POST">
    <div class="text-center mb-3">
        <label for="choixPersonne" name="choixPersonne"><h4>Choisissez une personne :
        </h4></label>
    </div>

    <div class="text-center mb-3">
        <input type="submit" name="choix1" class="btn btn-info m-2" value="Personne n°1">
        <input type="submit" name="choix2" class="btn btn-info m-2" value="Personne n°2">
        <input type="submit" name="choix3" class="btn btn-info m-2" value="Personne n°3">
        <input type="submit" name="choix4" class="btn btn-info m-2" value="Personne n°4">
    </div>
</form>

<?php
if(isset($_POST ['choix1'])) {
?>
<div class="card text-center m-5" style="width: 18rem;">
    <div class="card-header">
        <h5 class="card-title">Personne n°1</h5>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $person_1->afficherNom() ?></h5>
        <p class="card-text"><?= $person_1->afficherAge() ?></p>
    </div>
</div>
<?php } ?>
<?php
if(isset($_POST ['choix2'])) {
?>
<div class="card text-center m-5" style="width: 18rem;">
    <div class="card-header">
        <h5 class="card-title">Personne n°2</h5>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $person_2->afficherNom() ?></h5>
        <p class="card-text"><?= $person_2->afficherAge() ?></p>
    </div>
</div>
<?php } ?>
<?php
if(isset($_POST ['choix3'])) {
?>
<div class="card text-center m-5" style="width: 18rem;">
    <div class="card-header">
        <h5 class="card-title">Personne n°3</h5>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $person_3->afficherNom() ?></h5>
        <p class="card-text"><?= $person_3->afficherAge() ?></p>
    </div>
</div>
<?php } ?>
<?php
if(isset($_POST ['choix4'])) {
?>
<div class="card text-center m-5" style="width: 18rem;">
    <div class="card-header">
        <h5 class="card-title">Personne n°4</h5>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $person_4->afficherNom() ?></h5>
        <p class="card-text"><?= $person_4->afficherAge() ?></p>
    </div>
</div>
<?php } ?>


<?php require 'footer.php' ?>
