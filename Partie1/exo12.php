<h1>Exercice 12</h1>

<p>
    A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
    respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.
    <br>Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG
</p>

<h2>Résultat:</h2>

<?php

//déclarations de variables
$tab = [
    "Mickaël" => "FRA",
    "Virgile" => "ENG",
    "Marie-Claire" => "ESP",
    "Paul" => "ENG",
    "Thierry" => "FRA",
    "Consuela" => "ESP"
];

//affichage, pour la variante, décommenter la ligne suivante:
//ksort($tab);
foreach($tab as $key => $val){
    switch($val){
        case "ENG":
            echo "Hello";
            break;
        case "FRA":
            echo "Salut";
            break;
        case "ESP":
            echo "¡Hola";
            break;
        default:
            echo "Yop";
    }
    echo " $key!<br>";
}