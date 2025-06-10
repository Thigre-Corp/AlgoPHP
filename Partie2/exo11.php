<h1>Exercice 11</h1>

<p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
    chaîne de caractère représentant une date.
    Exemple :
    formaterDateFr("2018-02-23");
</p>

<h2>Résultat:</h2>

<?php

//déclaration de variables
$inputDate= "2018-02-23" ;


//déclaration de fonction
function formaterDateFr($date){
    $objetDate = new IntlDateFormatter('fr-FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'Europe/Paris', IntlDateFormatter::GREGORIAN);
    $objetDate = $objetDate->format(strtotime($date));
    return $objetDate;
}

//affichage
echo formaterDateFr($inputDate);
