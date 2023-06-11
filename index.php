<?php 
$title = "Page d'accueil - Exercices de PHP" ;
$nav = 'index' ;
require 'header.php'; ?>

<div class="d-flex justify-content-center">
    <div class="row">
        <div class="col">
            <div class="card text-center m-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">10 Exercices AFPA</h5>
                    <!-- <p class="card-text">10 exercices</p> -->
                    <a href="exercicesAfpa.php" class="card-link">Voir</a>
                </div>
            </div>

            <div class="card text-center m-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Tutoriels Grafikart</h5>
                    <!-- <p class="card-text">10 exercices</p> -->
                    <a href="grafikart.php" class="card-link">Voir</a>
                </div>
            </div>

            <div class="card text-center m-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Formulaire</h5>
                    <!-- <p class="card-text">10 exercices</p> -->
                    <a href="formulaire.php" class="card-link">Voir</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>
