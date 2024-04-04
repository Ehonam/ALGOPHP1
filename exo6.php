<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>


<?php
$prix_unitaire = 9.99;
$quantité = 5;
$tva = 0.2;

function facture($prix_unitaire) {
$prix_unitaire = 9.99;
$quantité = 5;
$tva = 0.2;
$ht = $prix_unitaire * $quantité;
return $ht * (1 + $tva);
  }
  
echo "Prix unitaire de l'article : $prix_unitaire";
echo " €<br>";
echo " Quantité : $quantité<br>";
echo " Taux de TVA : $tva<br>";
echo "Le montant de la facture à régler est de : ".facture($prix_unitaire);
echo " €";


?>