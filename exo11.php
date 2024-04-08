<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>

<?php


// Initialisation du tableau de marques de voitures
$marquesVoitures = array("Peugeot", "Renault", "BMW", "Mercedes", "Toyota", "Honda", "Ford", "Chevrolet", "Opel", "Audi", "Citroen", "Corvette", "Bugatti", "Fiat");

// Affichage du contenu du tableau avec une liste à puces
echo "Il y a " . count($marquesVoitures) . " marques de voitures dans le tableau : <br>";
echo "<ul><br>";
foreach ($marquesVoitures as $marque) {
    echo "<li>$marque</li><br>";
}
echo "</ul>";


?>