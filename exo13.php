<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

// Tableau des notes de l'élève
$notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);

// Calcul de la moyenne générale
$moyenne = array_sum($notes) / count($notes);
$moyenne_arrondie = round($moyenne, 2);

// Affichage des notes obtenues par l'élève
echo "Les notes obtenues par l'élève sont : " . implode(' ', $notes) . "<br>";

// Affichage de la moyenne générale avec 2 décimales
echo "Sa moyenne générale est donc de : $moyenne_arrondie";

?>