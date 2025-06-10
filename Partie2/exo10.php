<h1>Exercice 10</h1>

<p>
    En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
    complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
    de validation (submit).
</p>

<h2>Résultat:</h2>

<?php

//déclaration de variables
$textInput = ["Nom","Prénom","email","Ville"];
$radioInput = ["Masculin","Feminin","Autre"];
$dropList = ["Développeur Logiciel","Designer web","Intégrateur", "Chef de projet"];


//déclaration de fonction
function afficherInput($paramText){
    $returnForm = "";
    foreach($paramText as $nom){
        $returnForm .="<label for='$nom'>$nom</label><br><input type='text' id='$nom' name='$nom'><br>";
    }
    return $returnForm."";
}

function afficherRadio($paramRadio){
    $returnForm = "";
    foreach($paramRadio as $nom){
        $returnForm .="<input type='radio' id='$nom' name='sexe'><label for='$nom'>$nom</label><br>";
    }
    return $returnForm;
}

function alimenterListeDeroulante($paramDrop){
    $returnForm = "<label for='formation'>Intitulé de Formation</label><br><select id='formation' name='formation'>";
    foreach($paramDrop as $nom){
        $returnForm .="<option value='$nom'>$nom</option>";
    }
    return $returnForm."</select><br>";
}

function laissePasseA38($paramText, $paraRadio, $paramDrop) { // creation formulaire global
    $returnForm = "<form style='padding: 1em; background-color: #aaaaaa ; width: fit-content;'>";
    $returnForm .= afficherInput($paramText);
    $returnForm .= afficherRadio($paraRadio);
    $returnForm .= alimenterListeDeroulante($paramDrop);
    return $returnForm."<input type='submit' value='Soumettre le formulaire'></form>";
}


//affichage
echo laissePasseA38($textInput, $radioInput, $dropList);
