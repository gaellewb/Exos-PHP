<?php 
$title = "Exercices AFPA" ;
$nav = "exercicesAfpa";
require 'header.php';
require_once 'functions.php'; ?>

<h1 class='text-center bg-info p-4'> Exercices PHP </h1>

<!-- Question 1 : -->
<div class='mt-5 mb-4 bg-light'>
    <h3 class='lead'>Question 1 :</h3>
    <p>Créez un fichier PHP nommé 'index.php'. À l'intérieur de ce fichier, écrivez un programme qui affiche la phrase 'Bonjour, monde !' à l'aide de la fonction 'echo'. Une autre avec la fonction print. Expliquez la différence. Ajouter du HTML dans cet affichage.</p>
</div>

<?php
    // echo permet d'afficher une chaîne de caractères, et accepte plusieurs arguments et ne retourne aucune valeur
    echo "<h2 class='text-center'>Hello World</h2>";

    // print permet d'afficher une chaîne de caractères, n'accepte qu'un seul argument et retourne toujours 1
    print "<h2 class='mb-4 text-center'>Bonjour, Monde</h2>";
?>

<!-- Question 2 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Question 2 :</h3>
    <p>Créez un formulaire HTML contenant un champ de texte. Lorsque le formulaire est soumis, récupérez la valeur saisie dans le champ de texte et affichez-la à l'aide de PHP.</p>
</div>

<form method='POST' action='exercicesAfpa.php'>
    <div class='text-center mb-3'>
        <label for='firstname'>Prénom</label>
        <input type='text' name='prenom' id='firstname'>
    </div>
    <div class='text-center mb-4'>
        <input type='submit' class="btn btn-primary"  value='envoyer'>
    </div>
</form>

<?php
    if(isset($_POST ['prenom'])){
        $firstname = $_POST['prenom'] ;
        echo "<div class='text-center mb-3 alert alert-warning'><h4>Bonjour $firstname</h4></div>";
    }
?>

<!-- Question 3 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Question 3 :</h3>
    <p>Créez un tableau PHP contenant les noms de cinq personnes. Parcourez le tableau à l'aide d'une boucle et affichez chaque nom sur une nouvelle ligne.</p>
</div>

<?php
    $personnes = ["Geri", "Victoria", "Mel", "Melanie", "Emma"];

    foreach ($personnes as $personne) {
        echo "<div class='text-center'>$personne \n </div>";
    }
?>

<!-- Question 4 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Question 4 :</h3>
    <p>Créez une fonction PHP qui prend deux nombres en paramètres et retourne leur somme. Appelez ensuite cette fonction avec différentes valeurs et affichez le résultat (vous pouvez faire les autres opérations).</p>
</div>

<form method='POST' action='exercicesAfpa.php'>
    <div class='text-center mb-3'>
        <label for='number1'>Nombre 1</label>
        <input type='number' name='number1' id='number1'>
    </div>
    <div class='text-center mb-3'>
        <span> + </span>
    </div>
    <div class='text-center mb-3'>
        <label for='number2'>Nombre 2</label>
        <input type='number' name='number2' id='number2'>
    </div>
    <div class='text-center mb-4'>
        <input type='submit' class="btn btn-primary"  value='envoyer'>
    </div>
</form>

<?php
    if(isset($_POST ['number1']) && isset($_POST ['number2'])) {
        $number1 = $_POST['number1'] ;
        $number2 = $_POST['number2'] ;
        $addition = $number1 + $number2;
        echo "<div class='text-center mb-3 alert alert-warning'><h4>Résultat : $number1 + $number2 = $addition</h4></div>";
    }
?>

<!-- Question 5 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Question 5 :</h3>
    <p>Créez un script PHP qui génère un nombre aléatoire entre 1 et 10. Demandez ensuite à l'utilisateur de deviner le nombre généré. Affichez un message indiquant si la devinette est correcte ou non.</p>
</div>

<form method='GET' action='exercicesAfpa.php'>
    <div class='text-center mb-3'>
        <label for='chiffre'>Devinez un chiffre entre 1 et 10 :</label>
        <input type='number' name='chiffre' id='chiffre'>
    </div>
    <div class='text-center mb-4'>
        <input type='submit' class="btn btn-primary"  value="j'ai deviné ?">
    </div>
</form>

<?php
    $devinette = rand(1, 10); 
        
    if(isset($_GET ['chiffre'])){
    // je change le type de chiffre en INT pour pouvoir le comparer à devinette
        $chiffre = (int)$_GET['chiffre'];
        if ($chiffre === $devinette) {
            echo "<div class='text-center mb-3 alert alert-success'><h4>BRAVO ! Vous avez deviné le chiffre $devinette</h4></div>";
        } else {
            echo "<div class='text-center mb-3 alert alert-danger'><h4>PERDU. Il fallait deviner le chiffre $devinette</h4></div>";
        }
    }
?>

<!-- Question 6 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Question 6 :</h3>
    <p>Créez un formulaire d'inscription avec des champs tels que le nom, l'adresse e-mail et le mot de passe. Validez les entrées côté serveur en vérifiant que tous les champs sont remplis et que l'adresse e-mail est valide (un peu de recherche à faire).</p>
</div>

<form method="GET" action="exercicesAfpa.php" class="text-center mb-3">
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="mt-2">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div class="mt-2">
        <label for="motDePasse">Mot de Passe</label>
        <input type="password" name="motDePasse" id="motDePasse">
    </div>
    <div class="mt-2">
        <input type="submit" class="btn btn-primary"  value="S'inscrire">
    </div>
</form>

<?php
    if (isset($_GET['email']) and isset($_GET['name']) and isset($_GET['motDePasse'])) {
        $password = $_GET['motDePasse'];
        $name = $_GET['name'];
        $email = $_GET['email'];        
    };

    function verifMail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='text-center mb-3 alert alert-success'>Email valide : " . $email ."</h4></div>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='text-center mb-3 alert alert-danger'>Email non valide : " . $email . "</h4></div>";
        }
    };
    if (isset($_GET['email'])) {
        verifMail($email); 
    }
?> 

<!-- Question 7 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Question 7 :</h3>
    <p>Créez une fonction PHP qui prend une chaîne de caractères en paramètre et retourne le nombre de mots qu'elle contient. Testez ensuite la fonction avec différentes chaînes et affichez le résultat.</p>
</div>

<form method="POST" action="exercicesAfpa.php" class="text-center mb-3">
    <div class="form-group">
        <label for="phrase">Ecrivez une phrase :</label>
        <input type="text" class="form-control" name="chaine" id="chaine" require>
    </div>
    <div class="mt-2">
        <input type="submit" class="btn btn-primary" value="Combien de mots ?">
    </div>
</form>

<?php
    function comptage () {
        if (isset($_POST['chaine'])) {
            $string = $_POST['chaine'];
            // pas obligé de mettre le 0, il est par défaut; sinon il y a aussi 1 ou 2 qui retourne d'autres choses
            $countWord =  str_word_count($string, '0');
            echo "<div class='text-center mb-3 alert alert-success'><h4>La phrase<br>'". $string."'<br>contient ".$countWord . " mots</h4></div>" ;
        }
    };
    comptage();
?>

<!-- Question 8 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Question 8 :</h3>
    <p>Créez un script PHP qui récupère la date et l'heure actuelles et les affiche dans un format lisible pour les humains, par exemple 'Mardi 31 mai 2023, 14:30'..</p>
</div>

<?PHP
    setlocale(LC_TIME, ['fr', 'fra','fr_FR']);
    // Je change le fuseau horaire
    date_default_timezone_set('Europe/Paris');

        // en anlgais
        $today = date ("l d M Y, H:i");
        echo "<div class='text-center'>Date, Heure : <span class='fw-bold'>$today</span> </div>";

    $semaine = [" Dimanche "," Lundi "," Mardi "," Mercredi "," Jeudi ",
    " vendredi "," samedi "];
    $mois =[1=>" janvier "," février "," mars "," avril "," mai "," juin ",
    " juillet "," août "," septembre "," octobre "," novembre "," décembre "];

    // en français
    echo "<div class='text-center mb-5'>Date, Heure : ", "<span class='fw-bold'>",
    $semaine[date('w')] ," ",date('j'),"", $mois[date('n')], date('Y'),", ",date('H:i'),"</span></div>";

    // Ne fonctionne pas pour moi !
    // $formatter = new IntlDateFormatter(
    //     'fr_FR',
    //     IntlDateFormatter::FULL,
    //     IntlDateFormatter::SHORT,
    //     'Europe/Paris',
    //     IntlDateFormatter::GREGORIAN,
    //     "EEEE d MMMM Y, HH:mm"
    // );
    // echo $formatter->format(new DateTime()) ;

    // Fonctionne mais obsolète à partir de PHP 8.1.0
    // echo strftime('%A %d %B %Y, %I:%M');
?>

<!-- Question 9 : -->
<hr>
<div class='container mb-4 bg-secondary'>
    <h3 class='lead'>Question 9 :</h3>
    <p>Créez un formulaire de connexion avec un champ pour l'identifiant (nom d'utilisateur) et un champ pour le mot de passe. Vérifiez les informations de connexion côté serveur et, si les informations sont correctes, enregistrez l'identifiant dans une variable de session. Affichez ensuite un message de bienvenue avec l'identifiant de l'utilisateur connecté.</p>
</div>

<form method="POST" action="exercicesAfpa.php" class="text-center">
    <div>
        <label for="utilisateur">Identifiant</label>
        <input type="text" name="utilisateur" id="utilisateur" require>
    </div>
    <div class="mt-2">
        <label for="motDePasse2">Mot de Passe</label>
        <input type="password" name="motDePasse2" id="motDePasse2">
    </div>
    <div class="mt-2">
        <input type="submit" class="btn btn-primary"  value="Connexion">
    </div>
</form>

<?php
// VERSION DAVID
// session_start();
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $identifiantAttendu = "admin";
//     $motDePasseAttendu = "password";

//     $identifiant = $_POST["utilisateur"];
//     $motDePasse = $_POST["motDePasse2"];

//     if ($identifiant === $identifiantAttendu && $motDePasse2 === $motDePasseAttendu) {
//         $_SESSION["utilisateur"] = $identifiant;
//         } else {
//         echo "Identifiant ou mot de passe incorrect.";
//         }
// }    
//     // Vérification de la session pour afficher le message de bienvenue
//     if (isset($_SESSION["utilisateur"])) {
//     $identifiantConnecte = $_SESSION["utilisateur"];
//     echo "Bienvenue, ".$identifiantConnecte." ! Vous êtes connecté.";
//     }

// VERSION MAXIME
// Vérif si une session est déjà créée
//     if (isset($_SESSION['session'])) {
//         $id = $_SESSION['session'];
//         $mdp = $_SESSION['session'];
// } 
// sinon j'intègre $id et $mdp
    // elseif (isset($_POST['utilisateur']) and isset($_POST['motDePasse2'])) {
    //     $id = $_POST['utilisateur'];
    //     $mdp = $_POST['motDePasse2'];
    //     $_SESSION['session'] = $id;
    //     $_SESSION['session'] = $mdp; 
    //     echo 'bienvenue' . $id ;
    // };
?>

<!-- Question 10 : -->
<hr>
<div class='container mb-4 bg-light'>
    <h3 class='lead'>Question 10 :</h3>
    <p>Créez un fichier CSV contenant une liste de noms et d'adresses e-mail. À l'aide de PHP, lisez le contenu du fichier CSV et affichez-le sous forme de tableau HTML.</p>
</div>

<!-- Version DAVID -->
<?php
// Chemin vers le fichier CSV
$cheminFichierCSV = "C:\Users\Gaëlle\Desktop\dev\Exos-PHP\hCSV_Test.csv";

// Lire le contenu du fichier CSV
$contenuCSV = file_get_contents($cheminFichierCSV);

// Convertir le contenu CSV en tableau
$tableauCSV = explode("\n", $contenuCSV);

// Afficher le tableau sous forme de tableau HTML
echo "<table class='table'><thead><tr><th scope='col'></th></tr></thead><tbody>";
foreach ($tableauCSV as $ligne) {
echo "<tr>";
$colonnes = explode(",", $ligne);
foreach ($colonnes as $colonne) {
echo "<td class='p-2'>" . $colonne . "</td>";
}
echo "</tr>";
}
echo "</tbody></table>";
?>

<!-- Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


<?php require 'footer.php'; ?>