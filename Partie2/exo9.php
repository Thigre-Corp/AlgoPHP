<h1>Exercice 9</h1>

<p>
    Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
    valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
    Exemple :
    afficherRadio($nomsRadio);
</p>

<h2>Résultat:</h2>

<?php

//déclaration de varaibles
$elements = ["Masculin","Feminin","Autre"];

//déclaration de fonction
function afficherRadio($paramElements){
    $returnForm = "";
    foreach($paramElements as $nom){
        $returnForm .="<input type='radio' id='$nom' name='sexe'><label for='$nom'>$nom</label><br>";
    }
    return $returnForm;
}

//affichage
echo afficherRadio($elements);
