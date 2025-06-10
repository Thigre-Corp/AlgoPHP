<h1>Exercice 6</h1>

<p>
    Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
    de valeurs.
    Exemple :
    $elements = ["Monsieur","Madame","Mademoiselle"];
    alimenterListeDeroulante($elements);
</p>

<h2>Résultat:</h2>

<?php

//déclaration de varaibles
$elements = ["Monsieur","Madame","Mademoiselle"];



//déclaration de fonction
function alimenterListeDeroulante($paramElements){
    $returnForm = "<label for='civilite'>Civilité</label><br><select id='civilité' name='civilite'>";
    foreach($paramElements as $nom){
        $returnForm .="<option value='$nom'>$nom</option>";
    }
    return $returnForm."</select>";
}

//affichage
echo alimenterListeDeroulante($elements);
