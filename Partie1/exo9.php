<h1>Exercice 9</h1>

<p>
    Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
    plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat:</h2>

<?php

//déclaration de variables
$age = 32;
$sexe = "F";
//test logique et affichage
if (($sexe != "F") and ($sexe !="M")){
    echo "Erreur sur le  sexe: l'administration fiscale ne connaît que M ou F...<br>";
}
elseif ((($sexe =="M") and ($age >= 20)) or (($sexe == "F") and (($age >=18) and ($age <35)))){
    echo "La personne est imposable<br>";
} else {
    echo "La personne n'est pas imposable<br>";
}