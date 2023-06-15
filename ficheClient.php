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
    $today =  date('d-F-Y');    
    $dateNaiss = date('d-m-Y');

// Affiche la date d'anniversaire
    if (isset($_GET['dateNaiss'])) {
        $dateNaiss = $_GET['dateNaiss'];
        echo "<div class='text-center mb-3 alert alert-info'><h4>Date de naissance : ". $dateNaiss."</h4></div>";
    }  
    
// je transforme la dateNaiss d'objet à string
    $cleanString = preg_replace('/[^A-Za-z0-9]/', '', $dateNaiss);
    $tableauDateNaiss = str_split($cleanString, 2);

// Affiche l'âge
    $dateNaiss = new DateTime($dateNaiss);
    $date = new DateTime($today);
    $interval = $date->diff($dateNaiss);
    $age = $interval->format('%y ') ;

// Ajout d'un S si plus d'1 an, je mets '1' pour le changer en string   
    if ($age > '1') {
        $ajoutS = "s" ;
    } else $ajoutS = "" ;

    echo "<div class='text-center mb-3 alert alert-primary'><h4>Age : " . $age ." an" . $ajoutS ."</h4></div>";

// Calcul nombre de jours avant prochain anniv
    $day = $tableauDateNaiss[3] ;
    $month = $tableauDateNaiss[2] ;
    
    function joursAvantAnniv($month, $day) {
        $today = new DateTime('today');
        $birthday = new DateTime("$day/$month");
            if ($birthday < $today) {
                $birthday->modify('+1 year');
            }
                return (int)$today->diff($birthday)->format('%a') ;
        }
    
    if (joursAvantAnniv($day, $month) > '1') {
        $plusS = "s" ;
    } else $plusS = "" ;

    if (joursAvantAnniv($day, $month) == '0') {
        echo "<div class='text-center mb-3 alert alert-danger'><h4>JOYEUX ANNIVERSAIRE</h4></div>";
    } else echo  "<div class='text-center mb-3 alert alert-danger'><h4>Prochain anniversaire dans <br>" . joursAvantAnniv($day, $month). " jour" . $plusS . "</h4></div>" ; 
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

<div class="mt-5 mb-3">
    <a href="formulaire.php" class="btn btn-primary">Retour au formulaire</a>
</div>

</div>
</div>

<?php require 'footer.php' ?>
