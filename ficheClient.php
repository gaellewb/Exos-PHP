<?php
    $title ='Fiche client' ;
    require 'header.php';
    require_once 'functions.php' ;
?>


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

<?php
    if (isset ($_GET['job'])) {
        $job = $_GET['job'] ;
    } echo "<div class='text-center mb-3 alert alert-success'><h4>Votre profession : $job</h4></div>" ;
?> 









<?php require 'footer.php' ?>