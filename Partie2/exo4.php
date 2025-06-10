<h1>Exercice 4</h1>

<p>
    A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
    nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
    https://fr.wikipedia.org/wiki/
    Le tableau passé en argument sera le suivant :
    $capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];
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
function afficherTableHTML($paramTable){
    ksort($paramTable) ;
    $returnTable ='<table>
    <tr>
        <th>Pays</th>
        <th>Capitale</th>
        <th>Lien wiki</th>';
    foreach($paramTable as $pays =>$capitale){
        $returnTable .="
    <tr>
        <td>$pays</td>
        <td>$capitale</td>
        <td><a href='https://fr.wikipedia.org/wiki/".(($capitale != "Washington") ? $capitale : "Washington_(district_de_Columbia)")."'>Lien</a></td>
    </tr>";
    }
    $returnTable .= "
</table>" ;
    return $returnTable;
}


//affichage
echo afficherTableHTML($capitales);
