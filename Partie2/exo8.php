<h1>Exercice 8</h1>

<p>
    Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
    Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
    Exemple :
    repeterImage($url,4);
</p>

<h2>Résultat:</h2>

<?php

//déclaration de varaibles
$lien = "https://my.mobirise.com/data/userpic/764.jpg";
$nbImage = 4;

//déclaration de fonction
function repeterImage($url, $nbRepeat ){
    $returnBlock = "";
    for($i=0; $i< $nbRepeat; $i++)
    {
        $returnBlock .= "<img src='$url'>";
    }
    return $returnBlock;
}

//affichage
echo repeterImage($lien,$nbImage);;
