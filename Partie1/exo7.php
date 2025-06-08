<h1>Exercice 7</h1>

<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
    <ul>
        <li>Poussin : entre 6 et 7 ans</li>
        <li>Pupille : entre 8 et 9 ans</li>
        <li>Minime : entre 10 et 11 ans</li>
        <li>Cadet : à partir de 12 ans</li>
        <li>Si la catégorie n’est pas gérée, merci de le préciser.</li>
    </ul>
</p>

<h2>Résultat:</h2>

<?php

//déclaration de varialbe
$age = 10;

//test conditionnel
switch(true){
    case ($age>5 and $age<8):
        $result = "Poussin";
        break;
    case ($age>7 and $age<10):
        $result = "Pupille";
        break;
    case ($age>9 and $age<12):
        $result = "Minime";
        break;
    case ($age>11):
        $result = "Cadet";
        break;
    default:
        $result ="";
}

if ($result != null){
    echo "L’enfant qui a $age ans appartient à la catégorie « $result ».<br>";
}
else{
    echo "L'âge de $age ans ne correspond à aucune catégorie!<br>";
}
