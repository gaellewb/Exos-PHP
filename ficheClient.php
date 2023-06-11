<?php
    $title ='Fiche client' ;
    require 'header.php';
    require_once 'functions.php' ;
?>

<div class="row">
    <div class="col-6 offset-3">

<!-- Nom Prenom Sexe -->
<?php
    if (isset($_GET['nom1']) && isset($_GET['prenom1']) && isset($_GET['sexe'])) {
        $name1 = $_GET['nom1'] ;
        $firstname1 = $_GET['prenom1'] ;
        $sexe = $_GET['sexe'] ;
            if ($sexe === 'femme') {
                $sexe = 'Madame' ;
            } else if ($sexe === 'homme') {
                $sexe = 'Monsieur' ;
            } else $sexe = '' ;
    }    echo "<div class='text-center mb-3 alert alert-warning'><h4>Bonjour $sexe $name1 $firstname1</h4></div>";
?>

<!-- Profession  -->
<?php
    if (isset ($_GET['job'])) {
        $job = $_GET['job'] ;
    } echo "<div class='text-center mb-3 alert alert-success'><h4>Profession : $job</h4></div>" ;
?> 

<!-- Date naissance -->
<?php
    date_default_timezone_set('Europe/Paris');
    setlocale(LC_TIME, ['fr', 'fra','fr_FR']);
    // $dateNaiss = date('d F Y');
    $today =  date('d F Y');    

// $interval = $dateNaiss ->diff($date) ;
    if (isset($_GET['dateNaiss'])) {
        $dateNaiss = $_GET['dateNaiss'];
        echo "<div class='text-center mb-3 alert alert-info'><h4>Date de naissance : $dateNaiss</h4></div>";
        // echo $today ;
        // dump($today);
        dump($dateNaiss);
    // $interval = $today - $dateNaiss ;
    // echo "vous avez $interval";
        ;
    }




    
?>

<!-- Ajout image -->
<?php    
$heureActuelle = date('G');

    if (isset($heureActuelle)){
        if ($heureActuelle>= 8 && $heureActuelle<12) {
            $imageMatin = "img\matin.jpg" ;
            echo '<img src='.$imageMatin.'>' ;
        } else if ($heureActuelle>=12 && $heureActuelle<19) {
            $imageAM = "img\apresMidi.jpg" ;
            echo '<img src='.$imageAM.'>' ;
        } else {
            $imageSoir = "img\\nuit.jpg" ;
            echo '<img src='.$imageSoir.'>' ;
        }
    }
?>

</div>
</div>

<?php require 'footer.php' ?>