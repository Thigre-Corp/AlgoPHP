<h1>Exercice 7</h1>

<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.
    Exemple :
    genererCheckbox($elements);
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>

<h2>Résultat:</h2>

<?php

//déclaration de varaibles
$elements = [
    "Choix 1" => FALSE,
    "Choix 2" => TRUE,
    "Choix 3" => FALSE
];



//déclaration de fonction
function genererCheckbox($paramElements){
    $returnForm = "<form style='padding: 1em; background-color: #aaaaaa ; width: fit-content;'>";
    foreach($paramElements as $nom => $value){
        $returnForm .="<input type='checkbox' id='$nom' name='$nom' value='$nom' ".($value ? "checked" : "")."
        <label for='$nom'>$nom</label><br>";
    }
    return $returnForm."</form>";
}

//affichage
echo genererCheckbox($elements);
