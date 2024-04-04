<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.</p>

<h2>Résultat</h2>

<?php

$montantAPayer = 152; // Montant total à payer
$sommeVersee = 200; // Somme versée par l'utilisateur

$renduMonnaie = $sommeVersee - $montantAPayer;

// Calcul du nombre de billets de 10 €
$nbBillets10 = intdiv($renduMonnaie, 10);
$reste = $renduMonnaie % 10;

// Calcul du nombre de billets de 5 €
$nbBillets5 = intdiv($reste, 5);
$reste %= 5;

// Calcul du nombre de pièces de 2 €
$nbPieces2 = intdiv($reste, 2);
$reste %= 2;

// Le reste représente le nombre de pièces de 1 €
$nbPieces1 = $reste;

echo "Rendu de monnaie :<br>";
echo "$nbBillets10 billet(s) de 10 €<br>";
echo "$nbBillets5 billet(s) de 5 €<br>";
echo "$nbPieces2 pièce(s) de 2 €<br>";
echo "$nbPieces1 pièce(s) de 1 €<br>";

?>