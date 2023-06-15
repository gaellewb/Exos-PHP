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
        <label for="radius" name="radiusUtile" class="mb-2">Rentrez un rayon pour connaître l'air et le périmètre du cercle :</label>
    <br>
    <input type="text" name="radiusUtile" >
    </div>
    <div class='text-center mb-3'>
        <input type="submit" class="btn btn-primary" value="CALCUL">
    </div> 
</form>
    
<?php
// Instanciation : création d'un objet $cercle_1
        // if (isset($_GET ['radiusUtile'])) {
        //     $radiusUtile = (int)$_GET['radiusUtile'];
        // };
    $cercle_1 = new Circle(); 
    $cercle_1 -> setRadius (
        // if (isset($_GET['radiusUtile'])) {
            $radiusUtile = (int)$_GET['radiusUtile']);
        // });
    $cercle_1 -> aireCercle();
    $cercle_1 -> perimetreCercle();
        //     if (isset($_GET ['radiusUtile'])) {
        //     $radiusUtile = (int)$_GET['radiusUtile'];
        // };
    // dump($cercle_1);
?>
<!-- Pas réussi à mettre un round 2 ET à mettre le isset pour enlever le warning -->

<div class='text-center mb-3 alert alert-success'>
    <h5>Rayon = <?= $radiusUtile ?></h5>
</div>
<div class="row">
    <div class="col-6">
        <div class='text-center mb-3 alert alert-success'>
            <h5><?= "Air du cercle = ".$cercle_1 -> aireCercle($radiusUtile) ?></h5>
        </div>
    </div>
    <div class="col-6">
        <div class='text-center mb-3 alert alert-success'>
            <h5><?= "Périmètre du cercle = ".$cercle_1 -> perimetreCercle($radiusUtile) ?></h5>
        </div>
    </div>
</div>


<!-- Question 2 : -->
<hr>
<div class='container mb-4 bg-secondary'>
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
        <label for="height" name="heightUtil" class="mb-2">Rentrez une longueur :</label>
        <input type="text" name="heightUtil">
    </div>
    <div class='text-center mb-3'>
        <label for="width" name="widthUtil" class="mb-2">Rentrez une largeur :</label>
        <input type="text" name="widthUtil">
    </div>
    <div class='text-center mb-3'>
        <input type="submit" class="btn btn-primary" value="CALCUL">
    </div> 
</form>

<?php
//Instanciation = création d'un objet
$rectangle_1 = new Rectangle();
$rectangle_1 -> setHeight($heightUtil=(int)$_POST['heightUtil']); 
$rectangle_1 -> setWidth($widthUtil=(int)$_POST['widthUtil']); 
$rectangle_1 -> surface(); 
$rectangle_1 -> perimRectangle();
// dump($rectangle_1);
?>

<!-- Pas réussi à mettre un round 2 ET à mettre le isset pour enlever le warning -->

<div class='text-center mb-3 alert alert-success'>
    <h5>Longueur = <?= $heightUtil ?> et Largeur = <?= $widthUtil ?></h5>
</div>
<div class="row">
    <div class="col-6">
        <div class='text-center mb-3 alert alert-success'>
            <h5><?= "Surface = ".$rectangle_1 -> surface($widthUtil, $heightUtil) ?></h5>
        </div>
    </div>
    <div class="col-6">
        <div class='text-center mb-3 alert alert-success'>
            <h5><?= "Périmètre du cercle = ".$rectangle_1 -> perimRectangle($widthUtil, $heightUtil) ?></h5>
        </div>
    </div>
</div>


<!-- Question 4 : -->
<hr>
<div class='container mb-4 bg-secondary'>
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





<?php require 'footer.php' ?>
