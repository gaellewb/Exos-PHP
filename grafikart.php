<?php 
    $title = "Tutos Grafikart" ;
    require 'header.php'; 
    require_once 'functions.php' ;
?>

<h1 class='text-center bg-info p-4'>Tutoriels Grafikart</h1>


<?php
    // $notes = [] ;
    // $action = null ; 

    // while ($action !== "fin") {
    //     $action = readline('entrez une nouvelle note ou fin pour terminer la saisie :');
    //     if ($action!=="fin"){
    //         $notes[] = (int)$action ;
    //     }
    // }

    // foreach ($notes as $note) {
    //     echo "- $note \n" ;
    // }
?>

<?php
// Vérifier qu'un mot est un palindrome
    // $mot = readline("saisissez un mot :");
    // $reverse = strtolower(strrev($mot));
    // if(strtolower($mot) === $reverse) {
    //     echo 'ce mot est un palyndrome' ;
    // } else {
    //     echo 'ce mot n\'est pas un palyndrome' ;
    // }
?>

<?php 
    // $notes = [10, 20, 13];
    // // je calcule la somme
    // $sum = array_sum($notes);
    // // je compte combien de cellules à le tableau
    // $count = count($notes);
    // // je calcule la moyenne et j'arrondi
    // echo "Vous avez ". round($sum / $count). " de moyenne.";
?>

<!-- Tuto 4 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Tuto 4 :</h3>
    <p>Filtre à insultes ! </p>
</div>

<?php 
    $insultes =['merde', 'con', 'putain', 'connard'];
    // $phrase2 = readline('entrez votre phrase : ');
?>
        <form action="grafikart.php" method="GET">
            <div class="form-group">
                <label for="phrase2">Entrez une phrase avec une insulte - seulement 4 insultes référencées.</label>
                <input type="text" class="form-control" name="phrase2">
            </div>
            <div class="mt-2">
                <input type="submit" class="btn btn-primary" value='Corriger'>
            </div>
        </form>

<?php

// if (isset($GET ['phrase2'])) {
//     $phrase2 = $GET ['phrase2'] ;
//     foreach ($insultes as $insulte) {
//     // je mesure la taille de l'insulte
//         $taille = strlen($insulte);
//     // Je repete * autant de fois qu'il y a de lettres. On peut combiner les deux dans une seule variable
//         $replace = str_repeat('*', $taille);
//     // Je remplace l'insulte par les *
//     $phrase2 = str_replace($insulte, $replace, $phrase2);
//     echo "<div class='text-center mb-3 alert alert-warning'><h4>$phrase2</h4></div>";
//     }       
// }
    // echo $phrase2;

?>


<!-- Tuto 5 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Tuto 5 :</h3>
    <p>Faire deviner un chiffre entre 0 et 1000, et guider l'utilisateur avec "plus" ou "moins" </p>
</div>

<form action="grafikart.php" method='GET'>
    <input type="number" name="chiffre3" placeholder="entre 0 et 1000" value="<?php if (isset($_GET['chiffre3'])) { echo htmlentities($_GET['chiffre3']); } ?>">
    <button type="submit" class="btn btn-primary" >Deviner</button>
</form>

<?php
    $aDeviner = 150 ;
?>

<!-- J'utilise la variable globale $_GET pour récupérer la clé dans l'URL -->
<?php if (isset($_GET['chiffre3'])): ?>
<?php if ($_GET['chiffre3'] > $aDeviner): ?>
    Votre chiffre est trop grand 
<?php elseif ($_GET['chiffre3'] < $aDeviner) :?>
    Votre chiffre est trop petit 
<?php else : ?>
    Bravo ! vous avez trouvé le chiffre <?= $aDeviner ?>
<?php endif ?>
<?php endif ?>


<!-- Tuto 6 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Tuto 6 :</h3>
    <p>Calcul du prix de la glace.</p>
</div>

<?php
    $parfums = [
        'Fraise' => 4,
        'Chocolat' => 5,
        'Vanille' => 3
    ];

    $cornets = [
        'Pot' => 2,
        'Cornet' => 3
    ];

    $supplements = [
        'Pépites de chocolat' => 1,
        'Chantilly' => 0.5
    ];
    $ingredients =[];
    $total = 0;
    if (isset ($_GET['parfum'])) {
        foreach($_GET['parfum'] as $parfum) {
            // J'ai créé une fonction qui fait des var_dump dans functions
            // dump($parfums[$parfum]);
            if (isset($parfums[$parfum])) {
                $ingredients[] = $parfum;
                $total += $parfums[$parfum];
            }
        }
    }
    if (isset ($_GET['supplement'])) {
        foreach($_GET['supplement'] as $supplement) {
            if (isset($supplements[$supplement])) {
                $ingredients[] = $supplement;
                $total += $supplements[$supplement];
            }
        }
    }
    if (isset ($_GET['cornet'])) {
        $cornet = $_GET['cornet'] ;
        if (isset($cornets[$cornet])) {
            $ingredients[] = $cornet;
            $total += $cornets[$cornet];
        }
    }
?>

<form action="grafikart.php" method='GET'>
    <div class="row">
        <div class="col-4 form-group">
            <span class="fw-bold">Parfums :</span>
            <?php foreach ($parfums as $parfum => $prix) :?>
            <div class="checkbox">
                <label>
                    <!-- J'apelle la fonction checkbox dans la page functions -->
                    <?= checkbox('parfum', $parfum, $_GET) ?>
                    <?= $parfum ?> - <?= $prix ?> €
                </label>
            </div>
            <?php endforeach ?>
        </div>
        <div class="col-4 form-group">
            <span class="fw-bold">Cornets :</span>
            <?php foreach ($cornets as $cornet => $prix) :?>
            <div class="radio">
                <label>
                    <?= radio('cornet', $cornet, $_GET) ?>
                    <?= $cornet ?> - <?= $prix ?> €
                </label>
            </div>
            <?php endforeach ?>
        </div>
        <div class="col-4 form-group">
            <span class="fw-bold">Suppléments :</span>
            <?php foreach ($supplements as $supplement => $prix) :?>
            <div class="checkbox">
                <label>
                    <?= checkbox('supplement', $supplement, $_GET) ?>
                    <?= $supplement ?> - <?= $prix ?> €
                </label>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3" >Composer ma glace</button>
</form>

<div class="row mt-3">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Votre glace</h5>
                <ul>
                    <?php foreach($ingredients as $ingredient): ?>
                        <li><?= $ingredient ?></li>
                    <?php endforeach ?>
                </ul>
                <p>
                    <strong>Prix : </strong><?= $total ?> €
                </p>
            </div>
        </div>
    </div>
</div>

<!-- je mets un debug-->
<!-- <h3>$_GET</h3> -->
<?php
// dump($_GET) 
?>
<!-- <h3>$_POST</h3> -->
<?php
// dump($_POST) 
?>

<?php require 'footer.php' ?>