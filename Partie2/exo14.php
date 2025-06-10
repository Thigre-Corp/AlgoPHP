<h1>Exercice 14</h1>

<p>
    En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
    adresse e-mail a le bon format.
</p>

<h2>Résultat:</h2>

<?php

//déclaration de variables
$textInput = ["Prénom","email"];


//déclaration de fonction
function afficherInput($paramText){
    $returnForm = "<form action='email_valid.php' method='POST' style='padding: 1em; background-color: #aaaaaa ; width: fit-content;'>";
    foreach($paramText as $nom){
        $returnForm .="<label for='$nom'>$nom</label><br><input type='text' id='$nom' name='$nom'><br>";
    }
    return $returnForm."<input type='submit' value='Soumettre le formulaire'></form>";
}

function validateEmail($email){
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return "L'adresse $email est bien une adresse mail valide<br>";
   }
   else{
    return "L'adresse $email n'est pas une adresse mail valide<br>";
   }
}

//affichage
echo afficherInput($textInput);
