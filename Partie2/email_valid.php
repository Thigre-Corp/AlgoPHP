<h1>Exercice 14</h1>

<p>
    En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
    adresse e-mail a le bon format.
</p>

<h2>Résultat:</h2>

<?php


function validateEmail($email){
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return "L'adresse $email est bien une adresse mail valide<br>";
   }
   else{
    return "L'adresse $email n'est pas une adresse mail valide<br>";
   }
}

echo validateEmail($_POST["email"]);
