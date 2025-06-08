<h1>Exercice 3</h1>

<p>
    A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
    « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>

<h2>Résultat:</h2>

<?php

$laPhrase = "Notre formation DL commence aujourd'hui";

echo " Avant instruction, la phrase vaut <q>".$laPhrase."</q>.<br>";
$laPhrase  = str_replace("aujourd'hui", "demain", $laPhrase);
echo " Après instruction, la phrase vaut <q>".$laPhrase."</q>.<br>";