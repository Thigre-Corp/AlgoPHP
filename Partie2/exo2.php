<h1>Exercice 2</h1>

<p>
    Soit le tableau suivant :
    $capitales =
    [France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
    s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
    une fonction personnalisée.
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<h2>Résultat:</h2>

<?php

//déclaration de varaibles
$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
    ];

//déclaration de fonction
function conafficherTableHTML($paramTable){
    ksort($paramTable) ;
    $returnTable ='<table>
    <tr>
        <th>Pays</th>
        <th>Capitale</th>';
    foreach($paramTable as $pays =>$capitale){
        $returnTable .="
    <tr>
        <td>$pays</td>
        <td>$capitale</td>
    </tr>";
    }
    $returnTable .= "
</table>" ;
    return $returnTable;
}


//affichage
echo conafficherTableHTML($capitales);
