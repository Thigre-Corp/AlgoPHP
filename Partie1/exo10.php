<h1>Exercice 10</h1>

<p>
    A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
</p>

<h2>Résultat:</h2>

<?php

//déclaration de variables
$prix = 152;
$verse = 200;
$reste = $verse - $prix;
$monnaie = [10, 5, 2, 1];
// $nb10 = 0;
// $nb5 = 0;
// $nb2 = 0;

$nbMonnaie[] = 0 ;
//affichage début
echo "Montant à payer : $prix €<br>
    Montant versé : $verse €<br>
    A restituer : $reste € <br>
    ***************************************************<br>
    Rendue de monnaie :<br>";

//calcul monnaie + affichage final
for($i =0; $i <count($monnaie); $i++){
    $nbMonnaie[$i] = intval($reste / $monnaie[$i]);
    $reste -= $nbMonnaie[$i]*$monnaie[$i];
    echo "$nbMonnaie[$i] ".
        ($monnaie[$i]>5 ? "billet" : "pièce").
        ($nbMonnaie[$i]>1 ? "s" : "").
        " de $monnaie[$i] €".
        ($i<(count($monnaie)-1) ? " - " : "<br>");
}




// tant que $reste >= 10 alors j'incremente $nb10 et j'enlève 10 à reset

// Si $reste >= 5 alors ...

// While pour nb2 

// le reste c'est la pièce de 1 possible
