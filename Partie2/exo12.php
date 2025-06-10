<h1>Exercice 12</h1>

<p>
    La fonction var_dump($variable) permet d’afficher les informations d’une variable.
    Soit le tableau suivant :
    $tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];
    A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
</p>

<h2>Résultat:</h2>

<?php

//déclaration de variables
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];

//déclaration de fonction
function affichage($tab){
    foreach($tab as $i){
        var_dump($i);
    }
    return 1 ;
}

//affichage
echo affichage($tableauValeurs);
