<h1>Exercice 13</h1>

<p>
    Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
    coefficient). Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat:</h2>

<?php

//déclaration de varaibles
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$somme = 0;

//affichage
echo "Les notes obtenues par l’élève sont :";
foreach($notes as $note) {
    echo " $note";
    $somme +=$note ;
}
echo "<br>Sa moyenne générale est de : ".round( $somme / count($notes),2)."<br>";
