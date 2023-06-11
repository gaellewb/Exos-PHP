<?php 
    $title = 'Formulaire';
    require_once 'functions.php' ;
    require 'header.php'; 
?>

<h1 class='text-center bg-info p-4'>Formulaire</h1>

<div class='mt-5 mb-4 bg-light'>
    <p class="lead">Consigne :</p>
    <p>Créez un formulaire avec nom, prénom, sexe (radioboxe), statut (étudiant, salarié, à mon compte, au chômage, avec un champ select) et date de naissance.</p> 
    <p>Au clique sur le bouton de validation, je suis renvoyé vers une page qui donne : Bonjour Monsieur ou Madame + nom + prénom et statut. Vs êtes né le Date de naissance, vous avez XX ans, et votre anniversaire est dans XX jour(s, automatique pour le s) ou votre anniversaire est aujourd'hui. Chargez une image différente si on est le matin (entre 8h et 12h), l'après midi (12h-19h) ou le soir (19h-8h).</p>
</div>

<h2>Veuillez remplir ce formulaire</h2>

<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3 bg-info mb-5">

<form method="GET" action="ficheClient.php">
    <div class="mt-3 mb-4">
        <label class="form-label lead" for="nom1">Nom</label>
        <input class="form-control" type="text" name="nom1" id="nom1">
    </div>

    <div class="mb-4">
        <label class="form-label lead" for="prenom1">Prénom</label>
        <input class="form-control" type="text" name="prenom1" id="prenom1">
    </div>

    <div class="form-check form-check-inline mb-4">
        <input type="radio" class="form-check-input" name="sexe" id="optionHomme" value="homme">
        <label for="optionHomme" class="form-check-label lead">Homme</label>
    </div>
    <div class="form-check form-check-inline mb-4">
        <input type="radio" class="form-check-input" name="sexe" id="optionFemme" value="femme">
        <label for="optionFemme" class="form-check-label lead">Femme</label>
    </div>
    <div class="form-check form-check-inline mb-4">
        <input type="radio" class="form-check-input" name="sexe" id="optionNonGenre" value="nonGenre">
        <label for="optionNonGenre" class="form-check-label lead">Non genré</label>
    </div>

    <div class="mb-4">
        <label for="statut" class="form-check-label mb-2 lead">Profession</label>
        <select name="job" class="form-select" id="statut">
            <option selected>Statut à sélectionner</option>
            <option value="Etudiant">Etudiant</option>
            <option value="Salarié">Salarié</option>
            <option value="Auto-entrepreneur">Auo-entrepreneur</option>
            <option value="Demandeur d'emploi">Demandeur d'emploi</option>
        </select>
    </div>

    <div class="mb-4">
        <label class="form-label lead" for="dateNaiss">Date de naissance</label>
        <input class="form-control" type="date" name="dateNaiss" id="dateNaiss">
    </div>

    <div class="text-center mb-3">
        <input type="submit" class="btn btn-primary" value="Soumettre">
    </div>
</form>

</div>
</div>
</div>


<?php require 'footer.php' ?>


