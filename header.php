<?php                
function nav_item (string $lien, string $titre): string 
{
   $classe = 'nav-link';
   if ($_SERVER['SCRIPT_NAME'] === $lien) {
      $classe = $classe . ' active';
      // j'aurai pu aussi écrire $classe .= ' active'; c'est pareil
   }
   return '<li class="nav-item">
      <a class="' . $classe . '" href="' . $lien . '">' . $titre . '</a>
   </li>' ;
}
?>

<!doctype html>
<html lang="fr" class="h-100" data-bs-theme="auto">
<head>
   <!-- <script src="/docs/5.3/assets/js/color-modes.js"></script> -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Hugo 0.112.5">

<!-- Je teste si $title existe ou pas, si elle n'existe pas j'affiche le else -->
   <title>
      <?php if (isset($title)) { echo $title; } else { echo 'Exercices de PHP';}; ?>
   </title>

   <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/">

<!-- CSS Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

   <meta name="theme-color" content="#712cf9">
</head>

<body class="d-flex flex-column h-100">

<header>
   <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="container-fluid">
         <a class="navbar-brand" href="index.php"><img src="img/logoPHP.png" alt="petit logo PHP"></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
               <li class="nav-item">
                  <!-- 1ere façon d'écrire le if. -->
                  <a class="nav-link <?php if ($nav === 'index') { echo "active";}?>" href="index.php">Accueil</a>
               </li>
               <li class="nav-item">
                  <!-- 2eme façon d'écrire le if. on enlève les accolades, on : et endif et on ajoute du HTML au milieu -->
                  <a class="nav-link <?php if ($nav === 'exercicesAfpa'): ?> active <?php endif ?>" href="exercicesAfpa.php">Exercices Afpa</a>
               </li>
               <li class="nav-item">
                  <!-- 3eme façon. J'utilise la super variable $_SERVER qui va directement chercher le nom de la page grâce à SCRIPT_NAME-->
                  <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/grafikart.php'): ?> active <?php endif ?>"href="grafikart.php">Grafikart</a>
               </li>
                  <!-- 4eme façon. Pour éviter de devoir écrire toutes ces lignes, je crée une fonction (voir en haut) que j'ai juste à appeler ici, et dès que je veux créer un nouveau lien, je n'ai plus qu'à copier cette ligne: -->
               <?= nav_item('/formulaire.php', 'Formulaire') ; ?>
               <?= nav_item('/ficheClient.php', 'Fiche Client') ; ?>
            </ul>
         </div>
      </div>
   </nav>
</header>

<main class="flex-shrink-0">
   <div class="container">