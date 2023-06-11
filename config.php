<?php
//define sert à définir une CONSTANTE, par convention écrite en majuscule
define('JOURS',[
    'Lundi',
    'Mardi',
    'Mercredi',
    'Jeudi',
    'Vendredi',
    'Samedi',
    'Dimanche'
]);
define('CRENEAUX', [
    // je mets des index, un par jour de la semaine
    0 =>[
        [8,12],
        [14,19]
    ],
    1 =>[
        [8,12],
        [14,19]
    ],
    2 =>[
        [8,12]
    ],
    3 =>[
        [8,12],
        [14,19]
    ],
    4 =>[
        [8,12],
        [14,19]
    ],
    5 =>[],
    6 =>[]
]);