<h1>Exercice 1</h1>

<p>
    Soit la phrase « Notre formation DL commence aujourd'hui ».
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase
    (espaces inclus).
</p>

<h2>Résultat:</h2>

<?php

$laPhrase = "Notre formation DL commence aujourd'hui";

echo "La phrase <q>".$laPhrase."</q> contient ".strlen($laPhrase)." caractères.";