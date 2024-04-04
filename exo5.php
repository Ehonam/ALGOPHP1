
<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php



$somme = 100;

function conversion($somme) {

  $montant = $somme * 0.1524490172374104;

  return number_format($montant, 2);

}

echo "Montant en francs = $somme<br>";

echo "$somme francs = ".conversion($somme); // il faut appeler la fonction sinon elle ne s'exécutera jamais

echo " €"


?>