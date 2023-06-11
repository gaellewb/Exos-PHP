<?php
    $title ='Fiche client' ;
    require 'header.php';
    require_once 'functions.php' ;
?>

<div class="row">
<div class="col-md-6 offset-md-3 text-center">

<!-- Nom Prénom Civilité -->
<?php
    if (isset($_GET['nom1']) && isset($_GET['prenom1']) && isset($_GET['sexe'])) {
        $name1 = $_GET['nom1'] ;
        $firstname1 = $_GET['prenom1'] ;
        $civilite = $_GET['sexe'] ;
        if ($civilite === 'femme') {
            $civilite = 'Madame' ;
        } else if ($civilite === 'homme') {
            $civilite = 'Monsieur' ;
        } else $civilite = '' ;
    }    
    echo "<div class='text-center mb-3 alert alert-warning'><h4>Bonjour $civilite $name1 $firstname1</h4></div>";
?>

<!-- Profession  -->
<?php
    if (isset ($_GET['job'])) {
        $job = $_GET['job'] ;
    } 
    echo "<div class='text-center mb-3 alert alert-success'><h4>Profession : $job</h4></div>" ;
?> 

<!-- Date naissance -->
<?php
    date_default_timezone_set('Europe/Paris');
    setlocale(LC_TIME, ['fr', 'fra','fr_FR']);
    // je mets la date au même format que la dateNaiss, en fait pas la peine, par contre il faut bien l'initialiser
    $today =  date('Y-m-d');    
    // $today =  date('d-F-Y');    
    // $dateNaiss = date('d F Y');
    // dump($today);
    // dump($dateNaiss);
    
    // $mois =[1=>" janvier "," février "," mars "," avril "," mai "," juin ",
    // " juillet "," août "," septembre "," octobre "," novembre "," décembre "];
    
// Affiche la date d'anniversaire
    if (isset($_GET['dateNaiss'])) {
        $dateNaiss = $_GET['dateNaiss'];
        // dump($dateNaiss);
        // echo $dateNaiss ;
        echo "<div class='text-center mb-3 alert alert-info'><h4>Date de naissance : $dateNaiss</h4></div>";
        // echo "<div class='text-center mb-3 alert alert-info'><h4>Date de naissance :".date('j').$mois[date('n')]. date('Y')."</h4></div>";
    }  

// Affiche l'âge
    $dateNaiss = new DateTime($dateNaiss);
    // dump($dateNaiss);

    $date = new DateTime($today);
    $interval = $date->diff($dateNaiss);
    // je peux rajouter à l'âge : %m mois %d jour. Et pour juste le nombre de jours %a
    $age = $interval->format('%y') ;
    // dump($interval) ; 
    // dump($age) ;

// Ajout d'un S si plus d'1 an, je mets '1' pour le changer en string   
    if ($age >= '1') {
        $ajoutS = "s" ;
    } else $ajoutS = "" ;
    // dump($ajoutS);

    echo "<div class='text-center mb-3 alert alert-primary'><h4>Age : " . $age ." an" . $ajoutS ."</h4></div>";

?>

<!-- Ajout image -->
<?php    
    $heureActuelle = date('G');

    if (isset($heureActuelle)) {
        if ($heureActuelle >= 8 && $heureActuelle < 12) {
            $imageMatin = "img\matin.jpg" ;
            echo '<img src='.$imageMatin.'>' ;
        } elseif ($heureActuelle >= 12 && $heureActuelle < 19) {
            $imageAM = "img\apresMidi.jpg" ;
            echo '<img src='.$imageAM.'>' ;
        } else {
            $imageSoir = "img\soir.jpg" ;
            echo '<img src='.$imageSoir.'>' ;
        }
    }
?>

</div>
</div>

<?php require 'footer.php' ?>