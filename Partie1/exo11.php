<h1>Exercice 11</h1>

<p>
    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
    tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
    d’afficher le nombre de marques de voitures présentes dans le tableau.
</p>

<h2>Résultat:</h2>

<?php

//déclaration de variables
    $marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
//début affichage
    echo "Il y a ".count($marques)." marques de voitures dans le tableau :<br>";
//boucle affichage tableau
    foreach(range(0, count($marques)-1) as $i){
        echo $marques[$i]."<br>";
    }