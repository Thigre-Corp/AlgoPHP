<h1>Exercice 5</h1>

<p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
    précisant le nom des champs associés.
    Exemple :
    $nomsInput = ["Nom","Prénom","Ville"];
    afficherInput($nomsInput);
</p>

<h2>Résultat:</h2>

<?php

//déclaration de varaibles
$nomsInput = ["Nom","Prénom","Ville"];

//déclaration de fonction
function afficherInput($nomsForm){
    $returnForm = "<form style='padding: 1em; background-color: #aaaaaa ; width: fit-content;'>";
    foreach($nomsForm as $nom){
        $returnForm .="<label for='$nom'>$nom</label><br><input type='text' id='$nom' name='$nom'><br>";
    }
    return $returnForm."</form>";
}


//affichage
echo afficherInput($nomsInput);
