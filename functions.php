<?php
function checkbox (string $name, string $value, array $data) : string
{
    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        // comme si je mettais = $attributes + 'checked'
        $attributes .= 'checked' ;
    }
    // j'utilise la syntaxe HEREDOC pour écrire
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;
}

function radio (string $name, string $value, array $data) : string
{
    $attributes = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        // comme si je mettais = $attributes + 'checked'
        $attributes .= 'checked' ;
    }
    // j'utilise la syntaxe HEREDOC pour écrire
    return <<<HTML
    <input type="radio" name="{$name}" value="$value" $attributes>
HTML;
}

function dump ($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>' ;
}


// Tuto 7
function creneaux_html (array $creneaux) {
    // j'utilise la fonction empty pour voir s'il y a des créneaux de renseigné, on affiche Fermé
    if (empty($creneaux)) {
        return 'Fermé';
    }
    $horaires= [] ;
    foreach ($creneaux as $creneau) {
        $horaires[] = "de <strong>{$creneau[0]}h</strong> / <strong>{$creneau[1]}h</strong>";
    }
    // implode sert à fusionner deux chaines de caractètes d'un tableau pour construire la phrase finale
    return implode(' & ', $horaires);
}

function in_creneaux(int $heure, array $creneaux): bool
{
    foreach ($creneaux as $creneau) {
        $debut = $creneau[0];
        $fin = $creneau[1];
        if ($heure >= $debut && $heure < $fin) {
            return true ;
        }
    }
    return false;
}

// function dateFrancais(int $dateNaiss) {
//     $dateNaiss = date('d F Y');
// }


?>