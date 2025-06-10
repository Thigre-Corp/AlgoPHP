<h1>Exercice 1</h1>

<p>
    Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
    caractère passée en argument en majuscules et en rouge.
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>

<h2>Résultat:</h2>

<?php

//déclaration de varaibles
$texte = "Mon texte en paramètre";
//déclaration de fonction
function convertirMajRouge($paramTexte){
    return '<span style="color : #FF0000;">'.mb_strtoupper($paramTexte)."</span>";
}


//affichage
echo convertirMajRouge($texte);
