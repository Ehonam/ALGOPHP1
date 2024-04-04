
<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>



<?php
function estPalindrome($phrase)
{
    // lettres de la phrase au même niveau et élimination des caractères spéciaux
    $nivphrase = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $phrase));

    // phrase inversée
    $inversephrase = strrev($nivphrase);

    // Compare la phrase originale à la phrase inversée
    return $nivphrase === $inversephrase;
}

// Exemple
$phrase = "Engage le jeu que je le gagne";

if (estPalindrome($phrase)) {
    echo "La phrase \"$phrase\" est palindrome.";
} else {
    echo "La phrase n'est pas palindrome.";
}
?>
