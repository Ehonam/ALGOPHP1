<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme : Affichage (pour la table de 8) :
Table de 8 :
1 x 8 = 8
2 x 8 = 16
3 x 8 = 24 …
Remarque : proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultat</h2>


<?php

$nombre = 8;
echo "Table de $nombre :<br>"; 

function afficherTableMultiplicationWhile($nombre) {
    $i = 1;
    while ($i <= 12) {
        $resultat = $nombre * $i;
        echo "$i x $nombre = $resultat<br>";
        $i++;
    }
}
$table = afficherTableMultiplicationWhile($nombre);
echo "$table";

?>
