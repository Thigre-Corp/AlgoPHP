<h1>Exercice 3</h1>

<p>
    Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir
    dans un nouvel onglet (_blank).
</p>

<h2>Résultat:</h2>

<?php

//déclaration de varaibles
$lien = "https://elan-formation.fr/" ;
//déclration de fonction
function afficherLien($leLien){
    return "<a href='$leLien' target='_blank'>$leLien</a>" ;
}


//affichage
echo afficherLien($lien);
