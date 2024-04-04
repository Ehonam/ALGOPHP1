<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>


<?php

$ageEnfant = 10;

function determinerCategorie($ageEnfant) {
    if ($ageEnfant >= 12) {
        return "Cadet";
    } elseif ($ageEnfant >= 10) {
        return "Minime";
    } elseif ($ageEnfant >= 8) {
        return "Pupille";
    } elseif ($ageEnfant >= 6) {
        return "Poussin";
    } else {
        return "Catégorie non gérée";
    }
}

$categorie = determinerCategorie($ageEnfant);
echo "L’enfant qui a $ageEnfant ans appartient à la catégorie « $categorie »"
?>
