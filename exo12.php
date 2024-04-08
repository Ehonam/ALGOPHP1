<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

<h2>Résultat</h2>

<?php

// Tableau de prénoms et de langues associées
$personnes_langues = array("Laurie" => "FRA", "Carlos" => "ESP", "Gordon" => "ENG");

// Fonction personnalisée pour dire bonjour dans la langue appropriée
function saluerPersonnes($personnes_langues){
    ksort($personnes_langues); // Trie le tableau par ordre alphabétique des prénoms

    foreach($personnes_langues as $prenom => $langue){
        switch($langue){
            case "FRA":
                echo "Salut $prenom<br>";
                break;
            case "ENG":
                echo "Hello $prenom<br>";
                break;
            case "ESP":
                echo "Hola $prenom<br>";
                break;
            default:
                echo "Langue inconnue pour $prenom<br>";
                break;
        }
    }
}

// Appel de la fonction pour saluer les personnes dans leur langue respective
saluerPersonnes($personnes_langues);

?>