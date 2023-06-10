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










?>