<h1>Exercice 6</h1>

<p>
    Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<h2>Résultat:</h2>

<?php

//déclaration de variables
$prixU = 9.99;
$qte = 5;
$tTva = 0.2;
//affichage
echo "Prix unistaire de l'article : ".$prixU." €<br>";
echo "Quantité : ".$qte."<br>";
echo "Taux de TVA : ".$tTva."<br>";
echo "Le montant de la facture à régler est de : ".round(($prixU * $qte * (1+ $tTva)),2)." €.<br>";