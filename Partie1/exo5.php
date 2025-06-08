<h1>Exercice 5</h1>

<p>
    Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat:</h2>

<?php

//déclarations de variables
$prixF = 100;
//déclaration de constante
const TAUX_F_E = 6.55957;
//affichage.
echo "Le montant en francs est de : ".$prixF."<br>".$prixF." francs = ".(round($prixF / TAUX_F_E,2))." €<br>";
