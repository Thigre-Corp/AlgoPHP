<h1>Exercice 8</h1>

<p>
    Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
    forme :
</p>

<h2>Résultat:</h2>

<?php

//déclarartion de variable
$mTable = 8;

//proposition 1
echo "Tables de $mTable :<br>";
for($i=1; $i<11; $i++){
    echo "$i x $mTable = ".($i*$mTable)."<br>";
}
//proposition 2
echo"<br>Tables de $mTable :<br>";
foreach(range(1,10) as $i){
    echo "$i x $mTable = ".($i*$mTable)."<br>";
}
