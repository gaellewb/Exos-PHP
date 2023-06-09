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

<?php 
    // FILTRE A INSULTE

    // $insultes =['merde', 'con'];
    // $phrase = readline('entrez votre phrase : ');
    // foreach ($insultes as $insulte) {
    // // je mesure la taille de l'insulte
    //     $taille = strlen($insulte);
    // // Je repete * autant de fois qu'il y a de lettres. On peut combiner les deux dans une seule variable
    //     $replace = str_repeat('*', $taille);
    // // Je remplace l'insulte par les *
    //     $phrase = str_replace($insulte, $replace, $phrase);
    // }
    // echo $phrase;
?>


<!-- <?php
$aDeviner = 150 ;
?>

<?php if ($_GET['chiffre'] > $aDeviner): ?>
    Votre chiffre est trop grand 
<?php elseif ($_GET['chiffre'] < $aDeviner) :?>
    Votre chiffre est trop petit 
<?php else : ?>
    Bravo ! vous avez trouvé le chiffre <?= $aDeviner ?>
<?php endif ?>


<form action="grafikart.php" method='GET'>
    <input type="number" name="chiffre" placeholder="entre 0 et 100" value="">
    <button type="submit">Deviner</button>
</form> -->