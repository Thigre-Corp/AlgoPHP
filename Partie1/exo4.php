<h1>Exercice 4</h1>

<p>
    Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<h2>Résultat:</h2>

<?php

//déclarations de variables
$laPhrase1 = "Engage le jeu que je le gagne"; //oui
$laPhrase2 = "Ceci n'est pas un palindrome"; //non
$laPhrase3 = "Esope reste elu par cette crapule et se repose"; //oui

//déclaration de la fonction test
function palindrome($phraseTest){
    $test = TRUE; // resultat palindrome vrai par défaut.
    $cleanedPhraseTest = str_replace(" ", "", strtolower($phraseTest)); // supression des espaces et des majuscules
    $index = 0; // creation de l'index base 0
    $phraseLength = (strlen($cleanedPhraseTest) -1); // valeur maximale de l'index
    // boucle pour balayer les différents indexes de la chaîne tant que la correspondance est juste - arrêt à la première discordance
    while($test and $index < ($phraseLength/2)){
        ($cleanedPhraseTest[$index] != $cleanedPhraseTest[$phraseLength - $index]) ? $test = FALSE : $index++;
    } 
    //afficher les resultat
    echo "La phrase <q>".$phraseTest."</q> <strong>".($test ? "est " : "n'est pas ")."un palidrome.</strong><br>" ;
    // retour de $test pour traitement ultérieur...
    return $test;
}
palindrome($laPhrase1);
palindrome($laPhrase2);
palindrome($laPhrase3);